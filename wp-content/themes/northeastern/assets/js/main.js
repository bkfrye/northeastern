jQuery(function() {

    // jQuery(window).resize(function() {
    //     if(true === item.hasClass('enter') && jQuery(window).width() < 768) {
    //         closeContent();
    //     }
    // });


    // controls the three block angled content
    var _this = jQuery(this);
    var block = jQuery('.block');
    var contentBlock = jQuery('.content-block');
    var angled = jQuery('#angled_one, #angled_two, #angled_three');
    var close = jQuery('.close');
    var contentOne = jQuery('#content_one'),
        contentTwo = jQuery('#content_two'),
        contentThree = jQuery('#content_three');

    var desktopOne = jQuery('#angled_one'),
        desktopTwo = jQuery('#angled_two'),
        desktopThree = jQuery('#angled_three');

    var mobileOne = jQuery('#mobile_one'),
        mobileTwo = jQuery('#mobile_two'),
        mobileThree = jQuery('#mobile_three');

    var blockMobile = jQuery('.content-block_desktop');


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
                // contentBlock.addClass('enter');
                // block.not(jQuery(this)).addClass('hidden');
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
    jQuery('#juicer_nav li').click(function(){
        if (jQuery(this).hasClass('active')){
            return;
        }else{
            jQuery("#juicer_nav li").removeClass('active');
            jQuery(this).addClass('active');

            socialFilter();
        }
    });

    function socialFilter(){
        jQuery( "#juicer_instagram" ).click(function(){
            jQuery('.j-stack .facebook', '.j-stack .twitter').hide();
        });
    }

    masonry = jQuery('.juicer_list');
    var twitter = jQuery('#juicer_twitter');
    var facebook= jQuery('#juicer_facebook');
    var instagram = jQuery('#juicer_instagram');

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


});
