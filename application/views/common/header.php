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
        <span class="sticky-icon">
            <svg xmlns="http://www.w3.org/2000/svg"
               width="25" height="23"
               viewBox="0 0 24 24"
               fill="currentColor"
               aria-hidden="true">
               <path d="M20.52 3.48A11.84 11.84 0 0 0 12.08 0C5.54 0 .21 5.33.21 11.87c0 2.09.55 4.13 1.6 5.93L.1 24l6.35-1.67a11.86 11.86 0 0 0 5.63 1.43h.01c6.54 0 11.87-5.33 11.87-11.87 0-3.17-1.23-6.15-3.44-8.41zM12.09 21.7h-.01a9.85 9.85 0 0 1-5.02-1.38l-.36-.21-3.77.99 1.01-3.67-.23-.38a9.82 9.82 0 0 1-1.51-5.18C2.2 6.44 6.64 2 12.09 2a9.82 9.82 0 0 1 6.99 2.9 9.82 9.82 0 0 1 2.89 6.99c0 5.45-4.44 9.89-9.88 9.89zm5.42-7.41c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.27-.47-2.42-1.5-.9-.8-1.51-1.78-1.69-2.08-.18-.3-.02-.46.13-.61.14-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.61-.92-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.37-.27.3-1.04 1.02-1.04 2.48s1.07 2.88 1.22 3.08c.15.2 2.1 3.21 5.08 4.5.71.31 1.27.49 1.7.63.71.23 1.35.2 1.86.12.57-.08 1.76-.72 2.01-1.41.25-.69.25-1.28.17-1.41-.07-.12-.27-.2-.57-.35z"/>
            </svg>
        </span>
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