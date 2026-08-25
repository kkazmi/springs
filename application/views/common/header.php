<?php
    $tag = '  data-themed-enable-for-mobile="true" ';
    $class = '';
    $currentUrl = currentUrl();
    if($currentUrl == base_url()){
        $tag .= ' data-reveal="preloader" data-reveal-visible="true" data-reveal-distance="0" data-reveal-enable-ajax-loaded="false" ';
        $class .= ' header--landing ';
    }
?>

<header class="header is-hidden--print js-header  header--sticky ui-dark <?php echo $class; ?> " isFlatPage="false"
   isFlatsPage="false" isVisualSearchPage="false" data-plugin="themed  stickyHeader " <?php echo $tag; ?>>

   <div class="header__background"></div>
   <div class="header__content px-layout">
      <div class="header__left header-animation-logo is-hidden--md-up" data-custom-scroll-theme-target="left">
         <a class="header__logo--mobile"  href="<?php echo base_url(); ?>" aria-label="Homepage">
            <img class="icon icon-logo-mobile" src="assets/images/logo.webp"  style="width: 90px; height: auto;"/>
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
         <a class="btn btn--text-small  btn--link btn--clone is-hidden--hover" href="<?php echo base_url('flats'); ?>"
            data-plugin=" button" data-button-clone-content="true">
            <span class="btn__content">
               <span class="btn__text  ">
                  Residences
               </span>
            </span>
         </a>
      </div>
      <div class="header__center is-hidden--sm-down" data-custom-scroll-theme-target="right">
         <a class="header__logo" href="<?php echo base_url(); ?>" aria-label="Scroll to top of the page">
            <span class="header__logo__inner header-animation-logo">
               <span class="header__logo__left">
                  <img class="icon icon-logo-left" src="assets/images/logoIcon.png" />
               </span>
               <span class="header__logo__right">
                  <img class="icon icon-logo-right" src="assets/images/logoText.png" />
               </span>
            </span>
         </a>
      </div>
      <div class="header__right header-animation-link" data-custom-scroll-theme-target="right">
         <a class="btn btn--text-small btn--link btn--clone is-hidden--md-up"  href="<?php echo base_url('flats'); ?>"
            data-plugin=" button" data-button-clone-content="true">
            <span class="btn__content">
               <span class="btn__text  ">
                  Residences
               </span>
            </span>
         </a>
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
</header>

  <!-- Sticky Contact Buttons -->
<div class="sticky-contact">
    <!-- Call -->
    <a href="tel:+1234567890" class="sticky-btn call">
        <span class="sticky-icon">
         <svg xmlns="http://www.w3.org/2000/svg"
            width="25" height="23"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true">

            <rect x="3" y="4" width="18" height="17" rx="2"/>
            <line x1="16" y1="2" x2="16" y2="6"/>
            <line x1="8" y1="2" x2="8" y2="6"/>
            <line x1="3" y1="10" x2="21" y2="10"/>

            <path d="M12 13a3 3 0 0 1 3 3c0 2-3 5-3 5s-3-3-3-5a3 3 0 0 1 3-3z"/>
            <circle cx="12" cy="16" r="1"/>
         </svg>
        </span>
        <span class="sticky-text">Book a site Visit</span>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/1234567890" target="_blank" class="sticky-btn whatsapp">
        <span class="sticky-icon">✆</span>
        <span class="sticky-text">WhatsApp</span>
    </a>

    <!-- Contact Form -->
    <a class="sticky-btn contact  "
                                href="#callback-modal" data-plugin=" button" data-button-clone-content="true"">
         <span class="sticky-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="23"
               viewBox="0 0 24 24" fill="none" stroke="currentColor"
               stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               aria-hidden="true">
               <path d="M21 11.5a8.4 8.4 0 0 1-9 8.5 9.2 9.2 0 0 1-4-.9L3 21l1.9-4.4A8.4 8.4 0 0 1 3 11.5a8.5 8.5 0 0 1 18 0Z"/>
               <path d="M9 10a3 3 0 1 1 5.2 2c-.8.8-1.7 1.1-1.7 2.5"/>
               <path d="M12.5 17h.01"/>
            </svg>
        </span>
        <span class="sticky-text">Enquiry</span>
    </a>
</div>