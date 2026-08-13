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
                                <label for="text-145564"
                                    class="form-label text-c1 text-color-small leading-trim">
                                    Message </label>
                                <input id="text-145564" name="message" type="text" required value="">
                            </div>
                            <div class="flats-subscribe__group">
                                <div class="col col--md-12 mb-2.5 mb-2:md">
                                    <div class="
                                        form-control form-control--input
                                        form-control--float                        
                                        " data-plugin="inputState  ">
                                    <input id="text-909398" name="email" type="email" required
                                        placeholder="e-mail" maxlength="50" autocapitalize="none" value="">
                                    <label for="text-909398" class="form-label text-c1 text-color-small ">
                                        e-mail </label>
                                    <svg class="icon icon-form-success form-control__success" width="20"
                                        height="20" aria-hidden="true" viewBox="0 0 20 20"
                                        style="--icon-width: 20; --icon-height: 20;">
                                        <use href="assets/images/icons.svg#form-success"
                                            xlink:href="assets/images/icons.svg#form-success">
                                        </use>
                                    </svg>
                                    <svg class="icon icon-form-error form-control__error" width="20"
                                        height="20" aria-hidden="true" viewBox="0 0 20 20"
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
                                        href="<?php echo base_url('privacy');?>" target="_blank">privacy policy</a>
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