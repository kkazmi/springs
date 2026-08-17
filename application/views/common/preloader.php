<?php
    $currentUrl = currentUrl();
    if($currentUrl == base_url()){
?>
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

<?php }else{ ?>
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
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                </p>
            </div>
        </div>
    </div>
<?php } ?>