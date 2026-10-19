<div class="a-intro sticky sticky--full-height sticky--under-next" id="intro" data-plugin="reveal" data-scroll-snap-point='[{ "viewport": 0, "element": 0 }]'>
    <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky data-scroll-target="#intro">
        <?php if (!empty($hero)): ?>
        <div class="a-intro__inner px-layout pb-layout">
            <div class="a-intro__background background background--bottom background--cover">
                <div class="dim dim--about"></div>
                <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move" data-parallax-clamp="true" data-parallax-enable-mq="null" data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.1)&quot;}" data-parallax--100-0="{&quot;transform&quot;: &quot;scale(1)&quot;}"
                data-plugin="appear  parallax" draggable="false">
                    <source data-srcset="<?php echo $hero['image_xxxl']; ?>" srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                    <source data-srcset="<?php echo $hero['image_xxl']; ?>" srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                    <source data-srcset="<?php echo $hero['image_md']; ?>" srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%2２%２０width=%２２144０％２２%２０height=%２２9００％２２%２０preserveAspectRatio=%２２xMinYMax％２２%２０viewBox=%２２０％２２%２００％２２%２０144０％２２%２０9００％２２%３Ｅ%３Ｃ/svg％３Ｅ"
                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)" width="1440" height="900">
                    <img data-src="<?php echo $hero['image_md']; ?>" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%221280%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%201280%22%3E%3C/svg%3E"
                    alt="" width="720" height="1280" draggable="false">
                </picture>
                <noscript>
                    <picture class=" img-cover parallax-image-move" data-parallax-clamp="true" data-parallax-enable-mq="null" data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.1)&quot;}" data-parallax--100-0="{&quot;transform&quot;: &quot;scale(1)&quot;}" data-plugin=" parallax"
                    draggable="false">
                        <source srcset="<?php echo $hero['image_xxxl']; ?>" media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                        <source srcset="<?php echo $hero['image_xxl']; ?>" media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                        <source srcset="<?php echo $hero['image_md']; ?>" media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)" width="1440" height="900">
                        <img src="<?php echo $hero['image_md']; ?>" alt="" width="720" height="1280" draggable="false">
                    </picture>
                </noscript>
            </div>
            <div class="a-intro__content p-relative overlayshadow">
                <h1 class="h1-sm leading-trim is-hidden--md-down goldenColor" data-reveal="title" >
                    <?php echo $hero['title']; ?>
                </h1>
                <picture class="is-invisible--js is-hidden--no-js is-hidden--lg-up img-full pr-6" data-plugin="appear " draggable="false">
                    <img data-src="<?php echo $hero['image_xs']; ?>" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22320%22%20height=%2270%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20320%2070%22%3E%3C/svg%3E"
                    alt="" width="320" height="70" draggable="false">
                </picture>
                <noscript>
                    <picture class=" is-hidden--lg-up img-full pr-6" draggable="false">
                        <img src="<?php echo $hero['image_xs']; ?>" alt="" width="320" height="70" draggable="false">
                    </picture>
                </noscript>
                <div class="a-intro__subtitle mt-1  pr-6">
                    <p class="text-a1 leading-trim" data-reveal="title" data-reveal-distance="100px" style="font-size: 24px; ">
                        <?php echo $hero['sub_title']; ?>
                    </p>
                </div>
            </div>
            <a class="btn a-intro__next btn--outline btn--square btn--sm p-relative" href="#a-about" aria-label="К следующей секции">
                <span class="btn__content">
                <span class="btn__icon ">
                    <svg class="icon icon-arrow-down" width="14" height="16"
                        aria-hidden="true" viewBox="0 0 14 16"
                        style="--icon-width: 14; --icon-height: 16;">
                        <use href="assets/images/icons.svg#arrow-down"
                            xlink:href="assets/images/icons.svg#arrow-down">
                        </use>
                    </svg>
                </span>
                </span>
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="a-about sticky sticky--full-height sticky--under-previous sticky--under-previous:lg-up sticky--under-next sticky--under-next:lg-up" data-scroll-snap-point='[{ "viewport": -100, "element": 0 }]'>
    <div id="a-about" class="a-about__anchor"></div>
    <div class="sticky__layer sticky__layer--sticky sticky__layer--sticky:lg-up" data-scroll data-scroll-sticky>
        <?php if (!empty($intro)): ?>
        <div class="a-about__inner row">
            <div class="col col--xs-4 col--md-6" data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true" data-parallax-measure-selector=".sticky" data-parallax-0-0='{"clip-path": "polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%)"}' data-parallax--100-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>
                <picture class="is-invisible--js is-hidden--no-js a-about__big-img img-cover" data-plugin="appear " draggable="false">
                    <source data-srcset="<?php echo $intro['image_xxxl']; ?>" srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                    <source data-srcset="<?php echo $intro['image_xxl']; ?>" srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20900%22%3E%3C/svg%3E"
                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                    <source data-srcset="<?php echo $intro['image_md']; ?>" srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%2２%２０width=%２２7２０％２０height=%２２9００％２０preserveAspectRatio=%２２xMinYMax％２０meet％２０viewBox=%２２0％２０0％２０7２０％２０9００％２２%３Ｅ%３C/svg%３Ｅ"
                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)" width="720" height="900">
                    <img data-src="<?php echo $intro['image_xs']; ?>" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22840%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20840%22%3E%3C/svg%3E"
                    alt="" width="720" height="840" data-plugin="parallax" data-parallax-clamp="true" data-parallax-enable-mq="md-up" data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}" data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1)&quot;}"
                    draggable="false">
                </picture>

                <noscript>
                    <picture class=" a-about__big-img img-cover" draggable="false">
                        <source srcset="<?php echo $intro['image_xxxl']; ?>" media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                        <source srcset="<?php echo $intro['image_xxl']; ?>" media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                        <source srcset="<?php echo $intro['image_md']; ?>" media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)" width="720" height="900">
                        <img src="<?php echo $intro['image_xs']; ?>" alt="" width="720" height="840" data-plugin="parallax" data-parallax-clamp="true" data-parallax-enable-mq="md-up" data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                        data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1)&quot;}" draggable="false">
                    </picture>
                </noscript>
            </div>
            <div class=" col col--xs-4 col--md-6 ui-dark ui-background p-relative" data-plugin="parallax" data-parallax-enable-mq="md-up" data-parallax-clamp="true" data-parallax-measure-selector=".sticky" data-parallax-0-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)"}'
            data-parallax--100-0='{"clip-path": "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"}'>
                <div class="a-about__gradient blur-fix">
                    <div></div>
                    <div></div>
                </div>
                <div class="a-about__content pt-2.5 px-layout pb-3 pb-layout:md p-relative">
                    <p class="a-about__text h3 leading-trim">
                        <?php echo $intro['title']; ?>
                    </p>
                    <p class="a-about__text-bottom leading-trim">
                        <?php echo $intro['description']; ?>
                    </p>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

