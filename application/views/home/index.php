<!DOCTYPE html>
<html dir="ltr" lang="en" class="has-hover no-js not-ready">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <title>BST Developers | Leading Real Estate Investment and Development Solutions</title>
   <!-- <link rel="preconnect" href="https://storage.googleapis.com/" crossorigin> -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700" rel="stylesheet">
   <style>
      .js.not-ready,
      .js.not-ready * {
         transition: none !important;
      }
   </style>
   <link rel="stylesheet" href="assets/stylesheets/jsSlider.css" />
   <link rel="stylesheet" href="assets/stylesheets/theme.css">
   <link rel="stylesheet" href="assets/stylesheets/landing.css" />
   <style>
      .js.not-ready,
      .js.not-ready * {
         transition: none !important;
      }
      .h1,
      .h2,
      .h3,
      .h4,
      .h5,
      h1,
      h2,
      h3,
      h4,
      h5 {
         color: #d7ab3e !important;
      }
      .l-gallery__caption h1.h0.leading-trim span {
         color: #fff !important;;
      }
   </style>
   <?php $this->load->view('common/meta'); ?>
   <script>
      document.documentElement.classList.remove('no-js');
      document.documentElement.classList.add('js');

      if (navigator.platform.toUpperCase().indexOf('WIN') >= 0) {
         document.documentElement.classList.add('is-win');
      }

      // Suppress harmless browser extension errors
      window.addEventListener('error', function (e) {
         if (e.message && e.message.includes('runtime.lastError')) {
            e.preventDefault();
            e.stopPropagation();
         }
      });

      // Suppress unhandled promise rejections from extensions
      window.addEventListener('unhandledrejection', function (e) {
         if (e.reason && typeof e.reason.message && e.reason.message.includes('runtime.lastError')) {
            e.preventDefault();
            e.stopPropagation();
         }
      });
   </script>
</head>

<body data-barba="wrapper">
   <?php $this->load->view("common/preloader"); ?>
   <div class="page-content-wrapper ui-light-background" data-barba="container" data-barba-namespace="page" data-plugin="utmSave">
      <div class="page-content-wrapper__inner js-page-content-wrapper">
         <?php $this->load->view('common/header'); ?>
         <div class="page-content js-page-content">
            <main id="top">
               <section class=" section ui-dark ui-background" data-scroll-section>
                  <div class="l-gallery-container ui-dark ui-background sticky sticky--full-height sticky--under-next"
                     id="l-gallery-sticky" data-plugin="reveal" data-reveal-enable-mq="null">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-gallery-sticky" data-reveal="gallery">
                        <?php $this->load->view('home/hero_slider'); ?>
                     </div>
                  </div>
                  <?php $this->load->view('home/about'); ?>
                  <?php $this->load->view('home/cmd_msg'); ?>
                  <?php $this->load->view('home/project'); ?>
                  <?php $this->load->view('home/statistics'); ?>
                 <?php $this->load->view('home/map'); ?>
                  <?php $this->load->view('home/project_img'); ?>
                  <?php $this->load->view('home/amenties'); ?>
                  <?php $this->load->view('home/interiors'); ?>
                  <?php $this->load->view('home/blogs'); ?>
                  <?php $this->load->view('home/testimonials'); ?>
               </section>
            </main>
            <?php $this->load->view('common/footer'); ?>
         </div>
         <div class="js-modal">
            <?php $this->load->view('common/modal/callback'); ?>
            <?php $this->load->view('common/modal/favorite'); ?>
            <?php $this->load->view('common/modal/subscribe'); ?>
            <?php $this->load->view('common/modal/subscribe_penthouse'); ?>
            <?php $this->load->view('common/modal/subscribe_townhouse'); ?>
            <?php $this->load->view('common/modal/favorite_email'); ?>
            <?php $this->load->view('common/modal/menu'); ?>
            <?php $this->load->view('common/modal/menu_picker'); ?>
         </div>
      </div>
   </div>
   <?php $this->load->view('common/cookies'); ?>
   
   <script fetchpriority="low" async src="assets/javascripts/browser-message/browser-message.js"></script>
   <script fetchpriority="low" src="assets/javascripts/shared.js"></script>
   <script>
      var LOCALES = {
         'errors': {
            'email': 'Please enter a valid email address',
            'required': 'This field is required',
            'tel': 'Please enter a valid phone number',
            'minlength': 'Please enter at least {0} characters',

            'generic': 'Connection error, please try again',
            'genericCode': 'Error occurred, please try again',

            // Passwords don't match
            'equalTo': 'Passwords don\'t match'
         }
      };
   </script>
   <script src="assets/javascripts/landing.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         document.querySelectorAll("img").forEach(function (img) {
            img.src = img.src.replace(/(xs|sm|md|lg|xl|xxl|xxxl)assets/g, "$1/assets");
         });
         document.querySelectorAll("picture source, picture img").forEach(function (el) {
            ["src", "data-src", "srcset", "data-srcset"].forEach(function (attr) {
               let value = el.getAttribute(attr);

               if (value) {
                  value = value.replace(/(xs|sm|md|lg|xl|xxl|xxxl)assets/g, "$1/assets");
                  el.setAttribute(attr, value);
               }
            });
         });
      });
   </script>
   <script src="assets/javascripts/jsSlider.js/script.js"></script>
</body>

</html>