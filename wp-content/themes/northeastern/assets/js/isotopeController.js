jQuery(function() {
    // controls the filter for the juicer feed
    //****************************************
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


    //controls filter for events pages
    //********************************
    var $container = jQuery('#events'),
        filters = {};

    $container.isotope({
        itemSelector : '.event-item'
    });

    // filter buttons
    jQuery('select').change(function(){
        var $this = jQuery(this);

        // store filter value in object
        var group = $this.attr('data-filter-group');
        filters[ group ] = $this.find(':selected').attr('data-filter-value');

        // convert object into array
        var isoFilters = [];
        for ( var prop in filters ) {
            isoFilters.push( filters[ prop ] )
        }

        var selector = isoFilters.join('');
        $container.isotope({ filter: selector });

        // display message box if no results
        if(jQuery('#events').height() == 0) {
            jQuery('#no-results').css('display','block');
        }else{
            jQuery('#no-results').css('display','none');
        }

        return false;
    });


});
