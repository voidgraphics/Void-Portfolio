( function(){

    "use strict";

    var button;

    function scrollTo(Y, duration, easingFunction, callback) {

	    var start = Date.now(),
	    	elem = document.documentElement.scrollTop?document.documentElement:document.body,
	    	from = elem.scrollTop;

	    if(from === Y) {
	        return; /* Prevent scrolling to the Y point if already there */
	    }

	    function min(a,b) {
	    	return a<b?a:b;
	    }

	    function scroll(timestamp) {

	        var currentTime = Date.now(),
	            time = min(1, ((currentTime - start) / duration)),
	            easedT = easingFunction(time);

	        elem.scrollTop = (easedT * (Y - from)) + from;

	        if(time < 1) requestAnimationFrame(scroll);
	        else
	            if(callback) callback();
	    }

	    requestAnimationFrame(scroll)
	}

	var easing = {

	  easeInOutQuad: function (t) { return t<.5 ? 2*t*t : -1+(4-2*t)*t }

	}

    var scrollDown = function(){

	    var rect = document.querySelector( ".about.section" ).getBoundingClientRect();
		var scrollTarget = rect.top + window.pageYOffset;

        scrollTo( scrollTarget, 600, easing.easeInOutQuad );
    };

    button = document.querySelector( ".scrolldown-btn" );

    button.addEventListener( "click", scrollDown );

} )();
