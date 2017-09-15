jQuery(document).ready(function($){
	//variables
	var delta = 0,
        scrollThreshold = 5,
        actual = 1,
        animating = false;
    
    //DOM elements
    var sectionsAvailable = $('.section'),
    	verticalNav = $('.cd-vertical-nav'),
    	prevArrow = verticalNav.find('a.cd-prev'),
    	nextArrow = verticalNav.find('a.cd-next');

	//check the media query and bind corresponding events
	var MQ = deviceType(),
		bindToggle = false;
	
	bindEvents(MQ, true);
	
	$(window).on('resize', function(){
		MQ = deviceType();
		bindEvents(MQ, bindToggle);
		if( MQ == 'mobile' ) bindToggle = true;
		if( MQ == 'desktop' ) bindToggle = false;
	});

    function bindEvents(MQ, bool) {
    	
    	if( MQ == 'desktop' && bool) {   		
    		//bind the animation to the window scroll event, arrows click and keyboard
			scrollAnimation();
			$(window).on('scroll', scrollAnimation);

			prevArrow.on('click', prevSection);
    		nextArrow.on('click', nextSection);
    		
    		$(document).on('keydown', function(event){
				if( event.which=='40' && !nextArrow.hasClass('inactive') ) {
					event.preventDefault();
					nextSection();
				} else if( event.which=='38' && (!prevArrow.hasClass('inactive') || (prevArrow.hasClass('inactive') && $(window).scrollTop() != sectionsAvailable.eq(0).offset().top) ) ) {
					event.preventDefault();
					prevSection();
				}
			});
			//set navigation arrows visibility
			checkNavigation();
		} else if( MQ == 'mobile' ) {
			//reset and unbind
			resetSectionStyle();
			$(window).off('scroll', scrollAnimation);
			prevArrow.off('click', prevSection);
    		nextArrow.off('click', nextSection);
    		$(document).off('keydown');
		}
    }

	function scrollAnimation(){
		//normal scroll - use requestAnimationFrame (if defined) to optimize performance
		(!window.requestAnimationFrame) ? animateSection() : window.requestAnimationFrame(animateSection);
	}

	function animateSection() {
		var scrollTop = $(window).scrollTop(),
			windowHeight = $(window).height(),
			windowWidth = $(window).width();
		
		sectionsAvailable.each(function(){
			var actualBlock = $(this),
				offset = scrollTop - actualBlock.offset().top;

			//according to animation type and window scroll, define animation parameters
			var animationValues = setSectionAnimation(offset, windowHeight);
			
			transformSection(actualBlock.children('div'), animationValues[0], animationValues[1], animationValues[2], animationValues[3], animationValues[4]);
			( offset >= 0 && offset < windowHeight ) ? actualBlock.addClass('visible') : actualBlock.removeClass('visible');

		});
		
		checkNavigation();
	}

	function transformSection(element, translateY, scaleValue, rotateXValue, opacityValue, boxShadow) {
		//transform sections - normal scroll
		element.velocity({
			translateY: translateY+'vh',
			scale: scaleValue,
			rotateX: rotateXValue,
			opacity: opacityValue,
			boxShadowBlur: boxShadow+'px',
			translateZ: 0,
		}, 0);
	}


    function prevSection(event) {
    	//go to previous section
    	typeof event !== 'undefined' && event.preventDefault();
    	
    	var visibleSection = sectionsAvailable.filter('.visible'),
    		middleScroll = ($(window).scrollTop() != visibleSection.offset().top) ? true : false;
    	visibleSection = middleScroll ? visibleSection.next('.section') : visibleSection;

    	var animationParams = selectAnimation(middleScroll, 'prev');
    	unbindScroll(visibleSection.prev('.section'), animationParams[3]);

        if( !animating && !visibleSection.is(":first-child") ) {
        	animating = true;
            visibleSection.removeClass('visible').children('div').velocity(animationParams[2], animationParams[3], animationParams[4])
            .end().prev('.section').addClass('visible').children('div').velocity(animationParams[0] , animationParams[3], animationParams[4], function(){
            	animating = false;
            	$(window).on('scroll', scrollAnimation);
            });
            
            actual = actual - 1;
        }

        resetScroll();
    }

    function nextSection(event) {
    	//go to next section
    	typeof event !== 'undefined' && event.preventDefault();

        var visibleSection = sectionsAvailable.filter('.visible'),
    		middleScroll = ($(window).scrollTop() != visibleSection.offset().top) ? true : false;

    	var animationParams = selectAnimation(middleScroll, 'next');
    	unbindScroll(visibleSection.next('.section'), animationParams[3]);

        if(!animating && !visibleSection.is(":last-of-type") ) {
            animating = true;
            visibleSection.removeClass('visible').children('div').velocity(animationParams[1], animationParams[3], animationParams[4] )
            .end().next('.section').addClass('visible').children('div').velocity(animationParams[0], animationParams[3], animationParams[4], function(){
            	animating = false;
            	$(window).on('scroll', scrollAnimation);
            });

            actual = actual +1;
        }
        resetScroll();
    }

    function unbindScroll(section, time) {
    	//if clicking on navigation - unbind scroll and animate using custom velocity animation
    	$(window).off('scroll', scrollAnimation);
    	section.velocity("scroll", { duration: time });

    }

    function resetScroll() {
        delta = 0;
        checkNavigation();
    }

    function checkNavigation() {
    	//update navigation arrows visibility
		( sectionsAvailable.filter('.visible').is(':first-of-type') ) ? prevArrow.addClass('inactive') : prevArrow.removeClass('inactive');
        ( sectionsAvailable.filter('.visible').is(':last-of-type')  ) ? nextArrow.addClass('inactive') : nextArrow.removeClass('inactive');
	}

	function resetSectionStyle() {
		//on mobile - remove style applied with jQuery
		sectionsAvailable.children('div').each(function(){
			$(this).attr('style', '');
		});
	}

	function deviceType() {
		//detect if desktop/mobile
		return window.getComputedStyle(document.querySelector('body'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
	}

	function selectAnimation(middleScroll, direction) {
		// select section animation - scrollhijacking
		var animationVisible = 'translateNone',
			animationTop = 'translateUp',
			animationBottom = 'translateDown',
			easing = 'ease',
			animDuration = 800;
		    animationTop = 'scaleDown';
		    easing = 'easeInCubic';

		return [animationVisible, animationTop, animationBottom, animDuration, easing];
	}

	function setSectionAnimation(sectionOffset, windowHeight) {
		// select section animation - normal scroll
		var scale = 1,
			translateY = 100,
			rotateX = '0deg',
			opacity = 1,
			boxShadowBlur = 0;
		
		if( sectionOffset >= -windowHeight && sectionOffset <= 0 ) {
			// section entering the viewport
			translateY = (-sectionOffset)*100/windowHeight;
			scale = 1;
			opacity = 1;
		} else if( sectionOffset > 0 && sectionOffset <= windowHeight ) {
			//section leaving the viewport - still has the '.visible' class
			translateY = (-sectionOffset)*100/windowHeight;
			scale = (1 - ( sectionOffset * 0.3/windowHeight)).toFixed(5);
			opacity = ( 1 - ( sectionOffset/windowHeight) ).toFixed(5);
			translateY = 0;
			boxShadowBlur = 40*(sectionOffset/windowHeight);
		} else if( sectionOffset < -windowHeight ) {
			//section not yet visible
			translateY = 100;
			scale = 1;
			opacity = 1;
		} else {
			//section not visible anymore
			translateY = -100;
			scale = 0;
			opacity = 0.7;
			translateY = 0;
		}

		return [translateY, scale, rotateX, opacity, boxShadowBlur]; 
	}
});

/* Custom effects registration - feature available in the Velocity UI pack */
//none
jQuery.Velocity
    .RegisterEffect("translateUp", {
    	defaultDuration: 1,
        calls: [ 
            [ { translateY: '-100%'}, 1]
        ]
    });
jQuery.Velocity
    .RegisterEffect("translateDown", {
    	defaultDuration: 1,
        calls: [ 
            [ { translateY: '100%'}, 1]
        ]
    });
jQuery.Velocity
    .RegisterEffect("translateNone", {
    	defaultDuration: 1,
        calls: [ 
            [ { translateY: '0', opacity: '1', scale: '1', rotateX: '0', boxShadowBlur: '0'}, 1]
        ]
    });

//scale down
jQuery.Velocity
    .RegisterEffect("scaleDown", {
    	defaultDuration: 1,
        calls: [ 
            [ { opacity: '0', scale: '0.7', boxShadowBlur: '40px' }, 1]
        ]
    });


/* Custom effects registration - feature available in the Velocity UI pack */
//none
// $.Velocity
//     .RegisterEffect("translateUp", {
//         defaultDuration: 1,
//         calls: [
//             [ { translateY: '-100%'}, 1]
//         ]
//     });
// $.Velocity
//     .RegisterEffect("translateDown", {
//         defaultDuration: 1,
//         calls: [
//             [ { translateY: '100%'}, 1]
//         ]
//     });
// $.Velocity
//     .RegisterEffect("translateNone", {
//         defaultDuration: 1,
//         calls: [
//             [ { translateY: '0', opacity: '1', scale: '1', rotateX: '0', boxShadowBlur: '0'}, 1]
//         ]
//     });
//
// //scale down
// $.Velocity
//     .RegisterEffect("scaleDown", {
//         defaultDuration: 1,
//         calls: [
//             [ { opacity: '0', scale: '0.7', boxShadowBlur: '40px' }, 1]
//         ]
//     });