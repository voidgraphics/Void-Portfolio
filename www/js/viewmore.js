( function(){

	"use strict";

	var $viewMoreWorks = document.querySelector( "#viewmore-work" ),
		$viewMorePosts = document.querySelector( "#viewmore-post" );
		var err;

	var appendWork = function( oData ){
		var $btn = $( ".recent-works .btn-container" );
		$btn.before( oData );
	};

	var appendPost = function( oData ){
		var $btn = $( ".blog .btn-container" );
		$btn.before( oData );
	}

	var retrieveMore = function( type ){
		var x = [].slice.call(document.querySelectorAll( "." + type + "-slug" ));
		var excludes = [];
		x.forEach( function( excludeElement ){
			excludes.push( excludeElement.innerHTML );
		} );
		console.log(excludes);
		var excludesString = excludes.join("SEPARATOR");
		var url = '/' + type + "/getmore/" + excludesString;
		$.ajax( {
			url: url,
			method: "get",
			data: {},
			dataType: "html",
			error: function( xhr, status, error ){
				console.error(error);
			},
			success: function( oResponse ){
				var containerSelector;
				( type === "posts" ) && ( appendPost( oResponse ) );
				( type === "works" ) && ( appendWork( oResponse ) );
			},
		} );
	};

	var showMore = function( e ){
		e.preventDefault();

		var target,
			parent,
			childNodes,
			hiddenCount = 0;

		if( e.target.id != "viewmore-post" && e.target.id != "viewmore-work" ){
			target = e.target.parentNode;
		} else {
			target = e.target;
		}

		parent = target.parentNode.parentNode;
		childNodes = [].slice.call(parent.childNodes);

		childNodes.forEach( function( node ){
			if( node.nodeName === "ARTICLE" ){
				var style = window.getComputedStyle(node);
				if( style.display === "none" ){
					node.classList.add( "appear" );
					hiddenCount++;
				}
			}
		} );

		if( hiddenCount === 0 ){
			var type;
			( target.id === "viewmore-post" ) && ( type = "posts" );
			( target.id === "viewmore-work" ) && ( type = "works" );
			retrieveMore( type );
		}

	};


	$viewMoreWorks.addEventListener( "click", showMore );
	$viewMorePosts.addEventListener( "click", showMore );


} )();
