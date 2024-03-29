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

    // jQuery('a[href*="#"]:not([href="#"])').click(function() {
    //     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    //         var target = jQuery(this.hash);
    //         target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
    //         if (target.length) {
    //             jQuery('html, body').animate({
    //                 scrollTop: target.offset().top
    //             }, 1000);
    //             return false;
    //         }
    //     }
    // });

});
