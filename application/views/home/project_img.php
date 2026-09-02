<div class="l-design__slide l-design__slide--1 sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--md-down" id="design" data-plugin="reveal">
    <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky data-scroll-target="#design" data-scroll-snap-point='[{ "viewport": 0, "element": 100 }]'>
    <div class="background background--cover" data-plugin="parallax" data-parallax-enable-mq="md-up"
        data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
        data-parallax-0-0='{"transform": "scale(1.2)"}'
        data-parallax--200-0='{"transform": "scale(1.0)"}'>
        <?php if(!empty($project_img_slider)): ?>
            <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear" draggable="false">
                <source data-srcset="<?php echo $project_img_slider['image_xxxl']; ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                <source data-srcset="<?php echo $project_img_slider['image_xxl']; ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                <img data-src="<?php echo $project_img_slider['image_md']; ?>"
                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                    alt="" width="1440" height="900" draggable="false">
            </picture>
            <noscript>
                <picture class=" img-cover" draggable="false">
                    <source srcset="<?php echo $project_img_slider['image_xxxl']; ?>" media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                    <source srcset="<?php echo $project_img_slider['image_xxl']; ?>" media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                    <img src="<?php echo $project_img_slider['image_md']; ?>" alt="" width="1440" height="900" draggable="false">
                </picture>
            </noscript>
        <?php endif; ?>
    </div>
        <?php if(!empty($project_img_slider)): ?>
            <div class="l-design__caption">
                <div class="l-design__caption-title px-layout">
                    <h2 class="text-right g1 leading-trim" data-reveal="title"><?php echo $project_img_slider['title']; ?></h2>
                    <div class="mt-1">
                        <p class="l-design__caption__subtitle text-c1 text-right leading-trim" data-reveal="title"><?php echo $project_img_slider['sub_title']; ?></p>
                    </div>
                </div>
                <div class="px-layout">
                    <div class="l-design__caption__text mt-3 col col--md-4">
                        <p class="text-t1 leading-trim" data-reveal="text"> <?php echo $project_img_slider['description']; ?> </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="l-design__slide l-design__slide--2 sticky sticky--under-previous sticky--full-height ui-light is-hidden--md-down" id="l-design-sticky-2" data-plugin="reveal">
    <div class="" data-themed-class="ui-light"></div>
    <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
    data-scroll-target="#l-design-sticky-2"
    data-scroll-snap-point='[{ "viewport": 0, "element": 100 }, { "viewport": 0, "element": 150 }]'>
    <div class="row row--between-xs">
        <div class="col col--md-4" data-plugin="parallax" data-parallax-enable-mq="md-up"
            data-parallax-clamp="true" data-parallax-measure-selector=".sticky"
            data-parallax-0-0='{ "clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)" }'
            data-parallax--100-0='{ "clip-path": "polygon(0% 0.1%, 100% 0.1%, 100% 100%, 0% 100%)" }'
            data-parallax-pattern="designMoveLeftImage">
            <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                data-plugin="appear " draggable="false">
                <source data-srcset="<?php echo base_url($project_img_gallery[0]['image_xxxl']); ?>"
                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                media="(min-width: 1920px) and (min-height: 700px)" width="640" height="694">
                <source data-srcset="<?php echo base_url($project_img_gallery[0]['image_xxl']); ?>"
                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                media="(min-width: 1440px) and (min-height: 700px)" width="640" height="694">
                <img data-src="<?php echo base_url($project_img_gallery[0]['image_md']); ?>"
                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                alt="" width="640" height="694" data-plugin="parallax" data-parallax-clamp="true"
                data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                draggable="false">
            </picture>
            <noscript>
                <picture class=" img-cover parallax-image-move" draggable="false">
                <source srcset="<?php echo base_url($project_img_gallery[0]['image_xxxl']); ?>"
                    media="(min-width: 1920px) and (min-height: 700px)" width="640" height="694">
                <source srcset="<?php echo base_url($project_img_gallery[0]['image_xxl']); ?>"
                    media="(min-width: 1440px) and (min-height: 700px)" width="640" height="694">
                <img src="<?php echo base_url($project_img_gallery[0]['image_md']); ?>" alt=""
                    width="640" height="694" data-plugin="parallax" data-parallax-clamp="true"
                    data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                    data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                    draggable="false">
                </picture>
            </noscript>
        </div>
        <div class="col col--md-4 offset--md-4 mt-auto" data-plugin="parallax"
            data-parallax-enable-mq="md-up" data-parallax-clamp="true"
            data-parallax-measure-selector=".sticky"
            data-parallax-0-0='{ "clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)" }'
            data-parallax--100-0='{ "clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)" }'
            data-parallax-pattern="designMoveRightImage">
            <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                data-plugin="appear " draggable="false">
                <source data-srcset="<?php echo base_url($project_img_gallery[1]['image_xxxl']); ?>"
                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                media="(min-width: 1920px) and (min-height: 700px)" width="640" height="694">
                <source data-srcset="<?php echo base_url($project_img_gallery[1]['image_xxl']); ?>"
                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                media="(min-width: 1440px) and (min-height: 700px)" width="640" height="694">
                <img data-src="<?php echo base_url($project_img_gallery[1]['image_md']); ?>"
                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22640%22%20height=%22694%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20640%20694%22%3E%3C/svg%3E"
                alt="" width="640" height="694" data-plugin="parallax" data-parallax-clamp="true"
                data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                draggable="false">
            </picture>
            <noscript>
                <picture class=" img-cover parallax-image-move" draggable="false">
                <source srcset="<?php echo base_url($project_img_gallery[1]['image_xxxl']); ?>"
                    media="(min-width: 1920px) and (min-height: 700px)" width="640" height="694">
                <source srcset="<?php echo base_url($project_img_gallery[1]['image_xxl']); ?>"
                    media="(min-width: 1440px) and (min-height: 700px)" width="640" height="694">
                <img src="<?php echo base_url($project_img_gallery[1]['image_md']); ?>" alt=""
                    width="640" height="694" data-plugin="parallax" data-parallax-clamp="true"
                    data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                    data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                    draggable="false">
                </picture>
            </noscript>
        </div>
    </div>
    <div class="l-design__title col col--md-5 mx-auto" data-plugin="parallax"
        data-parallax-enable-mq="md-up" data-parallax-clamp="true"
        data-parallax-measure-selector=".sticky"
        data-parallax-50-0='{"opacity": "0", "transform": "translate(-50%, 300%)"}'
        data-parallax--100-0='{"opacity": "0", "transform": "translate(-50%, 50%)"}'
        data-parallax--150-0='{"opacity": "1", "transform": "translate(-50%, -50%)"}'
        data-parallax--250-0='{"opacity": "0", "transform": "translate(-50%, -90%)"}'>
        <h3 class="h3 leading-trim text-center" data-reveal="title">
            <?php echo $project_img_slider['description2']; ?>
        </h3>
    </div>
    </div>
</div>
<div
    class="l-design__slide l-design__slide--3 sticky sticky--full-height sticky--under-previous sticky--under-next ui-light is-hidden--md-down"
    id="l-design-sticky-3" data-plugin="reveal">
    <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky data-scroll-target="#l-design-sticky-3" data-scroll-snap-point='[{ "viewport": 0, "element": 100 }, { "viewport": 0, "element": 150 }]'>
        <div class="l-design__slide-images col col--md-6 mr-0 ml-auto ">
            <div class="l-design__slide-images__item" data-plugin="parallax"
                data-parallax-enable-mq="md-up" data-parallax-clamp="true"
                data-parallax-measure-selector=".sticky" data-parallax-0-0='{"transform": "scale(1.2)"}'
                data-parallax--300-0='{"transform": "scale(1)"}'>
                <picture
                    class="is-invisible--js is-hidden--no-js img-full background background--cover background--bottom"
                    data-plugin="appear " draggable="false">
                    <source data-srcset="<?php echo base_url($project_img_gallery[3]['image_xxxl']); ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                    <source data-srcset="<?php echo base_url($project_img_gallery[3]['image_xxl']); ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                    <img data-src="<?php echo base_url($project_img_gallery[3]['image_md']); ?>"
                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    alt="" width="720" height="900" draggable="false">
                </picture>
                <noscript>
                    <picture class=" img-full background background--cover background--bottom"
                    draggable="false">
                    <source srcset="<?php echo base_url($project_img_gallery[3]['image_xxxl']); ?>"
                        media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                    <source srcset="<?php echo base_url($project_img_gallery[3]['image_xxl']); ?>"
                        media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                    <img src="<?php echo base_url($project_img_gallery[3]['image_md']); ?>" alt=""
                        width="720" height="900" draggable="false">
                    </picture>
                </noscript>
            </div>
        </div>
    </div>
    <div class="sticky__layer">
    <div class="row col col--md-6 l-design__slide-content pt-3 pt-2:md" data-plugin="parallax"
        data-parallax-enable-mq="md-up" data-parallax-clamp="true"
        data-parallax-measure-selector=".sticky" data-parallax-enable-touch="false"
        data-parallax--100-0='{"transform": "translateY(0%)"}'
        data-parallax--300-0='{"transform": "translateY(200%)"}'>
        <div
            class="l-design__slide-images__item l-design__slide-images__item--small col col--md-2 ml-auto mr-layout"
            data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true"
            data-parallax-measure-selector=".sticky"
            data-parallax--30-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)", "transform": "translateY(0vh)"}'
            data-parallax--80-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "translateY(0vh)"}'
            data-parallax--100-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "translateY(0vh)"}'
            data-parallax--200-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", "transform": "translateY(-110vh)"}'>
            <picture class="is-invisible--js is-hidden--no-js parallax-image-move img-cover"
                data-parallax-measure-selector=".sticky" data-parallax-clamp="true"
                data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                data-plugin="appear  parallax" draggable="false">
                <source data-srcset="<?php echo base_url($project_img_gallery[2]['image_xxxl']); ?>"
                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
                media="(min-width: 1920px) and (min-height: 700px)" width="240" height="300">
                <source data-srcset="<?php echo base_url($project_img_gallery[2]['image_xxl']); ?>"
                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
                media="(min-width: 1440px) and (min-height: 700px)" width="240" height="300">
                <img data-src="<?php echo base_url($project_img_gallery[2]['image_md']); ?>"
                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
                alt="" width="240" height="300" draggable="false">
            </picture>
            <noscript>
                <picture class=" parallax-image-move img-cover"
                data-parallax-measure-selector=".sticky" data-parallax-clamp="true"
                data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                data-plugin=" parallax" draggable="false">
                <source srcset="<?php echo base_url($project_img_gallery[2]['image_xxxl']); ?>"
                    media="(min-width: 1920px) and (min-height: 700px)" width="240" height="300">
                <source srcset="<?php echo base_url($project_img_gallery[2]['image_xxl']); ?>"
                    media="(min-width: 1440px) and (min-height: 700px)" width="240" height="300">
                <img src="<?php echo base_url($project_img_gallery[2]['image_md']); ?>" alt=""
                    width="240" height="300" draggable="false">
                </picture>
            </noscript>
        </div>
        <div class="col col--md-6  mt-2.5 mt-3.5:md px-layout" data-plugin="parallax"
            data-parallax-enable-mq="md-up" data-parallax-clamp="true"
            data-parallax-measure-selector=".sticky" data-parallax-enable-touch="false"
            data-parallax--100-0='{"transform": "translateY(0%)"}'
            data-parallax--250-0='{"transform": "translateY(-250%)"}'>
            <h3 class="h3 leading-trim" data-reveal="title"><?php echo $project_img_slider['description3']; ?></h3>
        </div>
    </div>
    </div>
</div>
<div
    class="l-design__slide l-design__slide--1 sticky sticky--full-height sticky--under-previous is-hidden--lg-up"
    id="design-mobile">
    <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
    data-scroll-target="#design-mobile">
    <div class="l-design__slide__bg" data-plugin="parallax" data-parallax-clamp="true"
        data-parallax-enable-mq="md-down" data-parallax-measure-selector=".sticky"
        data-parallax-100-0='{"transform": "scale(1.2)", "height": "100svh"}'
        data-parallax--200-0='{"transform": "scale(1.0)", "height": "100svh"}'
        data-parallax--250-0='{"transform": "scale(1.0)", "height": "70svh"}'>
        <div class="background background--cover" data-plugin="parallax" data-parallax-clamp="true"
            data-parallax-enable-mq="md-down" data-parallax-measure-selector=".sticky"
            data-parallax--200-0='{"width": "195%"}' data-parallax--250-0='{"width": "100%"}'>
            <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                draggable="false">
                <img data-src="<?php echo base_url($project_img_slider['image_xs']); ?>"
                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%221280%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%201280%22%3E%3C/svg%3E"
                alt="" width="720" height="1280" decoding="async" draggable="false">
            </picture>
            <noscript>
                <picture class=" img-cover" draggable="false">
                <img src="<?php echo base_url($project_img_slider['image_xs']); ?>" alt=""
                    width="720" height="1280" decoding="async" draggable="false">
                </picture>
            </noscript>
        </div>
    </div>
    <div class="dim dim--design" data-plugin="parallax" data-parallax-clamp="true"
        data-parallax-enable-mq="md-down" data-parallax-measure-selector=".sticky"
        data-parallax--200-0='{"opacity": "1"}' data-parallax--220-0='{"opacity": "0"}'></div>
    <div class="l-design__caption pb-4" data-plugin="parallax" data-parallax-clamp="true"
        data-parallax-enable-mq="md-down" data-parallax-measure-selector=".sticky"
        data-parallax--200-0='{"opacity": "1"}' data-parallax--220-0='{"opacity": "0"}'>
        <div class="pr-layout">
            <h2 class="text-right g1 leading-trim">
                <?php echo $project_img_slider['title']; ?>
            </h2>
            <div class="mt-1">
                <p class="l-design__caption__subtitle text-c1 leading-trim text-right">
                <?php echo $project_img_slider['sub_title']; ?>
                </p>
            </div>
        </div>
        <div class="l-design__caption__text mt-3 col col--md-4">
            <p class="text-t1 leading-trim">
                <?php echo $project_img_slider['description']; ?>
            </p>
        </div>
    </div>
    </div>
</div>
<div class="l-design__slide l-design__slide--2 ui-light is-hidden--lg-up py-2.5 px-layout"
    data-themed-class="ui-light">
    <div class="l-design__title col col--md-5 mx-auto">
    <h3 class="h3 leading-trim text-center">
        <?php echo $project_img_slider['description2']; ?>
    </h3>
    </div>
    <div class="carousel carousel--md-up carousel--not-ready js-carousel mt-2.5"
    data-plugin="mobileScrollable">
    <div class="p-relative">
        <ul class="mobile-scrollable col col--md-auto mx-auto">
            <li class="mobile-scrollable__item">
                <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                draggable="false">
                <source
                    data-srcset="<?php echo base_url($project_img_gallery[0]['image_xxxl']); ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                <source
                    data-srcset="<?php echo base_url($project_img_gallery[0]['image_xxl']); ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                <source
                    data-srcset="<?php echo base_url($project_img_gallery[0]['image_md']); ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                    width="720" height="900">
                <img
                    data-src="<?php echo base_url($project_img_gallery[0]['image_xs']); ?>"
                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    alt="" width="720" height="900" decoding="async" draggable="false">
                </picture>
                <noscript>
                <picture class=" img-cover" draggable="false">
                    <source
                        srcset="<?php echo base_url($project_img_gallery[0]['image_xxxl']); ?>"
                        media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                    <source
                        srcset="<?php echo base_url($project_img_gallery[0]['image_xxl']); ?>"
                        media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                    <source
                        srcset="<?php echo base_url($project_img_gallery[0]['image_md']); ?>"
                        media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                        width="720" height="900">
                    <img
                        src="<?php echo base_url($project_img_gallery[0]['image_xs']); ?>"
                        alt="" width="720" height="900" decoding="async" draggable="false">
                </picture>
                </noscript>
            </li>
            <li class="mobile-scrollable__item">
                <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
                draggable="false">
                <source
                    data-srcset="<?php echo base_url($project_img_gallery[1]['image_xxxl']); ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                <source
                    data-srcset="<?php echo base_url($project_img_gallery[1]['image_xxl']); ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                <source
                    data-srcset="<?php echo base_url($project_img_gallery[1]['image_md']); ?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                    width="720" height="900">
                <img
                    data-src="<?php echo base_url($project_img_gallery[1]['image_xs']); ?>"
                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    alt="" width="720" height="900" decoding="async" draggable="false">
                </picture>
                <noscript>
                <picture class=" img-cover" draggable="false">
                    <source
                        srcset="<?php echo base_url($project_img_gallery[1]['image_xxxl']); ?>"
                        media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                    <source
                        srcset="<?php echo base_url($project_img_gallery[1]['image_xxl']); ?>"
                        media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                    <source
                        srcset="<?php echo base_url($project_img_gallery[1]['image_md']); ?>"
                        media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                        width="720" height="900">
                    <img
                        src="<?php echo base_url($project_img_gallery[1]['image_xs']); ?>"
                        alt="" width="720" height="900" decoding="async" draggable="false">
                </picture>
                </noscript>
            </li>
        </ul>
    </div>
    <div class="carousel__thumb group group--nowrap px-layout">
        <div class="col col--xs-2 carousel__thumb__item js-mobile-scrollable-thumbnail is-active">
        </div>
        <div class="col col--xs-2 carousel__thumb__item js-mobile-scrollable-thumbnail "></div>
    </div>
    </div>
</div>
<div class="l-design__slide l-design__slide--3 ui-light sticky sticky--full-height is-hidden--lg-up"
    id="l-design-mobile-sticky-2">
    <div class="l-design__theme" data-themed-class="ui-dark"></div>
    <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
    data-scroll-target="#l-design-mobile-sticky-2">
    <div class="background background--cover" data-plugin="parallax" data-parallax-clamp="true"
        data-parallax-enable-mq="md-down" data-parallax-measure-selector=".sticky"
        data-parallax-100-0='{"height": "100svh", "transform": "scale(1.1)"}'
        data-parallax-0-0='{"height": "100svh", "transform": "scale(1.0)"}'
        data-parallax--50-0='{"height": "60svh", "transform": "scale(1.0)"}'>
        <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear "
            draggable="false">
            <source
                data-srcset="<?php echo base_url($project_img_gallery[3]['image_xxxl']); ?>"
                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
            <source
                data-srcset="<?php echo base_url($project_img_gallery[3]['image_xxl']); ?>"
                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
            <source
                data-srcset="<?php echo base_url($project_img_gallery[3]['image_md']); ?>"
                srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                width="720" height="900">
            <img
                data-src="<?php echo base_url($project_img_gallery[3]['image_xs']); ?>"
                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                alt="" width="720" height="900" decoding="async" draggable="false">
        </picture>
        <noscript>
            <picture class=" img-cover" draggable="false">
                <source
                srcset="<?php echo base_url($project_img_gallery[3]['image_xxxl']); ?>"
                media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                <source
                srcset="<?php echo base_url($project_img_gallery[3]['image_xxl']); ?>"
                media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                <source
                srcset="<?php echo base_url($project_img_gallery[3]['image_md']); ?>"
                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                width="720" height="900">
                <img
                src="<?php echo base_url($project_img_gallery[3]['image_xs']); ?>"
                alt="" width="720" height="900" decoding="async" draggable="false">
            </picture>
        </noscript>
    </div>
    </div>
</div>
<div class="l-design__slide l-design__slide--4 ui-light row pt-layout is-hidden--lg-up">
    <div class="l-design__theme" data-themed-class="ui-light"></div>
    <div class="px-layout">
    <h3 class="h3 leading-trim">
        <?php echo $project_img_slider['description3']; ?>
    </h3>
    </div>
    <div class="pl-0.5 col col--xs-3 mr-0 ml-auto mt-4">
    <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear"
        draggable="false">
        <source
            data-srcset="<?php echo base_url($project_img_gallery[2]['image_xxxl']); ?>"
            srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
            media="(min-width: 1920px) and (min-height: 700px)" width="240" height="300">
        <source
            data-srcset="<?php echo base_url($project_img_gallery[2]['image_xxl']); ?>"
            srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
            media="(min-width: 1440px) and (min-height: 700px)" width="240" height="300">
        <source
            data-srcset="<?php echo base_url($project_img_gallery[2]['image_md']); ?>"
            srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
            media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
            width="240" height="300">
        <img
            data-src="<?php echo base_url($project_img_gallery[2]['image_xs']); ?>"
            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22240%22%20height=%22300%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20240%20300%22%3E%3C/svg%3E"
            alt="" width="240" height="300" decoding="async" draggable="false">
    </picture>
    <noscript>
        <picture class=" img-cover" draggable="false">
            <source
                srcset="<?php echo base_url($project_img_gallery[2]['image_xxxl']); ?>"
                media="(min-width: 1920px) and (min-height: 700px)" width="240" height="300">
            <source
                srcset="<?php echo base_url($project_img_gallery[2]['image_xxl']); ?>"
                media="(min-width: 1440px) and (min-height: 700px)" width="240" height="300">
            <source
                srcset="<?php echo base_url($project_img_gallery[2]['image_md']); ?>"
                media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                width="240" height="300">
            <img
                src="<?php echo base_url($project_img_gallery[2]['image_xs']); ?>"
                alt="" width="240" height="300" decoding="async" draggable="false">
        </picture>
    </noscript>
    </div>
</div>