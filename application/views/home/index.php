<!DOCTYPE html>
<html dir="ltr" lang="en" class="has-hover no-js not-ready">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <title>BST Developers | Leading Real Estate Investment and Development Solutions</title>
   <link rel="preconnect" href="https://storage.googleapis.com/" crossorigin>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700"
      rel="stylesheet">
   <style>
      .js.not-ready,
      .js.not-ready * {
         transition: none !important;
      }
   </style>
   <link rel="stylesheet" href="assets/stylesheets/jsSlider.css" />
   <link rel="stylesheet" href="assets/stylesheets/theme.css">
   <link rel="stylesheet" href="assets/stylesheets/landing.css" />
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
   <a href="#top" class="sr-only sr-only--focusable">Skip to main content</a>
   <div class="preloader js-preloader is-hidden" aria-hidden="true" data-plugin="preloader" data-preloader-visible="false">
      <div class="preloader__content ui-dark ui-background">
         <div class="preloader__content ui-dark ui-background">
            <div class="background background--cover preloader__gradient-animation">
               <div></div>
               <div></div>
               <div></div>
               <div></div>
            </div>
         </div>
      </div>
   </div>
   <div class="preloader preloader--landing" data-plugin="preloaderLanding">
      <div class="preloader__content ui-dark ui-background">
         <div class="preloader__gradient">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
         </div>
         <div class="header__content px-layout" aria-hidden="true">
            <div class="header__left preloader__logo-mobile">
               <span class="preloader__logo-mobile__item  is-hidden--md-up">
                  <img class="icon icon-logo-mobile" width="82" height="30" src="assets/images/logoIcon.png" />
               </span>
               <span class="preloader__logo-mobile__item  is-hidden--md-up">
                  <img class="icon icon-logo-mobile" width="82" height="30" src="assets/images/logoText.png" />
               </span>
            </div>
            <div class="header__center is-hidden--sm-down ">
               <div class="header__logo preloader__logo">
                  <span class="header__logo__inner preloader__logo__inner">
                     <span class="header__logo__left preloader__logo__left">
                        <img class="icon icon-logo-left" src="assets/images/logoIcon.png" />
                     </span>
                     <span class="header__logo__right preloader__logo__right">
                        <img class="icon icon-logo-right" width="29" height="55" src="assets/images/logoText.png" />
                     </span>
                  </span>
                  <span class="header__logo__inner preloader__logo__inner">
                     <span class="header__logo__left preloader__logo__left">
                        <img class="icon icon-logo-left" src="assets/images/logoIcon.png" />
                     </span>
                     <span class="header__logo__right preloader__logo__right">
                        <img class="icon icon-logo-right" src="assets/images/logoText.png" />
                     </span>
                  </span>
               </div>
            </div>
            <div class="header__right is-invisible">
               <a class="btn btn--text-small btn--link btn--clone is-hidden--md-up" href="flats.html"
                  data-plugin=" button" data-button-clone-content="true">
                  <span class="btn__content">
                     <span class="btn__text  ">
                     </span>
                  </span>
               </a>
               <a class="btn btn--text-small  btn--link btn--underline is-hidden--sm-down" tabindex="0" role="button">
                  <span class="btn__content">
                     <span class="btn__text  ">
                        <span class="btn__underline"></span>
                     </span>
                  </span>
               </a>
            </div>
         </div>
         <p class="preloader__content__cover h1"></p>
      </div>
   </div>
   <div class="page-content-wrapper ui-light-background" data-barba="container" data-barba-namespace="page" data-plugin="
         utmSave
         ">
      <div class="page-content-wrapper__inner js-page-content-wrapper">
         <?php $this->load->view('common/header'); ?>
        
         <div class="page-content js-page-content">
            <main id="top">
               <section class=" section ui-dark ui-background" data-scroll-section>
                  <div class="l-gallery-container ui-dark ui-background sticky sticky--full-height sticky--under-next"
                     id="l-gallery-sticky" data-plugin="reveal" data-reveal-enable-mq="null">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-gallery-sticky" data-reveal="gallery">
                        <?php $this->load->view('home/preloader'); ?>
                        <?php $this->load->view('home/hero_slider'); ?>
                     </div>
                  </div>
                  <div
                     class="sticky sticky--full-height sticky--under-previous sticky--under-next l-intro ui-background is-hidden--md-down"
                     id="about" data-plugin="reveal" data-themed-class="ui-dark">
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#about">
                        <div class="l-intro__opening pt-2.5" data-plugin="parallax" data-parallax-enable-mq="md-up"
                           data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                           data-parallax--100-0='{"opacity": "1", "transform": "translateY(0%)"}'
                           data-parallax--150-0='{"opacity": "0", "transform": "translateY(-50%)"}'>
                           <div class="col col--md-7 mb-1 ml-layout">
                              <p class=" h1 leading-trim text-color-primary" data-reveal="title">
                                 A Dream That Became a Vision
                              </p>
                           </div>
                           <div class="col col--md-7 ml-layout">
                              <p class="l-intro__opening-subtitle leading-trim text-color-primary" data-reveal="text">
                                 BST Developers India Pvt. Ltd. was born from a vision—to redefine the future of Indian
                                 real estate by creating developments that combine world-class planning, sustainable
                                 infrastructure, and lasting value.
                                 <br /><br />
                                 Founded by Mr. Yoginder Tanwar, BST was established with a singular purpose: to make
                                 premium lifestyles accessible to India's growing middle class without compromising on
                                 quality, trust, or affordability.
                                 <br /><br />
                                 We believe real estate is more than buying property—it's about building communities,
                                 creating opportunities, and enabling families to grow. Every BST development is
                                 thoughtfully planned with modern amenities, strong connectivity, green spaces, and
                                 future-ready infrastructure that delivers both lifestyle and investment potential.
                                 <br /><br />
                                 Driven by innovation, transparency, and customer-first values, BST continues to build
                                 projects that inspire confidence and contribute towards India's evolving urban
                                 landscape.
                              </p>
                           </div>
                        </div>
                        <div class="l-intro__gradient flicker-fix"></div>
                        <div class="l-intro__image l-intro__image--first" data-plugin="parallax"
                           data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                           data-parallax-measure-selector=".sticky"
                           data-parallax--130-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'
                           data-parallax--200-0='{"clip-path": "polygon(50% 0%, 100% 0%, 100% 100%, 50% 100%)"}'
                           data-scroll-snap-point='[   { "viewport": 0, "element": 91}]'>
                           <div data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax-0-0='{"transform": "translateY(0%)"}'
                              data-parallax--450-0='{"transform": "translateY(-40%)"}'>
                              <div class="l-intro__image--first__background">
                                 <img class=" is-invisible--js is-hidden--no-js" alt="" draggable="false" width="3600"
                                    height="2725" data-plugin="appear "
                                    data-src="assets/images/media/landing/1.intro/intro-image@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%223600%22%20height=%222725%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%203600%202725%22%3E%3C/svg%3E">
                                 <noscript>
                                    <img class=" " alt="" draggable="false" width="3600" height="2725"
                                       src="assets/images/media/landing/1.intro/intro-image%40md.webp">
                                 </noscript>
                              </div>
                           </div>
                        </div>
                        <div class="l-intro__image l-intro__image--second col col--md-6 mr-0 ml-auto"
                           data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                           data-parallax-measure-selector=".sticky"
                           data-parallax--200-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                           data-parallax--230-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'
                           data-scroll-snap-point='[    { "viewport": 0, "element": 230 }]'>
                           <picture class="is-invisible--js is-hidden--no-js img-full parallax-image-move"
                              data-plugin="appear " draggable="false">
                              <source data-srcset="assets/images/media/landing/1.intro/opening-1@xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                              <source data-srcset="assets/images/media/landing/1.intro/opening-1@xxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1200px) and (min-height: 500px)" width="720" height="900">
                              <source data-srcset="assets/images/media/landing/1.intro/opening-1@md.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                 width="720" height="900">
                              <img data-src="assets/images/media/landing/1.intro/opening-1@xs.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 alt="" width="720" height="900" data-plugin="parallax" data-parallax-clamp="true"
                                 data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                 data-parallax--400-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                 draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" img-full parallax-image-move" draggable="false">
                                 <source srcset="assets/images/media/landing/1.intro/opening-1@xxxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                 <source srcset="assets/images/media/landing/1.intro/opening-1@xxl.webp"
                                    media="(min-width: 1200px) and (min-height: 500px)" width="720" height="900">
                                 <source srcset="assets/images/media/landing/1.intro/opening-1@md.webp"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="720" height="900">
                                 <img src="assets/images/media/landing/1.intro/opening-1%40xs.webp" alt="" width="720"
                                    height="900" data-plugin="parallax" data-parallax-clamp="true"
                                    data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                    data-parallax--400-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                    draggable="false">
                              </picture>
                           </noscript>
                        </div>
                        <div class="dim dim--top"></div>
                        <div class="l-intro__image l-intro__image--second col col--md-6 mr-0 ml-auto"
                           data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                           data-parallax-measure-selector=".sticky"
                           data-parallax--230-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                           data-parallax--330-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'
                           data-scroll-snap-point='[    { "viewport": 0, "element": 330 }]'>
                           <picture class="is-invisible--js is-hidden--no-js img-full parallax-image-move"
                              data-plugin="appear " draggable="false">
                              <source data-srcset="assets/images/media/landing/1.intro/opening-3@xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                              <source data-srcset="assets/images/media/landing/1.intro/opening-3@xxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1200px) and (min-height: 500px)" width="720" height="900">
                              <source data-srcset="assets/images/media/landing/1.intro/opening-3@md.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                 width="720" height="900">
                              <img data-src="assets/images/media/landing/1.intro/opening-3@xs.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 alt="" width="720" height="900" data-plugin="parallax" data-parallax-clamp="true"
                                 data-parallax--300-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                 data-parallax--700-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                 draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" img-full parallax-image-move" draggable="false">
                                 <source srcset="assets/images/media/landing/1.intro/opening-3@xxxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                 <source srcset="assets/images/media/landing/1.intro/opening-3@xxl.webp"
                                    media="(min-width: 1200px) and (min-height: 500px)" width="720" height="900">
                                 <source srcset="assets/images/media/landing/1.intro/opening-3@md.webp"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="720" height="900">
                                 <img src="assets/images/media/landing/1.intro/opening-3%40xs.webp" alt="" width="720"
                                    height="900" data-plugin="parallax" data-parallax-clamp="true"
                                    data-parallax--300-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                    data-parallax--700-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                    draggable="false">
                              </picture>
                           </noscript>
                        </div>
                        <div class="dim dim--top"></div>
                        <div class="l-intro__image l-intro__image--second col col--md-6 mr-0 ml-auto"
                           data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                           data-parallax-measure-selector=".sticky"
                           data-parallax--230-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                           data-parallax--330-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'
                           data-scroll-snap-point='[    { "viewport": 0, "element": 330 }]'>
                           <picture class="is-invisible--js is-hidden--no-js img-full parallax-image-move"
                              data-plugin="appear " draggable="false">
                              <source data-srcset="assets/images/media/landing/1.intro/opening-3@xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                              <source data-srcset="assets/images/media/landing/1.intro/opening-3@xxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1200px) and (min-height: 500px)" width="720" height="900">
                              <source data-srcset="assets/images/media/landing/1.intro/opening-3@md.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                 width="720" height="900">
                              <img data-src="assets/images/media/landing/1.intro/opening-3@xs.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 alt="" width="720" height="900" data-plugin="parallax" data-parallax-clamp="true"
                                 data-parallax--300-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                 data-parallax--700-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                 draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" img-full parallax-image-move" draggable="false">
                                 <source srcset="assets/images/media/landing/1.intro/opening-3@xxxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                 <source srcset="assets/images/media/landing/1.intro/opening-3@xxl.webp"
                                    media="(min-width: 1200px) and (min-height: 500px)" width="720" height="900">
                                 <source srcset="assets/images/media/landing/1.intro/opening-3@md.webp"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="720" height="900">
                                 <img src="assets/images/media/landing/1.intro/opening-3%40xs.webp" alt="" width="720"
                                    height="900" data-plugin="parallax" data-parallax-clamp="true"
                                    data-parallax--300-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                    data-parallax--700-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                    draggable="false">
                              </picture>
                           </noscript>
                        </div>
                        <div class="dim dim--top"></div>
                     </div>
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height l-intro__content ui-dark"
                        data-plugin="parallax reveal" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                        data-parallax--230-0='{"transform": "translateY(0%)"}'
                        data-parallax--500-0='{"transform": "translateY(110%)"}'
                        data-parallax-measure-selector=".sticky">
                        <div class="l-intro__content-title col col--md-6 pl-1" data-reveal="title">
                           <h2 class="h3 leading-trim pt-0.5">
                              “Together, we are building communities that stand as a testament to quality, integrity,
                              and the future of India."
                           </h2>
                        </div>
                        <!-- <div class="l-intro__content-image ml-layout">
                           <img class="is-invisible--js is-hidden--no-js img-full parallax-image-move"
                              data-reveal="image-parallax-in" data-reveal-delay="1000" data-plugin="appear "
                              draggable="false" src="assets/images/VisionMissionbst.png" alt="" />
                           <noscript>
                              <img class=" img-full parallax-image-move" data-reveal="image-parallax-in"
                                 data-reveal-delay="1000" draggable="false" src="assets/images/VisionMissionbst.png" />
                              <source srcset="assets/images/media/landing/1.intro/opening-2@xxxl.webp"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="480" height="576">
                              <source srcset="assets/images/media/landing/1.intro/opening-2@xxl.webp"
                                 media="(min-width: 1200px) and (min-height: 500px)" width="480" height="576">
                              <source srcset="assets/images/media/landing/1.intro/opening-2@md.webp"
                                 media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                 width="480" height="576">
                              <img src="assets/images/VisionMissionbst.png" alt="" width="480" height="576"
                                 draggable="false">
                              </picture>
                           </noscript>
                        </div>
                        <div class="l-intro__content-text ml-layout" data-reveal="text">
                           <h2 class="h2 leading-trim">Our Mission</h2>
                           <p class="leading-trim">
                              Enclave of peace and quiet, your personal happy place, where deep relaxation helps
                              you connect to your thoughts and feelings. Here, you will unveil hidden possibilities
                              that the future holds just for you.
                           </p>
                        </div> -->
                     </div>
                     <div class="l-intro__anchor" id="l-intro"></div>
                  </div>
                  <div class="l-intro is-hidden--lg-up sticky sticky--full-height" id="about-mobile">
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#about-mobile">
                        <div class="l-intro__image l-intro__image--first" id="l-intro-mobile">
                           <div class="l-intro__image--first__background">
                              <img class=" is-invisible--js is-hidden--no-js" alt="" draggable="false" width="720"
                                 height="1280" data-plugin="appear "
                                 data-src="assets/images/media/landing/1.intro/intro-image-xs.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%221280%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%201280%22%3E%3C/svg%3E">
                              <noscript>
                                 <img class=" " alt="" draggable="false" width="720" height="1280"
                                    src="assets/images/media/landing/1.intro/intro-image-xs.webp">
                              </noscript>
                           </div>
                        </div>
                        <div class="l-intro__opening pt-2.5">
                           <div class="col col--xs-3 mb-1 pl-layout">
                              <p class=" h1 leading-trim text-color-primary">
                                 Premium Living<br>
                                 with Unrivaled Views
                              </p>
                           </div>
                           <div class="col col--xs-2 pl-layout">
                              <p class="l-intro__opening-subtitle text-c1 leading-trim text-color-primary">
                                 Apartments, terraced townhouses, and duplex penthouses in a quiet, green
                                 neighborhood.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="l-intro__content is-hidden--lg-up pb-2.5 pt-2 ui-dark ui-background">
                     <div class="l-intro__content-title col col--xs-3 col--md-4 pl-layout">
                        <h2 class="h2 leading-trim">
                           Open the doors of BST Developers and step into your true self
                        </h2>
                     </div>
                     <div class="l-intro__content-image ml-layout mt-1">
                        <img class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear"
                           src="assets/images/VisionMissionbst.png" alt="" width="480" height="576" draggable="false">
                        </picture>
                        <noscript>
                           <img class="img-full" draggable="false" src="assets/images/VisionMissionbst.png" alt=""
                              draggable="false">
                        </noscript>
                     </div>
                     <div class="l-intro__gradient"></div>
                     <div class="l-intro__content-text ml-layout">
                        <p class="leading-trim">
                           Enclave of peace and quiet, your personal happy place, where deep relaxation helps you
                           connect to your thoughts and feelings. Here, you will unveil hidden possibilities that
                           the future holds just for you.
                        </p>
                     </div>
                     <div class="mx-layout p-relative mt-2" data-plugin="mobileScrollable">
                        <ul class="mobile-scrollable col mx-auto">
                           <li class="mobile-scrollable__item carousel__list__item--gradient">
                              <img class="img-cover is-invisible--js is-hidden--no-js" alt="" draggable="false"
                                 width="640" height="760" data-plugin="appear "
                                 data-src="assets/images/media/landing/1.intro/opening-1@xs.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22760%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20760%22%3E%3C/svg%3E">
                              <noscript>
                                 <img class="img-cover " alt="" draggable="false" width="640" height="760"
                                    src="assets/images/media/landing/1.intro/opening-1%40xs.webp">
                              </noscript>
                           </li>
                           <li class="mobile-scrollable__item carousel__list__item--gradient">
                              <img class="img-cover is-invisible--js is-hidden--no-js" alt="" draggable="false"
                                 width="640" height="760" data-plugin="appear "
                                 data-src="assets/images/media/landing/1.intro/opening-3@xs.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22760%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20760%22%3E%3C/svg%3E">
                              <noscript>
                                 <img class="img-cover " alt="" draggable="false" width="640" height="760"
                                    src="assets/images/media/landing/1.intro/opening-3%40xs.webp">
                              </noscript>
                           </li>
                        </ul>
                        <div class="l-intro__thumb carousel__thumb group group--nowrap px-layout">
                           <a role="button"
                              class="col col--xs-2 carousel__thumb__item js-mobile-scrollable-thumbnail is-active"></a>
                           <a role="button"
                              class="col col--xs-2 carousel__thumb__item js-mobile-scrollable-thumbnail "></a>
                        </div>
                     </div>
                  </div>
                  <div
                     class="l-wellness sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--md-down"
                     id="wellness" data-plugin="reveal">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#wellness">
                        <div class="l-wellness__webgl ui-background ui-dark"
                           data-scroll-snap-point='[    { "viewport": 0, "element": 100 }]'>
                           <div class="l-wellness__webgl-inner">
                              <div data-plugin="webglWellness parallax" data-parallax-pattern="webglWellness">
                                 <canvas class="js-wellness-canvas is-active"></canvas>
                                 <div class="l-wellness__webgl-circle">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                 </div>
                              </div>
                              <div class="background background--bottom background--cover">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness-webgl-gradient@xxxl.avif"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="450">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness-webgl-gradient@xxl.avif"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="450">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness-webgl-gradient@md.avif"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="450">
                                    <img
                                       data-src="assets/images/media/landing/2.wellness/wellness-webgl-gradient@xs.avif"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                       alt="" width="720" height="450" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <source
                                          srcset="assets/images/media/landing/2.wellness/wellness-webgl-gradient@xxxl.avif"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="450">
                                       <source
                                          srcset="assets/images/media/landing/2.wellness/wellness-webgl-gradient@xxl.avif"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="450">
                                       <source
                                          srcset="assets/images/media/landing/2.wellness/wellness-webgl-gradient@md.avif"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="450">
                                       <img
                                          src="assets/images/media/landing/2.wellness/wellness-webgl-gradient%40xs.avif"
                                          alt="" width="720" height="450" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                           </div>
                           <div class="l-wellness__webgl-caption pt-3">
                              <h1 class="h1 col col--md-7 offset--md-1 mb-1 leading-trim" data-reveal="text">
                                 A Message from Our CMD
                                 </h1>
                                 <p class="h4 col col--md-7 offset--md-1 mb-1 text-justify" data-reveal="text">
                                    "I don't believe in doing business solely for profit. True success lies in creating developments that contribute to the growth of our nation while improving the lives of people.
                                    India is witnessing an extraordinary era of progress, and with that comes a new generation of aspirational citizens seeking better lifestyles and brighter futures.
                                    At BST Developers, we have built a passionate team committed to creating not just homes, but opportunities for long-term wealth creation and meaningful living.
                                    We will continue to innovate, embrace the best technologies, and pursue excellence in everything we undertake. Above all, our greatest achievement will always be earning the trust of our customers, employees, partners, and stakeholders.
                                    <!-- Together, we are building communities that stand as a testament to quality, integrity, and the future of India." -->
                                 </p>
                                 <div class="col col--md-7 offset--md-1 text-right">
                                    <p class="h4 leading-trim" data-reveal="text">
                                       — Mr. Yoginder Tanwar<br />
                                       Chairman & Managing Director<br />
                                       BST Developers India Pvt. Ltd.
                                    </p>
                                 </div>
                           </div>
                        </div>
                        <div class="l-wellness__slider row"
                           data-scroll-snap-point='[    { "viewport": 0, "element": 220 }]'>
                           <div class="col col--md-6" data-plugin="parallax" data-parallax-enable-mq="md-up"
                              data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                              data-parallax--120-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                              data-parallax--220-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>
                              <div class="l-wellness__slider__images" data-plugin="contentAnimation"
                                 data-content-animation-animations='{
                                    "changeShow": {"name": "imageClipIn", "duration": "slow"}
                                    }' data-content-animation-plugins="controller height"
                                 data-content-animation-controller-selector=":root .js-wellness-controller-selector">
                                 <div class="content-animation">
                                    <div data-content-animation-item="1" class="" aria-hidden="false">
                                       <picture class="is-invisible--js is-hidden--no-js img-cover"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_1_xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_1_xxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_1_md.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="720" height="900">
                                          <img
                                             data-src="assets/images/media/landing/2.wellness/wellness_slider_1_xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             alt="" width="720" height="900" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-cover" draggable="false">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_1_xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                                height="900">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_1_xxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                                height="900">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_1_md.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="720" height="900">
                                             <img src="assets/images/media/landing/2.wellness/wellness_slider_1_xs.webp"
                                                alt="" width="720" height="900" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div data-content-animation-item="2" class="is-hidden" aria-hidden="true">
                                       <picture class="is-invisible--js is-hidden--no-js img-cover"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_2_xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_2_xxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_2_md.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="720" height="900">
                                          <img
                                             data-src="assets/images/media/landing/2.wellness/wellness_slider_2_xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             alt="" width="720" height="900" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-cover" draggable="false">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_2_xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                                height="900">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_2_xxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                                height="900">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_2_md.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="720" height="900">
                                             <img src="assets/images/media/landing/2.wellness/wellness_slider_2_xs.webp"
                                                alt="" width="720" height="900" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div data-content-animation-item="3" class="is-hidden" aria-hidden="true">
                                       <picture class="is-invisible--js is-hidden--no-js img-cover"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_3_xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_3_xxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_3_md.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="720" height="900">
                                          <img
                                             data-src="assets/images/media/landing/2.wellness/wellness_slider_3_xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             alt="" width="720" height="900" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-cover" draggable="false">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_3_xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                                height="900">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_3_xxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                                height="900">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_3_md.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="720" height="900">
                                             <img src="assets/images/media/landing/2.wellness/wellness_slider_3_xs.webp"
                                                alt="" width="720" height="900" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <!-- <div data-content-animation-item="4" class="is-hidden" aria-hidden="true">
                                       <picture class="is-invisible--js is-hidden--no-js img-cover"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_4_xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_4_xxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             data-srcset="assets/images/media/landing/2.wellness/wellness_slider_4_md.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="720" height="900">
                                          <img
                                             data-src="assets/images/media/landing/2.wellness/wellness_slider_4_xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                             alt="" width="720" height="900" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-cover" draggable="false">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_4_xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                                height="900">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_4_xxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                                height="900">
                                             <source
                                                srcset="assets/images/media/landing/2.wellness/wellness_slider_4_md.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="720" height="900">
                                             <img
                                                src="assets/images/media/landing/2.wellness/wellness_slider_4_xs.webp"
                                                alt="" width="720" height="900" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div> -->
                                 </div>
                              </div>
                           </div>
                           <div class="l-wellness__slider__caption col col--md-6 ui-dark pt-2" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax--120-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)"}'
                              data-parallax--220-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>
                              <div data-plugin="contentAnimation" data-content-animation-animations='{
                                    "changeShow": {"name": "text"},
                                    "changeHide": {"name": "fadeOut", "duration": "fast"}
                                    }' data-content-animation-plugins="controller events height counter"
                                 class="js-wellness-controller-selector" data-content-animation-link-event="click">
                                 <h3 class="h3 mt-2 pl-1">THE BST PHILOSOPHY</h3>
                                 <div
                                    class="l-wellness__slider__caption-titles col col--md-6 ml-auto mr-0 pt-1 pr-1 text-right"
                                    data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                    data-parallax--20-0='{"transform": "translateY(30%)"}'
                                    data-parallax--420-0='{"transform": "translateY(-30%)"}'>
                                    <a class="js-content-animation-link is-active" data-content-animation-id="1">
                                       <p class="h2 leading-trim">B</p>
                                    </a>
                                    <a class="js-content-animation-link " data-content-animation-id="2">
                                       <p class="h2 leading-trim">S</p>
                                    </a>
                                    <a class="js-content-animation-link " data-content-animation-id="3">
                                       <p class="h2 leading-trim">T</p>
                                    </a>
                                 </div>
                                 <div class="l-wellness__slider__caption-text content-animation col col--md-4"
                                    data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                    data-parallax--20-0='{"transform": "translateY(30%)"}'
                                    data-parallax--420-0='{"transform": "translateY(-30%)"}'>
                                    <div data-content-animation-item="1" class="" aria-hidden="false">
                                       <h3 class="h3 leading-trim mb-0.5">Best of Everything</h3>
                                       <p class="text-t1 leading-trim">
                                          We strive to deliver excellence in every aspect—from strategic locations and
                                          premium planning to superior infrastructure, quality construction, and
                                          customer experience. Every BST project reflects our commitment to offering
                                          nothing but the best.
                                       </p>
                                    </div>
                                    <div data-content-animation-item="2" class="is-hidden" aria-hidden="true">
                                       <h3 class="h3 leading-trim mb-0.5">Sustainable Future</h3>
                                       <p class="text-t1 leading-trim">
                                          Our developments are designed with tomorrow in mind. Green landscapes, open
                                          spaces, efficient planning, and environmentally responsible practices help us
                                          create communities that are healthier, smarter, and built to last for future
                                          generations.
                                       </p>
                                    </div>
                                    <div data-content-animation-item="3" class="is-hidden" aria-hidden="true">
                                       <h3 class="h3 leading-trim mb-0.5">Trust & Technology</h3>
                                       <p class="text-t1 leading-trim">
                                          Trust forms the foundation of every relationship we build. By integrating
                                          transparency, ethical business practices, and modern technology into every
                                          stage of development, we ensure confidence, reliability, and seamless
                                          experiences for our customers.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="l-wellness__slider-gradient flicker-fix">
                                 <div></div>
                                 <div></div>
                                 <div></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="l-wellness sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--lg-up ui-dark ui-background"
                     id="wellness-mobile">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#wellness-mobile">
                        <div class="l-wellness__webgl ui-background ui-dark">
                           <div class="l-wellness__webgl-inner">
                              <div class="background background--cover" data-plugin="parallax"
                                 data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                                 data-parallax-enable-mq="md-down" data-parallax-0-0='{"transform": "scale(1.2)"}'
                                 data-parallax--200-0='{"transform": "scale(1.0)"}'>
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <img data-src="assets/images/media/landing/2.wellness/wellness-bg-xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                       alt="" width="720" height="450" decoding="async" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <img src="assets/images/media/landing/2.wellness/wellness-bg-xs.webp" alt=""
                                          width="720" height="450" decoding="async" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                           </div>
                           <div class="l-wellness__webgl-caption px-layout pt-3">
                              <p class="col col--md-6 text-t1 leading-trim">
                                 BST Developers brings wellness right into your home. With a thoughtfully
                                 designed infrastructure for relaxation, it rejuvenates your body and mind,
                                 leaving you refreshed and perfectly balanced.
                              </p>
                              <div class="col l-wellness__webgl-title text-right">
                                 <p class="g1 leading-trim">
                                    Wellness
                                 </p>
                                 <p class="text-c1 leading-trim mt-1">
                                    Essence of Self-Care
                                 </p>
                              </div>
                           </div>
                           <div class="l-wellness__webgl-gradient background background--cover">
                              <div></div>
                              <div></div>
                              <div></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="l-wellness__slider-container is-hidden--lg-up ui-dark ui-background">
                     <div class="l-wellness__slider row pt-3">
                        <div class="l-wellness__slider-gradient">
                           <div></div>
                           <div></div>
                           <div></div>
                        </div>
                        <div
                           class="l-wellness__slider__images p-relative mx-layout js-wellness-content-animation-controller"
                           data-plugin="mobileScrollable">
                           <ul class="mobile-scrollable col col--md-auto mx-auto">
                              <li class="mobile-scrollable__item carousel__list__item--gradient-large ">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness_slider_1_xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness_slider_1_xxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness_slider_1_md.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="900">
                                    <img data-src="assets/images/media/landing/2.wellness/wellness_slider_1_xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       alt="" width="720" height="900" decoding="async" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <source
                                          srcset="assets/images/media/landing/2.wellness/wellness_slider_1_xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          srcset="assets/images/media/landing/2.wellness/wellness_slider_1_xxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                       <source srcset="assets/images/media/landing/2.wellness/wellness_slider_1_md.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="900">
                                       <img src="assets/images/media/landing/2.wellness/wellness_slider_1_xs.webp"
                                          alt="" width="720" height="900" decoding="async" draggable="false">
                                    </picture>
                                 </noscript>
                              </li>
                              <li class="mobile-scrollable__item carousel__list__item--gradient-large ">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness_slider_2_xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness_slider_2_xxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness_slider_2_md.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="900">
                                    <img data-src="assets/images/media/landing/2.wellness/wellness_slider_2_xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       alt="" width="720" height="900" decoding="async" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <source
                                          srcset="assets/images/media/landing/2.wellness/wellness_slider_2_xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          srcset="assets/images/media/landing/2.wellness/wellness_slider_2_xxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                       <source srcset="assets/images/media/landing/2.wellness/wellness_slider_2_md.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="900">
                                       <img src="assets/images/media/landing/2.wellness/wellness_slider_2_xs.webp"
                                          alt="" width="720" height="900" decoding="async" draggable="false">
                                    </picture>
                                 </noscript>
                              </li>
                              <li class="mobile-scrollable__item carousel__list__item--gradient-large ">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness_slider_3_xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness_slider_3_xxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="assets/images/media/landing/2.wellness/wellness_slider_3_md.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="900">
                                    <img data-src="assets/images/media/landing/2.wellness/wellness_slider_3_xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       alt="" width="720" height="900" decoding="async" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <source
                                          srcset="assets/images/media/landing/2.wellness/wellness_slider_3_xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          srcset="assets/images/media/landing/2.wellness/wellness_slider_3_xxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                       <source srcset="assets/images/media/landing/2.wellness/wellness_slider_3_md.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="900">
                                       <img src="assets/images/media/landing/2.wellness/wellness_slider_3_xs.webp"
                                          alt="" width="720" height="900" decoding="async" draggable="false">
                                    </picture>
                                 </noscript>
                              </li>
                           </ul>
                           <div class="carousel__thumb group group--nowrap px-layout">
                              <a role="button"
                                 class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail leading-trim is-active">
                                 <span class="carousel__thumb__item__text">B</span>
                              </a>
                              <a role="button"
                                 class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail leading-trim ">
                                 <span class="carousel__thumb__item__text">S</span>
                              </a>
                              <a role="button"
                                 class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail leading-trim ">
                                 <span class="carousel__thumb__item__text">T</span>
                              </a>
                           </div>
                        </div>
                        <div class="l-wellness__slider__caption col col--xs-4 col--md-12 ui-dark">
                           <div data-plugin="contentAnimation" data-content-animation-fixed-height="false"
                              data-content-animation-animations='{
                                 "changeShow": {"name": "fadeIn"},
                                 "changeHide": {"name": "fadeOut", "duration": "fast"}
                                 }' data-content-animation-plugins="controller events height counter"
                              data-content-animation-controller-selector=":root .js-wellness-content-animation-controller">
                              <div class="l-wellness__slider__caption-text content-animation col col--md-6">
                                 <div data-content-animation-item="1" class="" aria-hidden="false">
                                    <div class="mb-1">
                                       <p class="h3 leading-trim">
                                          Best of Everything
                                       </p>
                                    </div>
                                    <p class="text-t1 leading-trim">
                                       We strive to deliver excellence in every aspect—from strategic locations and
                                       premium planning to superior infrastructure, quality construction, and
                                       customer experience. Every BST project reflects our commitment to offering
                                       nothing but the best.
                                    </p>
                                 </div>
                                 <div data-content-animation-item="2" class="is-hidden" aria-hidden="true">
                                    <div class="mb-1">
                                       <p class="h3 leading-trim">
                                          Sustainable Future
                                       </p>
                                    </div>
                                    <p class="text-t1 leading-trim">
                                       Our developments are designed with tomorrow in mind. Green landscapes, open
                                       spaces, efficient planning, and environmentally responsible practices help us
                                       create communities that are healthier, smarter, and built to last for future
                                       generations.
                                    </p>
                                 </div>
                                 <div data-content-animation-item="3" class="is-hidden" aria-hidden="true">
                                    <div class="mb-1">
                                       <p class="h3 leading-trim">
                                          Trust & Technology
                                       </p>
                                    </div>
                                    <p class="text-t1 leading-trim">
                                       Trust forms the foundation of every relationship we build. By integrating
                                       transparency, ethical business practices, and modern technology into every
                                       stage of development, we ensure confidence, reliability, and seamless
                                       experiences for our customers.
                                    </p>
                                 </div>
                                 <!-- <div data-content-animation-item="4" class="is-hidden" aria-hidden="true">
                                    <div class="mb-1">
                                       <p class="h3 leading-trim">
                                          Café
                                       </p>
                                    </div>
                                    <p class="text-t1 leading-trim">
                                       Do you sense the aroma of espresso adorned with creamy milk
                                       foam? Now you can experience your favorite flavors without leaving
                                       the house. Cozy up on the terrace of our
                                       wellness-caf&eacute; and relax to the sounds of ambient music.
                                    </p>
                                 </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="l-nature sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--md-down"
                     id="nature" data-plugin="reveal mouseAnimation" data-mouse-animation-use-css-variable="false"
                     data-mouse-animation-target-selector=".l-place-webgl__spiral picture"
                     data-mouse-animation-multiplier='{"unit": "%", "value": -5}'>
                     <div class="l-place-anchor" id="place"></div>
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#nature">
                        <div class="l-nature-bg" data-scroll-snap-point='[    { "viewport": 0, "element": 100 }]'>
                           <div class="l-nature-bg-item background" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax--220-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'
                              data-parallax--320-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)"}'>
                              <div class="background background--cover">
                                 <div data-plugin="webglNature parallax" data-parallax-pattern="webglNature">
                                    <canvas class="js-nature-canvas is-active"></canvas>
                                    <div class="l-wellness__webgl-circle">
                                       <span></span>
                                       <span></span>
                                       <span></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col col--md-12 l-nature-bg-caption pt-6:md pt-4:xxxl pl-layout"
                                 data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                 data-parallax-measure-selector=".sticky"
                                 data-parallax--0-0='{"opacity": "1", "transform": "translateY(20%)"}'
                                 data-parallax--100-0='{"opacity": "1", "transform": "translateY(0%)"}'
                                 data-parallax--150-0='{"opacity": "0", "transform": "translateY(-20%)"}'>
                                 <h1 class="h1 leading-trim" data-reveal="title">
                                    OUR PROJECTS
                                 </h1>
                                 <div class="mt-1">
                                    <p class="l-nature-bg-caption__subtitle text-c1 leading-trim" data-reveal="title"
                                       data-reveal-distance="100px">
                                       Creating Destinations That Inspire Living, Business & Growth
                                    </p>
                                 </div>
                                 <div class="l-nature-bg-caption__text mr-0 ml-auto col col--md-4 mt-3">
                                    <p class="text-t1 leading-trim" data-reveal="text">
                                       BST Developers is building a diverse portfolio of developments designed to meet
                                       the evolving aspirations of modern India. From premium residential communities to
                                       commercial destinations and future hospitality ventures, every project reflects
                                       our commitment to quality, innovation, and sustainable growth.
                                    </p>
                                 </div>
                              </div>
                              <div class="l-nature-bg-gradient flicker-fix"></div>
                           </div>
                           <div class="l-nature-bg-item background">
                              <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                 draggable="false">
                                 <source data-srcset="assets/images/media/landing/3.nature/nature-caption@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="450">
                                 <source data-srcset="assets/images/media/landing/3.nature/nature-caption@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="450">
                                 <source data-srcset="assets/images/media/landing/3.nature/nature-caption@md.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="720" height="450">
                                 <img data-src="assets/images/media/landing/3.nature/nature-caption-xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                    alt="" width="720" height="450" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-full" draggable="false">
                                    <source srcset="assets/images/media/landing/3.nature/nature-caption@xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="450">
                                    <source srcset="assets/images/media/landing/3.nature/nature-caption@xxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="450">
                                    <source srcset="assets/images/media/landing/3.nature/nature-caption@md.webp"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="450">
                                    <img src="assets/images/media/landing/3.nature/nature-caption-xs.webp" alt=""
                                       width="720" height="450" draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                           <div class="l-nature-bg-item background" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax--320-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)"}'
                              data-parallax--420-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>
                              <div class="l-nature-bg-item__gradient flicker-fix">
                                 <div data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                    data-parallax-measure-selector=".sticky"
                                    data-parallax--550-0='{"opacity": "0", "transform": "translate(-29vw, -42vw) scale(2)"}'
                                    data-parallax--700-0='{"opacity": "1", "transform": "translate(-47vw, 0vw) scale(1)"}'
                                    data-parallax--800-0='{"opacity": "1", "transform": "translate(0vw, 0vw) scale(1)"}'>
                                 </div>
                                 <div data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                    data-parallax-measure-selector=".sticky"
                                    data-parallax--550-0='{"opacity": "0", "transform": "translate(0vw, 0vw)"}'
                                    data-parallax--700-0='{"opacity": "1", "transform": "translate(0vw, 0vw)"}'
                                    data-parallax--800-0='{"opacity": "1", "transform": "translate(-4vw, -16vw)"}'>
                                 </div>
                              </div>
                              <div class="background background--cover" data-plugin="parallax"
                                 data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                 data-parallax-measure-selector=".sticky"
                                 data-parallax--620-0='{"transform": "scale(1.0)", "opacity": "0"}'
                                 data-parallax--700-0='{"transform": "scale(1.05)", "opacity": "1"}'
                                 data-parallax--920-0='{"transform": "scale(1.2)", "opacity": "1"}'>
                                 <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                    draggable="false">
                                    <source data-srcset="assets/images/media/landing/4.place/place-bg@xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="450">
                                    <source data-srcset="assets/images/media/landing/4.place/place-bg@xxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="450">
                                    <source data-srcset="assets/images/media/landing/4.place/place-bg@md.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="450">
                                    <img data-src="assets/images/media/landing/4.place/place-bg-xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                       alt="" width="720" height="450" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-full" draggable="false">
                                       <source srcset="assets/images/media/landing/4.place/place-bg@xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="450">
                                       <source srcset="assets/images/media/landing/4.place/place-bg@xxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="450">
                                       <source srcset="assets/images/media/landing/4.place/place-bg@md.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="450">
                                       <img src="assets/images/media/landing/4.place/place-bg-xs.webp" alt=""
                                          width="720" height="450" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div data-plugin="parallax" data-parallax-enable-mq="md-up"
                                 data-parallax-measure-selector=".sticky" data-parallax--520-0='{"opacity": "1"}'
                                 data-parallax--620-0='{"opacity": "1"}' data-parallax--650-0='{"opacity": "0"}'
                                 data-parallax--700-0='{"opacity": "0"}'>
                                 <div class="js-tree-canvas-container background" data-plugin="parallax webglTree"
                                    data-parallax-pattern="webglTree">
                                    <canvas class="js-tree-canvas is-active"></canvas>
                                    <div class="l-place-webgl__spiral-container background" data-plugin="parallax"
                                       data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                       data-parallax-measure-selector=".sticky"
                                       data-parallax--420-0='{"transform": "translate(-50%, 40%)"}'
                                       data-parallax--520-0='{"transform": "translate(-50%, 0%)"}'
                                       data-parallax--650-0='{"transform": "translate(-50%, -20%)"}'>
                                       <div class="l-place-webgl__spiral background">
                                          <picture class="is-invisible--js is-hidden--no-js " data-plugin="appear "
                                             draggable="false">
                                             <source data-srcset="assets/images/media/landing/4.place/t12@xxxl.webp"
                                                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%222334%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%202334%22%3E%3C/svg%3E"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="1440"
                                                height="2334">
                                             <source data-srcset="assets/images/media/landing/4.place/t12@xxl.webp"
                                                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%222334%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%202334%22%3E%3C/svg%3E"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="1440"
                                                height="2334">
                                             <img data-src="assets/images/media/landing/4.place/t12@md.webp"
                                                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%222334%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%202334%22%3E%3C/svg%3E"
                                                alt="" width="1440" height="2334" draggable="false">
                                          </picture>
                                          <noscript>
                                             <picture class=" " draggable="false">
                                                <source srcset="assets/images/media/landing/4.place/t12@xxxl.webp"
                                                   media="(min-width: 1920px) and (min-height: 700px)" width="1440"
                                                   height="2334">
                                                <source srcset="assets/images/media/landing/4.place/t12@xxl.webp"
                                                   media="(min-width: 1440px) and (min-height: 700px)" width="1440"
                                                   height="2334">
                                                <img src="assets/images/media/landing/4.place/t12%40md.webp" alt=""
                                                   width="1440" height="2334" draggable="false">
                                             </picture>
                                          </noscript>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="l-nature__caption"
                           data-scroll-snap-point='[    { "viewport": 0, "element": 220 },    { "viewport": 0, "element": 320 }]'>
                           <div class="l-nature__caption__inner row">
                              <div class="col col--md-6 ui-dark ui-background px-1 py-1 px-layout:md"
                                 data-plugin="parallax" data-parallax-pattern="natureCaptionMoveUp">
                                 <div class="l-nature__caption__text" data-plugin="parallax"
                                    data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                    data-parallax-measure-selector=".sticky"
                                    data-parallax--220-0='{"margin-top": "0px"}'
                                    data-parallax--320-0='{"margin-top": "35px"}'>
                                    <h3 class="h3 leading-trim" data-reveal="text">
                                       Enjoy nature&rsquo;s embrace that shields you from the world outside.
                                       Climbing rooftop plants, winding layouts of flowerbeds, emerald lawns.
                                       BST Developers lets you learn the art of leisure.
                                    </h3>
                                 </div>
                              </div>
                              <div class="col col--md-3 col--xxxl-2 offset--md-2 offset--xxxl-3 pb-3:md"
                                 data-plugin="parallax " data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                 data-parallax-measure-selector=".sticky"
                                 data-parallax--120-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)", "transform": "translateY(0%)"}'
                                 data-parallax--220-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "translateY(0%)"}'
                                 data-parallax--320-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)", "transform": "translateY(-150%)"}'>
                                 <div class="vimeo-background">
                                    <div class="background background--cover">
                                       <picture class="is-invisible--js is-hidden--no-js img-cover"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/nature-video@xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22360%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20360%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="360"
                                             height="360">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/nature-video@xxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22360%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20360%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="360"
                                             height="360">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/nature-video@md.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22360%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20360%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="360" height="360">
                                          <img data-src="assets/images/media/landing/3.nature/nature-video@xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22360%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20360%22%3E%3C/svg%3E"
                                             alt="" width="360" height="360" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-cover" draggable="false">
                                             <source
                                                srcset="assets/images/media/landing/3.nature/nature-video@xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="360"
                                                height="360">
                                             <source srcset="assets/images/media/landing/3.nature/nature-video@xxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="360"
                                                height="360">
                                             <source srcset="assets/images/media/landing/3.nature/nature-video@md.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="360" height="360">
                                             <img src="assets/images/media/landing/3.nature/nature-video%40xs.webp"
                                                alt="" width="360" height="360" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div class="background--cover background">
                                       <iframe
                                          style="--ratio: 1; --aspect-ratio: 360 / 360; overflow: hidden; border: none;"
                                          width="360" height="360" loading="lazy"
                                          src="https://player.vimeo.com/video/1086359012?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
                                          allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="l-nature__slider row"
                           data-scroll-snap-point='[    { "viewport": 0, "element": 420 }]'>
                           <div class="col col--md-6 ui-background" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax--320-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                              data-parallax--421-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'
                              data-parallax--520-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)"}'>
                              <div class="l-nature__slider__images offset--md-1 pl-1 pb-3"
                                 data-plugin="contentAnimation" data-content-animation-animations='{
                                    "changeShow": {"name": "imageClipIn", "duration": "slow"}
                                    }' data-content-animation-plugins="controller height"
                                 data-content-animation-controller-selector=":root .js-nature-controller-selector">
                                 <div class="content-animation">
                                    <div data-content-animation-item="1" class="" aria-hidden="false">
                                       <picture class="is-invisible--js is-hidden--no-js img-full parallax-image-move"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/hospitality_xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/hospitality_xxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/hospitality_md.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="640" height="854">
                                          <img
                                             data-src="assets/images/media/landing/3.nature/hospitality_xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             alt="" width="640" height="854" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-full parallax-image-move" draggable="false">
                                             <source
                                                srcset="assets/images/media/landing/3.nature/hospitality_xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="assets/images/media/landing/3.nature/hospitality_xxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="assets/images/media/landing/3.nature/hospitality_md.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="640" height="854">
                                             <img
                                                src="assets/images/media/landing/3.nature/hospitality_xs.webp"
                                                alt="" width="640" height="854" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div data-content-animation-item="2" class="is-hidden" aria-hidden="true">
                                       <picture class="is-invisible--js is-hidden--no-js img-full parallax-image-move"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/green_bhoomi_xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/green_bhoomi_xxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/green_bhoomi_md.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="640" height="854">
                                          <img
                                             data-src="assets/images/media/landing/3.nature/green_bhoomi_xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             alt="" width="640" height="854" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-full parallax-image-move" draggable="false">
                                             <source
                                                srcset="assets/images/media/landing/3.nature/green_bhoomi_xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="assets/images/media/landing/3.nature/green_bhoomi_xxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="assets/images/media/landing/3.nature/green_bhoomi_md.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="640" height="854">
                                             <img
                                                src="assets/images/media/landing/3.nature/green_bhoomi_xs.webp"
                                                alt="" width="640" height="854" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div data-content-animation-item="3" class="is-hidden" aria-hidden="true">
                                       <picture class="is-invisible--js is-hidden--no-js img-full parallax-image-move"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/green_gold_xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/green_gold_xxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="assets/images/media/landing/3.nature/green_gold_md.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="640" height="854">
                                          <img
                                             data-src="assets/images/media/landing/3.nature/green_gold_xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             alt="" width="640" height="854" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-full parallax-image-move" draggable="false">
                                             <source
                                                srcset="assets/images/media/landing/3.nature/green_gold_xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="assets/images/media/landing/3.nature/green_gold_xxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="assets/images/media/landing/3.nature/green_gold_md.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="640" height="854">
                                             <img
                                                src="assets/images/media/landing/3.nature/green_gold_xs.webp"
                                                alt="" width="640" height="854" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div data-content-animation-item="4" class="is-hidden" aria-hidden="true">
                                       <picture class="is-invisible--js is-hidden--no-js img-full parallax-image-move"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="640" height="854">
                                          <img
                                             data-src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-3%40xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             alt="" width="640" height="854" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-full parallax-image-move" draggable="false">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="640" height="854">
                                             <img
                                                src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-3%40xs.webp"
                                                alt="" width="640" height="854" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div data-content-animation-item="5" class="is-hidden" aria-hidden="true">
                                       <picture class="is-invisible--js is-hidden--no-js img-full parallax-image-move"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="640" height="854">
                                          <img
                                             data-src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-3%40xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             alt="" width="640" height="854" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-full parallax-image-move" draggable="false">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="640" height="854">
                                             <img
                                                src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-3%40xs.webp"
                                                alt="" width="640" height="854" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div data-content-animation-item="6" class="is-hidden" aria-hidden="true">
                                       <picture class="is-invisible--js is-hidden--no-js img-full parallax-image-move"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="640" height="854">
                                          <img
                                             data-src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-3%40xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             alt="" width="640" height="854" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-full parallax-image-move" draggable="false">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="640" height="854">
                                             <img
                                                src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-3%40xs.webp"
                                                alt="" width="640" height="854" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div data-content-animation-item="7" class="is-hidden" aria-hidden="true">
                                       <picture class="is-invisible--js is-hidden--no-js img-full parallax-image-move"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                             height="854">
                                          <source
                                             data-srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="640" height="854">
                                          <img
                                             data-src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-3%40xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22854%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20854%22%3E%3C/svg%3E"
                                             alt="" width="640" height="854" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-full parallax-image-move" draggable="false">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_xxxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_xxl/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="640"
                                                height="854">
                                             <source
                                                srcset="media/cache/homepage_nature_slider_md/assets/images/media/landing/3.nature/nature-slider-md-3%40xxxl.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="640" height="854">
                                             <img
                                                src="media/cache/homepage_nature_slider_xs/assets/images/media/landing/3.nature/nature-slider-xs-3%40xs.webp"
                                                alt="" width="640" height="854" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col col--md-6" data-plugin="parallax " data-parallax-enable-mq="md-up"
                              data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                              data-parallax--320-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)"}'
                              data-parallax--420-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'
                              data-parallax--520-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)"}'>
                              <div class="col--md-5  js-nature-controller-selector pl-1 pt-2"
                                 data-plugin="contentAnimation" data-content-animation-fixed-height="false"
                                 data-content-animation-animations='{
                                    "changeShow": {"name": "text"},
                                    "changeHide": {"name": "fadeOut", "duration": "fast"}
                                    }' data-content-animation-plugins="controller events height counter">
                                 <div class="content-animation mb-0.5">
                                    <div data-content-animation-item="1" class="is-hidden" aria-hidden="true">
                                       <h3 class="h3 mtb-2">
                                          Hospitality Developments<br /><small>Commercial</small>
                                       </h3>
                                       <p class="text-t1 leading-trim mb-1">
                                          <b>Status:</b> Upcoming
                                       </p>
                                       <p class="text-t1 leading-trim mb-1">
                                          BST is expanding into hospitality by developing premium destinations that
                                          blend comfort, contemporary design, and memorable guest experiences, catering
                                          to both leisure and business travellers.
                                       </p>
                                       <p class="text-t1 leading-trim mb-0.5">
                                          <b>Focus Areas</b>
                                       </p>
                                       <ul class="text-t1 leading-trim">
                                          <li>Boutique Hotels</li>
                                          <li>Resort Developments</li>
                                          <li>Business Hospitality</li>
                                          <li>Lifestyle Destinations</li>
                                       </ul>
                                    </div>
                                    <div data-content-animation-item="2" class="" aria-hidden="false">
                                       <h3 class="h3 mtb-2">
                                          BST Green Bhoomi<br /><small>Residential</small>
                                       </h3>
                                       <p class="text-t1 leading-trim mb-1">
                                          <b>Status:</b> Delivered
                                       </p>
                                       <p class="text-t1 leading-trim mb-1">
                                          A thoughtfully planned plotted development strategically located near the
                                          Dwarka Expressway, offering exceptional connectivity and long-term investment
                                          potential.
                                       <p class="text-t1 leading-trim mb-0.5">
                                          <b>Highlights</b>
                                       </p>
                                       <ul class="text-t1 leading-trim">
                                          <li>Premium residential plots</li>
                                          <li>Located near Dwarka Expressway</li>
                                          <li>Adjacent to a 75-meter wide road</li>
                                          <li>Excellent connectivity</li>
                                          <li>High appreciation potential</li>
                                          <li>Planned infrastructure</li>
                                       </ul>
                                       <p class="text-left mt-0.5">
                                          <a href="<?php echo base_url('project');?>" class="btn btn--secondary btn--clone btn--text-small is-hidden--sm-down btn--cloned" data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                   <span class="btn__text btn__text--clone">
                                                      View Details
                                                   </span>
                                             </span>
                                          </a>
                                       </p>
                                    </div>
                                    <div data-content-animation-item="3" class="is-hidden" aria-hidden="true">
                                       <h3 class="h3 mtb-2">
                                          BST Green Gold<br /><small>Residential</small>
                                       </h3>
                                       <p class="text-t1 leading-trim mb-1">
                                          <b>Status:</b> Delivered
                                       </p>
                                       <p class="text-t1 leading-trim mb-1">
                                          A vibrant community designed for families who value open spaces, wellness, and
                                          modern living.
                                       </p>
                                       <p class="text-t1 leading-trim mb-0.5">
                                          <b>Highlights</b>
                                       </p>
                                       <ul class="text-t1 leading-trim">
                                          <li>Landscaped Zen Park</li>
                                          <li>Children's Play Area</li>
                                          <li>Open Air Gym</li>
                                          <li>Amphitheatre</li>
                                          <li>Community-focused planning</li>
                                          <li>Green surroundings</li>
                                       </ul>
                                       <p class="text-left mt-0.5">
                                          <a href="<?php echo base_url('project');?>" class="btn btn--secondary btn--clone btn--text-small is-hidden--sm-down btn--cloned" data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                   <span class="btn__text btn__text--clone">
                                                      View Details
                                                   </span>
                                             </span>
                                          </a>
                                       </p>
                                    </div>

                                    <div data-content-animation-item="4" class="is-hidden" aria-hidden="true">
                                       <h3 class="h3 mtb-2">
                                          Restaurants<br /><small>Restaurant</small>
                                       </h3>
                                       <p class="text-t1 leading-trim mb-1">
                                          <b>Status:</b> Upcoming
                                       </p>
                                       <p class="text-t1 leading-trim mb-1">
                                          A vibrant community designed for families who value open spaces, wellness, and
                                          modern living.
                                       </p>
                                       <p class="text-t1 leading-trim mb-0.5">
                                          <b>Highlights</b>
                                       </p>
                                       <ul class="text-t1 leading-trim">
                                          <li>Landscaped Zen Park</li>
                                          <li>Children's Play Area</li>
                                          <li>Open Air Gym</li>
                                          <li>Amphitheatre</li>
                                          <li>Community-focused planning</li>
                                          <li>Green surroundings</li>
                                       </ul>
                                       <p class="text-left mt-0.5">
                                          <a href="<?php echo base_url('project');?>" class="btn btn--secondary btn--clone btn--text-small is-hidden--sm-down btn--cloned" data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                   <span class="btn__text btn__text--clone">
                                                      View Details
                                                   </span>
                                             </span>
                                          </a>
                                       </p>
                                    </div>

                                    <div data-content-animation-item="5" class="is-hidden" aria-hidden="true">
                                       <h3 class="h3 mtb-2">
                                          5-Star Hotels<br /><small>Hotel</small>
                                       </h3>
                                       <p class="text-t1 leading-trim mb-1">
                                          <b>Status:</b> Upcoming
                                       </p>
                                       <p class="text-t1 leading-trim mb-1">
                                          A vibrant community designed for families who value open spaces, wellness, and
                                          modern living.
                                       </p>
                                       <p class="text-t1 leading-trim mb-0.5">
                                          <b>Highlights</b>
                                       </p>
                                       <ul class="text-t1 leading-trim">
                                          <li>Landscaped Zen Park</li>
                                          <li>Children's Play Area</li>
                                          <li>Open Air Gym</li>
                                          <li>Amphitheatre</li>
                                          <li>Community-focused planning</li>
                                          <li>Green surroundings</li>
                                       </ul>
                                       <p class="text-left mt-0.5">
                                          <a href="<?php echo base_url('project');?>" class="btn btn--secondary btn--clone btn--text-small is-hidden--sm-down btn--cloned" data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                   <span class="btn__text btn__text--clone">
                                                      View Details
                                                   </span>
                                             </span>
                                          </a>
                                       </p>
                                    </div>

                                    <div data-content-animation-item="6" class="is-hidden" aria-hidden="true">
                                       <h3 class="h3 mtb-2">
                                          Hign End SCO Floors<br /><small>Residential</small>
                                       </h3>
                                       <p class="text-t1 leading-trim mb-1">
                                          <b>Status:</b> Upcoming
                                       </p>
                                       <p class="text-t1 leading-trim mb-1">
                                          A vibrant community designed for families who value open spaces, wellness, and
                                          modern living.
                                       </p>
                                       <p class="text-t1 leading-trim mb-0.5">
                                          <b>Highlights</b>
                                       </p>
                                       <ul class="text-t1 leading-trim">
                                          <li>Landscaped Zen Park</li>
                                          <li>Children's Play Area</li>
                                          <li>Open Air Gym</li>
                                          <li>Amphitheatre</li>
                                          <li>Community-focused planning</li>
                                          <li>Green surroundings</li>
                                       </ul>
                                       <p class="text-left mt-0.5">
                                          <a href="<?php echo base_url('project');?>" class="btn btn--secondary btn--clone btn--text-small is-hidden--sm-down btn--cloned" data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                   <span class="btn__text btn__text--clone">
                                                      View Details
                                                   </span>
                                             </span>
                                          </a>
                                       </p>
                                    </div>

                                    <div data-content-animation-item="7" class="is-hidden" aria-hidden="true">
                                       <h3 class="h3 mtb-2">
                                          Luxury High Rise<br /><small>Residential</small>
                                       </h3>
                                       <p class="text-t1 leading-trim mb-1">
                                          <b>Status:</b> Upcoming
                                       </p>
                                       <p class="text-t1 leading-trim mb-1">
                                          A vibrant community designed for families who value open spaces, wellness, and
                                          modern living.
                                       </p>
                                       <p class="text-t1 leading-trim mb-0.5">
                                          <b>Highlights</b>
                                       </p>
                                       <ul class="text-t1 leading-trim">
                                          <li>Landscaped Zen Park</li>
                                          <li>Children's Play Area</li>
                                          <li>Open Air Gym</li>
                                          <li>Amphitheatre</li>
                                          <li>Community-focused planning</li>
                                          <li>Green surroundings</li>
                                       </ul>
                                       <p class="text-left mt-0.5">
                                          <a href="<?php echo base_url('project');?>" class="btn btn--secondary btn--clone btn--text-small is-hidden--sm-down btn--cloned" data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                   <span class="btn__text btn__text--clone">
                                                      View Details
                                                   </span>
                                             </span>
                                          </a>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="group group--small">
                                    <a class="btn btn--outline btn--sm btn--square js-content-animation-prev"
                                       tabindex="0" role="button">
                                       <span class="btn__content">
                                          <span class="btn__icon ">
                                             <svg class="icon icon-arrow-left" width="17" height="16" aria-hidden="true"
                                                viewBox="0 0 17 16" style="--icon-width: 17; --icon-height: 16;">
                                                <use href="assets/images/icons.svg#arrow-left"
                                                   xlink:href="assets/images/icons.svg#arrow-left">
                                                </use>
                                             </svg>
                                          </span>
                                       </span>
                                    </a>
                                    <a class="btn btn--outline btn--sm btn--square js-content-animation-next"
                                       tabindex="0" role="button">
                                       <span class="btn__content">
                                          <span class="btn__icon ">
                                             <svg class="icon icon-arrow-right" width="17" height="16"
                                                aria-hidden="true" viewBox="0 0 17 16"
                                                style="--icon-width: 17; --icon-height: 16;">
                                                <use href="assets/images/icons.svg#arrow-right"
                                                   xlink:href="assets/images/icons.svg#arrow-right">
                                                </use>
                                             </svg>
                                          </span>
                                       </span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="l-place sticky__layer" data-scroll-snap-point='[
                           { "viewport": 0, "element": 0 },
                           { "viewport": 0, "element": 60 }
                           ]'>
                        <div class="l-place-webgl">
                           <div class="l-place-webgl-caption pt-6:md pt-4:xxxl px-layout">
                              <h2 class="text-right g1 leading-trim" data-reveal="title">
                                 Statistics
                              </h2>
                              <div class="mt-1">
                                 <p class="l-place-webgl-caption__subtitle text-c1 text-right leading-trim"
                                    data-reveal="text" data-reveal-distance="100px">
                                    Essence of Contemplation
                                 </p>
                              </div>
                           </div>
                           <div class="px-layout">
                              <div class="l-place-webgl__text mt-3 col col--md-4">
                                 <p class="text-t1 leading-trim" data-reveal="text">
                                    BST Developers is situated in the prestigious Western District
                                    of the capital, surrounded by parks and close
                                    to the embankment. It is adjacent to the highway, one
                                    of the most ecological areas of the City.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="l-place-description pr-layout pb-layout" data-plugin="parallax"
                           data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                           data-parallax--700-0='{"transform": "translateY(0%)"}'
                           data-parallax--950-0='{"transform": "translateY(120%)"}'
                           data-parallax-measure-selector=".sticky">
                           <h3 class="h3 mt-6 offset--md-6 leading-trim" data-reveal="text">
                              We are helping people find the right property with confidence. Our growing presence across 100+ prime locations reflects our commitment to making real estate simple, transparent, and accessible for everyone. With trusted guidance and a wide range of opportunities, we make every property journey easier and more rewarding.
                           </h3>
                        </div>
                     </div>
                  </div>
                  <div
                     class="l-nature sticky sticky sticky--full-height sticky--under-previous is-hidden--lg-up ui-dark ui-background"
                     id="nature-mobile">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#nature-mobile">
                        <div class="l-nature-bg">
                           <div class="l-nature-bg-item--webgl l-nature-bg-item" data-plugin="parallax"
                              data-parallax-clamp="true" data-parallax-enable-mq="md-down"
                              data-parallax-measure-selector=".sticky"
                              data-parallax--220-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'
                              data-parallax--320-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)"}'>
                              <div class="background background--cover" data-plugin="parallax"
                                 data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                                 data-parallax-enable-mq="md-down" data-parallax-0-0='{"transform": "scale(1.2)"}'
                                 data-parallax--370-0='{"transform": "scale(1.0)"}'>
                                 <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                    draggable="false">
                                    <img data-src="assets/images/media/landing/3.nature/nature-bg-xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22640%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20640%22%3E%3C/svg%3E"
                                       alt="" width="360" height="640" decoding="async" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-full" draggable="false">
                                       <img src="assets/images/media/landing/3.nature/nature-bg-xs.webp" alt=""
                                          width="360" height="640" decoding="async" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="col col--xs-4 l-nature-bg-caption px-layout pb-4" data-plugin="parallax"
                                 data-parallax-clamp="true" data-parallax-enable-mq="md-down"
                                 data-parallax-measure-selector=".sticky"
                                 data-parallax--100-0='{"opacity": "1", "transform": "translateY(0vh)"}'
                                 data-parallax--150-0='{"opacity": "0", "transform": "translateY(-50vh)"}'>
                                 <h2 class="g1 leading-trim text-right">
                                    Nature
                                 </h2>
                                 <div class="mt-1">
                                    <p class="l-nature-bg-caption__subtitle text-c1 leading-trim text-right">
                                       Lightness of Breathing
                                    </p>
                                 </div>
                                 <div class="l-nature-bg-caption__text col col--md-6 mt-3">
                                    <p class="text-t1 leading-trim">
                                       Here, nature merges with architecture and becomes an integral part
                                       of your home. Nature takes the spotlight, embodied
                                       in the painterly curves of our gardens and the green
                                       silhouettes of the fa&ccedil;ade terraces. Nature becomes your
                                       companion on meditative walks and at family gatherings, providing
                                       a soothing backdrop.
                                    </p>
                                 </div>
                              </div>
                              <div class="l-nature-bg-gradient" data-plugin="parallax" data-parallax-clamp="true"
                                 data-parallax-enable-mq="md-down" data-parallax-measure-selector=".sticky"
                                 data-parallax--150-0='{"transform": "translateY(0vh)"}'
                                 data-parallax--320-0='{"transform": "translateY(-68vh)"}'></div>
                           </div>
                           <div class="l-nature-bg-item background" data-plugin="parallax" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky" data-parallax-enable-mq="md-down"
                              data-parallax--220-0='{"transform": "scale(1.2)"}'
                              data-parallax--420-0='{"transform": "scale(1.0)"}'>
                              <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                 draggable="false">
                                 <img data-src="assets/images/media/landing/3.nature/nature-caption-xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22640%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20640%22%3E%3C/svg%3E"
                                    alt="" width="360" height="640" decoding="async" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover" draggable="false">
                                    <img src="assets/images/media/landing/3.nature/nature-caption-xs.webp" alt=""
                                       width="360" height="640" decoding="async" draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                        </div>
                        <div class="l-nature__caption">
                           <div class="l-nature__caption__inner col col--xs-4 row pl-layout">
                              <div class="col col--xs-2 mr-layout ml-auto  mb-4" data-plugin="parallax "
                                 data-parallax-clamp="true" data-parallax-enable-mq="md-down"
                                 data-parallax-measure-selector=".sticky"
                                 data-parallax--100-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "translateY(100vh)"}'
                                 data-parallax--220-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "translateY(0vh)"}'
                                 data-parallax--270-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)", "transform": "translateY(-30vh)"}'>
                                 <div class="vimeo-background background background--cover">
                                    <iframe
                                       style="--ratio: 2.4; --aspect-ratio: 960 / 400; overflow: hidden; border: none;"
                                       width="960" height="400" loading="lazy"
                                       src="https://player.vimeo.com/video/1086359012?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
                                       allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                 </div>
                              </div>
                              <div class="l-nature__caption__text col col--xs-4 ui-dark ui-background px-1 py-1"
                                 data-plugin="parallax" data-parallax-pattern="natureCaptionMoveUp">
                                 <h3 class="h3 leading-trim">
                                    Enjoy nature&rsquo;s embrace that shields you from the world outside.
                                    Climbing rooftop plants, winding layouts of flowerbeds, emerald lawns. BST
                                    Developers
                                    lets you learn the art of leisure.
                                 </h3>
                                 <div class="mt-1.5">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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
                                 <p class="h0 leading-trim">
                                    10+
                                 </p>
                              </div>
                              <div class="mt-0.5">
                                 <p class="text-c1 text-right leading-trim">
                                    Years of Experience
                                 </p>
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
                                 <p class="h0 leading-trim">
                                    2
                                 </p>
                              </div>
                              <div class="mt-0.5">
                                 <p class="text-c1 text-right leading-trim">
                                    Completed Projects
                                 </p>
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
                                 <p class="h0 leading-trim">
                                    100+
                                 </p>
                              </div>
                              <div class="mt-0.5">
                                 <p class="text-c1 text-right leading-trim">
                                    Happy Customers
                                 </p>
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
                                 <p class="h0 leading-trim">
                                    280 Acre
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
                                 src="https://player.vimeo.com/video/1044257468?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
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
                                 src="https://player.vimeo.com/video/1044257440?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
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
                                 src="https://player.vimeo.com/video/1086358928?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
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
                                 src="https://player.vimeo.com/video/1044257440?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
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
                  <div class="l-map sticky sticky--full-height sticky--under-previous is-hidden--md-down"
                     id="l-map-sticky" data-plugin="reveal">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-map-sticky" data-scroll-snap-point='[{ "viewport": 0, "element": 130 }]'>
                        <div class="background background--cover" data-plugin="parallax" data-parallax-enable-mq="md-up"
                           data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                           data-parallax-0-0='{"transform": "translateY(0vh) scale(1)"}'
                           data-parallax--200-0='{"transform": "translateY(0vh) scale(1.15)"}'
                           data-parallax--300-0='{"transform": "translateY(100vh) scale(1.2)"}'>
                           <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                              draggable="false">
                              <source data-srcset="assets/images/media/landing/5.map/map-bg@xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                 media="(min-width: 1920px) and (min-height: 700px)" width="720" height="450">
                              <source data-srcset="assets/images/media/landing/5.map/map-bg@xxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="720" height="450">
                              <source data-srcset="assets/images/media/landing/5.map/map-bg@md.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                 media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                 width="720" height="450">
                              <img data-src="assets/images/media/landing/5.map/map-xs.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22450%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20450%22%3E%3C/svg%3E"
                                 alt="" width="720" height="450" draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" img-cover" draggable="false">
                                 <source srcset="assets/images/media/landing/5.map/map-bg@xxxl.webp"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="450">
                                 <source srcset="assets/images/media/landing/5.map/map-bg@xxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="450">
                                 <source srcset="assets/images/media/landing/5.map/map-bg@md.webp"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="720" height="450">
                                 <img src="assets/images/media/landing/5.map/map-xs.webp" alt="" width="720"
                                    height="450" draggable="false">
                              </picture>
                           </noscript>
                        </div>
                        <div class="l-map-caption">
                           <div class="col col--md-9 col--xxxl-7 ui-light ui-background" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax--30-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                              data-parallax--130-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)"}'>
                              <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                 draggable="false">
                                 <source data-srcset="assets/images/media/landing/5.map/map-eng@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22680%22%20height=%22416%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20680%20416%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="680" height="416">
                                 <img data-src="assets/images/media/landing/5.map/map-eng@xxl.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22680%22%20height=%22416%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20680%20416%22%3E%3C/svg%3E"
                                    alt="" width="680" height="416" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-full" draggable="false">
                                    <source srcset="assets/images/media/landing/5.map/map-eng@xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="680" height="416">
                                    <img src="assets/images/media/landing/5.map/map-eng%40xxl.webp" alt="" width="680"
                                       height="416" draggable="false">
                                 </picture>
                              </noscript>
                              <div class="l-map-caption__text col col--md-5 pl-layout py-layout">
                                 <h3 class="h3 leading-trim">
                                    Easy access to Nature Park. Landscapes of watercolor tenderness that
                                    belong only </br> to you.
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="l-map sticky sticky--full-height sticky--under-previous is-hidden--lg-up"
                     id="l-map-sticky-2">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-map-sticky-2">
                        <div class="background background--cover" data-plugin="parallax" data-parallax-clamp="true"
                           data-parallax-measure-selector=".sticky" data-parallax-enable-mq="md-down"
                           data-parallax-0-0='{"transform": "scale(1.2)"}'
                           data-parallax--200-0='{"transform": "scale(1.0)"}'>
                           <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                              draggable="false">
                              <img data-src="assets/images/media/landing/5.map/map-bg-xs.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22900%22%20height=%221600%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20900%201600%22%3E%3C/svg%3E"
                                 alt="" width="900" height="1600" decoding="async" draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" img-cover" draggable="false">
                                 <img src="assets/images/media/landing/5.map/map-bg-xs.webp" alt="" width="900"
                                    height="1600" decoding="async" draggable="false">
                              </picture>
                           </noscript>
                        </div>
                     </div>
                     <div class="sticky__layer">
                        <div class="l-map-caption ml-layout pb-5">
                           <div class=" col col--xs-4 col--md-12" data-themed-class="ui-dark"></div>
                           <div class="col col--xs-4 col--md-12 ui-light ui-background" data-themed-class="ui-light">
                              <div class="l-map-caption__text col col--md-6 px-layout pt-layout">
                                 <h3 class="h3 leading-trim mb-1">
                                    Easy access to Nature Park. Landscapes of watercolor tenderness that
                                    belong only </br> to you.
                                 </h3>
                              </div>
                              <div class="l-map-caption__map" data-plugin="landingMapScroll">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <img data-src="assets/images/media/landing/5.map/map-xs-eng.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22680%22%20height=%22800%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20680%20800%22%3E%3C/svg%3E"
                                       alt="" width="680" height="800" decoding="async" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <img src="assets/images/media/landing/5.map/map-xs-eng.webp" alt="" width="680"
                                          height="800" decoding="async" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <svg class="icon icon-scroll l-map-caption__map-scroll" width="30" height="15"
                                 aria-hidden="true" viewBox="0 0 30 15" style="--icon-width: 30; --icon-height: 15;">
                                 <use href="assets/images/icons.svg#scroll" xlink:href="assets/images/icons.svg#scroll">
                                 </use>
                              </svg>
                           </div>
                           <div class="" data-themed-class="ui-dark"></div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="l-design__slide l-design__slide--1 sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--md-down"
                     id="design" data-plugin="reveal">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#design" data-scroll-snap-point='[{ "viewport": 0, "element": 100 }]'>
                        <div class="background background--cover" data-plugin="parallax" data-parallax-enable-mq="md-up"
                           data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                           data-parallax-0-0='{"transform": "scale(1.2)"}'
                           data-parallax--200-0='{"transform": "scale(1.0)"}'>
                           <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                              draggable="false">
                              <source data-srcset="assets/images/media/landing/6.design/design-bg@xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                              <source data-srcset="assets/images/media/landing/6.design/design-bg@xxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                              <img data-src="assets/images/media/landing/6.design/design-bg@md.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 alt="" width="1440" height="900" draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" img-cover" draggable="false">
                                 <source srcset="assets/images/media/landing/6.design/design-bg@xxxl.webp"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source srcset="assets/images/media/landing/6.design/design-bg@xxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <img src="assets/images/media/landing/6.design/design-bg%40md.webp" alt="" width="1440"
                                    height="900" draggable="false">
                              </picture>
                           </noscript>
                        </div>
                        <div class="l-design__caption">
                           <div class="l-design__caption-title px-layout">
                              <h2 class="text-right g1 leading-trim" data-reveal="title">
                                 Design
                              </h2>
                              <div class="mt-1">
                                 <p class="l-design__caption__subtitle text-c1 text-right leading-trim"
                                    data-reveal="title">
                                    Inspired Architecture
                                 </p>
                              </div>
                           </div>
                           <div class="px-layout">
                              <div class="l-design__caption__text mt-3 col col--md-4">
                                 <p class="text-t1 leading-trim" data-reveal="text">
                                    A standalone crystal building soaring above the treetops. Secluded
                                    tower resembling a glassy waterfall with flowing cascades
                                    of greenery-framed loggia.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="l-design__slide l-design__slide--2 sticky sticky--under-previous sticky--full-height ui-light is-hidden--md-down"
                     id="l-design-sticky-2" data-plugin="reveal">
                     <div class="" data-themed-class="ui-light"></div>
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-design-sticky-2"
                        data-scroll-snap-point='[{ "viewport": 0, "element": 100 }, { "viewport": 0, "element": 150 }]'>
                        <div class="row row--between-xs">
                           <div class="col col--md-4" data-plugin="parallax" data-parallax-enable-mq="md-up"
                              data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                              data-parallax-0-0='{ "clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)" }'
                              data-parallax--100-0='{ "clip-path": "polygon(0% 0.1%, 100% 0.1%, 100% 100%, 0% 100%)" }'
                              data-parallax-pattern="designMoveLeftImage">
                              <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                 data-plugin="appear " draggable="false">
                                 <source data-srcset="assets/images/media/landing/6.design/design-1@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="640" height="694">
                                 <source data-srcset="assets/images/media/landing/6.design/design-1@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="640" height="694">
                                 <img data-src="assets/images/media/landing/6.design/design-1@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                                    alt="" width="640" height="694" data-plugin="parallax" data-parallax-clamp="true"
                                    data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                    data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                    draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover parallax-image-move" draggable="false">
                                    <source srcset="assets/images/media/landing/6.design/design-1@xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="640" height="694">
                                    <source srcset="assets/images/media/landing/6.design/design-1@xxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="640" height="694">
                                    <img src="assets/images/media/landing/6.design/design-1%40md.webp" alt=""
                                       width="640" height="694" data-plugin="parallax" data-parallax-clamp="true"
                                       data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                       data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                       draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                           <div class="col col--md-4 offset--md-4 mt-auto" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax-0-0='{ "clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)" }'
                              data-parallax--100-0='{ "clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)" }'
                              data-parallax-pattern="designMoveRightImage">
                              <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                 data-plugin="appear " draggable="false">
                                 <source data-srcset="assets/images/media/landing/6.design/design-2@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="640" height="694">
                                 <source data-srcset="assets/images/media/landing/6.design/design-2@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="640" height="694">
                                 <img data-src="assets/images/media/landing/6.design/design-2@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                                    alt="" width="640" height="694" data-plugin="parallax" data-parallax-clamp="true"
                                    data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                    data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                    draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover parallax-image-move" draggable="false">
                                    <source srcset="assets/images/media/landing/6.design/design-2@xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="640" height="694">
                                    <source srcset="assets/images/media/landing/6.design/design-2@xxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="640" height="694">
                                    <img src="assets/images/media/landing/6.design/design-2%40md.webp" alt=""
                                       width="640" height="694" data-plugin="parallax" data-parallax-clamp="true"
                                       data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                       data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                       draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                        </div>
                        <div class="l-design__title col col--md-5 mx-auto" data-plugin="parallax"
                           data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                           data-parallax-measure-selector=".sticky"
                           data-parallax-50-0='{"opacity": "0", "transform": "translate(-50%, 300%)"}'
                           data-parallax--100-0='{"opacity": "0", "transform": "translate(-50%, 50%)"}'
                           data-parallax--150-0='{"opacity": "1", "transform": "translate(-50%, -50%)"}'
                           data-parallax--250-0='{"opacity": "0", "transform": "translate(-50%, -90%)"}'>
                           <h3 class="h3 leading-trim text-center" data-reveal="title">
                              Each plot reflects boundless perspectives in its glistening waves, inviting you
                              to look farther with a fuller palette of possibilities.
                           </h3>
                        </div>
                     </div>
                  </div>
                  <div
                     class="l-design__slide l-design__slide--3 sticky sticky--full-height sticky--under-previous sticky--under-next ui-light is-hidden--md-down"
                     id="l-design-sticky-3" data-plugin="reveal">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-design-sticky-3"
                        data-scroll-snap-point='[{ "viewport": 0, "element": 100 }, { "viewport": 0, "element": 150 }]'>
                        <div class="l-design__slide-images col col--md-6 mr-0 ml-auto ">
                           <div class="l-design__slide-images__item" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky" data-parallax-0-0='{"transform": "scale(1.2)"}'
                              data-parallax--300-0='{"transform": "scale(1)"}'>
                              <picture
                                 class="is-invisible--js is-hidden--no-js img-full background background--cover background--bottom"
                                 data-plugin="appear " draggable="false">
                                 <source data-srcset="assets/images/media/landing/6.design/design-4@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                 <source data-srcset="assets/images/media/landing/6.design/design-4@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                 <img data-src="assets/images/media/landing/6.design/design-4@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-full background background--cover background--bottom"
                                    draggable="false">
                                    <source srcset="assets/images/media/landing/6.design/design-4@xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                    <source srcset="assets/images/media/landing/6.design/design-4@xxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                    <img src="assets/images/media/landing/6.design/design-4%40md.webp" alt=""
                                       width="720" height="900" draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                        </div>
                     </div>
                     <div class="sticky__layer">
                        <div class="row col col--md-6 l-design__slide-content pt-3 pt-2:md" data-plugin="parallax"
                           data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                           data-parallax-measure-selector=".sticky" data-parallax-enable-touch="false"
                           data-parallax--100-0='{"transform": "translateY(0%)"}'
                           data-parallax--300-0='{"transform": "translateY(200%)"}'>
                           <div
                              class="l-design__slide-images__item l-design__slide-images__item--small col col--md-2 ml-auto mr-layout"
                              data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax--30-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)", "transform": "translateY(0vh)"}'
                              data-parallax--80-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "translateY(0vh)"}'
                              data-parallax--100-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "translateY(0vh)"}'
                              data-parallax--200-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "translateY(-110vh)"}'>
                              <picture class="is-invisible--js is-hidden--no-js parallax-image-move img-cover"
                                 data-parallax-measure-selector=".sticky" data-parallax-clamp="true"
                                 data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                 data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                 data-plugin="appear  parallax" draggable="false">
                                 <source data-srcset="assets/images/media/landing/6.design/design-3@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="240" height="300">
                                 <source data-srcset="assets/images/media/landing/6.design/design-3@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="240" height="300">
                                 <img data-src="assets/images/media/landing/6.design/design-3@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
                                    alt="" width="240" height="300" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" parallax-image-move img-cover"
                                    data-parallax-measure-selector=".sticky" data-parallax-clamp="true"
                                    data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                    data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                    data-plugin=" parallax" draggable="false">
                                    <source srcset="assets/images/media/landing/6.design/design-3@xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="240" height="300">
                                    <source srcset="assets/images/media/landing/6.design/design-3@xxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="240" height="300">
                                    <img src="assets/images/media/landing/6.design/design-3%40md.webp" alt=""
                                       width="240" height="300" draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                           <div class="col col--md-6  mt-2.5 mt-3.5:md px-layout" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky" data-parallax-enable-touch="false"
                              data-parallax--100-0='{"transform": "translateY(0%)"}'
                              data-parallax--250-0='{"transform": "translateY(-250%)"}'>
                              <h3 class="h3 leading-trim" data-reveal="title">
                                 Tabanlioglu, the renowned architectural bureau, emphasizes the bold asymmetry
                                 of balconies in a chessboard pattern. Three vertical partitions divide
                                 the translucent façade, creating the effect of weightless volume.
                                 Freedom of expression, elegance of intelligence, and visual lightness.
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="l-design__slide l-design__slide--1 sticky sticky--full-height sticky--under-previous is-hidden--lg-up"
                     id="design-mobile">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#design-mobile">
                        <div class="l-design__slide__bg" data-plugin="parallax" data-parallax-clamp="true"
                           data-parallax-enable-mq="md-down" data-parallax-measure-selector=".sticky"
                           data-parallax-100-0='{"transform": "scale(1.2)", "height": "100svh"}'
                           data-parallax--200-0='{"transform": "scale(1.0)", "height": "100svh"}'
                           data-parallax--250-0='{"transform": "scale(1.0)", "height": "70svh"}'>
                           <div class="background background--cover" data-plugin="parallax" data-parallax-clamp="true"
                              data-parallax-enable-mq="md-down" data-parallax-measure-selector=".sticky"
                              data-parallax--200-0='{"width": "195%"}' data-parallax--250-0='{"width": "100%"}'>
                              <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                 draggable="false">
                                 <img data-src="assets/images/media/landing/6.design/design-bg-xs@xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%221280%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%201280%22%3E%3C/svg%3E"
                                    alt="" width="720" height="1280" decoding="async" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover" draggable="false">
                                    <img src="assets/images/media/landing/6.design/design-bg-xs%40xs.webp" alt=""
                                       width="720" height="1280" decoding="async" draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                        </div>
                        <div class="dim dim--design" data-plugin="parallax" data-parallax-clamp="true"
                           data-parallax-enable-mq="md-down" data-parallax-measure-selector=".sticky"
                           data-parallax--200-0='{"opacity": "1"}' data-parallax--220-0='{"opacity": "0"}'></div>
                        <div class="l-design__caption pb-4" data-plugin="parallax" data-parallax-clamp="true"
                           data-parallax-enable-mq="md-down" data-parallax-measure-selector=".sticky"
                           data-parallax--200-0='{"opacity": "1"}' data-parallax--220-0='{"opacity": "0"}'>
                           <div class="pr-layout">
                              <h2 class="text-right g1 leading-trim">
                                 Design
                              </h2>
                              <div class="mt-1">
                                 <p class="l-design__caption__subtitle text-c1 leading-trim text-right">
                                    Inspired Architecture
                                 </p>
                              </div>
                           </div>
                           <div class="l-design__caption__text mt-3 col col--md-4">
                              <p class="text-t1 leading-trim">
                                 A standalone crystal building soaring above the treetops. Secluded tower
                                 resembling a glassy waterfall with flowing cascades of greenery-framed
                                 loggia.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="l-design__slide l-design__slide--2 ui-light is-hidden--lg-up py-2.5 px-layout"
                     data-themed-class="ui-light">
                     <div class="l-design__title col col--md-5 mx-auto">
                        <h3 class="h3 leading-trim text-center">
                           Each plot reflects boundless perspectives in its glistening waves, inviting you
                           to look farther with a fuller palette of possibilities.
                        </h3>
                     </div>
                     <div class="carousel carousel--md-up carousel--not-ready js-carousel mt-2.5"
                        data-plugin="mobileScrollable">
                        <div class="p-relative">
                           <ul class="mobile-scrollable col col--md-auto mx-auto">
                              <li class="mobile-scrollable__item">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <source
                                       data-srcset="media/cache/homepage_design_slider_xxxl/assets/images/media/landing/6.design/design-1%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="media/cache/homepage_design_slider_xxl/assets/images/media/landing/6.design/design-1%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="media/cache/homepage_design_slider_md/assets/images/media/landing/6.design/design-1%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="900">
                                    <img
                                       data-src="media/cache/homepage_design_slider_xs/assets/images/media/landing/6.design/design-xs-1.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       alt="" width="720" height="900" decoding="async" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <source
                                          srcset="media/cache/homepage_design_slider_xxxl/assets/images/media/landing/6.design/design-1%40xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          srcset="media/cache/homepage_design_slider_xxl/assets/images/media/landing/6.design/design-1%40xxxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          srcset="media/cache/homepage_design_slider_md/assets/images/media/landing/6.design/design-1%40xxxl.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="900">
                                       <img
                                          src="media/cache/homepage_design_slider_xs/assets/images/media/landing/6.design/design-xs-1.webp"
                                          alt="" width="720" height="900" decoding="async" draggable="false">
                                    </picture>
                                 </noscript>
                              </li>
                              <li class="mobile-scrollable__item">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <source
                                       data-srcset="media/cache/homepage_design_slider_xxxl/assets/images/media/landing/6.design/design-2%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="media/cache/homepage_design_slider_xxl/assets/images/media/landing/6.design/design-2%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="media/cache/homepage_design_slider_md/assets/images/media/landing/6.design/design-2%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="900">
                                    <img
                                       data-src="media/cache/homepage_design_slider_xs/assets/images/media/landing/6.design/design-xs-2.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       alt="" width="720" height="900" decoding="async" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <source
                                          srcset="media/cache/homepage_design_slider_xxxl/assets/images/media/landing/6.design/design-2%40xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          srcset="media/cache/homepage_design_slider_xxl/assets/images/media/landing/6.design/design-2%40xxxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          srcset="media/cache/homepage_design_slider_md/assets/images/media/landing/6.design/design-2%40xxxl.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="900">
                                       <img
                                          src="media/cache/homepage_design_slider_xs/assets/images/media/landing/6.design/design-xs-2.webp"
                                          alt="" width="720" height="900" decoding="async" draggable="false">
                                    </picture>
                                 </noscript>
                              </li>
                           </ul>
                        </div>
                        <div class="carousel__thumb group group--nowrap px-layout">
                           <div class="col col--xs-2 carousel__thumb__item js-mobile-scrollable-thumbnail is-active">
                           </div>
                           <div class="col col--xs-2 carousel__thumb__item js-mobile-scrollable-thumbnail "></div>
                        </div>
                     </div>
                  </div>
                  <div class="l-design__slide l-design__slide--3 ui-light sticky sticky--full-height is-hidden--lg-up"
                     id="l-design-mobile-sticky-2">
                     <div class="l-design__theme" data-themed-class="ui-dark"></div>
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-design-mobile-sticky-2">
                        <div class="background background--cover" data-plugin="parallax" data-parallax-clamp="true"
                           data-parallax-enable-mq="md-down" data-parallax-measure-selector=".sticky"
                           data-parallax-100-0='{"height": "100svh", "transform": "scale(1.1)"}'
                           data-parallax-0-0='{"height": "100svh", "transform": "scale(1.0)"}'
                           data-parallax--50-0='{"height": "60svh", "transform": "scale(1.0)"}'>
                           <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                              draggable="false">
                              <source
                                 data-srcset="media/cache/homepage_design_slider_xxxl/assets/images/media/landing/6.design/design-4%40xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                              <source
                                 data-srcset="media/cache/homepage_design_slider_xxl/assets/images/media/landing/6.design/design-4%40xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                              <source
                                 data-srcset="media/cache/homepage_design_slider_md/assets/images/media/landing/6.design/design-4%40xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                 width="720" height="900">
                              <img
                                 data-src="media/cache/homepage_design_slider_xs/assets/images/media/landing/6.design/design-4%40xxxl.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                 alt="" width="720" height="900" decoding="async" draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" img-cover" draggable="false">
                                 <source
                                    srcset="media/cache/homepage_design_slider_xxxl/assets/images/media/landing/6.design/design-4%40xxxl.webp"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                 <source
                                    srcset="media/cache/homepage_design_slider_xxl/assets/images/media/landing/6.design/design-4%40xxxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                 <source
                                    srcset="media/cache/homepage_design_slider_md/assets/images/media/landing/6.design/design-4%40xxxl.webp"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="720" height="900">
                                 <img
                                    src="media/cache/homepage_design_slider_xs/assets/images/media/landing/6.design/design-4%40xxxl.webp"
                                    alt="" width="720" height="900" decoding="async" draggable="false">
                              </picture>
                           </noscript>
                        </div>
                     </div>
                  </div>
                  <div class="l-design__slide l-design__slide--4 ui-light row pt-layout is-hidden--lg-up">
                     <div class="l-design__theme" data-themed-class="ui-light"></div>
                     <div class="px-layout">
                        <h3 class="h3 leading-trim">
                           Tabanlioglu, the renowned architectural bureau, emphasizes the bold asymmetry
                           of balconies in a chessboard pattern. Three vertical partitions divide
                           the translucent façade, creating the effect of weightless volume. Freedom
                           of expression, elegance of intelligence, and visual lightness.
                        </h3>
                     </div>
                     <div class="pl-0.5 col col--xs-3 mr-0 ml-auto mt-4">
                        <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                           draggable="false">
                           <source
                              data-srcset="media/cache/homepage_design_slider_xxxl/assets/images/media/landing/6.design/design-3%40xxxl.webp"
                              srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
                              media="(min-width: 1920px) and (min-height: 700px)" width="240" height="300">
                           <source
                              data-srcset="media/cache/homepage_design_slider_xxl/assets/images/media/landing/6.design/design-3%40xxxl.webp"
                              srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
                              media="(min-width: 1440px) and (min-height: 700px)" width="240" height="300">
                           <source
                              data-srcset="media/cache/homepage_design_slider_md/assets/images/media/landing/6.design/design-3%40xxxl.webp"
                              srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
                              media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                              width="240" height="300">
                           <img
                              data-src="media/cache/homepage_design_slider_xs/assets/images/media/landing/6.design/design-3%40xxxl.webp"
                              src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
                              alt="" width="240" height="300" decoding="async" draggable="false">
                        </picture>
                        <noscript>
                           <picture class=" img-cover" draggable="false">
                              <source
                                 srcset="media/cache/homepage_design_slider_xxxl/assets/images/media/landing/6.design/design-3%40xxxl.webp"
                                 media="(min-width: 1920px) and (min-height: 700px)" width="240" height="300">
                              <source
                                 srcset="media/cache/homepage_design_slider_xxl/assets/images/media/landing/6.design/design-3%40xxxl.webp"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="240" height="300">
                              <source
                                 srcset="media/cache/homepage_design_slider_md/assets/images/media/landing/6.design/design-3%40xxxl.webp"
                                 media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                 width="240" height="300">
                              <img
                                 src="media/cache/homepage_design_slider_xs/assets/images/media/landing/6.design/design-3%40xxxl.webp"
                                 alt="" width="240" height="300" decoding="async" draggable="false">
                           </picture>
                        </noscript>
                     </div>
                  </div>
                  <div
                     class="l-residences sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--md-down"
                     id="l-residences-sticky-1" data-plugin="reveal">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-residences-sticky-1"
                        data-scroll-snap-point='[{ "viewport": 0, "element": 100 }, { "viewport": 0, "element": 200 }, { "viewport": 0, "element": 300 }, { "viewport": 0, "element": 400 }]'>
                        <div class="l-residences__slide l-residences__webgl">
                           <div class="background background--cover background--bottom">
                              <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                 data-plugin="appear " draggable="false">
                                 <source data-srcset="assets/images/media/landing/7.residence/residence-tree@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22451%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20451%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="451">
                                 <source data-srcset="assets/images/media/landing/7.residence/residence-tree@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22451%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20451%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="451">
                                 <img data-src="assets/images/media/landing/7.residence/residence-tree@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22451%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20451%22%3E%3C/svg%3E"
                                    alt="" width="720" height="451" data-plugin="parallax" data-parallax-clamp="true"
                                    data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                    data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                    draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover parallax-image-move" draggable="false">
                                    <source srcset="assets/images/media/landing/7.residence/residence-tree@xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="451">
                                    <source srcset="assets/images/media/landing/7.residence/residence-tree@xxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="451">
                                    <img src="assets/images/media/landing/7.residence/residence-tree%40md.webp" alt=""
                                       width="720" height="451" data-plugin="parallax" data-parallax-clamp="true"
                                       data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                       data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                       draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                           <div class="l-residences__webgl-caption pt-6:md pt-4:xxxl px-layout">
                              <div class="col ">
                                 <p class="g1 leading-trim" data-reveal="title">
                                    Amenties
                                 </p>
                                 <div class="mt-1">
                                    <p class="text-c1 leading-trim" data-reveal="title">
                                       Collection of premium living spaces
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="l-residences__slide" data-plugin="parallax" data-parallax-enable-mq="md-up"
                           data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                           data-parallax--100-0='{"clip-path": "polygon(100% 0%, 100% 0%, 100% 100%, 100% 100%)", "transform": "scale(1.2)"}'
                           data-parallax--200-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.1)"}'
                           data-parallax--300-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.0)"}'>
                           <div class=" background background--cover">
                              <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                 data-plugin="appear " draggable="false">
                                 <source
                                    data-srcset="media/cache/homepage_residences_slider_xxxl/assets/images/media/landing/7.residence/residence-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/homepage_residences_slider_xxl/assets/images/media/landing/7.residence/residence-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/homepage_residences_slider_md/assets/images/media/landing/7.residence/residence-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="1440" height="900">
                                 <img
                                    data-src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-1%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    alt="" width="1440" height="900" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover parallax-image-move" draggable="false">
                                    <source
                                       srcset="media/cache/homepage_residences_slider_xxxl/assets/images/media/landing/7.residence/residence-1%40xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/homepage_residences_slider_xxl/assets/images/media/landing/7.residence/residence-1%40xxxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/homepage_residences_slider_md/assets/images/media/landing/7.residence/residence-1%40xxxl.webp"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="1440" height="900">
                                    <img
                                       src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-1%40xs.webp"
                                       alt="" width="1440" height="900" draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                        </div>
                        <div class="l-residences__slide" data-plugin="parallax" data-parallax-enable-mq="md-up"
                           data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                           data-parallax--200-0='{"clip-path": "polygon(100% 0%, 100% 0%, 100% 100%, 100% 100%)", "transform": "scale(1.2)"}'
                           data-parallax--300-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.1)"}'
                           data-parallax--400-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.0)"}'>
                           <div class=" background background--cover">
                              <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                 data-plugin="appear " draggable="false">
                                 <source
                                    data-srcset="media/cache/homepage_residences_slider_xxxl/assets/images/media/landing/7.residence/residence-2%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/homepage_residences_slider_xxl/assets/images/media/landing/7.residence/residence-2%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/homepage_residences_slider_md/assets/images/media/landing/7.residence/residence-2%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="1440" height="900">
                                 <img
                                    data-src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-2%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    alt="" width="1440" height="900" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover parallax-image-move" draggable="false">
                                    <source
                                       srcset="media/cache/homepage_residences_slider_xxxl/assets/images/media/landing/7.residence/residence-2%40xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/homepage_residences_slider_xxl/assets/images/media/landing/7.residence/residence-2%40xxxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/homepage_residences_slider_md/assets/images/media/landing/7.residence/residence-2%40xxxl.webp"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="1440" height="900">
                                    <img
                                       src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-2%40xs.webp"
                                       alt="" width="1440" height="900" draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                        </div>
                        <div class="l-residences__slide" data-plugin="parallax" data-parallax-enable-mq="md-up"
                           data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                           data-parallax--300-0='{"clip-path": "polygon(100% 0%, 100% 0%, 100% 100%, 100% 100%)", "transform": "scale(1.2)"}'
                           data-parallax--400-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.1)"}'
                           data-parallax--500-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.0)"}'>
                           <div class=" background background--cover">
                              <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                 data-plugin="appear " draggable="false">
                                 <source
                                    data-srcset="media/cache/homepage_residences_slider_xxxl/assets/images/media/landing/7.residence/residence-3%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/homepage_residences_slider_xxl/assets/images/media/landing/7.residence/residence-3%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/homepage_residences_slider_md/assets/images/media/landing/7.residence/residence-3%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="1440" height="900">
                                 <img
                                    data-src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-3%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    alt="" width="1440" height="900" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover parallax-image-move" draggable="false">
                                    <source
                                       srcset="media/cache/homepage_residences_slider_xxxl/assets/images/media/landing/7.residence/residence-3%40xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/homepage_residences_slider_xxl/assets/images/media/landing/7.residence/residence-3%40xxxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/homepage_residences_slider_md/assets/images/media/landing/7.residence/residence-3%40xxxl.webp"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="1440" height="900">
                                    <img
                                       src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-3%40xs.webp"
                                       alt="" width="1440" height="900" draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                        </div>
                     </div>
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-residences-sticky-1" data-plugin="parallax"
                        data-parallax-pattern="residencesSlide">
                        <div class="l-residences__caption col col--md-3 offset--md-9" data-plugin="parallax"
                           data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                           data-parallax-measure-selector=".sticky"
                           data-parallax--100-0='{"transform": "translateX(60vw)"}'
                           data-parallax--200-0='{"transform": "translateX(0vw)"}'>
                           <div class="l-residences__caption__line">
                              <div class="l-residences__caption__line-progress js-residences-progress-line">
                              </div>
                           </div>
                           <div class="l-residences__caption__content-animation js-residences-content"
                              data-plugin="contentAnimation" data-content-animation-animations='{
                                 "changeShow": {"name": "fadeIn"},
                                 "changeHide": {"name": "fadeOut"}
                                 }' data-content-aninmation-fixed-height="true"
                              data-content-animation-plugins="controller events">
                              <div class="content-animation">
                                 <div data-content-animation-item="1" class="ui-background ui-dark "
                                    aria-hidden="false">
                                    <div class="l-residences__caption__card ui-background">
                                       <div class="l-residences__caption__card-content">
                                          <p class="h4 l-residences__caption__type text-t1 leading-trim">
                                             Fitness
                                          </p>
                                          <p
                                             class="l-residences__caption__description text-color-small text-small leading-trim">
                                             Elevate your wellness with spaces designed to keep you active every day.
                                          </p>
                                          <div class="l-residences__caption__item">
                                             <p class="h4 leading-trim">
                                                Gym<br />Yoga Deck<br />Basket Ball<br />Running trek
                                             </p>
                                          </div>
                                       </div>
                                       <div class="
                                             l-residences__caption__button
                                             group group--button group--nowrap group--middle
                                             ui-background">
                                          <a class="btn btn--text-small btn--sm btn--outline btn--clone" href="#"
                                             data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   View More
                                                </span>
                                             </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-content-animation-item="2" class="ui-background ui-dark is-hidden"
                                    aria-hidden="true">
                                    <div class="l-residences__caption__card ui-background">
                                       <div class="l-residences__caption__card-content">
                                          <p class="h4 l-residences__caption__type text-t1 leading-trim">
                                             Fun
                                          </p>
                                          <p
                                             class="l-residences__caption__description text-color-small text-small leading-trim">
                                             Create unforgettable moments with entertainment for every generation.
                                          </p>
                                          <div class="l-residences__caption__item">
                                             <p class="h4 leading-trim">
                                                Swimming Pool<br />Kids Play Area<br />Amphitheatre
                                             </p>
                                          </div>
                                       </div>
                                       <div class="
                                             l-residences__caption__button
                                             group group--button group--nowrap group--middle
                                             ui-background">
                                          <a class="btn btn--text-small btn--sm btn--outline btn--clone" href="#"
                                             data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   View More
                                                </span>
                                             </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-content-animation-item="3" class="ui-background ui-dark is-hidden"
                                    aria-hidden="true">
                                    <div class="l-residences__caption__card ui-background">
                                       <div class="l-residences__caption__card-content">
                                          <p class="h4 l-residences__caption__type text-t1 leading-trim">
                                             Lifestyle Concierge
                                          </p>
                                          <p
                                             class="l-residences__caption__description text-color-small text-small leading-trim">
                                             Experience effortless living with personalized services at your fingertips.
                                          </p>
                                          <div class="l-residences__caption__item">
                                             <p class="h4 leading-trim">
                                                Reception<br />Entry Lobby<br />Concierge<br />ClubHouse<br />Premium
                                                Interiors
                                             </p>
                                          </div>
                                       </div>
                                       <div class="
                                             l-residences__caption__button
                                             group group--button group--nowrap group--middle
                                             ui-background">
                                          <a class="btn btn--text-small btn--sm btn--outline btn--clone" href="#"
                                             data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   View More
                                                </span>
                                             </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="residences" data-themed-class="ui-dark"></div>
                  </div>
                  <div
                     class="l-residences__webgl-container sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--lg-up ui-dark ui-background"
                     id="l-residences-sticky-2">
                     <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                        data-scroll-target="#l-residences-sticky-2">
                        <div class="l-residences__webgl pt-3">
                           <div class="background background--cover" data-plugin="parallax" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky" data-parallax-enable-mq="md-down"
                              data-parallax-0-0='{"transform": "scale(1.2)"}'
                              data-parallax--200-0='{"transform": "scale(1.0)"}'>
                              <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                 draggable="false">
                                 <img data-src="assets/images/media/landing/7.residence/residence-bg-xs@xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%221280%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%201280%22%3E%3C/svg%3E"
                                    alt="" width="720" height="1280" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover" draggable="false">
                                    <img src="assets/images/media/landing/7.residence/residence-bg-xs%40xs.webp" alt=""
                                       width="720" height="1280" draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                           <div class="l-residences__webgl-caption px-layout">
                              <div class="col ">
                                 <p class="g1 leading-trim">
                                    Amenties
                                 </p>
                                 <div class="col col--xs-2 mt-1">
                                    <p class="text-c1 leading-trim">
                                       Collection of premium living spaces
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="residences-mobile"></div>
                     <div class="l-residences__theme" data-themed-class="ui-dark"></div>
                  </div>
                  <div class="l-residences__slider-container is-hidden--lg-up ui-dark ui-background">
                     <div class="l-residences__slider__gradient">
                        <div></div>
                     </div>
                     <div class="l-residences__slider pt-3">
                        <div class="l-residences__slider__images mx-layout js-residences-content-animation-controller"
                           data-plugin="mobileScrollable">
                           <div class="p-relative">
                              <ul class="mobile-scrollable col col--md-auto mx-auto">
                                 <li class="mobile-scrollable__item">
                                    <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                       draggable="false">
                                       <img
                                          data-src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-1%40xs.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22360%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20360%22%3E%3C/svg%3E"
                                          alt="" width="360" height="360" decoding="async" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-cover" draggable="false">
                                          <img
                                             src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-1%40xs.webp"
                                             alt="" width="360" height="360" decoding="async" draggable="false">
                                       </picture>
                                    </noscript>
                                 </li>
                                 <li class="mobile-scrollable__item">
                                    <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                       draggable="false">
                                       <img
                                          data-src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-2%40xs.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22360%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20360%22%3E%3C/svg%3E"
                                          alt="" width="360" height="360" decoding="async" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-cover" draggable="false">
                                          <img
                                             src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-2%40xs.webp"
                                             alt="" width="360" height="360" decoding="async" draggable="false">
                                       </picture>
                                    </noscript>
                                 </li>
                                 <li class="mobile-scrollable__item">
                                    <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                       draggable="false">
                                       <img
                                          data-src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-3%40xs.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22360%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20360%22%3E%3C/svg%3E"
                                          alt="" width="360" height="360" decoding="async" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-cover" draggable="false">
                                          <img
                                             src="media/cache/homepage_residences_slider_xs/assets/images/media/landing/7.residence/residence-xs-3%40xs.webp"
                                             alt="" width="360" height="360" decoding="async" draggable="false">
                                       </picture>
                                    </noscript>
                                 </li>
                              </ul>
                           </div>
                           <div class="carousel__thumb group group--nowrap px-layout ">
                              <a role="button"
                                 class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail is-active leading-trim">
                                 <span class="carousel__thumb__item__text">Flats</span>
                              </a>
                              <a role="button"
                                 class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail  leading-trim">
                                 <span class="carousel__thumb__item__text">Townhouses</span>
                              </a>
                              <a role="button"
                                 class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail  leading-trim">
                                 <span class="carousel__thumb__item__text">Penthouses</span>
                              </a>
                           </div>
                        </div>
                        <div class="l-residences__caption col col--xs-4 ui-dark">
                           <div data-plugin="contentAnimation" data-content-animation-fixed-height="false"
                              data-content-animation-animations='{
                                 "changeShow": {"name": "fadeIn"},
                                 "changeHide": {"name": "fadeOut"}
                                 }' data-content-animation-plugins="controller events height counter"
                              data-content-animation-controller-selector=":root .js-residences-content-animation-controller">
                              <div class="l-residences__caption-text content-animation col col--md-12">
                                 <div data-content-animation-item="1"
                                    class="l-residences__caption__item px-layout pt-layout pb-2 ui-background ui-dark "
                                    aria-hidden="false">
                                    <div class="l-residences__caption__top">
                                       <p class="l-residences__caption__type h2 leading-trim">
                                          Flats
                                       </p>
                                       <p
                                          class="l-residences__caption__description text-color-small text-small leading-trim">
                                          Designer finishings
                                       </p>
                                       <a class="btn btn--text-small btn--sm btn--outline btn--clone"
                                          href="flats1cfa.html?types%5B%5D=flat" data-plugin=" button"
                                          data-button-clone-content="true">
                                          <span class="btn__content">
                                             <span class="btn__text  ">
                                                Search flats
                                             </span>
                                          </span>
                                       </a>
                                    </div>
                                    <div class="row row--nowrap mt-3">
                                       <div class="col col--xs-full l-residences__caption__item-inner">
                                          <p class="l-residences__caption__item-title h3 text-h3-stc leading-trim">
                                             138
                                          </p>
                                          <div class="col col--xs-full mt-0.5">
                                             <p
                                                class="l-residences__caption__item-text text-small text-color-small leading-trim">
                                                panoramic view flats
                                             </p>
                                          </div>
                                       </div>
                                       <div class="col col--xs-full l-residences__caption__item-inner">
                                          <p class="l-residences__caption__item-title h3 text-h3-stc leading-trim">
                                             <span>up to</span> 3.1 <span>m</span>
                                          </p>
                                          <div class="col col--xs-full mt-0.5">
                                             <p
                                                class="l-residences__caption__item-text text-small text-color-small leading-trim">
                                                Ceiling height
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-content-animation-item="2"
                                    class="l-residences__caption__item px-layout pt-layout pb-2 ui-background ui-dark is-hidden"
                                    aria-hidden="true">
                                    <div class="l-residences__caption__top">
                                       <p class="l-residences__caption__type h2 leading-trim">
                                          Townhouses
                                       </p>
                                       <p
                                          class="l-residences__caption__description text-color-small text-small leading-trim">
                                          Private patios
                                       </p>
                                       <a class="btn btn--text-small btn--sm btn--outline btn--clone"
                                          href="#subscribe-modal-townhouse" data-plugin=" button"
                                          data-button-clone-content="true">
                                          <span class="btn__content">
                                             <span class="btn__text  ">
                                                Available soon
                                             </span>
                                          </span>
                                       </a>
                                    </div>
                                    <div class="row row--nowrap mt-3">
                                       <div class="col col--xs-full l-residences__caption__item-inner">
                                          <p class="l-residences__caption__item-title h3 text-h3-stc leading-trim">
                                             5
                                          </p>
                                          <div class="col col--xs-full mt-0.5">
                                             <p
                                                class="l-residences__caption__item-text text-small text-color-small leading-trim">
                                                townhouses
                                             </p>
                                          </div>
                                       </div>
                                       <div class="col col--xs-full l-residences__caption__item-inner">
                                          <p class="l-residences__caption__item-title h3 text-h3-stc leading-trim">
                                             <span>up to</span> 4.1 <span>m</span>
                                          </p>
                                          <div class="col col--xs-full mt-0.5">
                                             <p
                                                class="l-residences__caption__item-text text-small text-color-small leading-trim">
                                                Ceiling height
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-content-animation-item="3"
                                    class="l-residences__caption__item px-layout pt-layout pb-2 ui-background ui-dark is-hidden"
                                    aria-hidden="true">
                                    <div class="l-residences__caption__top">
                                       <p class="l-residences__caption__type h2 leading-trim">
                                          Penthouses
                                       </p>
                                       <p
                                          class="l-residences__caption__description text-color-small text-small leading-trim">
                                          Green terraces
                                       </p>
                                       <a class="btn btn--text-small btn--sm btn--outline btn--clone"
                                          href="#subscribe-modal-penthouse" data-plugin=" button"
                                          data-button-clone-content="true">
                                          <span class="btn__content">
                                             <span class="btn__text  ">
                                                Available soon
                                             </span>
                                          </span>
                                       </a>
                                    </div>
                                    <div class="row row--nowrap mt-3">
                                       <div class="col col--xs-full l-residences__caption__item-inner">
                                          <p class="l-residences__caption__item-title h3 text-h3-stc leading-trim">
                                             7
                                          </p>
                                          <div class="col col--xs-full mt-0.5">
                                             <p
                                                class="l-residences__caption__item-text text-small text-color-small leading-trim">
                                                Penthouses
                                             </p>
                                          </div>
                                       </div>
                                       <div class="col col--xs-full l-residences__caption__item-inner">
                                          <p class="l-residences__caption__item-title h3 text-h3-stc leading-trim">
                                             <span>up to</span> 4.1 <span>m</span>
                                          </p>
                                          <div class="col col--xs-full mt-0.5">
                                             <p
                                                class="l-residences__caption__item-text text-small text-color-small leading-trim">
                                                Ceiling height
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 
                  
                  
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