jQuery(function() {
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
