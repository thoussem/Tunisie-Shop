var humbleshop = {
  general : function(){
    // Tab function
    jQuery('#myTab a, #myTab button').click(function (e) {
      e.preventDefault();
      jQuery(this).tab('show');
    });

    // Fancybox function
    //jQuery('a[rel="largeimg"], a.show_review_form').fancybox();
    jQuery('a.show_review_form').fancybox();
    
    if (jQuery('body').hasClass('single-format-gallery')) {
      jQuery('.gallery-item a').attr('rel','gallery-thumb');
      jQuery('.gallery-item a').fancybox();
    }

    // Toggle function
    jQuery('.product h6.subhead').on('click', function(){
      jQuery('.query').slideToggle();
    });

    // Bootstrap collapse
    jQuery(".collapse").collapse();

    jQuery("p").fitVids();

    jQuery('#flexcarousel-product').find('img').attr('data-no-retina');

    // Woo 2.3
    jQuery('.wc-proceed-to-checkout').addClass('text-right');
    jQuery('.wc-proceed-to-checkout a').addClass('btn theme btn-lg');
    jQuery('.single-product #commentform textarea').addClass('form-control');
    jQuery('.single-product #commentform input[type=submit]').addClass('btn btn-default');
    
  },
  slider : function(){
    //Main slider
    jQuery('#flexcarousel').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 188,
      //itemMargin: 5 ,
      asNavFor: '#flexslider',
      prevText: "<i class='fa fa-chevron-left'></i>",
      nextText: "<i class='fa fa-chevron-right'></i>"
    });
     
    jQuery('#flexslider').flexslider({
      animation: "slide",
      controlNav: true,
      animationLoop: true,
      slideshow: true,
      smoothHeight : true,
  	  slideshowSpeed: 5000,
  	  animationSpeed: 600,
      sync: "#flexcarousel",
      prevText: "<i class='fa fa-chevron-left'></i>",
      nextText: "<i class='fa fa-chevron-right'></i>"
    });
    
    // Thubnail
    jQuery('#flexcarousel-product').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 120,
      minItems:2,
      maxItems: 3,
      prevText: "<i class='fa fa-chevron-left'></i>",
      nextText: "<i class='fa fa-chevron-right'></i>"
      //asNavFor: "#flexslider-product"
    });
    
    jQuery('#flexslider-product').flexslider({
      animation: "slide",
      controlNav: true,
      animationLoop: false,
      slideshow: false,
      //sync: "#flexcarousel-product"
    });

    // Brands
    jQuery('#flexcarousel-brands').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: true,
      slideshow: false,
      itemWidth: 180,
      prevText: "<i class='fa fa-chevron-left'></i>",
      nextText: "<i class='fa fa-chevron-right'></i>"
    });
    
    // Category
    jQuery('#flexcarousel-cat').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: true,
      slideshow: false,
      itemWidth: 145,
      itemMargin: 10
    });
    
  },
  navigation : function(){
    var nav = jQuery('.horizontal-nav ul li').not('.horizontal-nav ul li li'), 
    size = jQuery('.horizontal-nav ul li').not('.horizontal-nav ul li li').size(),
    percent = 100/size;
    nav.css('width', percent+'%').parent().show();
    jQuery('.horizontal-nav').show();

    jQuery('.horizontal-nav ul li').mouseenter(function(){
      jQuery('ul', this).stop().slideDown('fast');
    }).mouseleave(function(){
      jQuery('ul', this).stop().slideUp(150);
    });

    selectnav('nav', {
      label: 'Menu'
    }); 
  },
  map : function(color, icon) {
    var map, humbleloc = new google.maps.LatLng(-34.397, 150.644), MY_MAPTYPE_ID = 'humble_style', geocoder = new google.maps.Geocoder();
    
    var featureOpts = [
    
        { stylers: [
            {hue: color }, 
            {invert_lightness: false}, 
            {visibility: 'on'}, // Valid values: 'on', 'off' or 'simplifed'
            {weight: 3},
            {saturation: 0}, //Valid values: [-100, 100]
            {lightness: 0}, // Valid values: [-100, 100]
            {gamma: 1} //Floating point numbers, [0.01, 10], with 1.0 representing no change.
        ] }
    ];

    var win = jQuery(window).width();
    if (win < 767){
        var drag = false;
    } else {
        var drag = true;
    }

    var mapOptions = {
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: drag,
        disableDoubleClickZoom: true,
        disableDefaultUI: false,
        zoom: 15,
        center: humbleloc,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.TERRAIN, MY_MAPTYPE_ID]
          },
        mapTypeId: MY_MAPTYPE_ID
    };
    
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var styledMapOptions = {
      name: 'Humble Style'
    };

    var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

    map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

    var address = jQuery('.gmap').data('center'), 
        //iconBase = 'https://maps.google.com/mapfiles/kml/shapes/',
        myBase = {
            url: icon,
            anchor: new google.maps.Point(16, 34)
        };

    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
            icon: icon
            //shadow: myBase
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  },
  mobile : function(){
    // Hover effect for IOS
    var iOS = false,
    p = navigator.platform;
    
    if( p === 'iPad' || p === 'iPhone' || p === 'iPod' ){
      iOS = true;
      
      jQuery(function(){
        jQuery('.view-thumb').bind('hover', function(e){
          e.preventDefault();
          jQUery(this).toggleClass('hovere');
        });
      });
    }
  },
  bubble : function(){
    jQuery('.counter a').on('click', function(){
      jQuery('.cartbubble').slideToggle();
    });

    jQuery('#closeit').on('click',function(e){
      e.preventDefault;
      jQuery('.cartbubble').slideUp();
    });
  },
  init : function(){
    this.general();
    this.slider();
    this.navigation();
    this.mobile();
    this.bubble();

    if (jQuery('#map').hasClass('gmap')) {
      this.map();
    }

  }
}

// ============
// Initial load
// ============

jQuery(document).ready(function(){
	
	humbleshop.init();

});