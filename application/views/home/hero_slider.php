<div class="l-gallery" data-plugin="gallery"
    data-scroll-snap-point='[   { "viewport": 0, "element": 0 }]'>
   <div class="video-background">
    <iframe
        src="https://player.vimeo.com/video/1218239890?loop=1&muted=1&autoplay=1&autopause=0&background=1"
        allow="autoplay; fullscreen; picture-in-picture"
        allowfullscreen>
    </iframe>
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
            <a href="<?php echo base_url('detail'); ?>" target="_blank" class="btn btn--primary golden mr-1">
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