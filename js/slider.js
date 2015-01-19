jQuery(document).ready(function() {
    // slider init and options
    jQuery('.banner').unslider({
        speed: 500,
        delay: 3000,
        complete: function() {console.log('unslider loaded');},
        keys: true,
        dots: true,
        fluid: false
    });
});