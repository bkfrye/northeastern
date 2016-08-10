jQuery(function() {

    // controls the expandable content on the homepage
    var content = jQuery('.angled_content');
    var item = jQuery('.angled_item');

    function closeContent(){
        content.addClass('hide');
        item.removeClass('hide');
        item.removeClass('content-active');
    }

    item.click(function(){
        if (jQuery(this).next(content).hasClass('hide')){
            jQuery(this).next(content).removeClass('hide');
        }

        item.not(jQuery(this)).addClass('hide');
        item.addClass('content-active');
    });

    jQuery('.close').click(function(){
        closeContent();
    });

    jQuery(window).resize(function() {
        if(true === item.hasClass('content-active') && jQuery(window).width() < 768) {
            closeContent();
        }
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

    jQuery('.btn p').click(function(){
        jQuery('.social_feed article').addClass('expand_juicer');
        jQuery(this).css('display', 'none');
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


});
