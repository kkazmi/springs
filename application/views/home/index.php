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
                  <div class="l-place-mobile pt-3 is-hidden--lg-up">
                     <div class="l-nature__slider__images col js-nature-content-animation-controller"
                        data-plugin="mobileScrollable">
                        <div class="col col--xs-4 col--md-6 ui-dark mb-2 px-layout">
                           <div data-plugin="contentAnimation" data-content-animation-fixed-height="true"
                              data-content-animation-animations='{
                                 "changeShow": {"name": "fadeIn"},
                                 "changeHide": {"name": "fadeOut"}
                                 }' data-content-animation-plugins="controller events height counter"
                              data-content-animation-controller-selector=":root .js-nature-content-animation-controller">
                              <div class="content-animation">
                                 <div data-content-animation-item="1" class="" aria-hidden="false">
                                    <p class="text-t1 leading-trim">
                                       Landscaped terraces with topiary trees, framed with glass, create
                                       the atmosphere of a miniature park floating
                                       above the City.
                                    </p>
                                 </div>
                                 <div data-content-animation-item="2" class="is-hidden" aria-hidden="true">
                                    <p class="text-t1 leading-trim">
                                       Shady leafy-coniferous garden that evokes winding paths, branchy trees, and
                                       sunlit glades of forests surrounding the City.
                                    </p>
                                 </div>
                                 <div data-content-animation-item="3" class="is-hidden" aria-hidden="true">
                                    <p class="text-t1 leading-trim">
                                       Artfully designed recreation areas that delight you with diverse botanical
                                       decor: cascading garlands of runners, asymmetrical lawns, and exotic
                                       flowers.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="mx-layout p-relative">
                           <ul class="mobile-scrollable col col--md-auto mx-auto">
                              <li class="mobile-scrollable__item">
                                 <img class="img-cover is-invisible--js is-hidden--no-js" alt="" draggable="false"
                                    width="640" height="760" data-plugin="appear "
                                    data-src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-1%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22760%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20760%22%3E%3C/svg%3E">
                                 <noscript>
                                    <img class="img-cover " alt="" draggable="false" width="640" height="760"
                                       src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-1%40xs.webp">
                                 </noscript>
                              </li>
                              <li class="mobile-scrollable__item">
                                 <img class="img-cover is-invisible--js is-hidden--no-js" alt="" draggable="false"
                                    width="640" height="760" data-plugin="appear "
                                    data-src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-2%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22760%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20760%22%3E%3C/svg%3E">
                                 <noscript>
                                    <img class="img-cover " alt="" draggable="false" width="640" height="760"
                                       src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-2%40xs.webp">
                                 </noscript>
                              </li>
                              <li class="mobile-scrollable__item">
                                 <img class="img-cover is-invisible--js is-hidden--no-js" alt="" draggable="false"
                                    width="640" height="760" data-plugin="appear "
                                    data-src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-3%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22760%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20760%22%3E%3C/svg%3E">
                                 <noscript>
                                    <img class="img-cover " alt="" draggable="false" width="640" height="760"
                                       src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-3%40xs.webp">
                                 </noscript>
                              </li>
                           </ul>
                           <div class="carousel__thumb group group--nowrap px-layout">
                              <div
                                 class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail is-active">
                              </div>
                              <div class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail ">
                              </div>
                              <div class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail ">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="l-place-webgl__gradient background">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                     </div>
                     <div class="pt-3.5 col col--xs-4 l-place-bg-caption" id="place-mobile">
                        <div class="l-place-webgl__spiral background background--cover">
                           <picture class="is-invisible--js is-hidden--no-js " data-plugin="appear " draggable="false">
                              <img data-src="assets/images/media/landing/4.place/spiral-mobile@xs.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%221200%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%201200%22%3E%3C/svg%3E"
                                 alt="" width="720" height="1200" decoding="async" draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" " draggable="false">
                                 <img src="assets/images/media/landing/4.place/spiral-mobile%40xs.webp" alt=""
                                    width="720" height="1200" decoding="async" draggable="false">
                              </picture>
                           </noscript>
                        </div>
                        <div class="px-layout">
                           <div data-plugin="parallax" data-parallax-enable-mq="md-down" data-parallax-clamp="true"
                              data-parallax-measure-selector=".l-place-bg-caption"
                              data-parallax-0--100='{"transform": "translateY(20vh)"}'
                              data-parallax-0-100='{"transform": "translateY(-6vh)"}'>
                              <h2 class="g1 leading-trim text-right">
                                 Statistics
                              </h2>
                              <p class="l-nature-bg-caption__subtitle text-c1 leading-trim text-right mt-1">
                                 Essence of Contemplation
                              </p>
                           </div>
                           <div class="l-nature-bg-caption__text col col--md-6 mt-3" data-plugin="parallax"
                              data-parallax-enable-mq="md-down" data-parallax-clamp="true"
                              data-parallax-measure-selector=".l-place-bg-caption"
                              data-parallax-0--100='{"transform": "translateY(10vh)"}'
                              data-parallax-0-100='{"transform": "translateY(-10vh)"}'>
                              <p class="text-t1 leading-trim">
                                 BST Developers is situated in the prestigious Western District
                                 of the capital, surrounded by parks and close
                                 to the embankment. It is adjacent to the highway, one
                                 of the most ecological areas of the City.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="l-place-video-container sticky sticky--under-next sticky--full-height is-hidden--md-down"
                     id="l-place-content">
                     <div class="l-place-video pb-2 sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-place-content">
                        <div class="l-place-video__caption col col--md-3 offset--md-8" data-plugin="parallax"
                           data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                           data-parallax-measure-selector=".sticky"
                           data-parallax-60-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                           data-parallax-0-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)"}'>
                           <div class="l-place-video__caption-item">
                              <div>
                                 <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                    draggable="false">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-1@xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="440" height="427">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-1@xxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="440" height="427">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-1@md.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="440" height="427">
                                    <img data-src="assets/images/media/landing/4.place/place-caption-1@xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       alt="" width="440" height="427" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-full" draggable="false">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-1@xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="440" height="427">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-1@xxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="440" height="427">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-1@md.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="440" height="427">
                                       <img src="assets/images/media/landing/4.place/place-caption-1%40xs.webp" alt=""
                                          width="440" height="427" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="mt-0.3">
                                 <p class="h0 leading-trim">10+</p>
                              </div>
                              <div class="mt-0.5">
                                 <p class="text-c1 text-right leading-trim">Years of Experience</p>
                              </div>
                           </div>
                           <div class="l-place-video__caption-item" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax-0-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                              data-parallax--100-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)"}'>
                              <div>
                                 <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                    draggable="false">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-3@xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="440" height="427">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-3@xxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="440" height="427">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-3@md.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="440" height="427">
                                    <img data-src="assets/images/media/landing/4.place/place-caption-3@xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       alt="" width="440" height="427" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-full" draggable="false">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-3@xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="440" height="427">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-3@xxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="440" height="427">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-3@md.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="440" height="427">
                                       <img src="assets/images/media/landing/4.place/place-caption-3%40xs.webp" alt=""
                                          width="440" height="427" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="mt-0.3">
                                 <p class="h0 leading-trim">2</p>
                              </div>
                              <div class="mt-0.5">
                                 <p class="text-c1 text-right leading-trim">Completed Projects</p>
                              </div>
                           </div>
                           <div class="l-place-video__caption-item" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax--100-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                              data-parallax--200-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)"}'>
                              <div>
                                 <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                    draggable="false">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-2@xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="440" height="427">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-2@xxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="440" height="427">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-2@md.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="440" height="427">
                                    <img data-src="assets/images/media/landing/4.place/place-caption-2@xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       alt="" width="440" height="427" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-full" draggable="false">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-2@xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="440" height="427">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-2@xxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="440" height="427">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-2@md.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="440" height="427">
                                       <img src="assets/images/media/landing/4.place/place-caption-2%40xs.webp" alt=""
                                          width="440" height="427" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="mt-0.3">
                                 <p class="h0 leading-trim">100+</p>
                              </div>
                              <div class="mt-0.5">
                                 <p class="text-c1 text-right leading-trim">Happy Customers</p>
                              </div>
                           </div>
                           <div class="l-place-video__caption-item" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax--200-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                              data-parallax--300-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)"}'>
                              <div>
                                 <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                    draggable="false">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-4@xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="440" height="427">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-4@xxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="440" height="427">
                                    <source data-srcset="assets/images/media/landing/4.place/place-caption-4@md.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="440" height="427">
                                    <img data-src="assets/images/media/landing/4.place/place-caption-4@xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                       alt="" width="440" height="427" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-full" draggable="false">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-4@xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="440" height="427">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-4@xxl.webp" 
                                          media="(min-width: 1440px) and (min-height: 700px)" width="440" height="427">
                                       <source srcset="assets/images/media/landing/4.place/place-caption-4@md.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="440" height="427">
                                       <img src="assets/images/media/landing/4.place/place-caption-4%40xs.webp" alt=""
                                          width="440" height="427" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="mt-0.3">
                                 <p class="h0 leading-trim">
                                    2,45,025 Sq Ft
                                 </p>
                              </div>
                              <div class="mt-0.5">
                                 <p class="text-c1 text-right leading-trim">
                                    Land Bank
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--md-down"
                     id="l-place-sticky-1">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-place-sticky-1"
                        data-scroll-snap-point='[{ "viewport": 0, "element": 100 }]'>
                        <div class="background background--cover" data-plugin="parallax"
                           data-parallax-pattern="stickyUnderPreviousNextBackground">
                           <div class="background background--cover">
                              <iframe
                                 style="--ratio: 1.7777777777778; --aspect-ratio: 640 / 360; overflow: hidden; border: none;"
                                 width="640" height="360" loading="lazy"
                                 src="https://player.vimeo.com/video/1218240651?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
                                 allow="autoplay; encrypted-media" allowfullscreen></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--md-down"
                     id="l-place-sticky-2">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-place-sticky-2"
                        data-scroll-snap-point='[{ "viewport": 0, "element": 100 }]'>
                        <div class="background background--cover" data-plugin="parallax"
                           data-parallax-pattern="stickyUnderPreviousNextBackground">
                           <div class="background background--cover">
                              <iframe
                                 style="--ratio: 1.7777777777778; --aspect-ratio: 640 / 360; overflow: hidden; border: none;"
                                 width="640" height="360" loading="lazy"
                                 src="https://player.vimeo.com/video/1218243197?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
                                 allow="autoplay; encrypted-media" allowfullscreen></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--md-down"
                     id="l-place-sticky-3">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-place-sticky-3"
                        data-scroll-snap-point='[{ "viewport": 0, "element": 100 }]'>
                        <div class="background background--cover" data-plugin="parallax"
                           data-parallax-pattern="stickyUnderPreviousNextBackground">
                           <div class="background background--cover">
                              <iframe
                                 style="--ratio: 1.7777777777778; --aspect-ratio: 640 / 360; overflow: hidden; border: none;"
                                 width="640" height="360" loading="lazy"
                                 src="https://player.vimeo.com/video/1218239890?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
                                 allow="autoplay; encrypted-media" allowfullscreen></iframe>
                           </div>
                           <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                              draggable="false">
                              <source data-srcset="assets/images/media/landing/4.place/place-bg-1@xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                              <source data-srcset="assets/images/media/landing/4.place/place-bg-1@xxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                              <img data-src="assets/images/media/landing/4.place/place-bg-1@md.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 alt="" width="1440" height="900" draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" img-cover" draggable="false">
                                 <source srcset="assets/images/media/landing/4.place/place-bg-1@xxxl.webp"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source srcset="assets/images/media/landing/4.place/place-bg-1@xxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <img src="assets/images/media/landing/4.place/place-bg-1%40md.webp" alt="" width="1440"
                                    height="900" draggable="false">
                              </picture>
                           </noscript>
                        </div>
                     </div>
                  </div>
                  <div class="sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--md-down"
                     id="l-place-sticky-4">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-place-sticky-4"
                        data-scroll-snap-point='[{ "viewport": 0, "element": 100 }]'>
                        <div class="background background--cover" data-plugin="parallax"
                           data-parallax-pattern="stickyUnderPreviousNextBackground">
                           <div class="background background--cover">
                              <iframe
                                 style="--ratio: 1.7777777777778; --aspect-ratio: 640 / 360; overflow: hidden; border: none;"
                                 width="640" height="360" loading="lazy"
                                 src="https://player.vimeo.com/video/1218243197?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
                                 allow="autoplay; encrypted-media" allowfullscreen></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=" l-place-description ui-background is-hidden--lg-up">
                     <div class="l-place-description__image" data-plugin="parallax" data-parallax-clamp="true"
                        data-parallax-enable-mq="md-down" data-parallax-100-0='{"transform": "scale(1.2)"}'
                        data-parallax--100-0='{"transform": "scale(1.0)"}'>
                        <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                           draggable="false">
                           <img data-src="assets/images/media/landing/4.place/place-bg-xs.webp"
                              src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%221040%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%201040%22%3E%3C/svg%3E"
                              alt="" width="720" height="1040" draggable="false">
                        </picture>
                        <noscript>
                           <picture class=" img-cover" draggable="false">
                              <img src="assets/images/media/landing/4.place/place-bg-xs.webp" alt="" width="720"
                                 height="1040" draggable="false">
                           </picture>
                        </noscript>
                     </div>
                     <h3 class="l-place-description__title leading-trim h3 px-layout pt-0.5 pb-3">
                        We are helping people find the right property with confidence. Our growing presence across 100+ prime locations reflects our commitment to making real estate simple, transparent, and accessible for everyone. With trusted guidance and a wide range of opportunities, we make every property journey easier and more rewarding.
                     </h3>
                     <div class="l-place-description__gradient"></div>
                  </div>
                  <div class="sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--lg-up"
                     id="l-place-sticky-mobile-1">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-place-sticky-mobile-1">
                        <div class="l-place-video">
                           <div class="l-place-video__caption pl-layout">
                              <div class="l-place-video__caption-item col col--xs-3 pr-1.5">
                                 <div class="">
                                    <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                       draggable="false">
                                       <source
                                          data-srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/4.place/place-caption-1%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="440" height="427">
                                       <source
                                          data-srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/4.place/place-caption-1%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="440" height="427">
                                       <source
                                          data-srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/4.place/place-caption-1%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="440" height="427">
                                       <img
                                          data-src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/4.place/place-caption-1%40xxxl.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          alt="" width="440" height="427" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-full" draggable="false">
                                          <source
                                             srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/4.place/place-caption-1%40xxxl.webp"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="440"
                                             height="427">
                                          <source
                                             srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/4.place/place-caption-1%40xxxl.webp"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="440"
                                             height="427">
                                          <source
                                             srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/4.place/place-caption-1%40xxxl.webp"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="440" height="427">
                                          <img
                                             src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/4.place/place-caption-1%40xxxl.webp"
                                             alt="" width="440" height="427" draggable="false">
                                       </picture>
                                    </noscript>
                                 </div>
                                 <p class="l-place-video__caption-item__title h0 leading-trim">
                                    3
                                 </p>
                                 <p class=" text-c1 leading-trim mt-2">
                                    Years of Experience
                                 </p>
                              </div>
                           </div>
                           <div class="background background--cover">
                              <picture class="is-invisible--js is-hidden--no-js background background--cover img-cover"
                                 data-plugin="appear " draggable="false">
                                 <img data-src="assets/images/media/landing/4.place/place-bg-2-xs@xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22640%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20640%22%3E%3C/svg%3E"
                                    alt="" width="360" height="640" decoding="async" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" background background--cover img-cover" draggable="false">
                                    <img src="assets/images/media/landing/4.place/place-bg-2-xs%40xs.webp" alt=""
                                       width="360" height="640" decoding="async" draggable="false">
                                 </picture>
                              </noscript>
                              <div class="dim dim--full"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--lg-up"
                     id="l-place-sticky-mobile-2">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-place-sticky-mobile-2">
                        <div class="l-place-video">
                           <div class="l-place-video__caption pl-layout">
                              <div class="l-place-video__caption-item col col--xs-3 pr-1.5">
                                 <div class="">
                                    <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                       draggable="false">
                                       <source
                                          data-srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/4.place/place-caption-3%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="440" height="427">
                                       <source
                                          data-srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/4.place/place-caption-3%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="440" height="427">
                                       <source
                                          data-srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/4.place/place-caption-3%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="440" height="427">
                                       <img
                                          data-src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/4.place/place-caption-3%40xxxl.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          alt="" width="440" height="427" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-full" draggable="false">
                                          <source
                                             srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/4.place/place-caption-3%40xxxl.webp"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="440"
                                             height="427">
                                          <source
                                             srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/4.place/place-caption-3%40xxxl.webp"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="440"
                                             height="427">
                                          <source
                                             srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/4.place/place-caption-3%40xxxl.webp"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="440" height="427">
                                          <img
                                             src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/4.place/place-caption-3%40xxxl.webp"
                                             alt="" width="440" height="427" draggable="false">
                                       </picture>
                                    </noscript>
                                 </div>
                                 <p class="l-place-video__caption-item__title h0 leading-trim">
                                    9
                                 </p>
                                 <p class=" text-c1 leading-trim mt-2">
                                    Completed Developments
                                 </p>
                              </div>
                           </div>
                           <div class="background background--cover">
                              <picture class="is-invisible--js is-hidden--no-js background background--cover img-cover"
                                 data-plugin="appear " draggable="false">
                                 <img data-src="assets/images/media/landing/4.place/place-bg-3-xs@xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22640%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20640%22%3E%3C/svg%3E"
                                    alt="" width="360" height="640" decoding="async" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" background background--cover img-cover" draggable="false">
                                    <img src="assets/images/media/landing/4.place/place-bg-3-xs%40xs.webp" alt=""
                                       width="360" height="640" decoding="async" draggable="false">
                                 </picture>
                              </noscript>
                              <div class="dim dim--full"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--lg-up"
                     id="l-place-sticky-mobile-3">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-place-sticky-mobile-3">
                        <div class="l-place-video">
                           <div class="l-place-video__caption pl-layout">
                              <div class="l-place-video__caption-item col col--xs-3 pr-1.5">
                                 <div class="">
                                    <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                       draggable="false">
                                       <source
                                          data-srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/4.place/place-caption-2%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="440" height="427">
                                       <source
                                          data-srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/4.place/place-caption-2%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="440" height="427">
                                       <source
                                          data-srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/4.place/place-caption-2%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="440" height="427">
                                       <img
                                          data-src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/4.place/place-caption-2%40xxxl.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22440%22%20height=%22427%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20440%20427%22%3E%3C/svg%3E"
                                          alt="" width="440" height="427" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-full" draggable="false">
                                          <source
                                             srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/4.place/place-caption-2%40xxxl.webp"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="440"
                                             height="427">
                                          <source
                                             srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/4.place/place-caption-2%40xxxl.webp"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="440"
                                             height="427">
                                          <source
                                             srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/4.place/place-caption-2%40xxxl.webp"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="440" height="427">
                                          <img
                                             src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/4.place/place-caption-2%40xxxl.webp"
                                             alt="" width="440" height="427" draggable="false">
                                       </picture>
                                    </noscript>
                                 </div>
                                 <p class="l-place-video__caption-item__title h0 leading-trim">
                                    16
                                 </p>
                                 <p class=" text-c1 leading-trim mt-2">
                                    Happy Customers
                                 </p>
                              </div>
                           </div>
                           <div class="background background--cover">
                              <picture class="is-invisible--js is-hidden--no-js background background--cover img-cover"
                                 data-plugin="appear " draggable="false">
                                 <img data-src="assets/images/media/landing/4.place/place-bg-1-xs@xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22640%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20640%22%3E%3C/svg%3E"
                                    alt="" width="360" height="640" decoding="async" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" background background--cover img-cover" draggable="false">
                                    <img src="assets/images/media/landing/4.place/place-bg-1-xs%40xs.webp" alt=""
                                       width="360" height="640" decoding="async" draggable="false">
                                 </picture>
                              </noscript>
                              <div class="dim dim--full"></div>
                           </div>
                        </div>
                     </div>
                  </div>
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