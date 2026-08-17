<div class="modal modal--full modal--split-animate--reverse ui-dark is-hidden" role="dialog"
    aria-hidden="true" aria-label="Меню" id="menu" data-plugin="modal modalMenu"
    data-modal-one-per-page="true" data-nosnippet>
    <div class="modal__background"></div>
    <div class="modal__animation">
        <div class="modal__scroller">
            <div class="modal__scroller__scrollable js-scroll-parent">
            <div class="modal__content-wrapper js-modal-scrollable-content">
                <div class="modal__content ui-background js-modal-ignore-auto-close js-scroll-parent-ignore">
                    <header class="header header--sticky is-hidden--print ui-dark header--landing">
                        <div class="header__content px-layout">
                        <div class="header__left header-animation-logo is-hidden--md-up">
                            <a class="header__logo--mobile" href="<?php echo base_url(); ?>" aria-label="Homepage">
                                <svg class="icon icon-logo-mobile" width="82" height="30" aria-hidden="true"
                                    viewBox="0 0 82 30" style="--icon-width: 82; --icon-height: 30;">
                                    <use href="assets/images/logo.webp" xlink:href="assets/images/logo.webp">
                                    </use>
                                </svg>
                            </a>
                        </div>
                        <div class="header__left header-animation-link is-hidden--sm-down">
                            <a class="btn btn--text-small btn--link btn--icon-spacing-large is-hidden--sm-down js-modal-close menu__close"
                                aria-label="Close menu" tabindex="0" role="button">
                                <span class="btn__content">
                                    <span class="btn__icon ">
                                    <svg class="icon icon-close-large" width="32" height="32"
                                        aria-hidden="true" viewBox="0 0 32 32"
                                        style="--icon-width: 32; --icon-height: 32;">
                                        <use href="assets/images/icons.svg#close-large"
                                            xlink:href="assets/images/icons.svg#close-large">
                                        </use>
                                    </svg>
                                    </span>
                                </span>
                            </a>
                            <a class="btn btn--text-small  btn--link btn--clone" href="<?php echo base_url('flats'); ?>"
                                data-plugin=" button" data-button-clone-content="true">
                                <span class="btn__content">
                                    <span class="btn__text  ">
                                    Residences
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="header__center is-hidden--sm-down">
                            <a class="header__logo" href="#top" aria-label="Scroll to top of the page">
                                <span class="header__logo__inner header-animation-logo">
                                    <span class="header__logo__left">
                                    <img src="assets/images/logoIcon.png" class="icon icon-logo-left"
                                        aria-hidden="true" alt="logo-icon" />
                                    </span>
                                    <span class="header__logo__right">
                                    <img class="icon icon-logo-right" aria-hidden="true"
                                        src="assets/images/logoText.png" />
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="header__right header-animation-link">
                            <a class="btn btn--text-small btn--link btn--clone is-hidden--md-up"
                                href="<?php echo base_url('flats'); ?>" data-plugin=" button" data-button-clone-content="true">
                                <span class="btn__content">
                                    <span class="btn__text  ">
                                        Residences
                                    </span>
                                </span>
                            </a>
                            <div class="favourite-btn is-hidden--md-up">
                                <a class="btn btn btn--text-small btn--link btn--square btn--sm"
                                    href="#favorites-modal">
                                    <span class="btn__content">
                                    <span class="btn__icon ">
                                        <svg class="icon icon-heart" width="16" height="16"
                                            aria-hidden="true" viewBox="0 0 16 16"
                                            style="--icon-width: 16; --icon-height: 16;">
                                            <use href="assets/images/icons.svg#heart"
                                                xlink:href="assets/images/icons.svg#heart">
                                            </use>
                                        </svg>
                                    </span>
                                    </span>
                                </a>
                                <span class="favourite-btn__counter text-c2 is-hidden"
                                    data-plugin="favouriteCounter"
                                    data-favourite-counter-inactive-class="is-hidden"></span>
                            </div>
                            <a class="btn btn--text-small btn--link is-hidden--md-up js-modal-close menu__close"
                                aria-label="Close menu" tabindex="0" role="button">
                                <span class="btn__content">
                                    <span class="btn__icon ">
                                    <svg class="icon icon-close-large" width="30" height="30"
                                        aria-hidden="true" viewBox="0 0 30 30"
                                        style="--icon-width: 30; --icon-height: 30;">
                                        <use href="assets/images/icons.svg#close-large"
                                            xlink:href="assets/images/icons.svg#close-large">
                                        </use>
                                    </svg>
                                    </span>
                                </span>
                            </a>
                            <a class="btn btn--text-small  btn--link btn--clone is-hidden--sm-down"
                                href="#callback-modal" data-plugin=" button" data-button-clone-content="true">
                                <span class="btn__content">
                                    <span class="btn__text  ">
                                    Contact us
                                    </span>
                                </span>
                            </a>
                        </div>
                        </div>
                    </header>
                    <div class="row" data-plugin="contentAnimation" data-content-animation-animations='{
                        "changeShow": {"name": "imageClipIn", "duration": "slow"}
                        }' data-content-animation-plugins="controller events height counter"
                        class="js-menu-controller-selector" data-content-animation-link-event="hover">
                        <div class="menu__list col col--md-6 px-layout py-1 p-relative">
                        <div class="background background--cover is-hidden--md-down">
                            <picture class="is-invisible--js is-hidden--no-js background background--cover"
                                data-plugin="appear " draggable="false">
                                <source data-srcset="assets/images/media/menu/bg-desktop-2@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                    height="900">
                                <source data-srcset="assets/images/media/menu/bg-desktop-2@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                    height="900">
                                <img data-src="assets/images/media/menu/bg-desktop-2@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" draggable="false">
                            </picture>
                            <noscript>
                                <picture class=" background background--cover" draggable="false">
                                    <source srcset="assets/images/media/menu/bg-desktop-2@xxxl.webp"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <source srcset="assets/images/media/menu/bg-desktop-2@xxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <img src="assets/images/media/menu/bg-desktop-2%40md.webp" alt=""
                                    width="720" height="900" draggable="false">
                                </picture>
                            </noscript>
                        </div>
                        <div class="pt-1 is-hidden--sm-down"></div>
                        <ul class="menu__list__list pt-2 pt-0:md">
                            <li class="js-content-animation-link is-active" data-content-animation-id="1">
                                <a href="<?php echo base_url('detail'); ?>" class="leading-trim">Residences</a>
                            </li>
                            <li class="js-content-animation-link " data-content-animation-id="2">
                                <a href="<?php echo base_url('design'); ?>" class="leading-trim">
                                    Design
                                </a>
                            </li>
                            <li class="js-content-animation-link " data-content-animation-id="3">
                                <a href="<?php echo base_url('location'); ?>" class="leading-trim">
                                    Location
                                </a>
                            </li>
                            <li class="js-content-animation-link " data-content-animation-id="4">
                                <a href="<?php echo base_url('amenities'); ?>" class="leading-trim">
                                    Amenities
                                </a>
                            </li>
                            <li class="js-content-animation-link " data-content-animation-id="5">
                                <a href="<?php echo base_url('gallery'); ?>" class="leading-trim">
                                    Gallery
                                </a>
                            </li>
                            <li class="js-content-animation-link " data-content-animation-id="6">
                                <a href="<?php echo base_url('about'); ?>" class="leading-trim">
                                    About
                                </a>
                            </li>
                            <li class="js-content-animation-link " data-content-animation-id="6">
                                <a href="<?php echo base_url('news'); ?>" class="leading-trim">
                                    News & Media
                                </a>
                            </li>
                        </ul>
                        <div class="menu__list__sublist mt-3 mt-1:sm">
                            <ul class="">
                            </ul>
                        </div>
                        </div>
                        <div class="menu__images col col--md-6 is-hidden--sm-down">
                        <div class="content-animation">
                            <div data-content-animation-item="1" class=" parallax-image-move"
                                aria-hidden="false">
                                <picture
                                    class="is-invisible--js is-hidden--no-js background background--cover"
                                    data-plugin="appear " draggable="false">
                                    <source data-srcset="assets/images/media/menu/menu-1@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <source data-srcset="assets/images/media/menu/menu-1@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <img data-src="assets/images/media/menu/menu-1@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" draggable="false">
                                </picture>
                                <noscript>
                                    <picture class=" background background--cover" draggable="false">
                                    <source srcset="assets/images/media/menu/menu-1@xxxl.webp"
                                        media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <source srcset="assets/images/media/menu/menu-1@xxl.webp"
                                        media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <img src="assets/images/media/menu/menu-1%40md.webp" alt="" width="720"
                                        height="900" draggable="false">
                                    </picture>
                                </noscript>
                            </div>
                            <div data-content-animation-item="2" class="is-hidden parallax-image-move"
                                aria-hidden="true">
                                <picture
                                    class="is-invisible--js is-hidden--no-js background background--cover"
                                    data-plugin="appear " draggable="false">
                                    <source data-srcset="assets/images/media/menu/menu-2@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <source data-srcset="assets/images/media/menu/menu-2@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <img data-src="assets/images/media/menu/menu-2@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" draggable="false">
                                </picture>
                                <noscript>
                                    <picture class=" background background--cover" draggable="false">
                                    <source srcset="assets/images/media/menu/menu-2@xxxl.webp"
                                        media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <source srcset="assets/images/media/menu/menu-2@xxl.webp"
                                        media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <img src="assets/images/media/menu/menu-2%40md.webp" alt="" width="720"
                                        height="900" draggable="false">
                                    </picture>
                                </noscript>
                            </div>
                            <div data-content-animation-item="3" class="is-hidden parallax-image-move"
                                aria-hidden="true">
                                <picture
                                    class="is-invisible--js is-hidden--no-js background background--cover"
                                    data-plugin="appear " draggable="false">
                                    <source data-srcset="assets/images/media/menu/menu-3@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <source data-srcset="assets/images/media/menu/menu-3@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <img data-src="assets/images/media/menu/menu-3@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" draggable="false">
                                </picture>
                                <noscript>
                                    <picture class=" background background--cover" draggable="false">
                                    <source srcset="assets/images/media/menu/menu-3@xxxl.webp"
                                        media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <source srcset="assets/images/media/menu/menu-3@xxl.webp"
                                        media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <img src="assets/images/media/menu/menu-3%40md.webp" alt="" width="720"
                                        height="900" draggable="false">
                                    </picture>
                                </noscript>
                            </div>
                            <div data-content-animation-item="4" class="is-hidden parallax-image-move"
                                aria-hidden="true">
                                <picture
                                    class="is-invisible--js is-hidden--no-js background background--cover"
                                    data-plugin="appear " draggable="false">
                                    <source data-srcset="assets/images/media/menu/menu-4@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <source data-srcset="assets/images/media/menu/menu-4@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <img data-src="assets/images/media/menu/menu-4@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" draggable="false">
                                </picture>
                                <noscript>
                                    <picture class=" background background--cover" draggable="false">
                                    <source srcset="assets/images/media/menu/menu-4@xxxl.webp"
                                        media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <source srcset="assets/images/media/menu/menu-4@xxl.webp"
                                        media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <img src="assets/images/media/menu/menu-4%40md.webp" alt="" width="720"
                                        height="900" draggable="false">
                                    </picture>
                                </noscript>
                            </div>
                            <div data-content-animation-item="5" class="is-hidden parallax-image-move"
                                aria-hidden="true">
                                <picture
                                    class="is-invisible--js is-hidden--no-js background background--cover"
                                    data-plugin="appear " draggable="false">
                                    <source data-srcset="assets/images/media/menu/menu-5@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <source data-srcset="assets/images/media/menu/menu-5@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <img data-src="assets/images/media/menu/menu-5@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" draggable="false">
                                </picture>
                                <noscript>
                                    <picture class=" background background--cover" draggable="false">
                                    <source srcset="assets/images/media/menu/menu-5@xxxl.webp"
                                        media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <source srcset="assets/images/media/menu/menu-5@xxl.webp"
                                        media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <img src="assets/images/media/menu/menu-5%40md.webp" alt="" width="720"
                                        height="900" draggable="false">
                                    </picture>
                                </noscript>
                            </div>
                            <div data-content-animation-item="6" class="is-hidden parallax-image-move"
                                aria-hidden="true">
                                <picture
                                    class="is-invisible--js is-hidden--no-js background background--cover"
                                    data-plugin="appear " draggable="false">
                                    <source data-srcset="assets/images/media/menu/menu-6@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <source data-srcset="assets/images/media/menu/menu-6@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <img data-src="assets/images/media/menu/menu-6@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" draggable="false">
                                </picture>
                                <noscript>
                                    <picture class=" background background--cover" draggable="false">
                                    <source srcset="assets/images/media/menu/menu-6@xxxl.webp"
                                        media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <source srcset="assets/images/media/menu/menu-6@xxl.webp"
                                        media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <img src="assets/images/media/menu/menu-6%40md.webp" alt="" width="720"
                                        height="900" draggable="false">
                                    </picture>
                                </noscript>
                            </div>
                            <div data-content-animation-item="8" class="is-hidden parallax-image-move"
                                aria-hidden="true">
                                <picture class="is-invisible--js is-hidden--no-js img-cover"
                                    data-plugin="appear " draggable="false">
                                    <source data-srcset="assets/images/media/menu/menu-8@xxxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <source data-srcset="assets/images/media/menu/menu-8@xxl.webp"
                                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                    height="900">
                                    <img data-src="assets/images/media/menu/menu-8@md.webp"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                                    alt="" width="720" height="900" draggable="false">
                                </picture>
                                <noscript>
                                    <picture class=" img-cover" draggable="false">
                                    <source srcset="assets/images/media/menu/menu-8@xxxl.webp"
                                        media="(min-width: 1920px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <source srcset="assets/images/media/menu/menu-8@xxl.webp"
                                        media="(min-width: 1440px) and (min-height: 700px)" width="720"
                                        height="900">
                                    <img src="assets/images/media/menu/menu-8%40md.webp" alt="" width="720"
                                        height="900" draggable="false">
                                    </picture>
                                </noscript>
                            </div>
                        </div>
                        </div>
                        <div class="menu__bg background background--cover is-hidden--md-up">
                        <picture class="is-invisible--js is-hidden--no-js background background--cover"
                            data-plugin="appear " draggable="false">
                            <source data-srcset="assets/images/media/menu/bg-desktop@xxxl.webp"
                                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                            <source data-srcset="assets/images/media/menu/bg-desktop@xxl.webp"
                                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                            <source data-srcset="assets/images/media/menu/bg-desktop@md.webp"
                                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                width="1440" height="900">
                            <img data-src="assets/images/media/menu/bg-mobile@xs.webp"
                                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22838%22%20height=%221280%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20838%201280%22%3E%3C/svg%3E"
                                alt="" width="838" height="1280" draggable="false">
                        </picture>
                        <noscript>
                            <picture class=" background background--cover" draggable="false">
                                <source srcset="assets/images/media/menu/bg-desktop@xxxl.webp"
                                    media="(min-width: 1920px) and (min-height: 700px)" width="1440"
                                    height="900">
                                <source srcset="assets/images/media/menu/bg-desktop@xxl.webp"
                                    media="(min-width: 1440px) and (min-height: 700px)" width="1440"
                                    height="900">
                                <source srcset="assets/images/media/menu/bg-desktop@md.webp"
                                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                    width="1440" height="900">
                                <img src="assets/images/media/menu/bg-mobile%40xs.webp" alt="" width="838"
                                    height="1280" draggable="false">
                            </picture>
                        </noscript>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>