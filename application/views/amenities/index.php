<!DOCTYPE html>
<html dir="ltr" lang="en" class="has-hover no-js not-ready">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <title>BST Developers | Infrastructure and amenities</title>
   <style>
      .js.not-ready,
      .js.not-ready * {
         transition: none !important;
      }

      .header__background {
         transform: translateY(0) !important;
         backdrop-filter: blur(15px);
         background: transparent;
         box-shadow: 0 0 0 1px var(--t-line);
      }
   </style>
   <link rel="stylesheet" href="assets/stylesheets/theme.css">
   <link rel="stylesheet" href="assets/stylesheets/infrastructure.css">
   <script>
      document.documentElement.classList.remove('no-js');
      document.documentElement.classList.add('js');

      if (navigator.platform.toUpperCase().indexOf('WIN') >= 0) {
         document.documentElement.classList.add('is-win');
      }
   </script>
</head>

<body data-barba="wrapper">
   <a href="#top" class="sr-only sr-only--focusable">Skip to main content</a>
   <div class="preloader js-preloader" data-plugin="preloader" data-preloader-visible="true">
      <div class="preloader__content ui-dark ui-background">
         <div class="preloader__content ui-dark ui-background">
            <div class="background background--cover preloader__gradient-animation">
               <div></div>
               <div></div>
               <div></div>
               <div></div>
            </div>
            <p class="preloader__content__cover h1">
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </p>
         </div>
      </div>
   </div>
   <div class="page-content-wrapper ui-light-background" data-barba="container" data-barba-namespace="page"
      data-plugin="utmSave">
      <div class="page-content-wrapper__inner js-page-content-wrapper">
         <?php $this->load->view('common/header'); ?>
         <!-- <header class="header is-hidden--print js-header header--sticky ui-dark  " isFlatPage="false"
            isFlatsPage="false" isVisualSearchPage="false" data-themed-enable-for-mobile="true"
            data-plugin="themed stickyHeader ">
            <div class="header__background"></div>
            <div class="header__content px-layout">
               <div class="header__left header-animation-logo is-hidden--md-up" data-custom-scroll-theme-target="left">
                  <a class="header__logo--mobile" href="index.html" aria-label="Homepage">
                     <img class="icon icon-logo-mobile" aria-hidden="true" src="assets/images/bst-new-logo.png" />
                  </a>
               </div>
               <div class="header__left header-animation-link is-hidden--sm-down"
                  data-custom-scroll-theme-target="left">
                  <a class="btn btn--text-small btn--link btn--icon-spacing-large btn-container is-hidden--sm-down"
                     href="#menu">
                     <span class="btn__content">
                        <span class="btn__icon ">
                           <svg class="icon icon-menu" width="40" height="10" aria-hidden="true" viewBox="0 0 40 10"
                              style="--icon-width: 40; --icon-height: 10;">
                              <use href="assets/images/icons.svg#menu" xlink:href="assets/images/icons.svg#menu"></use>
                           </svg>
                        </span>
                        <span class="btn__text btn__text--has-content ">
                           <span class="btn btn--text-small btn--link btn--clone btn--full" data-plugin=" button"
                              data-button-clone-content="true">
                              <span class="btn__content">
                                 <span class="btn__text  ">
                                    Menu
                                 </span>
                              </span>
                           </span>
                        </span>
                     </span>
                  </a>
                  <a class="btn btn--text-small  btn--link btn--clone is-hidden--no-hover" href="#menu-picker"
                     data-plugin=" button" data-button-clone-content="true">
                     <span class="btn__content">
                        <span class="btn__text  ">
                           Residences
                        </span>
                     </span>
                  </a>
                  <a class="btn btn--text-small  btn--link btn--clone is-hidden--hover" href="flats.html"
                     data-plugin=" button" data-button-clone-content="true">
                     <span class="btn__content">
                        <span class="btn__text  ">
                           Residences
                        </span>
                     </span>
                  </a>
               </div>
               <div class="header__center is-hidden--sm-down" data-custom-scroll-theme-target="right">
                  <a class="header__logo" href="index.html" aria-label="Homepage">
                     <span class="header__logo__inner header-animation-logo">
                        <span class="header__logo__left">
                           <img class="icon icon-logo-left" aria-hidden="true" src="assets/images/logoIcon.png" />
                        </span>
                        <span class="header__logo__right">
                           <img class="icon icon-logo-right" aria-hidden="true" src="assets/images/logoText.png" />
                        </span>
                     </span>
                  </a>
               </div>
               <div class="header__right header-animation-link" data-custom-scroll-theme-target="right">
                  <div class="favourite-btn is-hidden--md-up">
                     <a class="btn btn btn--text-small btn--link btn--square btn--sm" href="#favorites-modal">
                        <span class="btn__content">
                           <span class="btn__icon ">
                              <svg class="icon icon-heart" width="16" height="16" aria-hidden="true" viewBox="0 0 16 16"
                                 style="--icon-width: 16; --icon-height: 16;">
                                 <use href="assets/images/icons.svg#heart" xlink:href="assets/images/icons.svg#heart">
                                 </use>
                              </svg>
                           </span>
                        </span>
                     </a>
                     <span class="favourite-btn__counter text-c2 is-hidden" data-plugin="favouriteCounter"
                        data-favourite-counter-inactive-class="is-hidden"></span>
                  </div>
                  <a class="btn btn--text-small btn--link is-hidden--md-up" href="#menu" aria-label="Menu">
                     <span class="btn__content">
                        <span class="btn__icon ">
                           <svg class="icon icon-menu-mobile" width="30" height="9" aria-hidden="true"
                              viewBox="0 0 30 9" style="--icon-width: 30; --icon-height: 9;">
                              <use href="assets/images/icons.svg#menu-mobile"
                                 xlink:href="assets/images/icons.svg#menu-mobile"></use>
                           </svg>
                        </span>
                     </span>
                  </a>
                  <a class="btn btn--text-small  btn--link btn--clone is-hidden--sm-down" href="#callback-modal"
                     data-plugin=" button" data-button-clone-content="true">
                     <span class="btn__content">
                        <span class="btn__text  ">
                           Contact us
                        </span>
                     </span>
                  </a>
                  <div class="favourite-btn is-hidden--sm-down">
                     <a class="btn btn--sm btn--text-small" href="#favorites-modal">
                        <span class="btn__content">
                           <span class="btn__icon ">
                              <svg class="icon icon-heart" width="16" height="16" aria-hidden="true" viewBox="0 0 16 16"
                                 style="--icon-width: 16; --icon-height: 16;">
                                 <use href="assets/images/icons.svg#heart" xlink:href="assets/images/icons.svg#heart">
                                 </use>
                              </svg>
                           </span>
                        </span>
                     </a>
                     <span class="favourite-btn__counter text-c2 is-hidden" data-plugin="favouriteCounter"
                        data-favourite-counter-inactive-class="is-hidden"></span>
                  </div>
               </div>
            </div>
         </header> -->
         <div class="page-content js-page-content">
            <main id="top">
               <section class="section ui-dark-background" data-scroll-section data-plugin="reveal">
                  <div
                     class="ui-dark ui-light-background i-intro sticky sticky--full-height sticky--under-next sticky--under-next:lg-up"
                     id="i-intro"
                     data-scroll-snap-point='[{ "viewport": 0, "element": 0}, { "viewport": 0, "element": 33}]'>
                     <div class="is-hidden--sm-down" data-themed-class="ui-dark"></div>
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#i-intro">
                        <div class="i-intro__content p-relative" data-plugin="parallax" data-parallax-clamp="true"
                           data-parallax-measure-selector=".sticky" data-parallax-enable-mq="md-down"
                           data-parallax-0-0='{"height": "100svh"}' data-parallax--50-0='{"height": "70svh"}'>
                           <div class="background background--cover" data-plugin="parallax"
                              data-parallax-pattern="introImage">
                              <picture class=" img-cover" data-parallax-enable-mq="lg-up"
                                 data-parallax-measure-selector=".sticky" data-parallax-clamp="true"
                                 data-parallax-0-0="{&quot;transform&quot;: &quot;translateX(0%) scale(1.2)&quot;}"
                                 data-parallax--200-0="{&quot;transform&quot;: &quot;translateX(-36%) scale(1.0)&quot;}"
                                 data-plugin=" parallax" draggable="false">
                                 <source srcset="assets/images/media/infrastructure/1.intro/background-md@xxxl.webp"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source srcset="assets/images/media/infrastructure/1.intro/background-md@xxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <source srcset="assets/images/media/infrastructure/1.intro/background-md@md.webp"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="1440" height="900">
                                 <img src="assets/images/media/infrastructure/1.intro/background-xs%40xs.webp" alt=""
                                    width="720" height="840" decoding="async" fetchpriority="high"
                                    data-reveal="image-zoom" draggable="false">
                              </picture>
                              <div class="dim" data-plugin="parallax" data-parallax-clamp="true"
                                 data-parallax-measure-selector=".sticky" data-parallax-enable-mq="null"
                                 data-parallax-0-0='{"opacity": "1"}' data-parallax--50-0='{"opacity": "0"}'></div>
                           </div>
                           <div class="i-intro__caption text-right:lg p-relative px-layout py-layout"
                              data-themed-class='{"left": "ui-dark", "right": "ui-light", "mobile-left": "ui-dark", "mobile-right": "ui-dark"}'
                              data-plugin="parallax" data-parallax-enable-mq="null"
                              data-parallax-pattern="infrastructureIntroCaptionDesktop infrastructureIntroCaptionMobile">
                              <h1 class="h0 leading-trim mt-0.5 mt-0:lg is-hidden--md-down" data-reveal="text">
                                 Amenities
                              </h1>
                              <div class="h0 leading-trim mt-0.5 mt-0:lg is-hidden--lg-up pr-2">
                                 <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                    draggable="false">
                                    <img data-src="assets/images/media/infrastructure/1.intro/title-en.svg"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22320%22%20height=%2243%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20320%2043%22%3E%3C/svg%3E"
                                       alt="" width="320" height="43" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-full" draggable="false">
                                       <img src="assets/images/media/infrastructure/1.intro/title-en.svg" alt=""
                                          width="320" height="43" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="text-c1 leading-trim mt-1 mt-0.5:lg" data-reveal="text"
                                 data-reveal-distance="100px">
                                 <p>
                                    Beauty at&nbsp;Your Fingertips
                                 </p>
                              </div>
                              <a class="btn i-intro__next btn--outline btn--square btn--sm is-hidden--md-down"
                                 href="#i-next">
                                 <span class="btn__content">
                                    <span class="btn__icon ">
                                       <svg class="icon icon-arrow-down" width="14" height="16" aria-hidden="true"
                                          viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                                          <use href="assets/images/icons.svg#arrow-down"
                                             xlink:href="assets/images/icons.svg#arrow-down"></use>
                                       </svg>
                                    </span>
                                 </span>
                              </a>
                              <a class="btn i-intro__next btn--outline btn--square btn--sm is-hidden--lg-up"
                                 href="#i-next-mobile">
                                 <span class="btn__content">
                                    <span class="btn__icon ">
                                       <svg class="icon icon-arrow-down" width="14" height="16" aria-hidden="true"
                                          viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                                          <use href="assets/images/icons.svg#arrow-down"
                                             xlink:href="assets/images/icons.svg#arrow-down"></use>
                                       </svg>
                                    </span>
                                 </span>
                              </a>
                           </div>
                        </div>
                        <div
                           class="i-intro__text  col col--md-6 mr-0 ml-auto ui-light px-layout py-layout is-hidden--md-down"
                           data-reveal="text" data-plugin="parallax" data-parallax-enable-mq="lg-up"
                           data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                           data-parallax-0-0='{"clip-path": "polygon(100% 0%, 100% 0%, 100% 100%, 100% 100%)"}'
                           data-parallax--100-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>
                           <h3 class="h3 leading-trim mb-1">
                              Luxury Clubhouse
                           </h3>
                           <p class="text-t1 leading-trim">
                              Experience a world of elegance and recreation in our thoughtfully designed luxury
                              clubhouse.From social gatherings to relaxing evenings, every moment is crafted for an
                              elevated lifestyle.
                           </p>
                        </div>
                     </div>
                     <div style="position: absolute; top: 100svh;" id="i-next"></div>
                  </div>
                  <div class="i-intro__text ui-light ui-background  is-hidden--lg-up" data-themed-class="ui-light"
                     id="i-next-mobile">
                     <div class="ui-light-background col col--md-7 col--xl-6 mr-0 ml-auto ui-light px-layout py-5">
                        <h3 class="h3 leading-trim mb-1">
                           Luxury Clubhouse
                        </h3>
                        <p class="text-t1 leading-trim">
                           Experience a world of elegance and recreation in our thoughtfully designed luxury
                           clubhouse.From social gatherings to relaxing evenings, every moment is crafted for an
                           elevated lifestyle.
                        </p>
                     </div>
                  </div>
                  <div
                     class=" ui-dark ui-background i-video sticky sticky--full-height sticky--under-previous sticky--under-previous:lg-up sticky--under-next"
                     id="i-video"
                     data-scroll-snap-point='[{ "viewport": -100, "element": 0}, { "viewport": -300, "element": 0}, { "viewport": -400, "element": 0}]'
                     data-plugin="parallax" data-parallax-clamp="true" data-parallax-enable-mq="md-down"
                     data-parallax-100-0='{"transform": "translateY(-10%)"}'
                     data-parallax-0-0='{"transform": "translateY(0%)"}'>
                     <div data-themed-class="ui-dark" class="i-anchor"></div>
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#i-video">
                        <div class="background background--cover" data-plugin="parallax" data-parallax-enable-mq="md-up"
                           data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                           data-parallax--0-0='{"transform": "scale(1)"}'
                           data-parallax--150-0='{"transform": "scale(1.2)"}'>
                           <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                              draggable="false">
                              <source
                                 data-srcset="media/cache/infrastructure_video_bg_xxxl/assets/images/media/infrastructure/2.video/background-md%40xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                              <source
                                 data-srcset="media/cache/infrastructure_video_bg_xxl/assets/images/media/infrastructure/2.video/background-md%40xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                              <source
                                 data-srcset="media/cache/infrastructure_video_bg_md/assets/images/media/infrastructure/2.video/background-md%40xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                 width="1440" height="900">
                              <img
                                 data-src="media/cache/infrastructure_video_bg_xs/assets/images/media/infrastructure/2.video/background-xs%40xs.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 alt="" width="1440" height="900" draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" img-cover" draggable="false">
                                 <source
                                    srcset="media/cache/infrastructure_video_bg_xxxl/assets/images/media/infrastructure/2.video/background-md%40xxxl.webp"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    srcset="media/cache/infrastructure_video_bg_xxl/assets/images/media/infrastructure/2.video/background-md%40xxxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    srcset="media/cache/infrastructure_video_bg_md/assets/images/media/infrastructure/2.video/background-md%40xxxl.webp"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="1440" height="900">
                                 <img
                                    src="media/cache/infrastructure_video_bg_xs/assets/images/media/infrastructure/2.video/background-xs%40xs.webp"
                                    alt="" width="1440" height="900" draggable="false">
                              </picture>
                           </noscript>
                        </div>
                        <div class="i-video__video-wrapper background background--cover" data-plugin="parallax"
                           data-parallax-pattern="videoTranslate" data-parallax-enable-mq="sm-down">
                           <div class="i-video__video background background--cover" data-plugin="parallax"
                              data-parallax-pattern="videoZoom">
                              <div class="background background--cover is-hidden--sm-down">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <source data-srcset="assets/images/media/infrastructure/2.video/video-md@xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                    <source data-srcset="assets/images/media/infrastructure/2.video/video-md@xxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                    <img data-src="assets/images/media/infrastructure/2.video/video-md@md.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                       alt="" width="1440" height="900" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <source srcset="assets/images/media/infrastructure/2.video/video-md@xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                       <source srcset="assets/images/media/infrastructure/2.video/video-md@xxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                       <img src="assets/images/media/infrastructure/2.video/video-md%40md.webp" alt=""
                                          width="1440" height="900" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="background background--cover is-hidden--md-up">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <img data-src="assets/images/media/infrastructure/2.video/video-xs@xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%221280%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%201280%22%3E%3C/svg%3E"
                                       alt="" width="720" height="1280" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <img src="assets/images/media/infrastructure/2.video/video-xs%40xs.webp" alt=""
                                          width="720" height="1280" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="vimeo-background background background--cover is-hidden--sm-down">
                                 <iframe
                                    style="--ratio: 1.7777777777778; --aspect-ratio: 640 / 360; overflow: hidden; border: none;"
                                    width="640" height="360" loading="lazy"
                                    src="https://player.vimeo.com/video/1086359103?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                              </div>
                              <div class="vimeo-background background background--cover is-hidden--md-up">
                                 <iframe
                                    style="--ratio: 0.5625; --aspect-ratio: 360 / 640; overflow: hidden; border: none;"
                                    width="360" height="640" loading="lazy"
                                    src="https://player.vimeo.com/video/1086359033?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                              </div>
                           </div>
                        </div>
                        <div class="pt-2.5 i-video__text-container" data-plugin="parallax"
                           data-parallax-pattern="videoTitle">
                           <div class="text-t1 leading-trim ml-layout:lg i-video__text" data-reveal="text"
                              data-reveal-distance="0">
                              <p>
                                 Host grand celebrations and welcome guests with premium banquet and hospitality
                                 facilities.Designed to create unforgettable experiences with comfort and
                                 sophistication.
                              </p>
                           </div>
                           <div class="mr-4:lg i-video__title pl-layout pl-0:lg h0" data-reveal="text">
                              <h2 class="h0 leading-trim text-right:lg">
                                 Banquet & Hotels
                              </h2>
                           </div>
                        </div>
                        <div class="i-video__image background background--cover" data-plugin="parallax"
                           data-parallax-pattern="videoImage">
                           <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                              data-plugin="appear " draggable="false">
                              <source
                                 data-srcset="media/cache/infrastructure_video_img_xxxl/uploads/10/250304_gym_v2_no_people_2_1747837189.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                              <source
                                 data-srcset="media/cache/infrastructure_video_img_xxl/uploads/10/250304_gym_v2_no_people_2_1747837189.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                              <source
                                 data-srcset="media/cache/infrastructure_video_img_md/uploads/10/250304_gym_v2_no_people_2_1747837189.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                 width="1440" height="900">
                              <img
                                 data-src="media/cache/infrastructure_video_img_xs/uploads/10/250304_gym_v2_no_people_3_1747837188.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 alt="" width="1440" height="900" data-plugin="parallax" data-parallax-enable-mq="null"
                                 data-parallax-clamp="true"
                                 data-parallax-100-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                 data-parallax-0-100="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                 draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" img-cover parallax-image-move" draggable="false">
                                 <source
                                    srcset="media/cache/infrastructure_video_img_xxxl/uploads/10/250304_gym_v2_no_people_2_1747837189.webp"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    srcset="media/cache/infrastructure_video_img_xxl/uploads/10/250304_gym_v2_no_people_2_1747837189.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    srcset="media/cache/infrastructure_video_img_md/uploads/10/250304_gym_v2_no_people_2_1747837189.webp"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="1440" height="900">
                                 <img
                                    src="media/cache/infrastructure_video_img_xs/uploads/10/250304_gym_v2_no_people_3_1747837188.webp"
                                    alt="" width="1440" height="900" data-plugin="parallax"
                                    data-parallax-enable-mq="null" data-parallax-clamp="true"
                                    data-parallax-100-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                    data-parallax-0-100="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                    draggable="false">
                              </picture>
                           </noscript>
                        </div>
                        <div
                           class="col col--lg-6 ui-dark ui-background i-video__caption px-layout pt-layout pb-1 pb-layout:md ml-layout ml-0:lg"
                           data-plugin="parallax" data-parallax-pattern="videoCaptionMoveUp" data-distance="1">
                           <div class="i-video__caption__title" data-reveal="text">
                              <h3 class="h3 leading-trim">
                                 Swimming Pool
                              </h3>
                           </div>
                           <div class="i-video__caption__text mt-3.5" data-reveal="text">
                              <p class="text-t1 leading-trim">
                                 Dive into serenity with a beautifully designed swimming pool that offers the perfect
                                 escape from everyday life.A refreshing retreat for fitness, relaxation, and family fun.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="ui-dark i-slider sticky sticky--full-height sticky--under-next sticky--under-next:lg-up sticky--under-previous sticky--under-previous:lg-up is-hidden--md-down"
                     data-themed-class="ui-dark" id="i-slider">
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#i-slider">
                        <div class="i-slider__content row" data-plugin="parallax"
                           data-parallax-pattern="infrastructureSliderScroll">
                           <div
                              class="i-slider__caption ui-background col col--md-6 ui-dark px-layout py-layout p-relative"
                              data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax-0-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                              data-parallax--100-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>
                              <div class="i-slider__gradient blur-fix">
                                 <div></div>
                                 <div></div>
                                 <div></div>
                              </div>
                              <div class="js-slider-content" data-plugin="contentAnimation"
                                 data-content-animation-animations='{
                                    "changeShow": {"name": "text"},
                                    "changeHide": {"name": "fadeOut", "duration": "normal"}
                                    }' data-content-animation-plugins="controller events height counter"
                                 class="js-wellness-controller-selector">
                                 <div class="content-animation">
                                    <div data-content-animation-item="1" class="" aria-hidden="false">
                                       <div class="i-slider__caption__title">
                                          <h3 class="h3 leading-trim">
                                             Mini<br>
                                             Golf
                                          </h3>
                                       </div>
                                       <div class="i-slider__caption__text">
                                          <p class="text-t1 leading-trim">
                                             Enjoy a unique leisure experience with a professionally designed mini golf
                                             course.Perfect for friendly competitions and quality time with family and
                                             friends.
                                          </p>
                                       </div>
                                    </div>
                                    <div data-content-animation-item="2" class="is-hidden" aria-hidden="true">
                                       <div class="i-slider__caption__title">
                                          <h3 class="h3 leading-trim">
                                             Sports<br>
                                             Arena
                                          </h3>
                                       </div>
                                       <div class="i-slider__caption__text">
                                          <p class="text-t1 leading-trim">
                                             Stay active and energized with a modern sports arena featuring world -
                                             class recreational facilities.A space where fitness, passion, and community
                                             come together.
                                          </p>
                                       </div>
                                    </div>
                                    <div data-content-animation-item="3" class="is-hidden" aria-hidden="true">
                                       <div class="i-slider__caption__title">
                                          <h3 class="h3 leading-trim">
                                             Landscaped Gardens
                                          </h3>
                                       </div>
                                       <div class="i-slider__caption__text">
                                          <p class="text-t1 leading-trim">
                                             Immerse yourself in lush green surroundings thoughtfully crafted for peace
                                             and relaxation.Beautifully landscaped gardens offer a refreshing connection
                                             with nature.
                                          </p>
                                       </div>
                                    </div>
                                    <div data-content-animation-item="4" class="is-hidden" aria-hidden="true">
                                       <div class="i-slider__caption__title">
                                          <h3 class="h3 leading-trim">
                                             Children<br>
                                             Park
                                          </h3>
                                       </div>
                                       <div class="i-slider__caption__text">
                                          <p class="text-t1 leading-trim">
                                             A vibrant and secure play area where children can learn, explore, and
                                             create joyful memories.Designed to inspire imagination and endless fun.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="i-slider__scrollbar mr-layout">
                                 <div class="i-slider__scrollbar__progress js-scroll-progress-line"></div>
                              </div>
                           </div>
                           <div class="i-slider__images col col--md-6 parallax-image-move" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax-0-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)"}'
                              data-parallax--100-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>
                              <div data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                 data-parallax-measure-selector=".sticky"
                                 data-parallax--000-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.2)"}'
                                 data-parallax--100-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.1)"}'
                                 data-parallax--200-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.0)"}'
                                 data-scroll-snap-point='[    { "viewport": 0, "element": 100 }]'>
                                 <div class=" background background--cover">
                                    <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                       data-plugin="appear " draggable="false">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_xxxl/assets/images/media/infrastructure/3.slider/slider-md-1%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_xxl/assets/images/media/infrastructure/3.slider/slider-md-1%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_md/assets/images/media/infrastructure/3.slider/slider-md-1%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="900">
                                       <img
                                          data-src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-1%40xs.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          alt="" width="720" height="900" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-cover parallax-image-move" draggable="false">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_xxxl/assets/images/media/infrastructure/3.slider/slider-md-1%40xxxl.webp"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_xxl/assets/images/media/infrastructure/3.slider/slider-md-1%40xxxl.webp"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_md/assets/images/media/infrastructure/3.slider/slider-md-1%40xxxl.webp"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="720" height="900">
                                          <img
                                             src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-1%40xs.webp"
                                             alt="" width="720" height="900" draggable="false">
                                       </picture>
                                    </noscript>
                                 </div>
                              </div>
                              <div data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                 data-parallax-measure-selector=".sticky"
                                 data-parallax--100-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)", "transform": "scale(1.2)"}'
                                 data-parallax--200-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.1)"}'
                                 data-parallax--300-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.0)"}'
                                 data-scroll-snap-point='[    { "viewport": 0, "element": 200 }]'>
                                 <div class=" background background--cover">
                                    <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                       data-plugin="appear " draggable="false">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_xxxl/assets/images/media/infrastructure/3.slider/slider-md-2%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_xxl/assets/images/media/infrastructure/3.slider/slider-md-2%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_md/assets/images/media/infrastructure/3.slider/slider-md-2%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="900">
                                       <img
                                          data-src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-2%40xs.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          alt="" width="720" height="900" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-cover parallax-image-move" draggable="false">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_xxxl/assets/images/media/infrastructure/3.slider/slider-md-2%40xxxl.webp"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_xxl/assets/images/media/infrastructure/3.slider/slider-md-2%40xxxl.webp"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_md/assets/images/media/infrastructure/3.slider/slider-md-2%40xxxl.webp"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="720" height="900">
                                          <img
                                             src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-2%40xs.webp"
                                             alt="" width="720" height="900" draggable="false">
                                       </picture>
                                    </noscript>
                                 </div>
                              </div>
                              <div data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                 data-parallax-measure-selector=".sticky"
                                 data-parallax--200-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)", "transform": "scale(1.2)"}'
                                 data-parallax--300-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.1)"}'
                                 data-parallax--400-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.0)"}'
                                 data-scroll-snap-point='[    { "viewport": 0, "element": 300 }]'>
                                 <div class=" background background--cover">
                                    <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                       data-plugin="appear " draggable="false">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_xxxl/assets/images/media/infrastructure/3.slider/slider-md-3%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_xxl/assets/images/media/infrastructure/3.slider/slider-md-3%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_md/assets/images/media/infrastructure/3.slider/slider-md-3%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="900">
                                       <img
                                          data-src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-3%40xs.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          alt="" width="720" height="900" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-cover parallax-image-move" draggable="false">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_xxxl/assets/images/media/infrastructure/3.slider/slider-md-3%40xxxl.webp"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_xxl/assets/images/media/infrastructure/3.slider/slider-md-3%40xxxl.webp"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_md/assets/images/media/infrastructure/3.slider/slider-md-3%40xxxl.webp"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="720" height="900">
                                          <img
                                             src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-3%40xs.webp"
                                             alt="" width="720" height="900" draggable="false">
                                       </picture>
                                    </noscript>
                                 </div>
                              </div>
                              <div data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                                 data-parallax-measure-selector=".sticky"
                                 data-parallax--300-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)", "transform": "scale(1.2)"}'
                                 data-parallax--400-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.1)"}'
                                 data-parallax--500-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "scale(1.0)"}'
                                 data-scroll-snap-point='[    { "viewport": 0, "element": 400 }]'>
                                 <div class=" background background--cover">
                                    <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                       data-plugin="appear " draggable="false">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_xxxl/assets/images/media/infrastructure/3.slider/slider-md-4%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_xxl/assets/images/media/infrastructure/3.slider/slider-md-4%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          data-srcset="media/cache/infrastructure_slider_img_md/assets/images/media/infrastructure/3.slider/slider-md-4%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="900">
                                       <img
                                          data-src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-4%40xs.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                          alt="" width="720" height="900" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-cover parallax-image-move" draggable="false">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_xxxl/assets/images/media/infrastructure/3.slider/slider-md-4%40xxxl.webp"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_xxl/assets/images/media/infrastructure/3.slider/slider-md-4%40xxxl.webp"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                             height="900">
                                          <source
                                             srcset="media/cache/infrastructure_slider_img_md/assets/images/media/infrastructure/3.slider/slider-md-4%40xxxl.webp"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="720" height="900">
                                          <img
                                             src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-4%40xs.webp"
                                             alt="" width="720" height="900" draggable="false">
                                       </picture>
                                    </noscript>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="i-slider__mobile-scrollable-container is-hidden--lg-up ui-dark ui-background">
                     <div class="i-slider__mobile-scrollable row pt-3">
                        <div class="i-slider__mobile-scrollable-gradient">
                           <div></div>
                           <div></div>
                           <div></div>
                        </div>
                        <div
                           class="i-slider__mobile-scrollable__images p-relative mx-layout js-wellness-content-animation-controller"
                           data-plugin="mobileScrollable">
                           <ul class="mobile-scrollable col col--md-auto mx-auto">
                              <li class="mobile-scrollable__item carousel__list__item--gradient-large ">
                                 <img class="img-cover is-invisible--js is-hidden--no-js" alt="" draggable="false"
                                    width="720" height="900"
                                    img="&#x7B;&quot;decoding&quot;&#x3A;&quot;async&quot;&#x7D;" data-plugin="appear "
                                    data-src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-1%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E">
                                 <noscript>
                                    <img class="img-cover " alt="" draggable="false" width="720" height="900"
                                       img="&#x7B;&quot;decoding&quot;&#x3A;&quot;async&quot;&#x7D;"
                                       src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-1%40xs.webp">
                                 </noscript>
                              </li>
                              <li class="mobile-scrollable__item carousel__list__item--gradient-large ">
                                 <img class="img-cover is-invisible--js is-hidden--no-js" alt="" draggable="false"
                                    width="720" height="900"
                                    img="&#x7B;&quot;decoding&quot;&#x3A;&quot;async&quot;&#x7D;" data-plugin="appear "
                                    data-src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-2%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E">
                                 <noscript>
                                    <img class="img-cover " alt="" draggable="false" width="720" height="900"
                                       img="&#x7B;&quot;decoding&quot;&#x3A;&quot;async&quot;&#x7D;"
                                       src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-2%40xs.webp">
                                 </noscript>
                              </li>
                              <li class="mobile-scrollable__item carousel__list__item--gradient-large ">
                                 <img class="img-cover is-invisible--js is-hidden--no-js" alt="" draggable="false"
                                    width="720" height="900"
                                    img="&#x7B;&quot;decoding&quot;&#x3A;&quot;async&quot;&#x7D;" data-plugin="appear "
                                    data-src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-3%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E">
                                 <noscript>
                                    <img class="img-cover " alt="" draggable="false" width="720" height="900"
                                       img="&#x7B;&quot;decoding&quot;&#x3A;&quot;async&quot;&#x7D;"
                                       src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-3%40xs.webp">
                                 </noscript>
                              </li>
                              <li class="mobile-scrollable__item carousel__list__item--gradient-large ">
                                 <img class="img-cover is-invisible--js is-hidden--no-js" alt="" draggable="false"
                                    width="720" height="900"
                                    img="&#x7B;&quot;decoding&quot;&#x3A;&quot;async&quot;&#x7D;" data-plugin="appear "
                                    data-src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-4%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E">
                                 <noscript>
                                    <img class="img-cover " alt="" draggable="false" width="720" height="900"
                                       img="&#x7B;&quot;decoding&quot;&#x3A;&quot;async&quot;&#x7D;"
                                       src="media/cache/infrastructure_slider_img_xs/assets/images/media/infrastructure/3.slider/slider-xs-4%40xs.webp">
                                 </noscript>
                              </li>
                           </ul>
                           <div class="carousel__thumb group group--nowrap px-layout">
                              <a role="button"
                                 class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail leading-trim is-active">
                                 <span class="carousel__thumb__item__text">pool</span>
                              </a>
                              <a role="button"
                                 class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail leading-trim ">
                                 <span class="carousel__thumb__item__text">Fitness</span>
                              </a>
                              <a role="button"
                                 class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail leading-trim ">
                                 <span class="carousel__thumb__item__text">Beauty</span>
                              </a>
                              <a role="button"
                                 class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail leading-trim ">
                                 <span class="carousel__thumb__item__text">hammam</span>
                              </a>
                           </div>
                        </div>
                        <div class="i-slider__mobile-scrollable__caption col col--xs-4 col--md-12 ui-dark">
                           <div data-plugin="contentAnimation" data-content-animation-fixed-height="false"
                              data-content-animation-animations='{
                                 "changeShow": {"name": "fadeIn"},
                                 "changeHide": {"name": "fadeOut", "duration": "fast"}
                                 }' data-content-animation-plugins="controller events height counter"
                              data-content-animation-controller-selector=":root .js-wellness-content-animation-controller">
                              <div class="i-slider__mobile-scrollable__caption-text content-animation col col--md-6">
                                 <div data-content-animation-item="1" class="" aria-hidden="false">
                                    <div class="mb-1.5">
                                       <p class="h3 leading-trim">
                                          Spacious<br>
                                          Swimming Pool
                                       </p>
                                    </div>
                                    <p class="text-t1 leading-trim">
                                       Imagine diving into&nbsp;a&nbsp;crystal-clear pool, feeling light and refreshed
                                       with&nbsp;every cell. Splashing water washes your worries away. Emerge and feel
                                       pleasant coolness on&nbsp;your skin.
                                    </p>
                                 </div>
                                 <div data-content-animation-item="2" class="is-hidden" aria-hidden="true">
                                    <div class="mb-1.5">
                                       <p class="h3 leading-trim">
                                          Fitness Center<br>
                                          with&nbsp;Panoramic Windows
                                       </p>
                                    </div>
                                    <p class="text-t1 leading-trim">
                                       Our state-of-the-art equipment supports your health and well-being. Panoramic
                                       windows and comfortable environment guarantee your full satisfaction.
                                    </p>
                                 </div>
                                 <div data-content-animation-item="3" class="is-hidden" aria-hidden="true">
                                    <div class="mb-1.5">
                                       <p class="h3 leading-trim">
                                          Beauty Lounge with&nbsp;Massage Parlour
                                       </p>
                                    </div>
                                    <p class="text-t1 leading-trim">
                                       BST Developers beauty lounge and its unique care programs help you end your day
                                       on&nbsp;a&nbsp;finest note.
                                    </p>
                                 </div>
                                 <div data-content-animation-item="4" class="is-hidden" aria-hidden="true">
                                    <div class="mb-1.5">
                                       <p class="h3 leading-trim">
                                          Luxurious<br>
                                          Stone Hammam
                                       </p>
                                    </div>
                                    <p class="text-t1 leading-trim">
                                       Soft light, delicate textures of&nbsp;natural stone walls, and warm glowing steam
                                       that can make your body light and your thoughts&nbsp;&mdash; airy.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="ui-dark i-opening sticky sticky--under-previous sticky--under-previous--after-next:lg-up sticky--under-next sticky--full-height"
                     data-themed-class="ui-dark" id="i-opening" data-scroll-snap-point='[
                        { "viewport": -100, "element": 0, "scrollable": true },
                        { "viewport": 200, "element": 100 }
                        ]'>
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#i-opening">
                        <div class="i-opening__content row" data-plugin="parallax" data-parallax-clamp="true"
                           data-parallax-measure-selector=".sticky" data-parallax-enable-mq="md-down"
                           data-parallax--100-0='{"height": "100svh"}' data-parallax--150-0='{"height": "70svh"}'>
                           <div class="i-opening__images col col--xs-4 col--lg-6  p-relative" data-plugin="parallax"
                              data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax-0-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
                              data-parallax--100-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>
                              <div class=" background background--cover">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                    data-plugin="appear " draggable="false">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_img_xxxl/assets/images/media/infrastructure/4.opening/opening-md%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_img_xxl/assets/images/media/infrastructure/4.opening/opening-md%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_img_md/assets/images/media/infrastructure/4.opening/opening-md%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="900">
                                    <img
                                       data-src="media/cache/infrastructure_opening_img_xs/assets/images/media/infrastructure/4.opening/opening-xs%40xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                       alt="" width="720" height="900" data-plugin="parallax"
                                       data-parallax-enable-mq="null" data-parallax-clamp="true"
                                       data-parallax-measure-selector=".sticky"
                                       data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                       data-parallax--300-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                       draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover parallax-image-move" draggable="false">
                                       <source
                                          srcset="media/cache/infrastructure_opening_img_xxxl/assets/images/media/infrastructure/4.opening/opening-md%40xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          srcset="media/cache/infrastructure_opening_img_xxl/assets/images/media/infrastructure/4.opening/opening-md%40xxxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                       <source
                                          srcset="media/cache/infrastructure_opening_img_md/assets/images/media/infrastructure/4.opening/opening-md%40xxxl.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="900">
                                       <img
                                          src="media/cache/infrastructure_opening_img_xs/assets/images/media/infrastructure/4.opening/opening-xs%40xs.webp"
                                          alt="" width="720" height="900" data-plugin="parallax"
                                          data-parallax-enable-mq="null" data-parallax-clamp="true"
                                          data-parallax-measure-selector=".sticky"
                                          data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                          data-parallax--300-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                          draggable="false">
                                    </picture>
                                 </noscript>
                                 <div class="dim is-hidden--lg-up" data-plugin="parallax" data-parallax-clamp="true"
                                    data-parallax-measure-selector=".sticky" data-parallax-enable-mq="md-down"
                                    data-parallax--100-0='{"opacity": "1"}' data-parallax--150-0='{"opacity": "0"}'>
                                 </div>
                              </div>
                           </div>
                           <div class="i-opening__caption col col--xs-4 col--lg-6 ui-dark py-1 py-layout:lg p-relative"
                              data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                              data-parallax-measure-selector=".sticky"
                              data-parallax-0-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)"}'
                              data-parallax--100-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>
                              <div
                                 class="i-opening__caption__title text-right:lg col col--md-3 pl-layout pl-0:lg pr-layout"
                                 data-plugin="parallax" data-parallax-enable-mq="md-down" data-parallax-clamp="true"
                                 data-parallax-measure-selector=".sticky"
                                 data-parallax--100-0='{"opacity": "1", "transform": "translateY(0vh)"}'
                                 data-parallax--150-0='{"opacity": "0", "transform": "translateY(-30vh)"}'
                                 data-reveal="text">
                                 <h3 class="h1 leading-trim">
                                    Open Air Theatre
                                 </h3>
                              </div>
                              <div class="i-opening__gradient blur-fix is-hidden--md-down">
                                 <div></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sticky__layer ui-background is-hidden--md-down i-opening__right-column"
                        data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                        data-parallax-measure-selector=".sticky"
                        data-parallax-0-0='{"clip-path": "polygon(50vw 0vh, 100% 0vh, 100% 0vh, 50vw 0vh)"}'
                        data-parallax--100-0='{"clip-path": "polygon(50vw 100vh, 100% 100vh, 100% 200vh, 50vw 200vh)"}'
                        data-parallax--101-0='{"clip-path": "polygon(50vw 100vh, 100% 100vh, 100% 350vh, 50vw 350vh)"}'>
                        <div class="col col--lg-6 offset--lg-6 pt-2.5">
                           <div class="text-t1 leading-trim pl-0.5 i-opening__caption__text" data-reveal="text">
                              <p>
                                 Enjoy cultural performances, movie nights, and community events under the open sky. An
                                 inspiring space that brings entertainment and people together.
                              </p>
                           </div>
                           <div class="mt-5">
                              <div class="i-opening__list-item col col--md-2 pl-0.5">
                                 <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                    draggable="false">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="210" height="257">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="210" height="257">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="210" height="257">
                                    <img
                                       data-src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       alt="" width="210" height="257" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-full" draggable="false">
                                       <source
                                          srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="210" height="257">
                                       <source
                                          srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="210" height="257">
                                       <source
                                          srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="210" height="257">
                                       <img
                                          src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                          alt="" width="210" height="257" draggable="false">
                                    </picture>
                                 </noscript>
                                 <div class="i-opening__list-item__text text-c2 leading-trim ml-0.5">
                                    Luscious trees
                                 </div>
                              </div>
                              <div class="i-opening__list-item col col--md-2 pl-0.5">
                                 <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                    draggable="false">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="210" height="257">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="210" height="257">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="210" height="257">
                                    <img
                                       data-src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       alt="" width="210" height="257" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-full" draggable="false">
                                       <source
                                          srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="210" height="257">
                                       <source
                                          srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="210" height="257">
                                       <source
                                          srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="210" height="257">
                                       <img
                                          src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                          alt="" width="210" height="257" draggable="false">
                                    </picture>
                                 </noscript>
                                 <div class="i-opening__list-item__text text-c2 leading-trim ml-0.5">
                                    Decorative flowerbeds
                                 </div>
                              </div>
                              <div class="i-opening__list-item col col--md-2 pl-0.5">
                                 <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                    draggable="false">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="210" height="257">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="210" height="257">
                                    <source
                                       data-srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="210" height="257">
                                    <img
                                       data-src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22210%22%20height=%22257%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20210%20257%22%3E%3C/svg%3E"
                                       alt="" width="210" height="257" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-full" draggable="false">
                                       <source
                                          srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="210" height="257">
                                       <source
                                          srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="210" height="257">
                                       <source
                                          srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="210" height="257">
                                       <img
                                          src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                          alt="" width="210" height="257" draggable="false">
                                    </picture>
                                 </noscript>
                                 <div class="i-opening__list-item__text text-c2 leading-trim ml-0.5">
                                    Botanical zones
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="i-opening__caption__text-mobile is-hidden--lg-up ui-dark ui-background pb-2.5 p-relative">
                     <div class="pt-1">
                        <div class="px-layout text-t1 leading-trim i-opening__caption__text">
                           <p>
                              Enjoy cultural performances, movie nights, and community events under the open sky. An
                              inspiring space that brings entertainment and people together.
                           </p>
                        </div>
                        <ul class="mobile-scrollable mt-2">
                           <li class="i-opening__list-item mobile-scrollable__item">
                              <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                 draggable="false">
                                 <source
                                    data-srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="720" height="900">
                                 <img
                                    data-src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" decoding="async" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover" draggable="false">
                                    <source
                                       srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="900">
                                    <img
                                       src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-1%40xxxl.webp"
                                       alt="" width="720" height="900" decoding="async" draggable="false">
                                 </picture>
                              </noscript>
                              <div class="i-opening__list-item__text text-c2 leading-trim">
                                 Luscious trees
                              </div>
                           </li>
                           <li class="i-opening__list-item mobile-scrollable__item">
                              <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                 draggable="false">
                                 <source
                                    data-srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="720" height="900">
                                 <img
                                    data-src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" decoding="async" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover" draggable="false">
                                    <source
                                       srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="900">
                                    <img
                                       src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-2%40xxxl.webp"
                                       alt="" width="720" height="900" decoding="async" draggable="false">
                                 </picture>
                              </noscript>
                              <div class="i-opening__list-item__text text-c2 leading-trim">
                                 Decorative flowerbeds
                              </div>
                           </li>
                           <li class="i-opening__list-item mobile-scrollable__item">
                              <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                 draggable="false">
                                 <source
                                    data-srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="720" height="900">
                                 <img
                                    data-src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" decoding="async" draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover" draggable="false">
                                    <source
                                       srcset="media/cache/infrastructure_opening_slider_img_xxxl/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_opening_slider_img_xxl/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_opening_slider_img_md/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="900">
                                    <img
                                       src="media/cache/infrastructure_opening_slider_img_xs/assets/images/media/infrastructure/4.opening/image-3%40xxxl.webp"
                                       alt="" width="720" height="900" decoding="async" draggable="false">
                                 </picture>
                              </noscript>
                              <div class="i-opening__list-item__text text-c2 leading-trim">
                                 Botanical zones
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="i-opening__gradient blur-fix">
                        <div></div>
                     </div>
                  </div>
                  <div
                     class="ui-dark ui-background-light i-nature sticky sticky--full-height sticky--under-previous sticky--under-next"
                     id="i-nature" data-scroll-snap-point='[
                        { "viewport": -100, "element": 0}
                        ]'>
                     <div data-themed-class="ui-dark" class="i-anchor"></div>
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#i-nature">
                        <div class="i-nature__content pl-layout pr-layout pr-0:lg pt-1 pb-layout:lg pt-layout:lg">
                           <div class="background background--cover">
                              <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                 data-plugin="appear " draggable="false">
                                 <source
                                    data-srcset="media/cache/infrastructure_nature_xxxl/assets/images/media/infrastructure/5.nature/nature-md-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_nature_xxl/assets/images/media/infrastructure/5.nature/nature-md-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_nature_md/assets/images/media/infrastructure/5.nature/nature-md-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="1440" height="900">
                                 <img
                                    data-src="media/cache/infrastructure_nature_xs/assets/images/media/infrastructure/5.nature/nature-xs-1%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    alt="" width="1440" height="900" data-plugin="parallax"
                                    data-parallax-enable-mq="null" data-measure-selector=".sticky"
                                    data-parallax-clamp="true"
                                    data-parallax-100-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                    data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                    draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover parallax-image-move" draggable="false">
                                    <source
                                       srcset="media/cache/infrastructure_nature_xxxl/assets/images/media/infrastructure/5.nature/nature-md-1%40xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_nature_xxl/assets/images/media/infrastructure/5.nature/nature-md-1%40xxxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_nature_md/assets/images/media/infrastructure/5.nature/nature-md-1%40xxxl.webp"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="1440" height="900">
                                    <img
                                       src="media/cache/infrastructure_nature_xs/assets/images/media/infrastructure/5.nature/nature-xs-1%40xs.webp"
                                       alt="" width="1440" height="900" data-plugin="parallax"
                                       data-parallax-enable-mq="null" data-measure-selector=".sticky"
                                       data-parallax-clamp="true"
                                       data-parallax-100-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                       data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                       draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                           <div class="i-nature__caption p-relative mr-6:lg" data-reveal="text">
                              <h3 class="h2 leading-trim mt-0.5 mt-0:lg mb-1">
                                 Yoga Lawn
                              </h3>
                              <p class="text-c1 leading-trim">
                                 Reconnect with your mind and body in a tranquil yoga lawn surrounded by nature.The
                                 perfect setting for wellness, meditation, and inner peace.
                              </p>
                           </div>
                           <div class="i-nature__gradient flicker-fix">
                              <div></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="ui-light ui-background i-interiors sticky sticky--under-previous sticky--under-previous:lg-up sticky--under-next sticky--under-next:lg-up"
                     id="i-interiors" data-scroll-snap-point='[
                        { "viewport": -100, "element": 0},
                        { "viewport": -200, "element": 0},
                        { "viewport": -300, "element": 0},
                        { "viewport": -400, "element": 0}
                        ]'>
                     <div data-themed-class="ui-light" class="i-anchor"></div>
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#i-interiors">
                        <div data-plugin="parallax" data-parallax-measure-selector=".sticky"
                           data-parallax-enable-mq="lg-up" data-parallax-clamp="true"
                           data-parallax-200-100='{"transform": "translateY(0svh)"}'
                           data-parallax-100-100='{"transform": "translateY(-50svh)"}'>
                           <div class="i-interiors__content">
                              <div class="i-interiors__caption px-layout pt-3 pb-layout py-layout:lg p-relative"
                                 data-plugin="parallax" data-parallax-pattern="interiorsScroll">
                                 <div class="js-slider-content" data-plugin="contentAnimation"
                                    data-content-animation-animations='{
                                       "changeShow": {"name": "text"},
                                       "changeHide": {"name": "fadeOut", "duration": "fast"}
                                       }' data-content-animation-plugins="controller events height counter"
                                    class="js-wellness-controller-selector">
                                    <div class="content-animation">
                                       <div data-content-animation-item="1" class="" aria-hidden="false">
                                          <div class="i-interiors__caption__title col col--lg-5 px-1 px-0:lg">
                                             <h3 class="h1 leading-trim text-center text-left:lg">
                                                Sit down&nbsp;to&nbsp;read under&nbsp;ivy-covered awning
                                             </h3>
                                          </div>
                                       </div>
                                       <div data-content-animation-item="2" class="is-hidden" aria-hidden="true">
                                          <div class="i-interiors__caption__title col col--lg-5 px-1 px-0:lg">
                                             <h3 class="h1 leading-trim text-center text-left:lg">
                                                Bring the&nbsp;little ones to&nbsp;a&nbsp;landscaped playground
                                             </h3>
                                          </div>
                                       </div>
                                       <div data-content-animation-item="3" class="is-hidden" aria-hidden="true">
                                          <div class="i-interiors__caption__title col col--lg-5 px-1 px-0:lg">
                                             <h3 class="h1 leading-trim text-center text-left:lg">
                                                Meditate on&nbsp;our softest lawns
                                             </h3>
                                          </div>
                                       </div>
                                       <div data-content-animation-item="4" class="is-hidden" aria-hidden="true">
                                          <div
                                             class="i-interiors__caption__title i-interiors__caption__title--last col col--md-6 mx-0 mx-auto:lg pb-1:lg px-1 px-0.5:lg">
                                             <h3 class="h3 leading-trim text-center is-hidden--lg-up">
                                                BST Developers creates a&nbsp;mosaic<br>
                                                of&nbsp;beautiful reality.
                                             </h3>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="i-interiors__text is-hidden--md-down" data-plugin="parallax"
                                 data-parallax-pattern="interiorsText">
                                 <div class="col col--md-6 mx-0 mx-auto:lg pb-2:lg px-1 px-0.5:lg">
                                    <h3 class="h3 leading-trim text-center">
                                       BST Developers creates a&nbsp;mosaic<br>
                                       of&nbsp;beautiful reality.
                                    </h3>
                                 </div>
                              </div>
                              <div class="i-interiors__images background background--cover ui-dark is-hidden--sm-down">
                                 <div
                                    class="i-interiors__images__item col col--xs-4 col--md-6 js-interiors-image px-0.5 py-0.5"
                                    data-plugin="parallax" data-parallax-pattern="interiors1Image">
                                    <div class="background background--cover">
                                       <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                             height="420">
                                          <source
                                             data-srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                             height="420">
                                          <source
                                             data-srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="720" height="420">
                                          <img
                                             data-src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-1%40xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             alt="" width="720" height="420" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-cover parallax-image-move" draggable="false">
                                             <source
                                                srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                                height="420">
                                             <source
                                                srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                                height="420">
                                             <source
                                                srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="720" height="420">
                                             <img
                                                src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-1%40xs.webp"
                                                alt="" width="720" height="420" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div class="background i-interiors__images__item-dim"></div>
                                    <div class="dim" data-plugin="parallax" data-parallax-enable-mq="null"
                                       data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                                       data-parallax--100-0='{"opacity": "0"}' data-parallax--200-0='{"opacity": "0.4"}'
                                       data-parallax--300-0='{"opacity": "0.6"}'></div>
                                    <div
                                       class="i-interiors__images__text text-right:lg p-relative text-c2 leading-trim mr-0:lg ml-auto:lg">
                                       <p>
                                          Permanent outdoor recreation spaces
                                       </p>
                                    </div>
                                 </div>
                                 <div class="i-interiors__images__item col col--xs-4 col--md-6 px-0.5 py-0.5"
                                    data-plugin="parallax" data-parallax-pattern="interiors2Image">
                                    <div class="background background--cover">
                                       <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                             height="420">
                                          <source
                                             data-srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                             height="420">
                                          <source
                                             data-srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="720" height="420">
                                          <img
                                             data-src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-2%40xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             alt="" width="720" height="420" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-cover parallax-image-move" draggable="false">
                                             <source
                                                srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                                height="420">
                                             <source
                                                srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                                height="420">
                                             <source
                                                srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="720" height="420">
                                             <img
                                                src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-2%40xs.webp"
                                                alt="" width="720" height="420" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div class="dim" data-plugin="parallax" data-parallax-enable-mq="null"
                                       data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                                       data-parallax--300-0='{"opacity": "0"}'
                                       data-parallax--400-0='{"opacity": "0.4"}'></div>
                                    <div class="background i-interiors__images__item-dim"></div>
                                    <div
                                       class="i-interiors__images__text text-right:lg p-relative text-c2 leading-trim mr-0:lg ml-auto:lg">
                                       <p>
                                          Video-monitored<br>
                                          playgrounds
                                       </p>
                                    </div>
                                 </div>
                                 <div class="i-interiors__images__item col col--xs-4 col--md-6 px-0.5 py-0.5"
                                    data-plugin="parallax" data-parallax-pattern="interiors3Image">
                                    <div class="background background--cover">
                                       <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                          data-plugin="appear " draggable="false">
                                          <source
                                             data-srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                             height="420">
                                          <source
                                             data-srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                             height="420">
                                          <source
                                             data-srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                             srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="720" height="420">
                                          <img
                                             data-src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-3%40xs.webp"
                                             src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                             alt="" width="720" height="420" draggable="false">
                                       </picture>
                                       <noscript>
                                          <picture class=" img-cover parallax-image-move" draggable="false">
                                             <source
                                                srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                                height="420">
                                             <source
                                                srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                                height="420">
                                             <source
                                                srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                width="720" height="420">
                                             <img
                                                src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-3%40xs.webp"
                                                alt="" width="720" height="420" draggable="false">
                                          </picture>
                                       </noscript>
                                    </div>
                                    <div class="background i-interiors__images__item-dim"></div>
                                    <div
                                       class="i-interiors__images__text text-right:lg p-relative text-c2 leading-trim mr-0:lg ml-auto:lg">
                                       <p>
                                          Portable<br>
                                          outdoor furniture
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="i-interiors__images__item-sticky sticky__layer sticky__layer--sticky is-hidden--md-up"
                        style="--exquisite-index: 0;" data-scroll data-scroll-sticky data-scroll-target="#i-interiors"
                        data-plugin="stickyBottom">
                        <div class="i-interiors__images__item-container" data-plugin="parallax"
                           data-parallax-pattern="interiorsMobCard">
                           <div class="i-interiors__images__item p-relative px-0.5 py-0.5 ui-dark">
                              <div class="background background--cover">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                    data-plugin="appear " draggable="false">
                                    <source
                                       data-srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="420">
                                    <source
                                       data-srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="420">
                                    <source
                                       data-srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="420">
                                    <img
                                       data-src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-1%40xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       alt="" width="720" height="420" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover parallax-image-move" draggable="false">
                                       <source
                                          srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="420">
                                       <source
                                          srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="420">
                                       <source
                                          srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-1%40xxxl.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="420">
                                       <img
                                          src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-1%40xs.webp"
                                          alt="" width="720" height="420" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="background i-interiors__images__item-dim"></div>
                              <div class="dim" data-plugin="parallax" data-parallax-pattern="interiorsMobDim"></div>
                              <div
                                 class="i-interiors__images__text text-right:lg p-relative text-c2 leading-trim mr-0:lg ml-auto:lg">
                                 <p>
                                    Permanent outdoor recreation spaces
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="i-interiors__images__item-sticky sticky__layer sticky__layer--sticky is-hidden--md-up"
                        style="--exquisite-index: 1;" data-scroll data-scroll-sticky data-scroll-target="#i-interiors"
                        data-plugin="stickyBottom">
                        <div class="i-interiors__images__item-container" data-plugin="parallax"
                           data-parallax-pattern="interiorsMobCard">
                           <div class="i-interiors__images__item p-relative px-0.5 py-0.5 ui-dark">
                              <div class="background background--cover">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                    data-plugin="appear " draggable="false">
                                    <source
                                       data-srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="420">
                                    <source
                                       data-srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="420">
                                    <source
                                       data-srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="420">
                                    <img
                                       data-src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-2%40xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       alt="" width="720" height="420" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover parallax-image-move" draggable="false">
                                       <source
                                          srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="420">
                                       <source
                                          srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="420">
                                       <source
                                          srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-2%40xxxl.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="420">
                                       <img
                                          src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-2%40xs.webp"
                                          alt="" width="720" height="420" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="background i-interiors__images__item-dim"></div>
                              <div class="dim" data-plugin="parallax" data-parallax-pattern="interiorsMobDim"></div>
                              <div
                                 class="i-interiors__images__text text-right:lg p-relative text-c2 leading-trim mr-0:lg ml-auto:lg">
                                 <p>
                                    Video-monitored<br>
                                    playgrounds
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="i-interiors__images__item-sticky sticky__layer sticky__layer--sticky is-hidden--md-up"
                        style="--exquisite-index: 2;" data-scroll data-scroll-sticky data-scroll-target="#i-interiors"
                        data-plugin="stickyBottom">
                        <div class="i-interiors__images__item-container" data-plugin="parallax"
                           data-parallax-pattern="interiorsMobCard">
                           <div class="i-interiors__images__item p-relative px-0.5 py-0.5 ui-dark">
                              <div class="background background--cover">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                    data-plugin="appear " draggable="false">
                                    <source
                                       data-srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="720" height="420">
                                    <source
                                       data-srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="720" height="420">
                                    <source
                                       data-srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="720" height="420">
                                    <img
                                       data-src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-3%40xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22420%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20420%22%3E%3C/svg%3E"
                                       alt="" width="720" height="420" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover parallax-image-move" draggable="false">
                                       <source
                                          srcset="media/cache/infrastructure_interiors_xxxl/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="720" height="420">
                                       <source
                                          srcset="media/cache/infrastructure_interiors_xxl/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="720" height="420">
                                       <source
                                          srcset="media/cache/infrastructure_interiors_md/assets/images/media/infrastructure/6.interiors/interiors-md-3%40xxxl.webp"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="720" height="420">
                                       <img
                                          src="media/cache/infrastructure_interiors_xs/assets/images/media/infrastructure/6.interiors/interiors-xs-3%40xs.webp"
                                          alt="" width="720" height="420" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="background i-interiors__images__item-dim"></div>
                              <div class="dim" data-plugin="parallax" data-parallax-pattern="interiorsMobDim"></div>
                              <div
                                 class="i-interiors__images__text text-right:lg p-relative text-c2 leading-trim mr-0:lg ml-auto:lg">
                                 <p>
                                    Portable<br>
                                    outdoor furniture
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="ui-dark ui-background i-forest sticky sticky--full-height sticky--under-previous sticky--under-next sticky--under-next:lg-up"
                     id="i-forest"
                     data-scroll-snap-point='[{ "viewport": 0, "element": 25}, { "viewport": 0, "element": 50}]'>
                     <div class="is-hidden--sm-down" data-themed-class="ui-dark" class="i-anchor"></div>
                     <div class="is-hidden--md-up" data-themed-class="ui-dark" class="i-anchor-double"></div>
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#i-forest">
                        <div class="i-forest__gradient is-hidden--md-down">
                           <div></div>
                        </div>
                        <div class="i-forest__content p-relative">
                           <div class="background background--cover" data-plugin="parallax"
                              data-parallax-pattern="forestImage">
                              <div class="background background--cover is-hidden--sm-down">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <source data-srcset="assets/images/media/infrastructure/7.forest/video-md@xxxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                    <source data-srcset="assets/images/media/infrastructure/7.forest/video-md@xxl.webp"
                                       srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                    <img data-src="assets/images/media/infrastructure/7.forest/video-md@md.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                       alt="" width="1440" height="900" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <source srcset="assets/images/media/infrastructure/7.forest/video-md@xxxl.webp"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                       <source srcset="assets/images/media/infrastructure/7.forest/video-md@xxl.webp"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                       <img src="assets/images/media/infrastructure/7.forest/video-md%40md.webp" alt=""
                                          width="1440" height="900" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="background background--cover is-hidden--md-up">
                                 <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                                    draggable="false">
                                    <img data-src="assets/images/media/infrastructure/7.forest/video-xs@xs.webp"
                                       src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%221280%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%201280%22%3E%3C/svg%3E"
                                       alt="" width="720" height="1280" draggable="false">
                                 </picture>
                                 <noscript>
                                    <picture class=" img-cover" draggable="false">
                                       <img src="assets/images/media/infrastructure/7.forest/video-xs%40xs.webp" alt=""
                                          width="720" height="1280" draggable="false">
                                    </picture>
                                 </noscript>
                              </div>
                              <div class="vimeo-background background background--cover is-hidden--sm-down">
                                 <iframe
                                    style="--ratio: 1.7777777777778; --aspect-ratio: 640 / 360; overflow: hidden; border: none;"
                                    width="640" height="360" loading="lazy"
                                    src="https://player.vimeo.com/video/1086359303?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                              </div>
                              <div class="vimeo-background background background--cover is-hidden--md-up">
                                 <iframe
                                    style="--ratio: 0.5625; --aspect-ratio: 360 / 640; overflow: hidden; border: none;"
                                    width="360" height="640" loading="lazy"
                                    src="https://player.vimeo.com/video/1086359261?loop=1&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;background=1"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                              </div>
                           </div>
                           <div class="i-forest__caption" data-plugin="parallax"
                              data-parallax-pattern="forestCaption forestCaptionOpacity" data-reveal-group>
                              <div class="i-forest__caption-text leading-trim ml-auto mr-1:lg pt-3:lg px-layout px-0:lg"
                                 data-reveal="text">
                                 <p class="text-c1">
                                    Embrace a healthier lifestyle with a scenic jogging track designed for your daily
                                    fitness routine.Start every morning with fresh air, energy, and motivation.
                                 </p>
                              </div>
                              <div class="i-forest__caption-title pt-2.5 pt-0:lg px-layout px-0:lg" data-reveal="text">
                                 <h2 class="h0 leading-trim mt-0.5 mt-0:lg">
                                    Jogging<br>
                                    Track
                                 </h2>
                              </div>
                           </div>
                        </div>
                        <div class="i-forest__bottom-row flicker-fix is-hidden--md-down">
                           <div class=" row row--bottom-xs pt-layout pb-2">
                              <div class="i-forest__slider-container col col--xs-4 col--md-6" data-plugin="parallax"
                                 data-parallax-pattern="forestBottomSlider">
                                 <div
                                    class="i-forest__slider mx-auto ui-background ui-light px-0.5:lg py-0.5:lg p-relative">
                                    <div class="i-forest__slider-image" data-plugin="contentAnimation"
                                       data-content-animation-animations='{
                                          "changeShow": {"name": "imageClipRight", "duration": "slow"}
                                          }' data-content-animation-plugins="controller height"
                                       data-content-animation-controller-selector=":root .js-forest-controller-selector">
                                       <div class="content-animation">
                                          <div data-content-animation-item="1" class=" " aria-hidden="false">
                                             <picture class="is-invisible--js is-hidden--no-js img-full"
                                                data-plugin="appear " draggable="false">
                                                <source
                                                   data-srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                                   srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   media="(min-width: 1920px) and (min-height: 700px)" width="340"
                                                   height="400">
                                                <source
                                                   data-srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                                   srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   media="(min-width: 1440px) and (min-height: 700px)" width="340"
                                                   height="400">
                                                <source
                                                   data-srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                                   srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                   width="340" height="400">
                                                <img
                                                   data-src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                                   src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   alt="" width="340" height="400" draggable="false">
                                             </picture>
                                             <noscript>
                                                <picture class=" img-full" draggable="false">
                                                   <source
                                                      srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                                      media="(min-width: 1920px) and (min-height: 700px)" width="340"
                                                      height="400">
                                                   <source
                                                      srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                                      media="(min-width: 1440px) and (min-height: 700px)" width="340"
                                                      height="400">
                                                   <source
                                                      srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                                      media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                      width="340" height="400">
                                                   <img
                                                      src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                                      alt="" width="340" height="400" draggable="false">
                                                </picture>
                                             </noscript>
                                          </div>
                                          <div data-content-animation-item="2" class="is-hidden " aria-hidden="true">
                                             <picture class="is-invisible--js is-hidden--no-js img-full"
                                                data-plugin="appear " draggable="false">
                                                <source
                                                   data-srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                                   srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   media="(min-width: 1920px) and (min-height: 700px)" width="340"
                                                   height="400">
                                                <source
                                                   data-srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                                   srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   media="(min-width: 1440px) and (min-height: 700px)" width="340"
                                                   height="400">
                                                <source
                                                   data-srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                                   srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                   width="340" height="400">
                                                <img
                                                   data-src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                                   src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   alt="" width="340" height="400" draggable="false">
                                             </picture>
                                             <noscript>
                                                <picture class=" img-full" draggable="false">
                                                   <source
                                                      srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                                      media="(min-width: 1920px) and (min-height: 700px)" width="340"
                                                      height="400">
                                                   <source
                                                      srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                                      media="(min-width: 1440px) and (min-height: 700px)" width="340"
                                                      height="400">
                                                   <source
                                                      srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                                      media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                      width="340" height="400">
                                                   <img
                                                      src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                                      alt="" width="340" height="400" draggable="false">
                                                </picture>
                                             </noscript>
                                          </div>
                                          <div data-content-animation-item="3" class="is-hidden " aria-hidden="true">
                                             <picture class="is-invisible--js is-hidden--no-js img-full"
                                                data-plugin="appear " draggable="false">
                                                <source
                                                   data-srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                                   srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   media="(min-width: 1920px) and (min-height: 700px)" width="340"
                                                   height="400">
                                                <source
                                                   data-srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                                   srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   media="(min-width: 1440px) and (min-height: 700px)" width="340"
                                                   height="400">
                                                <source
                                                   data-srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                                   srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                   width="340" height="400">
                                                <img
                                                   data-src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                                   src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                                   alt="" width="340" height="400" draggable="false">
                                             </picture>
                                             <noscript>
                                                <picture class=" img-full" draggable="false">
                                                   <source
                                                      srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                                      media="(min-width: 1920px) and (min-height: 700px)" width="340"
                                                      height="400">
                                                   <source
                                                      srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                                      media="(min-width: 1440px) and (min-height: 700px)" width="340"
                                                      height="400">
                                                   <source
                                                      srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                                      media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                                      width="340" height="400">
                                                   <img
                                                      src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                                      alt="" width="340" height="400" draggable="false">
                                                </picture>
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="i-forest__slider-text js-forest-controller-selector"
                                       data-plugin="contentAnimation" data-content-animation-fixed-height="false"
                                       data-content-animation-animations='{
                                          "changeShow": {"name": "text"},
                                          "changeHide": {"name": "fadeOut", "duration": "fast"}
                                          }' data-content-animation-plugins="controller events height counter">
                                       <div class="content-animation">
                                          <div data-content-animation-item="1" class="" aria-hidden="false">
                                             <p class="text-c1 leading-trim">
                                                Neutral palette<br>
                                                of&nbsp;blossoms
                                             </p>
                                          </div>
                                          <div data-content-animation-item="2" class="is-hidden" aria-hidden="true">
                                             <p class="text-c1 leading-trim">
                                                Private<br>
                                                forest park
                                             </p>
                                          </div>
                                          <div data-content-animation-item="3" class="is-hidden" aria-hidden="true">
                                             <p class="text-c1 leading-trim">
                                                Multiple<br>
                                                forest layers
                                             </p>
                                          </div>
                                       </div>
                                       <div class="group group--small group--right mt-1">
                                          <a class="btn btn--outline btn--sm btn--square js-content-animation-prev"
                                             tabindex="0" role="button">
                                             <span class="btn__content">
                                                <span class="btn__icon ">
                                                   <svg class="icon icon-arrow-left" width="14" height="16"
                                                      aria-hidden="true" viewBox="0 0 14 16"
                                                      style="--icon-width: 14; --icon-height: 16;">
                                                      <use href="assets/images/icons.svg#arrow-left"
                                                         xlink:href="assets/images/icons.svg#arrow-left"></use>
                                                   </svg>
                                                </span>
                                             </span>
                                          </a>
                                          <a class="btn btn--outline btn--sm btn--square js-content-animation-next"
                                             tabindex="0" role="button">
                                             <span class="btn__content">
                                                <span class="btn__icon ">
                                                   <svg class="icon icon-arrow-right" width="14" height="16"
                                                      aria-hidden="true" viewBox="0 0 14 16"
                                                      style="--icon-width: 14; --icon-height: 16;">
                                                      <use href="assets/images/icons.svg#arrow-right"
                                                         xlink:href="assets/images/icons.svg#arrow-right"></use>
                                                   </svg>
                                                </span>
                                             </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col col--xs-4 col--md-6 px-layout" data-reveal="text" data-plugin="parallax"
                                 data-parallax-pattern="forestBottomClip">
                                 <h3 class="h3 leading-trim">
                                    Man-made forest garden features towering pine trees adorned with&nbsp;bushy crowns,
                                    verdant juniper, and delicate clusters of&nbsp;fieldfares. Step
                                    out&nbsp;of&nbsp;the&nbsp;shimmering shade into&nbsp;a&nbsp;forest clearing and hold
                                    the&nbsp;sunshine in&nbsp;your hands.
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="i-forest__bottom-row flicker-fix is-hidden--lg-up" data-plugin="parallax"
                     data-parallax-enable-mq="md-down" data-parallax-clamp="true"
                     data-parallax-100-0='{"transform": "translateY(20%)"}'
                     data-parallax-100-50='{"transform": "translateY(0%)"}'>
                     <div class="i-forest__gradient">
                        <div></div>
                        <div></div>
                     </div>
                     <div class="p-relative px-layout">
                        <div class="i-forest__slider mx-auto ui-background ui-light px-layout py-layout">
                           <div class="i-forest__slider-image" data-plugin="contentAnimation"
                              data-content-animation-animations='{
                                 "changeShow": {"name": "imageClipIn", "duration": "slow"}
                                 }' data-content-animation-plugins="controller height"
                              data-content-animation-controller-selector=":root .js-forest-controller-selector">
                              <div class="content-animation">
                                 <div data-content-animation-item="1" class=" " aria-hidden="false">
                                    <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                       draggable="false">
                                       <source
                                          data-srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="340" height="400">
                                       <source
                                          data-srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="340" height="400">
                                       <source
                                          data-srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="340" height="400">
                                       <img
                                          data-src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          alt="" width="340" height="400" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-full" draggable="false">
                                          <source
                                             srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="340"
                                             height="400">
                                          <source
                                             srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="340"
                                             height="400">
                                          <source
                                             srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="340" height="400">
                                          <img
                                             src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-1%40xxxl.webp"
                                             alt="" width="340" height="400" draggable="false">
                                       </picture>
                                    </noscript>
                                 </div>
                                 <div data-content-animation-item="2" class="is-hidden " aria-hidden="true">
                                    <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                       draggable="false">
                                       <source
                                          data-srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="340" height="400">
                                       <source
                                          data-srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="340" height="400">
                                       <source
                                          data-srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="340" height="400">
                                       <img
                                          data-src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          alt="" width="340" height="400" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-full" draggable="false">
                                          <source
                                             srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="340"
                                             height="400">
                                          <source
                                             srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="340"
                                             height="400">
                                          <source
                                             srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="340" height="400">
                                          <img
                                             src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-2%40xxxl.webp"
                                             alt="" width="340" height="400" draggable="false">
                                       </picture>
                                    </noscript>
                                 </div>
                                 <div data-content-animation-item="3" class="is-hidden " aria-hidden="true">
                                    <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                                       draggable="false">
                                       <source
                                          data-srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          media="(min-width: 1920px) and (min-height: 700px)" width="340" height="400">
                                       <source
                                          data-srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          media="(min-width: 1440px) and (min-height: 700px)" width="340" height="400">
                                       <source
                                          data-srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                          srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                          width="340" height="400">
                                       <img
                                          data-src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22340%22%20height=%22400%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20340%20400%22%3E%3C/svg%3E"
                                          alt="" width="340" height="400" draggable="false">
                                    </picture>
                                    <noscript>
                                       <picture class=" img-full" draggable="false">
                                          <source
                                             srcset="media/cache/infrastructure_forest_xxxl/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                             media="(min-width: 1920px) and (min-height: 700px)" width="340"
                                             height="400">
                                          <source
                                             srcset="media/cache/infrastructure_forest_xxl/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                             media="(min-width: 1440px) and (min-height: 700px)" width="340"
                                             height="400">
                                          <source
                                             srcset="media/cache/infrastructure_forest_md/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                             media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                             width="340" height="400">
                                          <img
                                             src="media/cache/infrastructure_forest_xs/assets/images/media/infrastructure/7.forest/forest-3%40xxxl.webp"
                                             alt="" width="340" height="400" draggable="false">
                                       </picture>
                                    </noscript>
                                 </div>
                              </div>
                           </div>
                           <div class="i-forest__slider-text js-forest-controller-selector"
                              data-plugin="contentAnimation" data-content-animation-fixed-height="false"
                              data-content-animation-animations='{
                                 "changeShow": {"name": "text"},
                                 "changeHide": {"name": "fadeOut", "duration": "fast"}
                                 }' data-content-animation-plugins="controller events height counter">
                              <div class="content-animation">
                                 <div data-content-animation-item="1" class="" aria-hidden="false">
                                    <p class="text-c1 leading-trim">
                                       Neutral palette<br>
                                       of&nbsp;blossoms
                                    </p>
                                 </div>
                                 <div data-content-animation-item="2" class="is-hidden" aria-hidden="true">
                                    <p class="text-c1 leading-trim">
                                       Private<br>
                                       forest park
                                    </p>
                                 </div>
                                 <div data-content-animation-item="3" class="is-hidden" aria-hidden="true">
                                    <p class="text-c1 leading-trim">
                                       Multiple<br>
                                       forest layers
                                    </p>
                                 </div>
                              </div>
                              <div class="group group--small group--right mt-1">
                                 <a class="btn btn--outline btn--sm btn--square js-content-animation-prev" tabindex="0"
                                    role="button">
                                    <span class="btn__content">
                                       <span class="btn__icon ">
                                          <svg class="icon icon-arrow-left" width="14" height="16" aria-hidden="true"
                                             viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                                             <use href="assets/images/icons.svg#arrow-left"
                                                xlink:href="assets/images/icons.svg#arrow-left"></use>
                                          </svg>
                                       </span>
                                    </span>
                                 </a>
                                 <a class="btn btn--outline btn--sm btn--square js-content-animation-next" tabindex="0"
                                    role="button">
                                    <span class="btn__content">
                                       <span class="btn__icon ">
                                          <svg class="icon icon-arrow-right" width="14" height="16" aria-hidden="true"
                                             viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                                             <use href="assets/images/icons.svg#arrow-right"
                                                xlink:href="assets/images/icons.svg#arrow-right"></use>
                                          </svg>
                                       </span>
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="ui-dark p-relative mt-2 pb-4 px-layout">
                        <h3 class="h3 leading-trim">
                           Man-made forest garden features towering pine trees adorned with&nbsp;bushy crowns, verdant
                           juniper, and delicate clusters of&nbsp;fieldfares. Step out&nbsp;of&nbsp;the&nbsp;shimmering
                           shade into&nbsp;a&nbsp;forest clearing and hold the&nbsp;sunshine in&nbsp;your hands.
                        </h3>
                     </div>
                  </div>
                  <div
                     class="ui-dark i-terrace p-relative sticky sticky--full-height  sticky--under-previous sticky--under-next sticky--under-next:lg-up"
                     id="i-terrace" data-scroll-snap-point='[{ "viewport": 0, "element": 33.3}]'>
                     <div data-themed-class="ui-dark" class="i-anchor"></div>
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#i-terrace">
                        <div class="i-terrace__background background background--cover">
                           <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                              draggable="false">
                              <source
                                 data-srcset="media/cache/infrastructure_terrace_xxxl/assets/images/media/infrastructure/8.terrace/terrace-md%40xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                              <source
                                 data-srcset="media/cache/infrastructure_terrace_xxl/assets/images/media/infrastructure/8.terrace/terrace-md%40xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                              <source
                                 data-srcset="media/cache/infrastructure_terrace_md/assets/images/media/infrastructure/8.terrace/terrace-md%40xxxl.webp"
                                 srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                 media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                 width="1440" height="900">
                              <img
                                 data-src="media/cache/infrastructure_terrace_xs/assets/images/media/infrastructure/8.terrace/terrace-xs%40xs.webp"
                                 src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%221280%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%201280%22%3E%3C/svg%3E"
                                 alt="" width="720" height="1280" draggable="false">
                           </picture>
                           <noscript>
                              <picture class=" img-cover" draggable="false">
                                 <source
                                    srcset="media/cache/infrastructure_terrace_xxxl/assets/images/media/infrastructure/8.terrace/terrace-md%40xxxl.webp"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    srcset="media/cache/infrastructure_terrace_xxl/assets/images/media/infrastructure/8.terrace/terrace-md%40xxxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    srcset="media/cache/infrastructure_terrace_md/assets/images/media/infrastructure/8.terrace/terrace-md%40xxxl.webp"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="1440" height="900">
                                 <img
                                    src="media/cache/infrastructure_terrace_xs/assets/images/media/infrastructure/8.terrace/terrace-xs%40xs.webp"
                                    alt="" width="720" height="1280" draggable="false">
                              </picture>
                           </noscript>
                        </div>
                        <div
                           class="i-terrace__title p-relative pt-2.5 pt-2:lg offset--lg-5 col--lg-7 pl-layout pl-0:lg pr-layout text-right text-left:lg"
                           data-reveal="title">
                           <p class="h0 leading-trim text-right:lg">
                              Panoramic<br>Terraces
                           </p>
                        </div>
                        <div class="i-terrace__text" data-reveal="text">
                           <p class="leading-trim">
                              Light plays delicately across&nbsp;the&nbsp;viewing terraces, hiding among&nbsp;flowers,
                              shimmering in&nbsp;treetops, arranging a&nbsp;quiet dance of&nbsp;shadows. Let nothing
                              distract you from&nbsp;the&nbsp;twinkle of&nbsp;distant stars or the&nbsp;loving sparks
                              in&nbsp;the&nbsp;eyes of&nbsp;your close ones.
                           </p>
                        </div>
                        <div class="i-terrace__pins">
                           <div class="i-terrace__pin i-terrace__pin--1"
                              style="--left: 33.333%; --top: 68.444%; --left-mobile: 12.777%; --top-mobile: 73.125%;">
                              <span class="btn i-terrace__pin-button btn--square btn--outline">
                                 <span class="btn__content">
                                    <span class="btn__icon ">
                                       <svg class="icon icon-flower" width="16" height="16" aria-hidden="true"
                                          viewBox="0 0 16 16" style="--icon-width: 16; --icon-height: 16;">
                                          <use href="assets/images/icons.svg#flower"
                                             xlink:href="assets/images/icons.svg#flower"></use>
                                       </svg>
                                    </span>
                                 </span>
                              </span>
                              <div class="i-terrace__pin-tooltip px-0.5 pt-3 pb-layout pb-0.5:lg ui-dark ui-background"
                                 data-reveal="text">
                                 <p class="text-c2 leading-trim">
                                    Decorative climbing plants
                                 </p>
                              </div>
                           </div>
                           <div class="i-terrace__pin i-terrace__pin--2"
                              style="--left: 40.97222%; --top: 53.33333%; --left-mobile: 30.277%; --top-mobile: 53.906%;">
                              <span class="btn i-terrace__pin-button btn--square btn--outline">
                                 <span class="btn__content">
                                    <span class="btn__icon ">
                                       <svg class="icon icon-glass" width="16" height="16" aria-hidden="true"
                                          viewBox="0 0 16 16" style="--icon-width: 16; --icon-height: 16;">
                                          <use href="assets/images/icons.svg#glass"
                                             xlink:href="assets/images/icons.svg#glass"></use>
                                       </svg>
                                    </span>
                                 </span>
                              </span>
                              <div class="i-terrace__pin-tooltip px-0.5 pt-3 pb-layout pb-0.5:lg ui-dark ui-background"
                                 data-reveal="text">
                                 <p class="text-c2 leading-trim">
                                    Transparent panoramic railing
                                 </p>
                              </div>
                           </div>
                           <div class="i-terrace__pin i-terrace__pin--3"
                              style="--left: 67.36111%; --top: 70%; --left-mobile: 81.944%; --top-mobile: 71.093%;">
                              <span class="btn i-terrace__pin-button btn--square btn--outline">
                                 <span class="btn__content">
                                    <span class="btn__icon ">
                                       <svg class="icon icon-light" width="16" height="16" aria-hidden="true"
                                          viewBox="0 0 16 16" style="--icon-width: 16; --icon-height: 16;">
                                          <use href="assets/images/icons.svg#light"
                                             xlink:href="assets/images/icons.svg#light"></use>
                                       </svg>
                                    </span>
                                 </span>
                              </span>
                              <div class="i-terrace__pin-tooltip px-0.5 pt-3 pb-layout pb-0.5:lg ui-dark ui-background"
                                 data-reveal="text">
                                 <p class="text-c2 leading-trim">
                                    Integrated lighting
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="ui-dark ui-light-background i-parking sticky sticky--full-height sticky--under-previous sticky--under-next sticky--under-next:lg-up"
                     id="i-parking" data-scroll-snap-point='[
                        {"viewport": -100, "element": 0},
                        {"viewport": -150, "element": 0},
                        {"viewport": -180, "element": 0}
                        ]'>
                     <div data-themed-class="ui-dark" class="i-anchor"></div>
                     <div class="is-hidden--md-down" data-themed-class='{"left": "ui-dark", "right": "ui-light"} '
                        class="i-anchor-half"></div>
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#i-parking">
                        <div class="i-parking__content px-layout py-1 p-relative" data-plugin="parallax"
                           data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
                           data-parallax-enable-mq="md-down" data-parallax--100-0='{"height": "calc(100 * var(--svh))"}'
                           data-parallax--150-0='{"height": "calc(65 * var(--svh))"}'>
                           <div class="background background--cover" data-plugin="parallax"
                              data-parallax-pattern="parkingImage">
                              <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                 data-plugin="appear " draggable="false">
                                 <source
                                    data-srcset="media/cache/infrastructure_parking_xxxl/assets/images/media/infrastructure/9.parking/parking-md%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_parking_xxl/assets/images/media/infrastructure/9.parking/parking-md%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_parking_md/assets/images/media/infrastructure/9.parking/parking-md%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="1440" height="900">
                                 <img
                                    data-src="media/cache/infrastructure_parking_xs/assets/images/media/infrastructure/9.parking/parking-xs%40xs.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    alt="" width="1440" height="900" data-plugin="parallax"
                                    data-parallax-enable-mq="lg-up" data-parallax-clamp="true"
                                    data-parallax-100-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                    data-parallax-0-300="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                    draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover parallax-image-move" draggable="false">
                                    <source
                                       srcset="media/cache/infrastructure_parking_xxxl/assets/images/media/infrastructure/9.parking/parking-md%40xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_parking_xxl/assets/images/media/infrastructure/9.parking/parking-md%40xxxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_parking_md/assets/images/media/infrastructure/9.parking/parking-md%40xxxl.webp"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="1440" height="900">
                                    <img
                                       src="media/cache/infrastructure_parking_xs/assets/images/media/infrastructure/9.parking/parking-xs%40xs.webp"
                                       alt="" width="1440" height="900" data-plugin="parallax"
                                       data-parallax-enable-mq="lg-up" data-parallax-clamp="true"
                                       data-parallax-100-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                       data-parallax-0-300="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                       draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                           <div class="i-parking__caption p-relative" data-plugin="parallax"
                              data-parallax-pattern="parkingCaption" data-reveal="text">
                              <h2 class="h0 leading-trim mt-0.5 mt-0:lg text-right text-left:lg">
                                 Park-like&nbsp;Parking
                              </h2>
                           </div>
                        </div>
                        <div
                           class="i-parking__text col col--lg-6 mr-0 ml-auto ui-light px-layout py-layout is-hidden--md-down"
                           data-plugin="parallax" data-parallax-pattern="parkingText">
                           <div class="i-parking__text-text">
                              <p class="leading-trim">
                                 At&nbsp;BST Developers, everything has been marked by&nbsp;designer’s hand that turned
                                 utility
                                 spaces aesthetic objects. Our two-level designer car park is framed
                                 with&nbsp;a&nbsp;natural stone fence, its textures subtly accentuated
                                 by&nbsp;a&nbsp;chain of&nbsp;opalescent sconces. Encircled by&nbsp;trees and dramatic
                                 silhouettes of&nbsp;flowerbeds, this parking will make your car sparkle
                                 like&nbsp;a&nbsp;jewel meant for&nbsp;the&nbsp;opulent lifestyle.
                              </p>
                           </div>
                           <div>
                              <div class="i-parking__list-item  py-0.5:lg">
                                 <p class="h3 leading-trim">
                                    Designed interior
                                 </p>
                              </div>
                              <div class="i-parking__list-item  py-0.5:lg">
                                 <p class="h3 leading-trim">
                                    Two levels
                                 </p>
                              </div>
                              <div class="i-parking__list-item  pt-0.5:lg">
                                 <p class="h3 leading-trim">
                                    176 parking spaces
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="i-parking__text ui-light-background col col--lg-6 mr-0 ml-auto ui-light px-layout pt-1 pb-3 is-hidden--lg-up"
                     data-themed-class="ui-light">
                     <div class="i-parking__text-text mb-2">
                        <p class="leading-trim">
                           At&nbsp;BST Developers, everything has been marked by&nbsp;designer’s hand that turned
                           utility
                           spaces aesthetic objects. Our two-level designer car park is framed with&nbsp;a&nbsp;natural
                           stone fence, its textures subtly accentuated by&nbsp;a&nbsp;chain of&nbsp;opalescent sconces.
                           Encircled by&nbsp;trees and dramatic silhouettes of&nbsp;flowerbeds, this parking will make
                           your car sparkle like&nbsp;a&nbsp;jewel meant for&nbsp;the&nbsp;opulent lifestyle.
                        </p>
                     </div>
                     <div class="i-parking__list-item  py-1 py-0.5:lg">
                        <p class="h3 leading-trim">
                           Designed interior
                        </p>
                     </div>
                     <div class="i-parking__list-item  py-1 py-0.5:lg">
                        <p class="h3 leading-trim">
                           Two levels
                        </p>
                     </div>
                     <div class="i-parking__list-item  pt-1 pt-0.5:lg">
                        <p class="h3 leading-trim">
                           176 parking spaces
                        </p>
                     </div>
                  </div>
                  <div
                     class="ui-dark ui-background-light more-block  sticky sticky:lg-up sticky--full-height sticky--under-previous"
                     id="i-more" data-scroll-snap-point='[{ "viewport": 0, "element": 0}]' data-plugin="reveal">
                     <div data-themed-class="ui-dark" class="i-anchor"></div>
                     <div class="sticky__layer sticky__layer--sticky sticky--full-height" data-scroll data-scroll-sticky
                        data-scroll-target="#i-more">
                        <div class="more-block__content py-6 py-layout:lg p-relative">
                           <div class="background background--cover ">
                              <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                                 data-plugin="appear " draggable="false">
                                 <source
                                    data-srcset="media/cache/infrastructure_more_xxxl/assets/images/media/infrastructure/10.more/more-md-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_more_xxl/assets/images/media/infrastructure/10.more/more-md-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                 <source
                                    data-srcset="media/cache/infrastructure_more_md/assets/images/media/infrastructure/10.more/more-md-1%40xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="1440" height="900">
                                 <img
                                    data-src="media/cache/infrastructure_more_xs/assets/images/media/infrastructure/10.more/more-xs-1.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22840%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20840%22%3E%3C/svg%3E"
                                    alt="" width="720" height="840" data-plugin="parallax"
                                    data-parallax-enable-mq="null" data-parallax-clamp="true"
                                    data-parallax-100-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                    data-parallax--100-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                    draggable="false">
                              </picture>
                              <noscript>
                                 <picture class=" img-cover parallax-image-move" draggable="false">
                                    <source
                                       srcset="media/cache/infrastructure_more_xxxl/assets/images/media/infrastructure/10.more/more-md-1%40xxxl.webp"
                                       media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_more_xxl/assets/images/media/infrastructure/10.more/more-md-1%40xxxl.webp"
                                       media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                                    <source
                                       srcset="media/cache/infrastructure_more_md/assets/images/media/infrastructure/10.more/more-md-1%40xxxl.webp"
                                       media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                       width="1440" height="900">
                                    <img
                                       src="media/cache/infrastructure_more_xs/assets/images/media/infrastructure/10.more/more-xs-1.webp"
                                       alt="" width="720" height="840" data-plugin="parallax"
                                       data-parallax-enable-mq="null" data-parallax-clamp="true"
                                       data-parallax-100-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                                       data-parallax--100-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                                       draggable="false">
                                 </picture>
                              </noscript>
                           </div>
                           <div class="pt-2:lg more-block__caption text-right px-layout">
                              <div class="text-c1 leading-trim p-relative " data-reveal="text"
                                 data-reveal-distance="100px 0px">
                                 <p>
                                    Natural Oasis in&nbsp;the&nbsp;heart of&nbsp;the&nbsp;City
                                 </p>
                              </div>
                              <h3 class="g1 leading-trim mt-0.3 mt-0:lg p-relative " data-reveal="text"
                                 data-reveal-distance="100px 0px">
                                 Location
                              </h3>
                              <a class="btn more-block__button btn--outline btn--square btn--lg " href="location.html"
                                 data-reveal="fade-in" data-reveal-distance="100px 0px">
                                 <span class="btn__content">
                                    <span class="btn__icon ">
                                       <svg class="icon icon-arrow-right" width="17" height="16" aria-hidden="true"
                                          viewBox="0 0 17 16" style="--icon-width: 17; --icon-height: 16;">
                                          <use href="assets/images/icons.svg#arrow-right"
                                             xlink:href="assets/images/icons.svg#arrow-right"></use>
                                       </svg>
                                    </span>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </main>
            <?php $this->load->view('common/footer.php'); ?>
         </div>
         <div class="js-modal">
            <div class="modal modal--full modal--split-animate ui-dark is-hidden" role="dialog" aria-hidden="true"
               aria-label="Заказать звонок" id="callback-modal" data-plugin="modal" data-modal-one-per-page="true"
               data-nosnippet>
               <div class="modal__background"></div>
               <div class="modal__animation">
                  <div class="modal__scroller">
                     <div class="modal__scroller__scrollable js-scroll-parent">
                        <div class="modal__content-wrapper js-modal-scrollable-content">
                           <div class="modal__content ui-background js-modal-ignore-auto-close js-scroll-parent-ignore">
                              <a class="btn btn--primary btn--square modal__close  js-modal-close" aria-label="Close"
                                 tabindex="0" role="button">
                                 <span class="btn__content">
                                    <span class="btn__icon ">
                                       <svg class="icon icon-close" width="14" height="14" aria-hidden="true"
                                          viewBox="0 0 14 14" style="--icon-width: 14; --icon-height: 14;">
                                          <use href="assets/images/icons.svg#close"
                                             xlink:href="assets/images/icons.svg#close"></use>
                                       </svg>
                                    </span>
                                 </span>
                              </a>
                              <div data-scroll-section>
                                 <div class="l-callback row ui-dark js-callback" data-plugin="tabs mouseAnimation"
                                    data-tabs-enable-mq="false" data-tabs-animate-height="false"
                                    data-mouse-animation-use-css-variable="false"
                                    data-mouse-animation-target-selector=".l-callback__spiral picture"
                                    data-mouse-animation-multiplier='[{"unit": "%", "value": -5}, {"unit": "px", "value": 0}]'
                                    id="l-callback">
                                    <div class="l-callback__background is-hidden--sm-down" data-scroll
                                       data-scroll-sticky data-scroll-target="#l-callback">
                                       <div
                                          class="l-callback__gradient background background--cover js-tree-canvas-container is-hidden--sm-down"
                                          data-plugin="webglTreeCallback">
                                          <canvas class="js-tree-canvas is-active"></canvas>
                                       </div>
                                       <div class="l-callback__spiral background background--cover is-hidden--md-down">
                                          <picture class="is-invisible--js is-hidden--no-js " data-plugin="appear "
                                             draggable="false">
                                             <source data-srcset="assets/images/media/landing/callback/spiral@xxxl.webp"
                                                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221080%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201080%20900%22%3E%3C/svg%3E"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="1080"
                                                height="900">
                                             <source data-srcset="assets/images/media/landing/callback/spiral@xxl.webp"
                                                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221080%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201080%20900%22%3E%3C/svg%3E"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="1080"
                                                height="900">
                                             <img data-src="assets/images/media/landing/callback/spiral@md.webp"
                                                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221080%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201080%20900%22%3E%3C/svg%3E"
                                                alt="" width="1080" height="900" draggable="false">
                                          </picture>
                                          <noscript>
                                             <picture class=" " draggable="false">
                                                <source srcset="assets/images/media/landing/callback/spiral@xxxl.webp"
                                                   media="(min-width: 1920px) and (min-height: 700px)" width="1080"
                                                   height="900">
                                                <source srcset="assets/images/media/landing/callback/spiral@xxl.webp"
                                                   media="(min-width: 1440px) and (min-height: 700px)" width="1080"
                                                   height="900">
                                                <img src="assets/images/media/landing/callback/spiral%40md.webp" alt=""
                                                   width="1080" height="900" draggable="false">
                                             </picture>
                                          </noscript>
                                       </div>
                                       <div class="l-callback__title-container col col--xs-4 col--md-6">
                                          <p class="l-callback__title h1 leading-trim js-form-content">
                                             Submit<br>
                                             a request
                                          </p>
                                          <div class="is-hidden js-form-success l-callback__success">
                                             <p class=" h1 leading-trim">
                                                Thank you for&nbsp;your request! We have received your application and
                                                will contact you soon!
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div
                                       class="l-callback__col col col--md-6 ui-dark ui-background mr-0 ml-auto px-layout py-layout js-form-content">
                                       <div class="l-callback__tablist" role="tablist" aria-labelledby="application">
                                          <a class="btn btn--outline btn--clone btn--md btn--text-small is-active"
                                             data-plugin=" button" data-button-clone-content="true"
                                             aria-controls="application" aria-selected="true" tabindex="0" role="tab">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   request
                                                </span>
                                             </span>
                                          </a>
                                          <a class="btn btn--outline btn--clone btn--md btn--text-small"
                                             data-plugin=" button" data-button-clone-content="true" aria-controls="call"
                                             aria-selected="false" tabindex="0" role="tab">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   callback
                                                </span>
                                             </span>
                                          </a>
                                       </div>
                                       <div class="tabs-contents">
                                          <div class="tabs-contents__content ui-background js-tab" id="application"
                                             role="tabpanel" aria-hidden="false">
                                             <form
                                                class="l-callback__form-container ui-dark ui-background pt-3:md pb-1:md"
                                                method="POST" action="api/contact.json"
                                                data-plugin="ajaxForm ajaxFormCalltouch recaptcha"
                                                data-recaptcha-type="yandex"
                                                data-recaptcha-yandex-key="ysc1_xuCetcddmTWwcdcDRafE9wAV2kVtWnwUtoccCvKf7d2c00fd"
                                                data-ajax-form-loading-delay="1500"
                                                data-ajax-form-calltouch-title="Заявка"
                                                data-ajax-form-calltouch-site-id="">
                                                <div class="col col--xs-4 col--md-6 l-callback__form">
                                                   <input data-plugin="utmData" type="hidden" name="utm" value="">
                                                   <input data-plugin="pagePathname" type="hidden"
                                                      name="currentPageLink" value="">
                                                   <div class="sr-only" data-plugin="inputBear ">
                                                      <label for="text-325234"
                                                         class="form-label text-c1 text-color-small leading-trim">
                                                         Message </label>
                                                      <input id="text-325234" name="message" type="text" required
                                                         value="">
                                                   </div>
                                                   <div class="l-callback__group">
                                                      <div class="col col--md-12 mb-2 mb-1:md">
                                                         <div class="
                                                               form-control form-control--input
                                                               form-control--float                        
                                                               " data-plugin="inputState  ">
                                                            <input id="text-418129" name="name" type="text" required
                                                               placeholder="Name" maxlength="50" value="">
                                                            <label for="text-418129"
                                                               class="form-label text-c1 text-color-small ">
                                                               Name </label>
                                                            <svg class="icon icon-form-success form-control__success"
                                                               width="20" height="20" aria-hidden="true"
                                                               viewBox="0 0 20 20"
                                                               style="--icon-width: 20; --icon-height: 20;">
                                                               <use href="assets/images/icons.svg#form-success"
                                                                  xlink:href="assets/images/icons.svg#form-success">
                                                               </use>
                                                            </svg>
                                                            <svg class="icon icon-form-error form-control__error"
                                                               width="20" height="20" aria-hidden="true"
                                                               viewBox="0 0 20 20"
                                                               style="--icon-width: 20; --icon-height: 20;">
                                                               <use href="assets/images/icons.svg#form-error"
                                                                  xlink:href="assets/images/icons.svg#form-error">
                                                               </use>
                                                            </svg>
                                                            <span class="form-control__line"></span>
                                                            <span class="form-control__progress"></span>
                                                         </div>
                                                      </div>
                                                      <div class="col col--md-12 mb-2 mb-1:md">
                                                         <div class="
                                                               form-control form-control--input
                                                               form-control--float                        
                                                               " data-plugin="inputState  inputMask"
                                                            data-input-mask-mask="+# ### ### ## ##">
                                                            <input id="text-330093" name="phone" type="tel" required
                                                               placeholder="Phone" maxlength="20" autocapitalize="none"
                                                               value="">
                                                            <label for="text-330093"
                                                               class="form-label text-c1 text-color-small ">
                                                               Phone </label>
                                                            <svg class="icon icon-form-success form-control__success"
                                                               width="20" height="20" aria-hidden="true"
                                                               viewBox="0 0 20 20"
                                                               style="--icon-width: 20; --icon-height: 20;">
                                                               <use href="assets/images/icons.svg#form-success"
                                                                  xlink:href="assets/images/icons.svg#form-success">
                                                               </use>
                                                            </svg>
                                                            <svg class="icon icon-form-error form-control__error"
                                                               width="20" height="20" aria-hidden="true"
                                                               viewBox="0 0 20 20"
                                                               style="--icon-width: 20; --icon-height: 20;">
                                                               <use href="assets/images/icons.svg#form-error"
                                                                  xlink:href="assets/images/icons.svg#form-error">
                                                               </use>
                                                            </svg>
                                                            <span class="form-control__line"></span>
                                                            <span class="form-control__progress"></span>
                                                         </div>
                                                      </div>
                                                      <div class="col col--md-12">
                                                         <div class="
                                                               form-control form-control--input
                                                               form-control--float                        
                                                               " data-plugin="inputState  ">
                                                            <input id="text-845545" name="message" type="text" required
                                                               placeholder="Message" maxlength="500" value="">
                                                            <label for="text-845545"
                                                               class="form-label text-c1 text-color-small ">
                                                               Message </label>
                                                            <svg class="icon icon-form-success form-control__success"
                                                               width="20" height="20" aria-hidden="true"
                                                               viewBox="0 0 20 20"
                                                               style="--icon-width: 20; --icon-height: 20;">
                                                               <use href="assets/images/icons.svg#form-success"
                                                                  xlink:href="assets/images/icons.svg#form-success">
                                                               </use>
                                                            </svg>
                                                            <svg class="icon icon-form-error form-control__error"
                                                               width="20" height="20" aria-hidden="true"
                                                               viewBox="0 0 20 20"
                                                               style="--icon-width: 20; --icon-height: 20;">
                                                               <use href="assets/images/icons.svg#form-error"
                                                                  xlink:href="assets/images/icons.svg#form-error">
                                                               </use>
                                                            </svg>
                                                            <span class="form-control__line"></span>
                                                            <span class="form-control__progress"></span>
                                                         </div>
                                                      </div>
                                                      <div
                                                         class="error-message is-hidden js-form-error-message text-left l-callback__limited-width"
                                                         role="alert" aria-live="assertive"></div>
                                                   </div>
                                                   <div
                                                      class="l-callback__buttons row row--nowrap row--middle-xs row--between-xs mt-1:lg">
                                                      <button
                                                         class="btn btn--primary btn--clone btn--text-small is-hidden--sm-down"
                                                         type="submit" data-plugin=" button"
                                                         data-button-clone-content="true">
                                                         <span class="btn__content">
                                                            <span class="btn__text  ">
                                                               submit a request
                                                            </span>
                                                         </span>
                                                      </button>
                                                      <button
                                                         class="btn btn--sm btn--primary btn--text-small is-hidden--md-up"
                                                         type="submit">
                                                         <span class="btn__content">
                                                            <span class="btn__text  ">
                                                               submit a request
                                                            </span>
                                                         </span>
                                                      </button>
                                                      <div class=" text l-callback__limited-width ml-layout">
                                                         <p
                                                            class="leading-trim text-color-small text-c2-small text-right:md">
                                                            By clicking the button, you agree
                                                            <br>
                                                            to our <a class="btn--link btn--clone text-c2-small mt-1"
                                                               href="agreement.html" target="_blank">privacy policy</a>
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tabs-contents__content ui-background js-tab" id="call"
                                             role="tabpanel" aria-hidden="true">
                                             <form
                                                class="l-callback__form-container ui-dark ui-background pt-3:md pb-1:md"
                                                method="POST" action="api/contact.json"
                                                data-plugin="ajaxForm ajaxFormCalltouch recaptcha"
                                                data-recaptcha-type="yandex"
                                                data-recaptcha-yandex-key="ysc1_xuCetcddmTWwcdcDRafE9wAV2kVtWnwUtoccCvKf7d2c00fd"
                                                data-ajax-form-loading-delay="1500"
                                                data-ajax-form-calltouch-title="Обратный звонок"
                                                data-ajax-form-calltouch-site-id="">
                                                <div class="col col--xs-4 col--md-6 l-callback__form">
                                                   <input data-plugin="utmData" type="hidden" name="utm" value="">
                                                   <input data-plugin="pagePathname" type="hidden"
                                                      name="currentPageLink" value="">
                                                   <div class="sr-only" data-plugin="inputBear ">
                                                      <label for="text-313983"
                                                         class="form-label text-c1 text-color-small leading-trim">
                                                         Message </label>
                                                      <input id="text-313983" name="message" type="text" required
                                                         value="">
                                                   </div>
                                                   <div class="l-callback__group">
                                                      <div class="col col--md-12 mb-2 mb-1:md">
                                                         <div class="
                                                               form-control form-control--input
                                                               form-control--float                        
                                                               " data-plugin="inputState  ">
                                                            <input id="text-529092" name="name" type="text" required
                                                               placeholder="Name" maxlength="50" value="">
                                                            <label for="text-529092"
                                                               class="form-label text-c1 text-color-small ">
                                                               Name </label>
                                                            <svg class="icon icon-form-success form-control__success"
                                                               width="20" height="20" aria-hidden="true"
                                                               viewBox="0 0 20 20"
                                                               style="--icon-width: 20; --icon-height: 20;">
                                                               <use href="assets/images/icons.svg#form-success"
                                                                  xlink:href="assets/images/icons.svg#form-success">
                                                               </use>
                                                            </svg>
                                                            <svg class="icon icon-form-error form-control__error"
                                                               width="20" height="20" aria-hidden="true"
                                                               viewBox="0 0 20 20"
                                                               style="--icon-width: 20; --icon-height: 20;">
                                                               <use href="assets/images/icons.svg#form-error"
                                                                  xlink:href="assets/images/icons.svg#form-error">
                                                               </use>
                                                            </svg>
                                                            <span class="form-control__line"></span>
                                                            <span class="form-control__progress"></span>
                                                         </div>
                                                      </div>
                                                      <div class="form-group group mb-2 mb-1:md">
                                                         <div class="col">
                                                            <div class="
                                                                  form-control form-control--input
                                                                  form-control--float                        
                                                                  " data-plugin="inputState  inputMask"
                                                               data-input-mask-mask="+# ### ### ## ##">
                                                               <input id="text-378576" name="phone" type="tel" required
                                                                  placeholder="Phone" maxlength="20"
                                                                  autocapitalize="none" value="">
                                                               <label for="text-378576"
                                                                  class="form-label text-c1 text-color-small ">
                                                                  Phone </label>
                                                               <svg class="icon icon-form-success form-control__success"
                                                                  width="20" height="20" aria-hidden="true"
                                                                  viewBox="0 0 20 20"
                                                                  style="--icon-width: 20; --icon-height: 20;">
                                                                  <use href="assets/images/icons.svg#form-success"
                                                                     xlink:href="assets/images/icons.svg#form-success">
                                                                  </use>
                                                               </svg>
                                                               <svg class="icon icon-form-error form-control__error"
                                                                  width="20" height="20" aria-hidden="true"
                                                                  viewBox="0 0 20 20"
                                                                  style="--icon-width: 20; --icon-height: 20;">
                                                                  <use href="assets/images/icons.svg#form-error"
                                                                     xlink:href="assets/images/icons.svg#form-error">
                                                                  </use>
                                                               </svg>
                                                               <span class="form-control__line"></span>
                                                               <span class="form-control__progress"></span>
                                                            </div>
                                                         </div>
                                                         <div class="col">
                                                            <div
                                                               class="form-control form-control--select form-control--input  form-control--with-label form-control--float is-not-empty "
                                                               data-plugin="inputSelect inputState selectFake ">
                                                               <div
                                                                  class="form-control__close js-form-control-select-close">
                                                               </div>
                                                               <div class="form-control__content">
                                                                  <select id="text-341113" name="time" required
                                                                     statusIndicator="false" size="4">
                                                                     <option value="09:00:00" selected>9:00 — 12:00
                                                                     </option>
                                                                     <option value="12:00:00">12:00 — 15:00</option>
                                                                     <option value="15:00:00">15:00 — 18:00</option>
                                                                     <option value="18:00:00">18:00 — 21:00</option>
                                                                  </select>
                                                                  <span
                                                                     class="js-input-select-fake-value form-control__fake-input">
                                                                     <span
                                                                        class="js-input-select-fake-value-text leading-trim">
                                                                        9:00 — 12:00 </span>
                                                                  </span>
                                                                  <label for="text-341113"
                                                                     class="form-label text-c1 text-color-small ">call
                                                                     time </label>
                                                                  <span
                                                                     class="form-control__arrow js-form-control-select-close">
                                                                     <svg class="icon icon-chevron-top" width="14"
                                                                        height="7" aria-hidden="true" viewBox="0 0 14 7"
                                                                        style="--icon-width: 14; --icon-height: 7;">
                                                                        <use href="assets/images/icons.svg#chevron-top"
                                                                           xlink:href="assets/images/icons.svg#chevron-top">
                                                                        </use>
                                                                     </svg>
                                                                  </span>
                                                               </div>
                                                               <span class="form-control__line"></span>
                                                               <span class="form-control__progress"></span>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div
                                                         class="error-message is-hidden js-form-error-message text-left l-callback__limited-width"
                                                         role="alert" aria-live="assertive"></div>
                                                   </div>
                                                   <div
                                                      class="l-callback__buttons row row--nowrap row--middle-xs row--between-xs mt-1:lg">
                                                      <button
                                                         class="btn btn--primary btn--text-small is-hidden--sm-down"
                                                         type="submit">
                                                         <span class="btn__content">
                                                            <span class="btn__text  ">
                                                               submit a request
                                                            </span>
                                                         </span>
                                                      </button>
                                                      <button
                                                         class="btn btn--sm btn--primary btn--text-small is-hidden--md-up"
                                                         type="submit">
                                                         <span class="btn__content">
                                                            <span class="btn__text  ">
                                                               submit a request
                                                            </span>
                                                         </span>
                                                      </button>
                                                      <div class=" text l-callback__limited-width ml-layout">
                                                         <p
                                                            class="leading-trim text-color-small text-c2-small text-right:md">
                                                            By clicking the button, you agree
                                                            <br>
                                                            to our <a class="btn--link btn--clone text-c2-small mt-1"
                                                               href="agreement.html" target="_blank">privacy policy</a>
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal modal--full ui-dark is-hidden" role="dialog" aria-hidden="true"
               aria-label="Request a call" id="favorites-modal" data-plugin="modal" data-modal-one-per-page="true"
               data-nosnippet>
               <div class="modal__background"></div>
               <div class="modal__animation">
                  <div class="modal__scroller">
                     <div class="modal__scroller__scrollable js-scroll-parent">
                        <div class="modal__content-wrapper js-modal-scrollable-content">
                           <div class="modal__content ui-background js-modal-ignore-auto-close js-scroll-parent-ignore">
                              <div data-scroll-section>
                                 <div class="l-favorites row ui-dark sticky sticky--full-height"
                                    data-plugin="favouriteList mouseAnimation" id="favorites"
                                    data-favourite-list-endpoint="/api/favourites/flats.json"
                                    data-mouse-animation-use-css-variable="false"
                                    data-mouse-animation-target-selector=".l-favorites__spiral picture"
                                    data-mouse-animation-multiplier='[{"unit": "%", "value": -5}, {"unit": "px", "value": 0}]'>
                                    <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
                                       data-scroll-target="#favorites">
                                       <div
                                          class="background background--cover js-tree-canvas-container is-hidden--sm-down"
                                          data-plugin="webglTreeCallback">
                                          <canvas class="js-tree-canvas is-active"></canvas>
                                       </div>
                                       <div class="l-favorites__spiral background background--cover is-hidden--md-down">
                                          <picture class="is-invisible--js is-hidden--no-js " data-plugin="appear "
                                             draggable="false">
                                             <source data-srcset="assets/images/media/landing/callback/spiral@xxxl.webp"
                                                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221080%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201080%20900%22%3E%3C/svg%3E"
                                                media="(min-width: 1920px) and (min-height: 700px)" width="1080"
                                                height="900">
                                             <source data-srcset="assets/images/media/landing/callback/spiral@xxl.webp"
                                                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221080%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201080%20900%22%3E%3C/svg%3E"
                                                media="(min-width: 1440px) and (min-height: 700px)" width="1080"
                                                height="900">
                                             <img data-src="assets/images/media/landing/callback/spiral@md.webp"
                                                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221080%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201080%20900%22%3E%3C/svg%3E"
                                                alt="" width="1080" height="900" draggable="false">
                                          </picture>
                                          <noscript>
                                             <picture class=" " draggable="false">
                                                <source srcset="assets/images/media/landing/callback/spiral@xxxl.webp"
                                                   media="(min-width: 1920px) and (min-height: 700px)" width="1080"
                                                   height="900">
                                                <source srcset="assets/images/media/landing/callback/spiral@xxl.webp"
                                                   media="(min-width: 1440px) and (min-height: 700px)" width="1080"
                                                   height="900">
                                                <img src="assets/images/media/landing/callback/spiral%40md.webp" alt=""
                                                   width="1080" height="900" draggable="false">
                                             </picture>
                                          </noscript>
                                       </div>
                                       <div class="l-favorites__title-container col col--md-4 is-hidden--md-down"
                                          data-plugin="favouriteCounter"
                                          data-favourite-counter-transchoice-values='["residences&quot;,&quot;residence&quot;,&quot;residences&quot;,&quot;residences"]'
                                          data-favourite-counter-hide-no-items="true">
                                          <div class="l-favorites__title">
                                             <p class="leading-trim text-small pb-0.5 js-favourite-list-wrapper-list">
                                                <span class="js-favourite-counter-text"></span>
                                             </p>
                                             <p class="h1 leading-trim">
                                                Favorites
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sticky__layer">
                                       <a class="btn btn--primary btn--square modal__close js-modal-close"
                                          aria-label="Close" data-plugin="themed"
                                          data-themed-theme-attribute="data-favorites-themed-class"
                                          data-themed-enable-smooth-scroll="false" tabindex="0" role="button">
                                          <span class="btn__content">
                                             <span class="btn__icon ">
                                                <svg class="icon icon-close" width="14" height="14" aria-hidden="true"
                                                   viewBox="0 0 14 14" style="--icon-width: 14; --icon-height: 14;">
                                                   <use href="assets/images/icons.svg#close"
                                                      xlink:href="assets/images/icons.svg#close"></use>
                                                </svg>
                                             </span>
                                          </span>
                                       </a>
                                       <div class="l-favorites__gradient is-hidden--lg-up">
                                          <div></div>
                                          <div></div>
                                          <div></div>
                                       </div>
                                       <div
                                          class="l-favorites__col col col--md-8 ui-dark ui-background mr-0 ml-auto px-layout pt-layout pb-layout-4 pb-layout:md"
                                          data-favorites-themed-class="ui-dark">
                                          <div class="flats__empty js-favourite-list-empty is-hidden">
                                             <div class="col col--md-4 h3 leading-trim pb-1 pr-1.5 pr-0:md">
                                                <p>
                                                   Here you can save your favorite residences.
                                                </p>
                                             </div>
                                             <a class="btn btn--sm btn--outline" href="flats.html">
                                                <span class="btn__content">
                                                   <span class="btn__text  ">
                                                      select residence
                                                   </span>
                                                </span>
                                             </a>
                                          </div>
                                          <div class="js-favourite-list-wrapper-list is-hidden">
                                             <div class="group group--small mb-2">
                                                <a class="btn btn--square btn--outline" target="_blank" rel="noopener"
                                                   aria-label="download pdf" data-plugin="favouriteDownload"
                                                   data-favourite-download-url="/api/download/link/favourites"
                                                   tabindex="0" role="button">
                                                   <span class="btn__content">
                                                      <span class="btn__text  ">
                                                         pdf
                                                      </span>
                                                   </span>
                                                </a>
                                                <a class="btn btn--square btn--outline" href="#favourites-email-modal">
                                                   <span class="btn__content">
                                                      <span class="btn__icon ">
                                                         <svg class="icon icon-email" width="16" height="16"
                                                            aria-hidden="true" viewBox="0 0 16 16"
                                                            style="--icon-width: 16; --icon-height: 16;">
                                                            <use href="assets/images/icons.svg#email"
                                                               xlink:href="assets/images/icons.svg#email"></use>
                                                         </svg>
                                                      </span>
                                                   </span>
                                                </a>
                                             </div>
                                             <div
                                                class="l-favorites__title-container col col--md-4 is-hidden--lg-up mb-1"
                                                data-plugin="favouriteCounter"
                                                data-favourite-counter-transchoice-values='["residences&quot;,&quot;residence&quot;,&quot;residences&quot;,&quot;residences"]'
                                                data-favourite-counter-hide-no-items="true">
                                                <div class="l-favorites__title">
                                                   <p class="h1 leading-trim  pb-1">
                                                      Favorites
                                                   </p>
                                                   <p class="leading-trim text-small ">
                                                      <span class="js-favourite-counter-text"></span>
                                                   </p>
                                                </div>
                                             </div>
                                             <ul class="l-favorites__list flats__list js-favourite-list-list ui-light is-hidden"
                                                data-favorites-themed-class="ui-light">
                                                <script type="text/template" data-template-variable="flat">
                                                      <li>
                                                          <a href="<%- flat.link %>" class="card card--apartment js-favourite-wrapper" data-ajax-page-ignore-prefetch>
                                                              <div class="card__sizer"></div>
                                                              <div class="card__content">
                                                                  <div class="card__top group group--nowrap group--between">
                                                                      <div class="group group--small group--middle">
                                                                          <% for (let i=0; i < flat.features.length; i++) { %>
                                                                              <% var feature = flat.features[i] %>
                                                                              <% var prefix = flat.number + feature.icon %>
                                                                              <div
                                                                                  class="card__feature"
                                                                                  data-plugin="popover"
                                                                                  data-popover-placement="<%= i == 0 ? 'bottom-start' : 'bottom-center' %>"
                                                                                  data-popover-parent-selector=".card"
                                                                                  data-popover-events="hover"
                                                                                  aria-describedby="<%- prefix %>"
                                                                              >
                                                                                  <svg class="icon icon-&lt;&#x25;-&#x20;feature.icon&#x20;&#x25;&gt;" width="16" height="16" aria-hidden="true"            viewBox="0 0 16 16"
                                                              style="--icon-width: 16; --icon-height: 16;"
                                                          
                                                          ><use href="&#x2F;assets&#x2F;images&#x2F;icons.svg&#x3F;v&#x3D;1765268659#&lt;&#x25;-&#x20;feature.icon&#x20;&#x25;&gt;" xlink:href="assets/images/icons.svg#&lt;&#x25;-&#x20;feature.icon&#x20;&#x25;&gt;"></use></svg>
                                                                              </div>
                                                      
                                                                              <div id="<%-prefix%>" class="tooltip tooltip--closable tooltip--feature ui-dark" role="tooltip">
                                                                                  <span class="tooltip__triangle"></span>
                                                      
                                                                                  <div class="tooltip__content text-c2 leading-trim">
                                                                                      <%- feature.label %>
                                                                                  </div>
                                                                              </div>
                                                      
                                                                          <% } %>
                                                                      </div>
                                                      
                                                                      
                                                                          
                                                          
                                                      
                                                      
                                                      
                                                          
                                                                                                                            
                                                                          
                                                      
                                                          
                                                          
                                                          
                                                          
                                                      <span
                                                          class="btn btn--outline btn--outline-active btn--square favourite  btn--sm"
                                                                                          aria-label="Remove apartment from favourites"
                                                                              data-plugin="favourite"
                                                                                                  data-favourite="&#x7B;&quot;id&quot;&#x3A;&quot;&lt;&#x25;-&#x20;flat.id&#x20;&#x25;&gt;&quot;,&quot;activeClass&quot;&#x3A;&quot;favourite--active&#x20;is-active&quot;,&quot;inactiveClass&quot;&#x3A;&quot;&quot;,&quot;wrapperSelector&quot;&#x3A;&quot;.js-favourite-wrapper&quot;,&quot;wrapperActiveClass&quot;&#x3A;&quot;&quot;,&quot;wrapperInactiveClass&quot;&#x3A;&quot;&quot;,&quot;wrapperRemoveInactive&quot;&#x3A;false,&quot;labelActive&quot;&#x3A;&quot;Remove&#x20;apartment&#x20;from&#x20;favourites&quot;,&quot;labelInactive&quot;&#x3A;&quot;Add&#x20;apartment&#x20;to&#x20;favourites&quot;,&quot;size&quot;&#x3A;null&#x7D;"
                                                                              tabindex="0"
                                                                              role="button"
                                                              >
                                                      
                                                          <span class="btn__content">
                                                              
                                                                                      
                                                                                                                      <span class="btn__icon ">
                                                                          <svg class="icon icon-favourite" width="30" height="30" aria-hidden="true"            viewBox="0 0 30 30"
                                                              style="--icon-width: 30; --icon-height: 30;"
                                                          
                                                          ><use href="&#x2F;assets&#x2F;images&#x2F;icons.svg&#x3F;v&#x3D;1765268659#favourite" xlink:href="assets/images/icons.svg#favourite"></use></svg>
                                                                      </span>
                                                                                      </span>
                                                      </span>
                                                                                      </div>
                                                      
                                                                  <div class="card__plan">
                                                                      <% const plan = flat.plans.simple %>
                                                                      <%= picture(plan, {
                                                         class: 'svg-fix',
                                                         lazy: false
                                                         }) %>
                                                                  </div>
                                                      
                                                                  <div class="card__footer">
                                                                      <div class="card__footer__price group group--nowrap group--bottom group--between pb-layout pb-0.25:md mb-layout mb-0.25:md">
                                                                          <div>
                                                                              <div class="text-c2 text-color-small leading-trim mb-0.2">
                                                                                  <p>
                                                                                      <%- numberFormat(flat.price_per_m, 0, '', ' ') %>&nbsp;/m<sup>2</sup>
                                                                                  </p>
                                                                              </div>
                                                                              <div class="text-small leading-trim">
                                                                                  <p>
                                                                                        <%- numberFormat(flat.price, 0, '', ' ') %>
                                                                                  </p>
                                                                              </div>
                                                                          </div>
                                                      
                                                      
                                                                          <div class="text-c2 text-color-small leading-trim">
                                                                              <p>
                                                                                  with finishings
                                                                              </p>
                                                                          </div>
                                                                      </div>
                                                      
                                                                      <div class="group group--nowrap group--bottom group--between">
                                                      
                                                                          <div class="card__footer-text text-small leading-trim">
                                                                              <p class="card__square">
                                                                                   <%- flat.square %>&nbsp;m<sup>2</sup>
                                                                              </p>
                                                                              <p>
                                                                                   <%- flat.roomsText %>&nbsp;
                                                                              </p>
                                                                              <p>
                                                                                  <%- flat.floor %>&nbsp;floor
                                                                              </p>
                                                                          </div>
                                                      
                                                                          <span class="card__footer-title h1 leading-trim">
                                                                              <%- flat.number %>
                                                                          </span>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </a>
                                                      </li>
                                                      
                                                   </script>
                                                <div class="js-favourite-list-single">
                                                   <li>
                                                      <a href="flats.html"
                                                         class="ui-dark card card--apartment card--more"
                                                         data-ajax-page-ignore-prefetch>
                                                         <div class="card__sizer"></div>
                                                         <div class="card__content">
                                                            <div class="card__top">
                                                               <p class="">
                                                                  Find more matching
                                                                  <br />
                                                                  residences
                                                               </p>
                                                            </div>
                                                            <div class="card__footer">
                                                               <div
                                                                  class="group group--nowrap group--bottom group--between">
                                                                  <div class="card__footer-text leading-trim">
                                                                  </div>
                                                                  <div class="card__feature">
                                                                     <svg class="icon icon-magnifier" width="14"
                                                                        height="14" aria-hidden="true"
                                                                        viewBox="0 0 14 14"
                                                                        style="--icon-width: 14; --icon-height: 14;">
                                                                        <use href="assets/images/icons.svg#magnifier"
                                                                           xlink:href="assets/images/icons.svg#magnifier">
                                                                        </use>
                                                                     </svg>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </a>
                                                   </li>
                                                </div>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal modal--subscribe modal--split-animate--up ui-light is-hidden" role="dialog"
               aria-hidden="true" aria-label="Заказать звонок" id="subscribe-modal" data-plugin="modal"
               data-modal-one-per-page="false" data-nosnippet>
               <div class="modal__background"></div>
               <div class="modal__animation">
                  <div class="modal__scroller">
                     <div class="modal__scroller__scrollable js-scroll-parent">
                        <div class="modal__content-wrapper js-modal-scrollable-content">
                           <div class="modal__content ui-background js-modal-ignore-auto-close js-scroll-parent-ignore">
                              <a class="btn btn--primary btn--square modal__close  js-modal-close" aria-label="Close"
                                 tabindex="0" role="button">
                                 <span class="btn__content">
                                    <span class="btn__icon ">
                                       <svg class="icon icon-close" width="14" height="14" aria-hidden="true"
                                          viewBox="0 0 14 14" style="--icon-width: 14; --icon-height: 14;">
                                          <use href="assets/images/icons.svg#close"
                                             xlink:href="assets/images/icons.svg#close"></use>
                                       </svg>
                                    </span>
                                 </span>
                              </a>
                              <div
                                 class="flats-subscribe px-layout pt-layout pb-1.5 pb-layout:md ui-background js-callback">
                                 <div class="h2 leading-trim js-form-content mb-6.5 mb-2:md pr-2 pr-0:md">
                                    <p>
                                       Subscribe<br>
                                       to notifications
                                    </p>
                                 </div>
                                 <div
                                    class="flats-subscribe__success py-layout pl-layout background background--cover ui-light ui-background is-hidden js-form-success">
                                    <p class="h2 leading-trim">
                                       You are subscribed
                                    </p>
                                 </div>
                                 <form class="flats-subscribe__form-container pt-2:md" method="POST"
                                    action="api/subscribe.json" data-plugin="ajaxForm recaptcha"
                                    data-recaptcha-type="yandex"
                                    data-recaptcha-yandex-key="ysc1_xuCetcddmTWwcdcDRafE9wAV2kVtWnwUtoccCvKf7d2c00fd"
                                    data-ajax-form-loading-delay="1500" data-ajax-form-type="">
                                    <div class="col col--xs-4 col--md-6 flats-subscribe__form">
                                       <input data-plugin="utmData" type="hidden" name="utm" value="">
                                       <input data-plugin="pagePathname" type="hidden" name="currentPageLink" value="">
                                       <div class="sr-only" data-plugin="inputBear ">
                                          <label for="text-378671"
                                             class="form-label text-c1 text-color-small leading-trim">
                                             Message </label>
                                          <input id="text-378671" name="message" type="text" required value="">
                                       </div>
                                       <div class="flats-subscribe__group">
                                          <div class="col col--md-12 mb-2.5 mb-2:md">
                                             <div class="
                                                   form-control form-control--input
                                                   form-control--float                        
                                                   " data-plugin="inputState  ">
                                                <input id="text-776722" name="email" type="email" required
                                                   placeholder="e-mail" maxlength="50" autocapitalize="none" value="">
                                                <label for="text-776722" class="form-label text-c1 text-color-small ">
                                                   e-mail </label>
                                                <svg class="icon icon-form-success form-control__success" width="20"
                                                   height="20" aria-hidden="true" viewBox="0 0 20 20"
                                                   style="--icon-width: 20; --icon-height: 20;">
                                                   <use href="assets/images/icons.svg#form-success"
                                                      xlink:href="assets/images/icons.svg#form-success"></use>
                                                </svg>
                                                <svg class="icon icon-form-error form-control__error" width="20"
                                                   height="20" aria-hidden="true" viewBox="0 0 20 20"
                                                   style="--icon-width: 20; --icon-height: 20;">
                                                   <use href="assets/images/icons.svg#form-error"
                                                      xlink:href="assets/images/icons.svg#form-error"></use>
                                                </svg>
                                                <span class="form-control__line"></span>
                                                <span class="form-control__progress"></span>
                                             </div>
                                          </div>
                                          <div
                                             class="error-message is-hidden js-form-error-message text-left l-callback__limited-width"
                                             role="alert" aria-live="assertive"></div>
                                       </div>
                                       <div
                                          class="flats-subscribe__buttons row row--nowrap row--middle-xs row--between-xs">
                                          <button class="btn btn--primary btn--clone btn--text-small is-hidden--sm-down"
                                             type="submit" data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   subscribe
                                                </span>
                                             </span>
                                          </button>
                                          <button class="btn btn--sm btn--primary btn--text-small is-hidden--md-up"
                                             type="submit">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   subscribe
                                                </span>
                                             </span>
                                          </button>
                                          <div class=" text l-callback__limited-width ml-layout">
                                             <p class="leading-trim text-color-small text-c2-small text-right:md">
                                                By clicking the button, you agree
                                                <br>
                                                to our <a class="btn--link btn--clone text-c2-small mt-1"
                                                   href="agreement.html" target="_blank">privacy policy</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal modal--subscribe modal--split-animate--up ui-light is-hidden" role="dialog"
               aria-hidden="true" aria-label="Заказать звонок" id="subscribe-modal-penthouse" data-plugin="modal"
               data-modal-one-per-page="false" data-nosnippet>
               <div class="modal__background"></div>
               <div class="modal__animation">
                  <div class="modal__scroller">
                     <div class="modal__scroller__scrollable js-scroll-parent">
                        <div class="modal__content-wrapper js-modal-scrollable-content">
                           <div class="modal__content ui-background js-modal-ignore-auto-close js-scroll-parent-ignore">
                              <a class="btn btn--primary btn--square modal__close  js-modal-close" aria-label="Close"
                                 tabindex="0" role="button">
                                 <span class="btn__content">
                                    <span class="btn__icon ">
                                       <svg class="icon icon-close" width="14" height="14" aria-hidden="true"
                                          viewBox="0 0 14 14" style="--icon-width: 14; --icon-height: 14;">
                                          <use href="assets/images/icons.svg#close"
                                             xlink:href="assets/images/icons.svg#close"></use>
                                       </svg>
                                    </span>
                                 </span>
                              </a>
                              <div
                                 class="flats-subscribe px-layout pt-layout pb-1.5 pb-layout:md ui-background js-callback">
                                 <div class="h2 leading-trim js-form-content mb-6.5 mb-2:md pr-2 pr-0:md">
                                    <p>
                                       Subscribe<br>
                                       to notifications
                                    </p>
                                 </div>
                                 <div
                                    class="flats-subscribe__success py-layout pl-layout background background--cover ui-light ui-background is-hidden js-form-success">
                                    <p class="h2 leading-trim">
                                       You are subscribed
                                    </p>
                                 </div>
                                 <form class="flats-subscribe__form-container pt-2:md" method="POST"
                                    action="api/subscribe.json" data-plugin="ajaxForm recaptcha"
                                    data-recaptcha-type="yandex"
                                    data-recaptcha-yandex-key="ysc1_xuCetcddmTWwcdcDRafE9wAV2kVtWnwUtoccCvKf7d2c00fd"
                                    data-ajax-form-loading-delay="1500" data-ajax-form-type="penthouse">
                                    <div class="col col--xs-4 col--md-6 flats-subscribe__form">
                                       <input data-plugin="utmData" type="hidden" name="utm" value="">
                                       <input data-plugin="pagePathname" type="hidden" name="currentPageLink" value="">
                                       <div class="sr-only" data-plugin="inputBear ">
                                          <label for="text-178706"
                                             class="form-label text-c1 text-color-small leading-trim">
                                             Message </label>
                                          <input id="text-178706" name="message" type="text" required value="">
                                       </div>
                                       <div class="flats-subscribe__group">
                                          <div class="col col--md-12 mb-2.5 mb-2:md">
                                             <div class="
                                                   form-control form-control--input
                                                   form-control--float                        
                                                   " data-plugin="inputState  ">
                                                <input id="text-179630" name="email" type="email" required
                                                   placeholder="e-mail" maxlength="50" autocapitalize="none" value="">
                                                <label for="text-179630" class="form-label text-c1 text-color-small ">
                                                   e-mail </label>
                                                <svg class="icon icon-form-success form-control__success" width="20"
                                                   height="20" aria-hidden="true" viewBox="0 0 20 20"
                                                   style="--icon-width: 20; --icon-height: 20;">
                                                   <use href="assets/images/icons.svg#form-success"
                                                      xlink:href="assets/images/icons.svg#form-success"></use>
                                                </svg>
                                                <svg class="icon icon-form-error form-control__error" width="20"
                                                   height="20" aria-hidden="true" viewBox="0 0 20 20"
                                                   style="--icon-width: 20; --icon-height: 20;">
                                                   <use href="assets/images/icons.svg#form-error"
                                                      xlink:href="assets/images/icons.svg#form-error"></use>
                                                </svg>
                                                <span class="form-control__line"></span>
                                                <span class="form-control__progress"></span>
                                             </div>
                                          </div>
                                          <div
                                             class="error-message is-hidden js-form-error-message text-left l-callback__limited-width"
                                             role="alert" aria-live="assertive"></div>
                                       </div>
                                       <div
                                          class="flats-subscribe__buttons row row--nowrap row--middle-xs row--between-xs">
                                          <button class="btn btn--primary btn--clone btn--text-small is-hidden--sm-down"
                                             type="submit" data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   subscribe
                                                </span>
                                             </span>
                                          </button>
                                          <button class="btn btn--sm btn--primary btn--text-small is-hidden--md-up"
                                             type="submit">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   subscribe
                                                </span>
                                             </span>
                                          </button>
                                          <div class=" text l-callback__limited-width ml-layout">
                                             <p class="leading-trim text-color-small text-c2-small text-right:md">
                                                By clicking the button, you agree
                                                <br>
                                                to our <a class="btn--link btn--clone text-c2-small mt-1"
                                                   href="agreement.html" target="_blank">privacy policy</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal modal--subscribe modal--split-animate--up ui-light is-hidden" role="dialog"
               aria-hidden="true" aria-label="Заказать звонок" id="subscribe-modal-townhouse" data-plugin="modal"
               data-modal-one-per-page="false" data-nosnippet>
               <div class="modal__background"></div>
               <div class="modal__animation">
                  <div class="modal__scroller">
                     <div class="modal__scroller__scrollable js-scroll-parent">
                        <div class="modal__content-wrapper js-modal-scrollable-content">
                           <div class="modal__content ui-background js-modal-ignore-auto-close js-scroll-parent-ignore">
                              <a class="btn btn--primary btn--square modal__close  js-modal-close" aria-label="Close"
                                 tabindex="0" role="button">
                                 <span class="btn__content">
                                    <span class="btn__icon ">
                                       <svg class="icon icon-close" width="14" height="14" aria-hidden="true"
                                          viewBox="0 0 14 14" style="--icon-width: 14; --icon-height: 14;">
                                          <use href="assets/images/icons.svg#close"
                                             xlink:href="assets/images/icons.svg#close"></use>
                                       </svg>
                                    </span>
                                 </span>
                              </a>
                              <div
                                 class="flats-subscribe px-layout pt-layout pb-1.5 pb-layout:md ui-background js-callback">
                                 <div class="h2 leading-trim js-form-content mb-6.5 mb-2:md pr-2 pr-0:md">
                                    <p>
                                       Subscribe<br>
                                       to notifications
                                    </p>
                                 </div>
                                 <div
                                    class="flats-subscribe__success py-layout pl-layout background background--cover ui-light ui-background is-hidden js-form-success">
                                    <p class="h2 leading-trim">
                                       You are subscribed
                                    </p>
                                 </div>
                                 <form class="flats-subscribe__form-container pt-2:md" method="POST"
                                    action="api/subscribe.json" data-plugin="ajaxForm recaptcha"
                                    data-recaptcha-type="yandex"
                                    data-recaptcha-yandex-key="ysc1_xuCetcddmTWwcdcDRafE9wAV2kVtWnwUtoccCvKf7d2c00fd"
                                    data-ajax-form-loading-delay="1500" data-ajax-form-type="townhouse">
                                    <div class="col col--xs-4 col--md-6 flats-subscribe__form">
                                       <input data-plugin="utmData" type="hidden" name="utm" value="">
                                       <input data-plugin="pagePathname" type="hidden" name="currentPageLink" value="">
                                       <div class="sr-only" data-plugin="inputBear ">
                                          <label for="text-375569"
                                             class="form-label text-c1 text-color-small leading-trim">
                                             Message </label>
                                          <input id="text-375569" name="message" type="text" required value="">
                                       </div>
                                       <div class="flats-subscribe__group">
                                          <div class="col col--md-12 mb-2.5 mb-2:md">
                                             <div class="
                                                   form-control form-control--input
                                                   form-control--float                        
                                                   " data-plugin="inputState  ">
                                                <input id="text-989510" name="email" type="email" required
                                                   placeholder="e-mail" maxlength="50" autocapitalize="none" value="">
                                                <label for="text-989510" class="form-label text-c1 text-color-small ">
                                                   e-mail </label>
                                                <svg class="icon icon-form-success form-control__success" width="20"
                                                   height="20" aria-hidden="true" viewBox="0 0 20 20"
                                                   style="--icon-width: 20; --icon-height: 20;">
                                                   <use href="assets/images/icons.svg#form-success"
                                                      xlink:href="assets/images/icons.svg#form-success"></use>
                                                </svg>
                                                <svg class="icon icon-form-error form-control__error" width="20"
                                                   height="20" aria-hidden="true" viewBox="0 0 20 20"
                                                   style="--icon-width: 20; --icon-height: 20;">
                                                   <use href="assets/images/icons.svg#form-error"
                                                      xlink:href="assets/images/icons.svg#form-error"></use>
                                                </svg>
                                                <span class="form-control__line"></span>
                                                <span class="form-control__progress"></span>
                                             </div>
                                          </div>
                                          <div
                                             class="error-message is-hidden js-form-error-message text-left l-callback__limited-width"
                                             role="alert" aria-live="assertive"></div>
                                       </div>
                                       <div
                                          class="flats-subscribe__buttons row row--nowrap row--middle-xs row--between-xs">
                                          <button class="btn btn--primary btn--clone btn--text-small is-hidden--sm-down"
                                             type="submit" data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   subscribe
                                                </span>
                                             </span>
                                          </button>
                                          <button class="btn btn--sm btn--primary btn--text-small is-hidden--md-up"
                                             type="submit">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   subscribe
                                                </span>
                                             </span>
                                          </button>
                                          <div class=" text l-callback__limited-width ml-layout">
                                             <p class="leading-trim text-color-small text-c2-small text-right:md">
                                                By clicking the button, you agree
                                                <br>
                                                to our <a class="btn--link btn--clone text-c2-small mt-1"
                                                   href="agreement.html" target="_blank">privacy policy</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal modal--subscribe modal--split-animate--up ui-light is-hidden" role="dialog"
               aria-hidden="true" aria-label="send via mail" id="favourites-email-modal" data-plugin="modal"
               data-modal-one-per-page="false" data-nosnippet>
               <div class="modal__background"></div>
               <div class="modal__animation">
                  <div class="modal__scroller">
                     <div class="modal__scroller__scrollable js-scroll-parent">
                        <div class="modal__content-wrapper js-modal-scrollable-content">
                           <div class="modal__content ui-background js-modal-ignore-auto-close js-scroll-parent-ignore">
                              <a class="btn btn--primary btn--square modal__close  js-modal-close" aria-label="Close"
                                 tabindex="0" role="button">
                                 <span class="btn__content">
                                    <span class="btn__icon ">
                                       <svg class="icon icon-close" width="14" height="14" aria-hidden="true"
                                          viewBox="0 0 14 14" style="--icon-width: 14; --icon-height: 14;">
                                          <use href="assets/images/icons.svg#close"
                                             xlink:href="assets/images/icons.svg#close"></use>
                                       </svg>
                                    </span>
                                 </span>
                              </a>
                              <div
                                 class="flats-subscribe px-layout pt-layout pb-1.5 pb-layout:md ui-background js-callback">
                                 <div class="h2 leading-trim js-form-content mb-6.5 mb-2:md pr-2 pr-0:md">
                                    <p>
                                       Send <br>
                                       to mail
                                    </p>
                                 </div>
                                 <div
                                    class="flats-subscribe__success h2 py-layout pl-layout background background--cover ui-light ui-background is-hidden js-form-success">
                                    <p>
                                       Sent
                                    </p>
                                 </div>
                                 <form class="flats-subscribe__form-container pt-2:md" method="POST"
                                    action="api/favourite/pdf/mail.json" data-plugin="ajaxForm recaptcha favouriteForm"
                                    data-recaptcha-type="yandex"
                                    data-recaptcha-yandex-key="ysc1_xuCetcddmTWwcdcDRafE9wAV2kVtWnwUtoccCvKf7d2c00fd"
                                    data-ajax-form-loading-delay="1500" data-ajax-form-calltouch-title="Подписка"
                                    data-ajax-form-calltouch-site-id="">
                                    <div class="col col--xs-4 col--md-6 flats-subscribe__form">
                                       <input data-plugin="utmData" type="hidden" name="utm" value="">
                                       <input data-plugin="pagePathname" type="hidden" name="currentPageLink" value="">
                                       <div class="sr-only" data-plugin="inputBear ">
                                          <label for="text-900628"
                                             class="form-label text-c1 text-color-small leading-trim">
                                             Message </label>
                                          <input id="text-900628" name="message" type="text" required value="">
                                       </div>
                                       <div class="flats-subscribe__group">
                                          <div class="col col--md-12 mb-2.5 mb-2:md">
                                             <div class="
                                                   form-control form-control--input
                                                   form-control--float                        
                                                   " data-plugin="inputState  ">
                                                <input id="text-76101" name="email" type="email" required
                                                   placeholder="e-mail" maxlength="50" autocapitalize="none" value="">
                                                <label for="text-76101" class="form-label text-c1 text-color-small ">
                                                   e-mail </label>
                                                <svg class="icon icon-form-success form-control__success" width="20"
                                                   height="20" aria-hidden="true" viewBox="0 0 20 20"
                                                   style="--icon-width: 20; --icon-height: 20;">
                                                   <use href="assets/images/icons.svg#form-success"
                                                      xlink:href="assets/images/icons.svg#form-success"></use>
                                                </svg>
                                                <svg class="icon icon-form-error form-control__error" width="20"
                                                   height="20" aria-hidden="true" viewBox="0 0 20 20"
                                                   style="--icon-width: 20; --icon-height: 20;">
                                                   <use href="assets/images/icons.svg#form-error"
                                                      xlink:href="assets/images/icons.svg#form-error"></use>
                                                </svg>
                                                <span class="form-control__line"></span>
                                                <span class="form-control__progress"></span>
                                             </div>
                                          </div>
                                          <div
                                             class="error-message is-hidden js-form-error-message text-left l-callback__limited-width"
                                             role="alert" aria-live="assertive"></div>
                                       </div>
                                       <div
                                          class="flats-subscribe__buttons row row--nowrap row--middle-xs row--between-xs">
                                          <button class="btn btn--primary btn--clone btn--text-small is-hidden--sm-down"
                                             type="submit" data-plugin=" button" data-button-clone-content="true">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   send
                                                </span>
                                             </span>
                                          </button>
                                          <button class="btn btn--sm btn--primary btn--text-small is-hidden--md-up"
                                             type="submit">
                                             <span class="btn__content">
                                                <span class="btn__text  ">
                                                   send
                                                </span>
                                             </span>
                                          </button>
                                          <div class=" text l-callback__limited-width ml-layout">
                                             <p class="leading-trim text-color-small text-c2-small text-right:md">
                                                By clicking the button, you agree
                                                <br>
                                                to our <a class="btn--link btn--clone text-c2-small mt-1"
                                                   href="agreement.html" target="_blank">privacy policy</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php $this->load->view('common/modal/menu'); ?>
            <?php $this->load->view('common/modal/menu_picker'); ?>
         </div>
      </div>
   </div>
   <?php $this->load->view('common/cookies'); ?>
   
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
   <script fetchpriority="low" async src="assets/javascripts/browser-message/browser-message.js"></script>
   <script fetchpriority="low" src="assets/javascripts/shared.js"></script>
   <script fetchpriority="low" src="assets/javascripts/infrastructure.js"></script>
</body>

</html>