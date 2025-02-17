<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="./js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<!-- //-beg- concat_js -->
<script src="./js/vendor/owl.carousel.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<script src="./js/main.js"></script>
<!-- //-end- concat_js -->
<script>
(function(){

    var windowWidth = function() {
        var e = window, 
        a = 'inner';
        if ( !( 'innerWidth' in window ) ) { 
            a = 'client';
            e = document.documentElement || document.body;
        }
        return e[ a+'Width' ];
    }

    var carouselPadding = function() {
        var limit =  1690; 
        if ( Modernizr.mq("( min-width: " + limit + "px ) ") ) {
            padding = Math.round( ( windowWidth() - limit ) / 2 );
        }
        else {            
            padding = 0;
        }
        return padding;
    };
    var owl = $(".carousel");
    owl.owlCarousel({
        items : 1,
        loop : true,
        // margin : 10,
        nav : false,
        dots : true,
        responsive :  {
            0  : {
                stagePadding : 0
            },
            1690 : {
                stagePadding : carouselPadding(),
                margin : 30
            },
        }
    });
    $('.owl-item:not(".active")').on('click', function(e) {

    	if ( $(this).next().is('.active') ) {
			owl.trigger('next.owl.carousel');
    	}
    	else {
			owl.trigger('prev.owl.carousel');
    	}
    });
}());
</script>