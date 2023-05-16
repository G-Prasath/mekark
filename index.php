<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NFHZKNW');</script>
<!-- End Google Tag Manager -->
					<!-- Google Analytics opt-out snippet added by Site Kit -->
			<script type="text/javascript">
window["ga-disable-UA-252472784-15"] = true;
</script>
			<script type="text/javascript">
window["ga-disable-G-VMB7H19YPQ"] = true;
</script>
			<!-- End Google Analytics opt-out snippet added by Site Kit -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="google-site-verification" content="rAR_zUhuNvAl7JlZMsxLNFSyu6LjvFxhoRmk9LWLOnI" />
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Industrial Manufacturing Company India - Mekark</title>
    <meta name="description" content="Mekark is always at the forefront of the industry, ensuring that its customers receive best products and services possible. Call us Today." />
    <link rel="canonical" href="https://www.mekark.com/" />
    
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- -------------- Testimonial ---------------------->
    <?php include_once '_templates/head.php' ?>
    


</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->

        <!-- end preloader -->

        <!-- Start header -->
        <?php include_once '_templates/header.php' ?>
        <!-- End header -->
        
        <!-- start of hero -->
        <?php include_once '_templates/coverpage.php' ?>
        <!-- end of hero slider -->

        <!-- start feature-section -->
        <?php include_once '_templates/feature.php' ?>
        <!-- end feature-section -->

        <!-- start about-us-section -->
        <?php include_once '_templates/about.php' ?>
        <!-- end about-us-section -->

        <!-- start why-choose-section -->
        <?php include_once '_templates/why-to-choose.php' ?>
        <!-- end why-choose-section -->

        <!-- start service-section-s2 -->
        <?php include_once '_templates/service-section.php' ?>
        <!-- end service-section-s2 -->

        <!-- start fun-fact-section -->
        <?php include_once '_templates/fun-fact.php' ?>
        <!-- end fun-fact-section -->

        <!-- start faq-pg-section -->
        <?php include_once '_templates/faq.php' ?>
        <!-- end faq-pg-section -->

        <!-- strat testimonial -->
        <?php include_once '_templates/testimonial.php' ?>
        <!-- end testimonial -->    
        
        <!-- start blog-section -->
        <?php include_once '_templates/blog.php' ?>
        <!-- end blog-section -->

         <!-- start footer -->
       <?php include_once '_templates/cta.php' ?><?php include_once '_templates/footer.php' ?>
         <!-- end footer -->

    </div>
    <!-- end of page-wrapper -->

    
    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>

    <!-- ----- Testimonial Slide CDN ------->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
        $("#testimonial-slider").owlCarousel({
          items: 2,
          itemsDesktop: [1000, 2],
          itemsDesktopSmall: [990, 2],
          itemsTablet: [768, 1],
          pagination: true,
          navigation: false,
          navigationText: ["", ""],
          slideSpeed: 1000,
          autoPlay: true
        });
      });
    </script>

    <!-- --------- tab Menu -------  -->
    
    <script>
      $(document).ready(function(){

        $('.list').click(function(){
          let value = $(this).attr('data-filter');

          if(value == 'products'){
            document.getElementById("equipment").classList.add("tab-hide");
            document.getElementById("services").classList.add("tab-hide");
            document.getElementById("products").classList.add("tab-show");
            document.getElementById("products").classList.remove("tab-hide"); 
          }
          else if(value == 'equipment'){
            document.getElementById("equipment").classList.add("tab-show");
            document.getElementById("equipment").classList.remove("tab-hide"); 
            document.getElementById("products").classList.add("tab-hide");
            document.getElementById("services").classList.add("tab-hide");
          }
          else if(value == 'services'){
            document.getElementById("services").classList.add("tab-show");
            document.getElementById("services").classList.remove("tab-hide"); 
            document.getElementById("equipment").classList.add("tab-hide"); 
            document.getElementById("products").classList.add("tab-hide");
          }
          $(this).addClass('active').siblings().removeClass('active');
        });
      });

    </script>

        <script>
          $(document).ready(function(){
            $(".h-icon").mouseover(function(){
              var fin = $(this).attr("class").split(" ");
              var final = fin[1].replace(/-/g, ' ')
              $(".result").html(final);
            });
            
            $(".h-icon").mouseout(function(){
              $(".result").html(" ");
            });
          });
        </script>


<script>
window.addEventListener('load', function() {
jQuery('[href*="mailto:"]').click(function() {
  gtag('event', 'conversion', {'send_to': 'AW-11080372942/ImzpCMH7_Y0YEM6lxKMp'});
})
jQuery('[href*="tel:"]').click(function() { 
  gtag('event', 'conversion', {'send_to': 'AW-11080372942/5D28CPn3_Y0YEM6lxKMp'});
})
jQuery('.elementor-button:contains(Send My Message)').click(function() { 
var g_ads_ini = 0;
   var g_ads_var= setInterval(function() {
   if (g_ads_ini == 0) {
        if (jQuery('.elementor-message-success').is(":visible") ) {
          gtag('event', 'conversion', {'send_to': 'AW-11080372942/oYy4CMT7_Y0YEM6lxKMp'});
          clearInterval(g_ads_var);
           g_ads_ini = 1;
        }
        }
      }, 1000);
});
 })
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFHZKNW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>
