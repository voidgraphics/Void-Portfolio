( function(){

	"use strict";

	var $viewMoreWorks = document.querySelector( "#viewmore-works" ),
		$viewMorePosts = document.querySelector( "#viewmore-posts" );

	var showMore = function( e ){
		e.preventDefault();

		var target,
			parent,
			childNodes;

		if( e.target.id != "viewmore-posts" && e.target.id != "viewmore-works" ){
			target = e.target.parentNode;
		} else {
			target = e.target;
		}

		parent = target.parentNode;
		childNodes = [].slice.call(parent.childNodes);

		childNodes.forEach( function( node ){
			if( node.nodeName === "ARTICLE" ){
				var style = window.getComputedStyle(node);
				if( style.display === "none" ){
					node.classList.add( "appear" );
				}
			}
		} );

	};


	$viewMoreWorks.addEventListener( "click", showMore );
	$viewMorePosts.addEventListener( "click", showMore );


} )();
