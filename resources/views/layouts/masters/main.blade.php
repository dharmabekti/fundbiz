<!DOCTYPE HTML>
<html>
    <head>
        <title>FUNDBIZ | Home</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/form.css')}}" rel="stylesheet" type="text/css" media="all" />
        
        <!--- start-menu-script---->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
        <script type="text/javascript" src="js/jquery.mmenu.js"></script>
                <script type="text/javascript">
                    //  The menu on the left
                    $(function() {
                        $('nav#menu-left').mmenu();
                    });
                </script>
        <!-- start slider -->
            <link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
                <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
                <script type="text/javascript" src="js/easing.js"></script>
                <script type="text/javascript">
                    $(function() {
                        $('#ei-slider').eislideshow({
                            animation           : 'center',
                            autoplay            : true,
                            slideshow_interval  : 3000,
                            titlesFactor        : 0
                        });
                    });
                </script>
        <!-- start top_js_button -->
        <script type="text/javascript" src="js/move-top.js"></script>
           <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){     
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                    });
                });
            </script>
    </head>
    <body>
    
    @yield('page-content')

     <!-- start footer -->
    <div class="footer_mid">
    <div class="wrap">
    <div class="footer">
        <div class="f_search">
           
        </div>
        <div class="soc_icons">
                <ul>
                    <li><a class="icon1" href="#"></a></li>
                    <li><a class="icon2" href="#"></a></li>
                    <li><a class="icon3" href="#"></a></li>
                    <li><a class="icon4" href="#"></a></li>
                    <li><a class="icon5" href="#"></a></li>
                </ul>   
        </div>
        <div class="clear"></div>
    </div>
    </div>
    </div>
    <!-- start footer -->
    <div class="footer_bg">
    <div class="wrap">
    <div class="footer">
            <!-- scroll_top_btn -->
            <script type="text/javascript">
                $(document).ready(function() {
                
                    var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear' 
                    };
                    
                    
                    $().UItoTop({ easingType: 'easeOutQuart' });
                    
                });
            </script>
             <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
            <!--end scroll_top_btn -->
       
        <div class="copy">
            <p class="link"><span>© 2017 | &nbsp;<a href="http://w3layouts.com/"> MSG</a></span></p>
        </div>
        <div class="clear"></div>
    </div>
    </div>
    </div>

    </body>
</html>