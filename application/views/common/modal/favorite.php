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
                                                    xlink:href="assets/images/icons.svg#email">
                                                </use>
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
                                                                            <%- numberFormat(flat.price_per_m, 0, '', ' ') %> /m<sup>2</sup>
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
                                                                        <%- flat.square %> m<sup>2</sup>
                                                                    </p>
                                                                    <p>
                                                                        <%- flat.roomsText %> 
                                                                    </p>
                                                                    <p>
                                                                        <%- flat.floor %> floor
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