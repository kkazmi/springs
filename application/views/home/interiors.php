<div class="l-interiors sticky sticky--full-height sticky--under-previous is-hidden--md-down"
    id="interiors" data-plugin="reveal">
    <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
    data-scroll-target="#interiors">
    <div class="l-interiors__intro" data-scroll-snap-point='[{ "viewport": 0, "element": 100 }]'>
        <div data-themed-class="ui-dark"></div>
        <div class=" background background--cover">
            <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                data-parallax-measure-selector=".sticky" data-parallax-clamp="true"
                data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                data-parallax--250-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                data-plugin="appear  parallax" draggable="false">
                <source data-srcset="assets/images/media/landing/8.interiors/interiors-bg@xxxl.webp"
                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                <source data-srcset="assets/images/media/landing/8.interiors/interiors-bg@xxl.webp"
                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                <img data-src="assets/images/media/landing/8.interiors/interiors-bg@md.webp"
                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                alt="" width="1440" height="900" draggable="false">
            </picture>
            <noscript>
                <picture class=" img-cover parallax-image-move"
                data-parallax-measure-selector=".sticky" data-parallax-clamp="true"
                data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                data-parallax--250-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                data-plugin=" parallax" draggable="false">
                <source srcset="assets/images/media/landing/8.interiors/interiors-bg@xxxl.webp"
                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                <source srcset="assets/images/media/landing/8.interiors/interiors-bg@xxl.webp"
                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                <img src="assets/images/media/landing/8.interiors/interiors-bg%40md.webp" alt=""
                    width="1440" height="900" draggable="false">
                </picture>
            </noscript>
        </div>
        <div class="px-layout l-interiors__intro-caption">
            <h2 class="text-right g1 leading-trim" data-reveal="title">
                Green Bhoomi
            </h2>
            <div class="mt-1">
                <p class="text-c1 text-right leading-trim" data-reveal="title"
                data-reveal-distance="100px">
                Crafted for Timeless Living
                </p>
            </div>
        </div>
        <div class="px-layout">
            <div class="l-interiors__intro__text mt-3 col col--md-4">
                <p class="text-t1 leading-trim" data-reveal="text">
                Your future begins with the right piece of land. Our thoughtfully planned plots combine prime locations, modern infrastructure, and natural surroundings to create the perfect foundation for your dream home or investment. Wide roads, green landscapes, and well-designed communities ensure lasting value for generations to come.
                </p>
            </div>
        </div>
    </div>
    <div class="l-interiors__slider row ui-light"
        data-scroll-snap-point='[{ "viewport": 0, "element": 220 }]' data-plugin="contentAnimation"
        data-content-animation-fixed-height="false" data-content-animation-animations='{
            "changeShow": {"name": "imageClipIn", "duration": "slow"}
            }' data-content-animation-link-event="click">
        <div class="content-animation col col--md-6" data-plugin="parallax"
            data-parallax-enable-mq="md-up" data-parallax-clamp="true"
            data-parallax-measure-selector=".sticky"
            data-parallax--120-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}'
            data-parallax--220-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>

            <?php $i = 0; foreach($interior_images as $image): $i++;  if ($i > 5) { break; }?>
            <div data-content-animation-item="<?php echo $i; ?>" class="col col--md-12 " aria-hidden="false">
                <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                draggable="false">
                <source
                    data-srcset="<?php echo $image['image']; ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                <source
                    data-srcset="<?php echo $image['image']; ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                <source
                    data-srcset="<?php echo $image['image']; ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                    width="720" height="900">
                <img
                    data-src="<?php echo $image['image']; ?>"
                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    alt="" width="720" height="900" draggable="false">
                </picture>
                <noscript>
                <picture class=" img-cover" draggable="false">
                    <source
                        srcset="<?php echo $image['image']; ?>"
                        media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                    <source
                        srcset="<?php echo $image['image']; ?>"
                        media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                    <source
                        srcset="<?php echo $image['image']; ?>"
                        media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                        width="720" height="900">
                    <img
                        src="<?php echo $image['image']; ?>"
                        alt="" width="720" height="900" draggable="false">
                </picture>
                </noscript>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="l-interiors__slider-thumb col col--md-6 px-1 py-1 px-layout:lg py-layout:lg"
            data-plugin="parallax " data-parallax-enable-mq="md-up" data-parallax-clamp="true"
            data-parallax-measure-selector=".sticky"
            data-parallax--120-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)"}'
            data-parallax--220-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>
            <div class="l-interiors__slider-thumb__links mb-2:md mb-3:xxxl">
                <?php $i = 0; foreach($interior_images as $image): $i++;  if ($i > 5) { break; }?>
                <div class="l-interiors__slider-thumb__links__item js-content-animation-link is-active" data-content-animation-id="<?php echo $i; ?>">
                    <img class="img-full is-invisible--js is-hidden--no-js" alt="" draggable="false" width="60" height="60" data-plugin="appear " data-src="<?php echo $image['thumb']; ?>" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%2260%22%20height=%2260%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%2060%2060%22%3E%3C/svg%3E">
                    <noscript>
                        <img class="img-full " alt="" draggable="false" width="60" height="60" src="<?php echo $image['thumb']; ?>">
                    </noscript>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="l-interiors__slider__caption">
                <div class="mb-0.5">
                <p class="text-t1 leading-trim" data-reveal="text">
                    Designed for a healthier and more connected lifestyle, our thoughtfully planned community offers spaces where every generation can thrive. From lush green parks and a vibrant children's play area to an open-air gym, a serene yoga deck, and a community amphitheatre, every amenity is crafted to bring comfort, recreation, and togetherness into everyday living.
                </p>
                </div>
            </div>
        </div>
        <div class="l-interiors__anchor" data-themed-class="ui-light"></div>
    </div>
    </div>
</div>
<div class="l-interiors__intro is-hidden--lg-up sticky sticky sticky--full-height sticky--under-previous" id="interiors-2">
    <div
        class="sticky__layer sticky__layer--sticky sticky--full-height"
        data-scroll
        data-scroll-sticky
        data-scroll-target="#interiors-2"
    >
        <div class="l-interiors__anchor" id="interiors-mobile"></div>
        <div
            class="background background--cover"
            data-plugin="parallax"
            data-parallax-clamp="true"
            data-parallax-measure-selector=".sticky"
            data-parallax-enable-mq="md-down"
            data-parallax-0-0='{"transform": "scale(1.2)"}'
            data-parallax--200-0='{"transform": "scale(1.0)"}'
        >
            <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear " draggable="false">
                <img
                    data-src="assets/images/media/landing/8.interiors/interiors-bg-xs.webp"
                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22640%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20640%22%3E%3C/svg%3E"
                    alt=""
                    width="360"
                    height="640"
                    draggable="false"
                />
            </picture>
            <noscript>
                <picture class="img-cover" draggable="false">
                    <img
                        src="assets/images/media/landing/8.interiors/interiors-bg-xs.webp"
                        alt=""
                        width="360"
                        height="640"
                        draggable="false"
                    />
                </picture>
            </noscript>
        </div>
        <div class="px-layout l-interiors__intro-caption pb-4">
            <div class="mt-0.3">
                <h2 class="text-right g1 leading-trim">Green Bhoomi</h2>
            </div>
            <p class="mt-1 text-c1 leading-trim text-right">Crafted for Timeless Living</p>
            <div class="l-interiors__intro__text">
                <p class="text-t1 leading-trim">
                    Your future begins with the right piece of land. Our thoughtfully planned plots combine prime locations, modern infrastructure, and natural surroundings to create the perfect foundation for your dream home or investment. Wide roads, green landscapes, and well-designed communities ensure lasting value for generations to come.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="l-interiors__slider ui-light ui-background py-3 px-layout is-hidden--lg-up" data-themed-class="ui-light">
    <div class="carousel carousel--md-up carousel--not-ready js-carousel mt-2.5" data-plugin="mobileScrollable">
        <div class="p-relative">
            <ul class="mobile-scrollable col col--md-auto mx-auto js-carousel-list">
                <?php foreach($interior_images as $image): ?>
                <li class="mobile-scrollable__item">
                    <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear" draggable="false" >
                        <source
                            data-srcset="<?php echo $image['image']; ?>"
                            srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                            media="(min-width: 1920px) and (min-height: 700px)"
                            width="720"
                            height="900"
                        />
                        <source
                            data-srcset="<?php echo $image['image']; ?>"
                            srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                            media="(min-width: 1440px) and (min-height: 700px)"
                            width="720"
                            height="900"
                        />
                        <source
                            data-srcset="<?php echo $image['image']; ?>"
                            srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                            media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                            width="720"
                            height="900"
                        />
                        <img
                            data-src="<?php echo $image['image']; ?>"
                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                            alt=""
                            width="720"
                            height="900"
                            draggable="false"
                        />
                    </picture>
                    <noscript>
                        <picture class="img-cover" draggable="false">
                            <source
                                srcset="<?php echo $image['image']; ?>"
                                media="(min-width: 1920px) and (min-height: 700px)"
                                width="720"
                                height="900"
                            />
                            <source
                                srcset="<?php echo $image['image']; ?>"
                                media="(min-width: 1440px) and (min-height: 700px)"
                                width="720"
                                height="900"
                            />
                            <source
                                srcset="<?php echo $image['image']; ?>"
                                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                                width="720"
                                height="900"
                            />
                            <img
                                src="<?php echo $image['image']; ?>"
                                alt="<?php echo $image['alt_text']; ?>"
                                width="720"
                                height="900"
                                draggable="false"
                            />
                        </picture>
                    </noscript>
                    <div class="dim dim--lighter"></div>
                </li>
                <?php endforeach; ?>
                
            </ul>
        </div>
        <div class="carousel__thumb group group--nowrap px-layout">
            <div class="col col--xs-2 carousel__thumb__item js-mobile-scrollable-thumbnail is-active"></div>
            <div class="col col--xs-2 carousel__thumb__item js-mobile-scrollable-thumbnail"></div>
            <div class="col col--xs-2 carousel__thumb__item js-mobile-scrollable-thumbnail"></div>
            <div class="col col--xs-2 carousel__thumb__item js-mobile-scrollable-thumbnail"></div>
            <div class="col col--xs-2 carousel__thumb__item js-mobile-scrollable-thumbnail"></div>
        </div>
    </div>
    <div class="mt-1">
        <div class="mb-1">
            <p class="text-t1 leading-trim">
                Designed for a healthier and more connected lifestyle, our thoughtfully planned community offers spaces where every generation can thrive. From lush green parks and a vibrant children's play area to an open-air gym, a serene yoga deck, and a community amphitheatre, every amenity is crafted to bring comfort, recreation, and togetherness into everyday living.
            </p>
        </div>
    </div>
</div>
