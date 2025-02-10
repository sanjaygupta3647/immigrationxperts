<?php
include_once 'image-gallery/config/Database.php';
include_once 'image-gallery/class/User.php';
include_once 'image-gallery/class/Gallery.php';
include_once 'image-gallery/gallery_action.php';
//include_once 'image-gallery/include/suggestions.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'metadata.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- Canonical tag -->
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>"/>
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keyword); ?>"/> <!-- Added keyword -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>" />
    
	
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/assets/vendors/insur-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/insur-two-icon/style.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="/assets/vendors/BuenosAires/stylesheet.css" />
    <link rel="stylesheet" id="langLtr" href="/assets/css/insur.css" />
    <link rel="stylesheet" href="/assets/css/insur-responsive.css" />
    <!-- PhotoSwipe CSS -->
    <link rel="stylesheet" href="/assets/css/photoswipe.css">
    <link rel="stylesheet" href="/assets/css/default-skin.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PR37ZR3');</script>
    
    <style>
        
        
@media (max-width: 768px) {
    .pswp__button--close {
       
        top: 0px;
        right: 0px;
    }
}
    </style>

</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR37ZR3"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

    <?php include 'header.php';?>

     <div class="page-wrapper">
        <!-- Page Header Start -->
        <section class="page-header" style="background: linear-gradient(to right, #01406b, #00bdce); color: #fff; padding: 70px 0 70px;">  
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/" style="color: #ffffff;">Home</a></li>
                        <li style="color: #ffffff;"><span>/</span></li>
                        <li style="color: #ffffff;">Gallery</li>
                    </ul>
                    <h2 style="color: #b8e1f0;">Our Gallery</h2>
                </div>
            </div>
        </section>

        <!--Page Header End-->

        <div class="container">
            <div class="get-insurance__tab mt-5">
                <div class="get-insurance__tab-box tabs-box">
                    <div class="row tab-buttons clearfix list-unstyled">
                        <div class="col-lg-6 col-md-6 col-sm-12 btn-column">
                            <div data-tab="#immigration" class="tab-btn active-btn">
                                <div class="get-insuracne-two__tab-btn-content">
                                    <div class="get-insuracne-two__tab-icon">
                                        <img src="/assets/images/icon/education.png" alt="">
                                    </div>
                                    <div class="get-insuracne-two__tab-text-box">
                                        <p class="get-insuracne-two__tab-text">Immigration Visa Grant !</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 btn-column">
                            <div data-tab="#study" class="tab-btn">
                                <div class="get-insuracne-two__tab-btn-content">
                                    <div class="get-insuracne-two__tab-icon">
                                        <img src="/assets/images/icon/immigration.png" alt="">
                                    </div>
                                    <div class="get-insuracne-two__tab-text-box">
                                        <p class="get-insuracne-two__tab-text">Study Overseas Visa Grant !</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    $database = new Database();
                    $conn = $database->getConnection();

                    $sqlImmigration = "SELECT * FROM portfolio_items WHERE category = 'immigration' ORDER BY id DESC";
                    $resultImmigration = $conn->query($sqlImmigration);

                    $sqlStudy = "SELECT * FROM portfolio_items WHERE category = 'study' ORDER BY id DESC";
                    $resultStudy = $conn->query($sqlStudy);
                    ?>

                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="immigration">
                            <div class="get-insurance__content">
                                <div class="row gallery">
                                    <?php
                                    if ($resultImmigration->num_rows > 0) {
                                        while ($row = $resultImmigration->fetch_assoc()) {
                                            echo '<div class="col-xl-3 col-lg-6 col-md-6 filter-item gallery-item">';
                                            echo '    <div class="portfolio__single">';
                                            echo '        <div class="portfolio__img">';
                                            echo '            <a href="/image-gallery/uploads/gall/' . $row["image"] . '" data-size="800x768">';
                                            echo '                <img src="/image-gallery/uploads/gall/' . $row["image"] . '" alt="' . $row["title"] . '">';
                                            echo '            </a>';
                                            echo '            <div class="portfolio__plus">';
                                            echo '                <a href="/image-gallery/uploads/gall/' . $row["image"] . '" class="img-popup"></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        }
                                    } else {
                                        echo "<p>No images found for Immigration Visa Grant.</p>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <!--tab-->
                        <div class="tab" id="study">
                            <div class="get-insurance__content">
                                <div class="row gallery">
                                    <?php
                                    if ($resultStudy->num_rows > 0) {
                                        while ($row = $resultStudy->fetch_assoc()) {
                                            echo '<div class="col-xl-3 col-lg-6 col-md-6 filter-item gallery-item">';
                                            echo '    <div class="portfolio__single">';
                                            echo '        <div class="portfolio__img">';
                                            echo '            <a href="/image-gallery/uploads/gall/' . $row["image"] . '" data-size="800x768">';
                                            echo '                <img src="/image-gallery/uploads/gall/' . $row["image"] . '" alt="' . $row["title"] . '">';
                                            echo '            </a>';
                                            echo '            <div class="portfolio__plus">';
                                            echo '                <a href="/image-gallery/uploads/gall/' . $row["image"] . '" class="img-popup"></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        }
                                    } else {
                                        echo "<p>No images found for Study Overseas Visa Grant.</p>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $conn->close(); ?>
                </div>
            </div>
        </div>
        
        
<script>
document.addEventListener("DOMContentLoaded", function() {
    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabs = document.querySelectorAll(".tab");

    tabButtons.forEach(button => {
        button.addEventListener("click", function() {
            const tabId = this.getAttribute("data-tab");

            tabButtons.forEach(btn => btn.classList.remove("active-btn"));
            tabs.forEach(tab => tab.classList.remove("active-tab"));

            this.classList.add("active-btn");
            document.querySelector(tabId).classList.add("active-tab");
        });
    });
});
</script>

    <?php include 'footer.php';?>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fas fa-plane"></i></a>

    <script src="/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/odometer/odometer.min.js"></script>
    <script src="/assets/vendors/swiper/swiper.min.js"></script>
    <script src="/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="/assets/vendors/wow/wow.js"></script>
    <script src="/assets/vendors/isotope/isotope.js"></script>
    <script src="/assets/vendors/countdown/countdown.min.js"></script>
    <script src="/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/assets/vendors/vegas/vegas.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="/assets/vendors/timepicker/timePicker.js"></script>
    <script src="/assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="/assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="/assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- PhotoSwipe JS -->
    <script src="/assets/js/photoswipe.min.js"></script>
    <script src="/assets/js/photoswipe-ui-default.min.js"></script>

    <!-- Initialize PhotoSwipe -->
	<script>
        document.addEventListener('DOMContentLoaded', function() {
    var autoSlideInterval;
    var isAutoSlideActive = false;

    var initPhotoSwipeFromDOM = function(gallerySelector) {
        var parseThumbnailElements = function(el) {
            var thumbElements = el.querySelectorAll('.gallery-item'),
                items = [];

            thumbElements.forEach(function(el) {
                var linkEl = el.querySelector('a'),
                    size = linkEl.getAttribute('data-size').split('x'),
                    item = {
                        src: linkEl.getAttribute('href'),
                        w: parseInt(size[0], 10),
                        h: parseInt(size[1], 10)
                    };
                items.push(item);
            });

            return items;
        };

        var options = {
            index: 0,
            maxSpreadZoom: 3,
            getDoubleTapZoom: function(isMouseClick, item) {
                return item.initialZoomLevel * 2;
            },
            bgOpacity: 0.85,
            history: false,
            focus: false,
            showAnimationDuration: 0,
            hideAnimationDuration: 0,
            shareEl: false, // Disable share button
            zoomEl: true,
            fullscreenEl: true,
            arrowEl: true,
            pinchToClose: true,
            tapToToggleControls: false,
            clickToCloseNonZoomable: true,
            closeOnScroll: false,
            closeOnVerticalDrag: false,
            spacing: 0,
            modal: false,
            timeToIdle: 3000,
            timeToIdleOutside: 1000,
            captionEl: false,
            preloaderEl: true,
            tapToClose: false,
            clickToClose: false,
            escKey: true
        };

        var startAutoSlide = function(gallery) {
            if (!isAutoSlideActive) {
                autoSlideInterval = setInterval(function() {
                    gallery.next();
                }, 3000); // Auto-slide interval (3 seconds)
                isAutoSlideActive = true;
            }
        };

        var stopAutoSlide = function() {
            clearInterval(autoSlideInterval);
            isAutoSlideActive = false;
        };

        var openPhotoSwipe = function(index, galleryElement) {
            var pswpElement = document.querySelectorAll('.pswp')[0],
                items = parseThumbnailElements(galleryElement),
                gallery;

            options.index = index;
            gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();

            // Add event listeners for play/pause buttons
            document.querySelector('.pswp__button--play').addEventListener('click', function() {
                startAutoSlide(gallery);
            });

            document.querySelector('.pswp__button--pause').addEventListener('click', function() {
                stopAutoSlide();
            });

            // Event listener for the close button to ensure it works on mobile and desktop
            document.querySelector('.pswp__button--close').addEventListener('click', function() {
                gallery.close();
            });

            // Stop auto-slide on close
            gallery.listen('close', function() {
                stopAutoSlide();
            });
        };

        var galleryElements = document.querySelectorAll(gallerySelector);
        galleryElements.forEach(function(galleryElement, index) {
            galleryElement.setAttribute('data-pswp-uid', index + 1);
            galleryElement.addEventListener('click', function(e) {
                e.preventDefault();
                var target = e.target || e.srcElement;
                var clickedGallery = target.closest('.gallery');
                var clickedThumbnail = target.closest('.gallery-item');
                var index = Array.prototype.indexOf.call(clickedGallery.querySelectorAll('.gallery-item'), clickedThumbnail);
                if (index >= 0) openPhotoSwipe(index, clickedGallery);
            });
        });
    };

    initPhotoSwipeFromDOM('.gallery');
});


    </script>


    <!-- PhotoSwipe HTML structure -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <button class="pswp__button pswp__button--play" title="Play"></button>
                <button class="pswp__button pswp__button--pause" title="Pause"></button>
               
  
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
