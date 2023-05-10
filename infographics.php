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
    <title>Mekark infographics</title>
    <meta name="description" content="Mekark's infographics offers visually engaging content that highlights the benefits of prefabricated building solutions. Explore our designs and get more!" />
    <meta name="keywords" content="infographics, Mekark, Chennai" />
    <link rel="canonical" href="https://www.mekark.com/infographics/" />
    
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
    <!-- -------- Light Box ---------- -->
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <script type="text/javascript" src="assets/js/lightbox-plus-jquery.min.js"></script>

    <!-- -------------- Font Awesome Icons ---------------------->
    <?php include_once '_templates/head.php' ?>

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        
        <!-- end preloader -->

        <!-- Start header -->
        <?php include_once '_templates/header.php' ?>
        <!-- end of header -->


        <!-- start page-title -->
        <section class="page-title infographics-1">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12 m-0">
                        <h1>infographics</h1>
                    </div>
                </div> 
            </div> 
        </section>        
        <!-- end page-title -->
        
         <!-- ----- Breadcurm --------->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="https://www.mekark.com/" style="color:#db9b66">Home</a></li>
              <li class="breadcrumb-item">infographics</li>
            </ol>
        </nav>
        <!-- ---------- Breadcurm -------->

        <!-- ------ Start Gallery ----------->
            <div class="container sec-gallery">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title-s5">
                            <span>Gallery</span>
                            <p class="para">Our Completed Projects</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="own-gallery">
                        <?php
                        
                            $images = glob("assets/images/gallery/infographics" . "/*.png");
                            foreach($images as $image)
                            {?>
                                <div class="item infographics">
                                    <a href=<?php echo $image ?> data-lightbox="mygallery" data-title="First-Image">
                                        <img src=<?php echo $image ?> alt="Mountain reflection on lake">
                                    </a>
                                </div>
                            <?php
                            }
                        ?>
                            
                        </div>                  
                    </div>
                </div>
            </div>
        <!-- ------ End Gallery ----------->

        <!-- start site-footer -->
       <?php include_once '_templates/cta.php' ?><?php include_once '_templates/footer.php' ?>
        <!-- end site-footer -->

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
