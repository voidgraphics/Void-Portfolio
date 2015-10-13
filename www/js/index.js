( function(){

    "use strict";

    var button,
        contactButton,
        form,
        errors,
        contactFormButton;

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

    var scrollDown = function( sSelector ){

	    var rect = document.querySelector( sSelector ).getBoundingClientRect();
		var scrollTarget = rect.top + window.pageYOffset;

        scrollTo( scrollTarget, 600, easing.easeInOutQuad );
    };

    var showError = function( field, sErrorMessage ){
        var label = field.previousElementSibling;
        errors++;
        label.innerHTML += '<span class="form-error"><span class="error-parenthesis">(</span>' + sErrorMessage + '<span class="error-parenthesis">)</span></span>';
        field.classList.add( "field-error" );
    };

    var removePreviousErrors = function(){
        var previousErrorMessages = [].slice.call( document.querySelectorAll( ".form-error" ) );
        if( previousErrorMessages.length > 0 ){
            previousErrorMessages.forEach( function( errorMessage ){
                errorMessage.parentNode.removeChild( errorMessage );
            } );
        }
    };

    var checkFormData = function( e ){
        e.preventDefault();

        removePreviousErrors();

        var subject = document.querySelector( "#subject" );
        var email = document.querySelector( "#email" );
        var message = document.querySelector( "#message" );
        errors = 0;

        ( subject.classList.contains( "field-error" ) ) && ( subject.classList.remove( "field-error" ) );
        ( email.classList.contains( "field-error" ) ) && ( email.classList.remove( "field-error" ) );
        ( message.classList.contains( "field-error" ) ) && ( message.classList.remove( "field-error" ) );

        ( subject.value == "" ) && ( showError( subject, "This is required" ) );
        if( email.value == "" ) {
            showError( email, "This is required" )
        } else if( !( /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test( email.value ) ) ){
            showError( email, "Must be a valid e-mail" )
        }
        ( message.value == "" ) && ( showError( message, "This is required" ) );

        if( errors === 0 ){
            form.submit();
        }

    };

    button = document.querySelector( ".scrolldown-btn" );
    form = document.querySelector( ".contact__form" );
    contactFormButton = document.querySelector( ".contact__form button" );

    contactFormButton = [].slice.call( document.querySelectorAll( ".contact-scroll" ) );
    contactFormButton.forEach( function( element ){
        element.addEventListener( "click", function(){
            scrollDown( ".contact.section" );
        } );
    } );

    button.addEventListener( "click", function(){
        scrollDown( ".about.section" );
    } );
    contactFormButton.addEventListener( "click", checkFormData );

} )();
