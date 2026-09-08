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
                            <svg class="icon icon-close" width="14" height="14" aria-hidden="true" viewBox="0 0 14 14" style="--icon-width: 14; --icon-height: 14;">
                                <use href="assets/images/icons.svg#close" xlink:href="assets/images/icons.svg#close"></use>
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
                                    Submit<br> a request
                                </p>
                                <div class="is-hidden js-form-success l-callback__success">
                                    <p class=" h1 leading-trim">
                                    Thank you for your request! We have received your application and
                                    will contact you soon!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="l-callback__col col col--md-6 ui-dark ui-background mr-0 ml-auto px-layout py-layout js-form-content">
                            <div class="l-callback__tablist" role="tablist" aria-labelledby="application">
                                <a class="btn btn--outline btn--clone btn--md btn--text-small is-active"
                                    data-plugin=" button" data-button-clone-content="true"
                                    aria-controls="application" aria-selected="true" tabindex="0" role="tab">
                                    <span class="btn__content">
                                        <span class="btn__text">Enquiry request</span>
                                    </span>
                                </a>
                                <a class="btn btn--outline btn--clone btn--md btn--text-small"
                                    data-plugin="button" data-button-clone-content="true" aria-controls="call"
                                    aria-selected="false" tabindex="0" role="tab">
                                    <span class="btn__content">
                                        <span class="btn__text">Book a site Visit</span>
                                    </span>
                                </a>
                            </div>
                            <div class="tabs-contents">
                                <div class="tabs-contents__content ui-background js-tab" id="application" role="tabpanel" aria-hidden="false">
                                    <form
                                        class="l-callback__form-container ui-dark ui-background pt-1:md pb-1:md"
                                        method="POST"
                                        action="api/contact.json"
                                        data-plugin="ajaxForm ajaxFormCalltouch recaptcha"
                                        data-recaptcha-type="yandex"
                                        data-recaptcha-yandex-key="ysc1_xuCetcddmTWwcdcDRafE9wAV2kVtWnwUtoccCvKf7d2c00fd"
                                        data-ajax-form-loading-delay="1500"
                                        data-ajax-form-calltouch-title="Заявка"
                                        data-ajax-form-calltouch-site-id="">
                                        <div class="col col--xs-4 col--md-6 l-callback__form">
                                            <!-- Hidden tracking fields -->
                                            <input data-plugin="utmData" type="hidden" name="utm" value="">
                                            <input data-plugin="pagePathname" type="hidden" name="currentPageLink" value="">
                                            <div class="l-callback__group">
                                                <!-- Name -->
                                                <div class="col col--md-12 mb-2 mb-1:md">
                                                    <div class="form-control form-control--input form-control--float" data-plugin="inputState">
                                                        <input
                                                            id="contact_name"
                                                            name="contact_name"
                                                            type="text"
                                                            required
                                                            placeholder="Name"
                                                            maxlength="50"
                                                            autocomplete="name"
                                                            value="">
                                                        <label for="contact_name" class="form-label text-c1 text-color-small">Name</label>
                                                        <svg
                                                            class="icon icon-form-success form-control__success"
                                                            width="20"
                                                            height="20"
                                                            aria-hidden="true"
                                                            viewBox="0 0 20 20"
                                                            style="--icon-width: 20; --icon-height: 20;">
                                                            <use
                                                                href="assets/images/icons.svg#form-success"
                                                                xlink:href="assets/images/icons.svg#form-success">
                                                            </use>
                                                        </svg>
                                                        <svg
                                                            class="icon icon-form-error form-control__error"
                                                            width="20"
                                                            height="20"
                                                            aria-hidden="true"
                                                            viewBox="0 0 20 20"
                                                            style="--icon-width: 20; --icon-height: 20;">
                                                            <use
                                                                href="assets/images/icons.svg#form-error"
                                                                xlink:href="assets/images/icons.svg#form-error">
                                                            </use>
                                                        </svg>
                                                        <span class="form-control__line"></span>
                                                        <span class="form-control__progress"></span>
                                                    </div>
                                                </div>
                                                <!-- Email -->
                                                <div class="col col--md-12 mb-2 mb-1:md">
                                                    <div class="form-control form-control--input form-control--float" data-plugin="inputState">
                                                        <input
                                                            id="contact_email"
                                                            name="contact_email"
                                                            type="email"
                                                            required
                                                            placeholder="Email"
                                                            maxlength="100"
                                                            autocomplete="email"
                                                            autocapitalize="none"
                                                            value="">

                                                        <label for="contact_email" class="form-label text-c1 text-color-small">Email</label>
                                                        <svg
                                                            class="icon icon-form-success form-control__success"
                                                            width="20"
                                                            height="20"
                                                            aria-hidden="true"
                                                            viewBox="0 0 20 20"
                                                            style="--icon-width: 20; --icon-height: 20;">
                                                            <use
                                                                href="assets/images/icons.svg#form-success"
                                                                xlink:href="assets/images/icons.svg#form-success">
                                                            </use>
                                                        </svg>
                                                        <svg
                                                            class="icon icon-form-error form-control__error"
                                                            width="20"
                                                            height="20"
                                                            aria-hidden="true"
                                                            viewBox="0 0 20 20"
                                                            style="--icon-width: 20; --icon-height: 20;">
                                                            <use
                                                                href="assets/images/icons.svg#form-error"
                                                                xlink:href="assets/images/icons.svg#form-error">
                                                            </use>
                                                        </svg>
                                                        <span class="form-control__line"></span>
                                                        <span class="form-control__progress"></span>
                                                    </div>
                                                </div>
                                                <!-- Phone -->
                                                <div class="col col--md-12 mb-2 mb-1:md">
                                                    <div class="form-control form-control--input form-control--float" data-plugin="inputState">
                                                        <input
                                                            id="contact_phone"
                                                            name="contact_phone"
                                                            type="tel"
                                                            required
                                                            placeholder="Phone"
                                                            maxlength="20"
                                                            autocomplete="tel"
                                                            autocapitalize="none"
                                                            value="">
                                                        <label
                                                            for="contact_phone"
                                                            class="form-label text-c1 text-color-small">
                                                            Phone
                                                        </label>
                                                        <svg
                                                            class="icon icon-form-success form-control__success"
                                                            width="20"
                                                            height="20"
                                                            aria-hidden="true"
                                                            viewBox="0 0 20 20"
                                                            style="--icon-width: 20; --icon-height: 20;">
                                                            <use
                                                                href="assets/images/icons.svg#form-success"
                                                                xlink:href="assets/images/icons.svg#form-success">
                                                            </use>
                                                        </svg>
                                                        <svg
                                                            class="icon icon-form-error form-control__error"
                                                            width="20"
                                                            height="20"
                                                            aria-hidden="true"
                                                            viewBox="0 0 20 20"
                                                            style="--icon-width: 20; --icon-height: 20;">
                                                            <use
                                                                href="assets/images/icons.svg#form-error"
                                                                xlink:href="assets/images/icons.svg#form-error">
                                                            </use>
                                                        </svg>
                                                        <span class="form-control__line"></span>
                                                        <span class="form-control__progress"></span>
                                                    </div>
                                                </div>
                                                <!-- Subject -->
                                                <div class="col col--md-12 mb-2 mb-1:md">
                                                    <div class="form-control form-control--input form-control--float" data-plugin="inputState">
                                                        <input
                                                            id="contact_subject"
                                                            name="contact_subject"
                                                            type="text"
                                                            required
                                                            placeholder="Subject"
                                                            maxlength="150"
                                                            value="">
                                                        <label
                                                            for="contact_subject"
                                                            class="form-label text-c1 text-color-small">
                                                            Subject
                                                        </label>
                                                        <svg
                                                            class="icon icon-form-success form-control__success"
                                                            width="20"
                                                            height="20"
                                                            aria-hidden="true"
                                                            viewBox="0 0 20 20"
                                                            style="--icon-width: 20; --icon-height: 20;">
                                                            <use
                                                                href="assets/images/icons.svg#form-success"
                                                                xlink:href="assets/images/icons.svg#form-success">
                                                            </use>
                                                        </svg>
                                                        <svg
                                                            class="icon icon-form-error form-control__error"
                                                            width="20"
                                                            height="20"
                                                            aria-hidden="true"
                                                            viewBox="0 0 20 20"
                                                            style="--icon-width: 20; --icon-height: 20;">
                                                            <use
                                                                href="assets/images/icons.svg#form-error"
                                                                xlink:href="assets/images/icons.svg#form-error">
                                                            </use>
                                                        </svg>
                                                        <span class="form-control__line"></span>
                                                        <span class="form-control__progress"></span>
                                                    </div>
                                                </div>
                                                <!-- Message -->
                                                <div class="col col--md-12">
                                                    <div class="form-control form-control--input form-control--float" data-plugin="inputState">
                                                        <input id="contact_message" name="contact_message" type="text" required
                                                    placeholder="Message" maxlength="500" value="">
                                                        <label for="contact_message" class="form-label text-c1 text-color-small">Message</label>
                                                        <svg
                                                            class="icon icon-form-success form-control__success"
                                                            width="20"
                                                            height="20"
                                                            aria-hidden="true"
                                                            viewBox="0 0 20 20"
                                                            style="--icon-width: 20; --icon-height: 20;">
                                                            <use
                                                                href="assets/images/icons.svg#form-success"
                                                                xlink:href="assets/images/icons.svg#form-success">
                                                            </use>
                                                        </svg>
                                                        <svg
                                                            class="icon icon-form-error form-control__error"
                                                            width="20"
                                                            height="20"
                                                            aria-hidden="true"
                                                            viewBox="0 0 20 20"
                                                            style="--icon-width: 20; --icon-height: 20;">
                                                            <use
                                                                href="assets/images/icons.svg#form-error"
                                                                xlink:href="assets/images/icons.svg#form-error">
                                                            </use>
                                                        </svg>
                                                        <span class="form-control__line"></span>
                                                        <span class="form-control__progress"></span>
                                                    </div>
                                                </div>
                                                <!-- Error Message -->
                                                <div
                                                    class="error-message is-hidden js-form-error-message text-left l-callback__limited-width"
                                                    role="alert"
                                                    aria-live="assertive">
                                                </div>
                                            </div>
                                            <!-- Buttons -->
                                            <div
                                                class="l-callback__buttons row row--nowrap row--middle-xs row--between-xs mt-1:lg">
                                                <!-- Desktop Button -->
                                                <button
                                                    class="btn btn--primary btn--clone btn--text-small is-hidden--sm-down"
                                                    type="submit"
                                                    data-plugin="button"
                                                    data-button-clone-content="true">
                                                    <span class="btn__content">
                                                        <span class="btn__text">
                                                            Submit a request
                                                        </span>
                                                    </span>
                                                </button>
                                                <!-- Mobile Button -->
                                                <button class="btn btn--sm btn--primary btn--text-small is-hidden--md-up" type="submit">
                                                    <span class="btn__content"><span class="btn__text">Submit a request</span></span>
                                                </button>
                                                <!-- Privacy Policy -->
                                                <div class="text l-callback__limited-width ml-layout">
                                                    <p class="leading-trim text-color-small text-c2-small text-right:md">
                                                        By clicking the button, you agree
                                                        <br>
                                                        to our
                                                        <a
                                                            class="btn--link btn--clone text-c2-small mt-1"
                                                            href="<?php echo base_url('privacy');?>"
                                                            target="_blank">
                                                            privacy policy
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tabs-contents__content ui-background js-tab" id="call" role="tabpanel" aria-hidden="true">
                                    <form
                                        class="l-callback__form-container ui-dark ui-background pt-1:md pb-1:md"
                                        method="POST"
                                        action="api/contact.json"
                                        data-plugin="ajaxForm ajaxFormCalltouch recaptcha"
                                        data-recaptcha-type="yandex"
                                        data-recaptcha-yandex-key="ysc1_xuCetcddmTWwcdcDRafE9wAV2kVtWnwUtoccCvKf7d2c00fd"
                                        data-ajax-form-loading-delay="1500"
                                        data-ajax-form-calltouch-title="Book a Site Visit"
                                        data-ajax-form-calltouch-site-id="">

                                        <div class="col col--xs-4 col--md-6 l-callback__form">
                                            <!-- Hidden Fields -->
                                            <input data-plugin="utmData" type="hidden" name="utm" value="">
                                            <input data-plugin="pagePathname" type="hidden" name="currentPageLink" value="">
                                            <input type="hidden" name="form_type" value="site_visit">

                                            <!-- Honeypot -->
                                            <div class="sr-only" data-plugin="inputBear">
                                                <label for="site_visit_honeypot">Message</label>
                                                <input
                                                    id="site_visit_honeypot"
                                                    name="message"
                                                    type="text"
                                                    value="">
                                            </div>

                                            <div class="l-callback__group">

                                                <!-- Full Name -->
                                                <div class="col col--md-12 mb-2 mb-1:md">
                                                    <div class="form-control form-control--input form-control--float"
                                                        data-plugin="inputState">

                                                        <input
                                                            id="contact_name"
                                                            name="name"
                                                            type="text"
                                                            required
                                                            placeholder="Full Name"
                                                            maxlength="50"
                                                            autocomplete="name"
                                                            value="">

                                                        <label for="contact_name"
                                                            class="form-label text-c1 text-color-small">
                                                            Full Name
                                                        </label>

                                                        <span class="form-control__line"></span>
                                                        <span class="form-control__progress"></span>
                                                    </div>
                                                </div>

                                                <!-- Phone + Email -->
                                                <div class="form-group group mb-2 mb-1:md">

                                                    <!-- Phone -->
                                                    <div class="col">
                                                        <div class="form-control form-control--input form-control--float"
                                                            data-plugin="inputState inputMask"
                                                            data-input-mask-mask="+# ### ### ## ##">

                                                            <input
                                                                id="contact_phone"
                                                                name="phone"
                                                                type="tel"
                                                                required
                                                                placeholder="Phone"
                                                                maxlength="20"
                                                                autocomplete="tel"
                                                                autocapitalize="none"
                                                                value="">

                                                            <label for="contact_phone"
                                                                class="form-label text-c1 text-color-small">
                                                                Phone
                                                            </label>

                                                            <span class="form-control__line"></span>
                                                            <span class="form-control__progress"></span>
                                                        </div>
                                                    </div>

                                                    <!-- Email -->
                                                    <div class="col">
                                                        <div class="form-control form-control--input form-control--float"
                                                            data-plugin="inputState">

                                                            <input
                                                                id="contact_email"
                                                                name="email"
                                                                type="email"
                                                                placeholder="Email"
                                                                maxlength="100"
                                                                autocomplete="email"
                                                                autocapitalize="none"
                                                                value="">

                                                            <label for="contact_email"
                                                                class="form-label text-c1 text-color-small">
                                                                Email
                                                            </label>

                                                            <span class="form-control__line"></span>
                                                            <span class="form-control__progress"></span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Project + Visitors -->
                                                <div class="form-group group mb-2 mb-1:md">

                                                    <!-- Project -->
                                                    <div class="col">
                                                        <div class="form-control form-control--select form-control--input form-control--with-label form-control--float"
                                                            data-plugin="inputSelect inputState selectFake">

                                                            <div class="form-control__content">

                                                                <select
                                                                    id="site_visit_project"
                                                                    name="project"
                                                                    required>

                                                                    <option value="" selected disabled>
                                                                        Select Project
                                                                    </option>

                                                                    <option value="Project 1">Project 1</option>
                                                                    <option value="Project 2">Project 2</option>
                                                                    <option value="Project 3">Project 3</option>

                                                                </select>

                                                                <span class="js-input-select-fake-value form-control__fake-input">
                                                                    <span class="js-input-select-fake-value-text leading-trim">
                                                                        Select Project
                                                                    </span>
                                                                </span>

                                                                <label for="site_visit_project"
                                                                    class="form-label text-c1 text-color-small">
                                                                    Project
                                                                </label>

                                                                <span class="form-control__arrow js-form-control-select-close">
                                                                    <svg class="icon icon-chevron-top"
                                                                        width="14"
                                                                        height="7"
                                                                        aria-hidden="true"
                                                                        viewBox="0 0 14 7">
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

                                                    <!-- Visitors -->
                                                    <div class="col">
                                                        <div class="form-control form-control--select form-control--input form-control--with-label form-control--float"
                                                            data-plugin="inputSelect inputState selectFake">

                                                            <div class="form-control__content">

                                                                <select
                                                                    id="site_visit_visitors"
                                                                    name="visitors">

                                                                    <option value="1" selected>1 Person</option>
                                                                    <option value="2">2 People</option>
                                                                    <option value="3">3 People</option>
                                                                    <option value="4">4 People</option>
                                                                    <option value="5">5+ People</option>

                                                                </select>

                                                                <span class="js-input-select-fake-value form-control__fake-input">
                                                                    <span class="js-input-select-fake-value-text leading-trim">
                                                                        1 Person
                                                                    </span>
                                                                </span>

                                                                <label for="site_visit_visitors"
                                                                    class="form-label text-c1 text-color-small">
                                                                    Visitors
                                                                </label>

                                                                <span class="form-control__arrow js-form-control-select-close">
                                                                    <svg class="icon icon-chevron-top"
                                                                        width="14"
                                                                        height="7"
                                                                        aria-hidden="true"
                                                                        viewBox="0 0 14 7">
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

                                                <!-- Preferred Date + Time -->
                                                <div class="form-group group mb-2 mb-1:md">

                                                    <!-- Date -->
                                                    <div class="col">
                                                        <div class="form-control form-control--input form-control--float"
                                                            data-plugin="inputState">

                                                            <input
                                                                id="site_visit_date"
                                                                name="visit_date"
                                                                type="date"
                                                                required
                                                                min="<?php echo date('Y-m-d'); ?>">

                                                            <label for="site_visit_date"
                                                                class="form-label text-c1 text-color-small">
                                                                Preferred Date
                                                            </label>

                                                            <span class="form-control__line"></span>
                                                            <span class="form-control__progress"></span>

                                                        </div>
                                                    </div>

                                                    <!-- Time -->
                                                    <div class="col">
                                                        <div class="form-control form-control--select form-control--input form-control--with-label form-control--float"
                                                            data-plugin="inputSelect inputState selectFake">

                                                            <div class="form-control__content">

                                                                <select
                                                                    id="site_visit_time"
                                                                    name="visit_time"
                                                                    required>

                                                                    <option value="" selected disabled>
                                                                        Select Time
                                                                    </option>

                                                                    <option value="09:00 - 11:00">
                                                                        09:00 AM - 11:00 AM
                                                                    </option>

                                                                    <option value="11:00 - 01:00">
                                                                        11:00 AM - 01:00 PM
                                                                    </option>

                                                                    <option value="01:00 - 03:00">
                                                                        01:00 PM - 03:00 PM
                                                                    </option>

                                                                    <option value="03:00 - 05:00">
                                                                        03:00 PM - 05:00 PM
                                                                    </option>

                                                                    <option value="05:00 - 07:00">
                                                                        05:00 PM - 07:00 PM
                                                                    </option>

                                                                </select>

                                                                <span class="js-input-select-fake-value form-control__fake-input">
                                                                    <span class="js-input-select-fake-value-text leading-trim">
                                                                        Select Time
                                                                    </span>
                                                                </span>

                                                                <label for="site_visit_time"
                                                                    class="form-label text-c1 text-color-small">
                                                                    Preferred Time
                                                                </label>

                                                                <span class="form-control__arrow js-form-control-select-close">
                                                                    <svg class="icon icon-chevron-top"
                                                                        width="14"
                                                                        height="7"
                                                                        aria-hidden="true"
                                                                        viewBox="0 0 14 7">
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

                                                <!-- Message -->
                                                <div class="col col--md-12 mb-2 mb-1:md">
                                                    <div class="form-control form-control--input form-control--float" data-plugin="inputState">
                                                        <input id="visit_message" name="visit_message" type="text" required placeholder="Message" maxlength="500" value="">
                                                        <label for="site_visit_message" class="form-label text-c1 text-color-small">Message</label>
                                                        <span class="form-control__line"></span>
                                                        <span class="form-control__progress"></span>
                                                    </div>
                                                </div>
                                                <!-- Error -->
                                                <div
                                                    class="error-message is-hidden js-form-error-message text-left l-callback__limited-width"
                                                    role="alert"
                                                    aria-live="assertive">
                                                </div>
                                            </div>
                                            <!-- Submit -->
                                            <div class="l-callback__buttons row row--nowrap row--middle-xs row--between-xs mt-1:lg">
                                                <!-- Desktop -->
                                                <button class="btn btn--primary btn--text-small is-hidden--sm-down" type="submit">
                                                    <span class="btn__content">
                                                        <span class="btn__text">Book Site Visit</span>
                                                    </span>
                                                </button>
                                                <!-- Mobile -->
                                                <button
                                                    class="btn btn--sm btn--primary btn--text-small is-hidden--md-up"
                                                    type="submit">

                                                    <span class="btn__content">
                                                        <span class="btn__text">
                                                            Book Site Visit
                                                        </span>
                                                    </span>

                                                </button>

                                                <!-- Privacy -->
                                                <div class="text l-callback__limited-width ml-layout">
                                                    <p class="leading-trim text-color-small text-c2-small text-right:md">

                                                        By clicking the button, you agree
                                                        <br>

                                                        to our
                                                        <a
                                                            class="btn--link btn--clone text-c2-small mt-1"
                                                            href="<?php echo base_url('privacy');?>"
                                                            target="_blank">
                                                            privacy policy
                                                        </a>

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