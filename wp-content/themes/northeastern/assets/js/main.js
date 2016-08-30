jQuery(function() {

    // controls the three block angled content
    _this = jQuery(this);
    block = jQuery('.block');
    contentBlock = jQuery('.content-block');
    angled = jQuery('#angled_one, #angled_two, #angled_three');
    close = jQuery('.close');
    contentOne = jQuery('#content_one');
    contentTwo = jQuery('#content_two');
    contentThree = jQuery('#content_three');

    desktopOne = jQuery('#angled_one');
    desktopTwo = jQuery('#angled_two');
    desktopThree = jQuery('#angled_three');

    mobileOne = jQuery('#mobile_one');
    mobileTwo = jQuery('#mobile_two');
    mobileThree = jQuery('#mobile_three');

    blockMobile = jQuery('.content-block_desktop');


    function removeContent(){
        block.removeClass('show');
        block.removeClass('hidden');
        contentBlock.removeClass('enter');
        blockMobile.removeClass('show');
    }

    close.click(function(e){
        removeContent();
        e.stopPropagation();
    });

    jQuery(window).resize(function() {
        if(true === block.hasClass('show')) {
            removeContent();
        }
    });

    //switches angled content copy between blocks for responsiveness
    function moveElements() {
        var domWidth = jQuery(window).width();
        var blockMobile = jQuery('.content-block_desktop');

        if (domWidth < 960) {
            contentOne.appendTo(mobileOne);
            contentTwo.appendTo(mobileTwo);
            contentThree.appendTo(mobileThree);

            block.click(function(){
                jQuery(this).nextAll(blockMobile).first().addClass('show');
            });
        } else {
            contentOne.appendTo(desktopOne);
            contentTwo.appendTo(desktopTwo);
            contentThree.appendTo(desktopThree);

            block.click(function(){
                jQuery(this).addClass('show');
                contentBlock.addClass('enter');
                block.not(jQuery(this)).addClass('hidden');
            });
        }
    }

    jQuery(document).ready(function() {
        moveElements();
        jQuery(window).resize(function() {
            moveElements();
        });
    });


    // controls the filter for the juicer feed
    masonry = jQuery('.juicer_list');
    twitter = jQuery('#juicer_twitter');
    facebook= jQuery('#juicer_facebook');
    instagram = jQuery('#juicer_instagram');

    instagram.click(function(){
        masonry.isotope({filter:'.Instagram'});
    });
    twitter.click(function(){
        masonry.isotope({filter:'.Twitter'});
    });
    facebook.click(function(){
        masonry.isotope({filter:'.Facebook'});
    });

    jQuery( "#juicer_home" ).click(function(){
        masonry.isotope({filter:'*'});
    });

    jQuery('#view_more-juicer').click(function(e){
        jQuery('.social_feed article').addClass('expand_juicer');
        jQuery(this).css('display', 'none');
        jQuery('.overlay_gradient').css('display', 'none');
        return false;
    });

    // rotating headline controller
    var animationDelay = 2500;

    animateHeadline(jQuery('.headline_rotate'));

    function animateHeadline($headlines) {
    	$headlines.each(function(){
    		var headline = jQuery(this);

    		setTimeout(function(){
                hideWord( headline.find('.rotate-visible') );
            },
            animationDelay);

            var words = headline.find('.rotator_wrap b'),
				width = 0;
			words.each(function(){
				var wordWidth = jQuery(this).width();
			    if (wordWidth > width) width = wordWidth;
			});
			headline.find('.rotator_wrap').css('width', width);

    	});
    }

    function hideWord($word) {
    	var nextWord = takeNext($word);
    	switchWord($word, nextWord);
    	setTimeout(function(){
            hideWord(nextWord);
        },
        animationDelay);
    }

    function takeNext($word) {
    	return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
    }

    function switchWord($oldWord, $newWord) {
    	$oldWord.removeClass('rotate-visible').addClass('rotate-hidden');
    	$newWord.removeClass('rotate-hidden').addClass('rotate-visible');
    }

    //controls accordion close button within content
    jQuery('.close_item').click(function(){
        jQuery(this).parent().siblings('input:checkbox').prop('checked', true);
        jQuery('html, body').animate({
            scrollTop: jQuery(this).parent().parent().offset().top
        }, 400);
    });

    //opens child menu for parent and child pages
    jQuery('.child_menu').click(function() {
        jQuery('.child_menu-wrap').toggleClass('open');
    });

    //controls filter for events pages
    var events = jQuery('#events').isotope({
      itemSelector: '.event-item'
    });

    var filters = {};

    jQuery('.event_tags').on( 'click', '.filter-btn', function() {
    	var eventGroup = jQuery(this).parents('.event_tags_group');
    	var filterGroup = eventGroup.attr('data-filter-group');
    	filters[ filterGroup ] = jQuery(this).attr('data-filter');
    	var filterValue = concatValues( filters );
    	events.isotope({ filter: filterValue });
    });
    jQuery('.event_tags').each( function( i, eventGroup ) {
      var eventGroup = jQuery( eventGroup );
      eventGroup.on( 'click', '.filter-btn', function() {
        eventGroup.find('.is-checked').removeClass('is-checked');
        jQuery( this ).addClass('is-checked');
      });
    });

    function concatValues( obj ) {
    	var value = '';
    	for ( var prop in obj ) {
    		value += obj[ prop ];
    	}
    	return value;
    }


});
