<!-- JS Global Compulsory -->
<script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="../../assets/vendor/popper.js/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../../assets/vendor/appear.js"></script>
    <script src="../../assets/vendor/fancybox/jquery.fancybox.js"></script>
    <script src="../../assets/vendor/jquery.countdown.min.js"></script>
    <script src="../../assets/vendor/plyr/dist/plyr.js"></script>
    <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>

    <!-- JS Unify -->
    <script src="../../assets/js/hs.core.js"></script>
    <script src="../../assets/js/components/hs.header.js"></script>
    <script src="../../assets/js/helpers/hs.hamburgers.js"></script>
    <script src="../../assets/js/components/hs.scroll-nav.js"></script>
    <script src="../../assets/js/components/hs.rating.js"></script>
    <script src="../../assets/js/components/hs.tabs.js"></script>
    <script src="../../assets/js/components/hs.popup.js"></script>
    <script src="../../assets/js/components/hs.countdown.js"></script>
    <script src="../../assets/js/components/hs.video-audio.js"></script>
    <script src="../../assets/js/components/hs.carousel.js"></script>
    <script src="../../assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="../../assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        $('.u-accordion__header .btn').on('click', function(e) {
          e.stopPropagation();
        });

        // initialization of rating
        $.HSCore.components.HSRating.init($('.js-rating'));

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        $('#gallery [role="tablist"] .nav-link').on('click', function () {
          setTimeout(function () {
            $('#galleryTabs .js-carousel').slick('setPosition');
          }, 200);
        });

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox-media', {
          helpers: {
            media: {},
            overlay: {
              css: {
                'background': 'rgba(255, 255, 255, .8)'
              }
            }
          }
        });

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of countdown
        var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
          yearsElSelector: '.js-cd-years',
          monthElSelector: '.js-cd-month',
          daysElSelector: '.js-cd-days',
          hoursElSelector: '.js-cd-hours',
          minutesElSelector: '.js-cd-minutes',
          secondsElSelector: '.js-cd-seconds'
        });

        // initialization of audio
        $.HSCore.components.HSVideoAudio.init('.js-audio');
      });

      $(window).on('load', function () {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
    </script>