<div class="l-gallery" data-plugin="gallery"
    data-scroll-snap-point='[   { "viewport": 0, "element": 0 }]'>
    <div class="l-gallery__content js-gallery-container">
        <?php foreach($hero_slider_gallery as $img): ?>
        <div class="l-gallery__item col col--xs-2 col--md-6 col--lg-3 js-gallery-item">
            <div class="is-hidden--sm-down">
            <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                draggable="false">
                <source data-srcset="<?=base_url($img['image_xxxl']);?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22480%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20480%22%3E%3C/svg%3E"
                    media="(min-width: 1920px) and (min-height: 700px)" width="360" height="480">
                <source data-srcset="<?=base_url($img['image_xxl']);?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22480%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20480%22%3E%3C/svg%3E"
                    media="(min-width: 1440px) and (min-height: 700px)" width="360" height="480">
                <source data-srcset="<?=base_url($img['image_md']);?>"
                    srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22480%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20480%22%3E%3C/svg%3E"
                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                    width="360" height="480">
                <img data-src="<?=base_url($img['image_xs']);?>"
                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22480%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20480%22%3E%3C/svg%3E"
                    alt="" width="360" height="480" fetchpriority="low" decoding="async"
                    draggable="false">
            </picture>
            <noscript>
                <picture class=" img-full" draggable="false">
                    <source srcset="<?=base_url($img['image_xxxl']);?>"
                        media="(min-width: 1920px) and (min-height: 700px)" width="360"
                        height="480">
                    <source srcset="<?=base_url($img['image_xxl']);?>"
                        media="(min-width: 1440px) and (min-height: 700px)" width="360"
                        height="480">
                    <source srcset="<?=base_url($img['image_md']);?>"
                        media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                        width="360" height="480">
                    <img src="<?=base_url($img['image_xs']);?>" alt=""
                        width="360" height="480" fetchpriority="low" decoding="async"
                        draggable="false">
                </picture>
            </noscript>
            </div>
            <div class="is-hidden--md-up">
            <picture class="is-invisible--js is-hidden--no-js img-full" data-plugin="appear "
                draggable="false">
                <img data-src="<?=base_url($img['image_xs']);?>"
                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22480%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20480%22%3E%3C/svg%3E"
                    alt="" width="360" height="480" fetchpriority="low" decoding="async"
                    draggable="false">
            </picture>
            <noscript>
                <picture class=" img-full" draggable="false">
                    <img src="<?=base_url($img['image_xs']);?>" alt=""
                        width="360" height="480" fetchpriority="low" decoding="async"
                        draggable="false">
                </picture>
            </noscript>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php if(!empty($hero_caption)) :?>
    <div class="l-gallery__caption">
        <div class="col col--xs-12 col--md-8 col--xxxl-8 offset--md-2 pt-3:md">
            <h1 class="text-center h0 leading-trim" data-reveal-delay="1000">
            <span>Building Tomorrow's Communities with</span>
            <br /> Trust, Innovation <span>&amp;</span> Sustainable Growth
            </h1>
            <p role="heading" aria-level="1" class="text-center mt-1 text-t1 leading-trim"
            data-reveal-delay="1000">
            <?= nl2br(htmlspecialchars($hero_caption['sub_heading'] ?? '', ENT_QUOTES, 'UTF-8')); ?>
            </p>
            <p class="text-center pt-1">
            <?php if($hero_caption['primary_button_text']!=''): ?>
            <!-- <a href="<?php // echo base_url($hero_caption['primary_button_link']); ?>" class="btn btn--primary mr-1"> -->
            <a href="<?php echo base_url('detail'); ?>" target="_blank" class="btn btn--primary mr-1">
                <?= htmlspecialchars($hero_caption['primary_button_text']); ?>
                <svg class="icon icon-arrow-right" width="14" height="16" aria-hidden="true"
                    viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                    <use href="assets/images/icons.svg#arrow-right"
                        xlink:href="assets/images/icons.svg#arrow-right"></use>
                </svg>
            </a>
            <?php endif; ?>
            <?php if($hero_caption['secondary_button_text']!=''): ?>
            <a href="<?= base_url($hero_caption['secondary_button_link']); ?>" class="btn btn--secondary">
                <?= htmlspecialchars($hero_caption['secondary_button_text']); ?>
                <svg class="icon icon-arrow-right" width="14" height="16" aria-hidden="true"
                    viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                    <use href="assets/images/icons.svg#arrow-right"
                        xlink:href="assets/images/icons.svg#arrow-right"></use>
                </svg>
            </a>
            <?php endif; ?>
            </p>
        </div>
        <a class="btn l-gallery-next btn--outline btn--square btn--sm is-hidden--md-down"
            href="#l-intro">
            <span class="btn__content">
            <span class="btn__icon ">
                <svg class="icon icon-arrow-down" width="14" height="16" aria-hidden="true"
                    viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                    <use href="assets/images/icons.svg#arrow-down"
                        xlink:href="assets/images/icons.svg#arrow-down"></use>
                </svg>
            </span>
            </span>
        </a>
        <a class="btn l-gallery-next btn--outline btn--square btn--sm is-hidden--lg-up"
            href="#l-intro-mobile">
            <span class="btn__content">
            <span class="btn__icon ">
                <svg class="icon icon-arrow-down" width="14" height="16" aria-hidden="true"
                    viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                    <use href="assets/images/icons.svg#arrow-down"
                        xlink:href="assets/images/icons.svg#arrow-down"></use>
                </svg>
            </span>
            </span>
        </a>
    </div>
    <?php endif; ?>
    <div class="l-gallery__gradient">
        <div></div>
        <!-- <div></div>
        <div></div>
        <div></div>
        <div></div> -->
    </div>
</div>