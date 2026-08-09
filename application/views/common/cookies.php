<dialog open aria-label="Cookie consent" aria-describedby="cookie-consent-description" class="cookie-consent cookie-consent--simple ui-light" data-plugin="cookieConsent" id="cookie-consent">
    <div class="cookie-consent__container ui-background">
        <p id="cookie-consent-description" class="cookie-consent__description">
        <span class="cookie-consent__description__text text-c2 leading-trim">
            This site collects
        </span>
        <a class="btn btn--link btn--text-smaller btn--clone" target="_blank" rel="noopener"
            href="<?php echo base_url('privacy'); ?>" data-plugin=" button" data-button-clone-content="true">
            <span class="btn__content">
                <span class="btn__text  ">
                    cookies.
                </span>
            </span>
        </a>
        </p>
        <a class="btn btn--xs btn--outline btn--text-smaller btn--clone js-cookie-consent-accept"
        aria-label="allow cookies" data-plugin=" button" data-button-clone-content="true" tabindex="0"
        role="button">
        <span class="btn__content">
            <span class="btn__text  ">
                accept
            </span>
        </span>
        </a>
    </div>
</dialog>

<script>
    if ((document.cookie.indexOf('cookieConsentStatus=1') !== -1 || document.cookie.indexOf('cookieConsentStatus=0') !== -1) && document.querySelector('#cookie-consent')) {
        document.querySelector('#cookie-consent').classList.add('is-hidden')
    } else {
        document.documentElement.classList.add('with-cookie-consent');
    }
</script>

<div class="turn-message ui-dark" aria-live="assertive">
    <div class="turn-message__background turn-message__background--mobile background background--cover">
        <img class="img-cover is-invisible--js is-hidden--no-js" alt="" draggable="false" width="660" height="320"
        data-plugin="appear " data-src="assets/images/media/turn-message.svg"
        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22660%22%20height=%22320%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20660%20320%22%3E%3C/svg%3E">
        <noscript>
        <img class="img-cover " alt="" draggable="false" width="660" height="320" src="assets/images/media/turn-message.svg">
        </noscript>
    </div>
    <div class="turn-message__background turn-message__background--tablet background background--cover">
        <img class="img-cover is-invisible--js is-hidden--no-js" alt="" draggable="false" width="960" height="1200" data-plugin="appear " data-src="assets/images/media/turn-message-tablet.svg" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22960%22%20height=%221200%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20960%201200%22%3E%3C/svg%3E">
        <noscript>
        <img class="img-cover " alt="" draggable="false" width="960" height="1200" src="assets/images/media/turn-message-tablet.svg">
        </noscript>
    </div>
    <div class="turn-message__content">
        <svg class="icon icon-logo-mobile turn-message__logo" width="82" height="30" aria-hidden="true" viewBox="0 0 82 30" style="--icon-width: 82; --icon-height: 30;">
        <use href="assets/images/logo.webp" xlink:href="assets/images/logo.webp"></use>
        </svg>
        <svg class="icon icon-rotate turn-message__icon&#x20;mt-3&#x20;turn-message__icon--mobile" width="120" height="120" aria-hidden="true" viewBox="0 0 120 120" style="--icon-width: 120; --icon-height: 120;">
        <use href="assets/images/icons.svg#rotate" xlink:href="assets/images/icons.svg#rotate"></use>
        </svg>
        <svg class="icon icon-rotate-tablet turn-message__icon&#x20;mt-3&#x20;turn-message__icon--tablet" width="120" height="120" aria-hidden="true" viewBox="0 0 120 120" style="--icon-width: 120; --icon-height: 120;">
        <use href="assets/images/icons.svg#rotate-tablet" xlink:href="assets/images/icons.svg#rotate-tablet"></use>
        </svg>
        <p class="turn-message__content__mobile text-c2 leading-trim">
        Please rotate your device<br>to portrait mode
        </p>
        <p class="turn-message__content__tablet text-c2 leading-trim">
        Please rotate your device<br>to landscape mode
        </p>
    </div>
</div>