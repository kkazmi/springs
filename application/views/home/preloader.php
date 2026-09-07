<div class="l-gallery__split row background background--cover">
    <div class="col col--xs-4 col--md-12">
        <div class="l-gallery__item__mask-list">
            <div class="preloader-video__background"  id="gif-preloader">
                <img src="assets/images/bst-preloader.gif" alt="Loading">
            </div>
        </div>
    </div>

    <!-- <?php foreach($preloader_gallery as $section=>$images): ?>
    <div class=" col col--xs-4 col--md-12">
        <div class="l-gallery__item__mask-list">
            <?php foreach($images as $img): ?>
            <div class="l-gallery__item__mask-list__item gallery-animation-item">
            <picture class=" " draggable="false">
                <source
                    srcset="<?=base_url($img['image_xxxl']);?>"
                    media="(min-width: 1920px) and (min-height: 700px)" width="720" height="900">
                <source
                    srcset="<?=base_url($img['image_xxl']);?>"
                    media="(min-width: 1440px) and (min-height: 700px)" width="720" height="900">
                <source srcset="<?=base_url($img['image_md']);?>"
                    media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                    width="720" height="900">
                <img src="<?=base_url($img['image_xs']);?>"
                    alt="<?= htmlspecialchars($img['alt_text'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" width="720" height="900" fetchpriority="high" draggable="false">
            </picture>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?> -->
</div>
<!-- <div class="l-gallery__split row background background--cover" id="preloaderVideo">
    <div class="col col--xs-12 col--md-12">
        <div class="preloader-video__background">
            <iframe
                src="https://player.vimeo.com/video/1223554112?autoplay=1&muted=1&autopause=0&background=1"
                allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div> -->
<style>
    /* 


#gif-preloader {
    position: fixed !important;

    top: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    left: 0 !important;

    width: 100vw !important;
    height: 100vh !important;

    margin: 0 !important;
    padding: 0 !important;

    overflow: hidden !important;

    background: #000;

    z-index: 2147483647 !important;

    pointer-events: all;

    opacity: 1;
    visibility: visible;

    transition:
        opacity 0.5s ease,
        visibility 0.5s ease;
}



#gif-preloader img {
    position: absolute !important;

    top: 0 !important;
    left: 0 !important;

    width: 100vw !important;
    height: 100vh !important;

    max-width: none !important;
    max-height: none !important;

    margin: 0 !important;
    padding: 0 !important;

    display: block !important;

    object-fit: cover !important;
    object-position: center center !important;
}
    #gif-preloader.hide {
        opacity: 0 !important;
        visibility: hidden !important;
        pointer-events: none !important;
} */
    .preloader-video__background {
    position: fixed;
    inset: 0;
    width: 100vw;
    height: 100dvh;
    overflow: hidden;
    z-index: 1111119999;
}

    .preloader-video__background img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }
</style>
<!-- <style>
   #preloaderVideo {
    position: fixed;
    inset: 0;
    z-index: 99999;
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transition: opacity 0.5s ease, visibility 0.5s ease;
}

#preloaderVideo.is-hidden {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}

.preloader-video__background {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.preloader-video__background iframe {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100vw;
    height: 56.25vw;
    min-width: 177.78vh;
    min-height: 100vh;
    transform: translate(-50%, -50%);
    border: 0;
}
</style> -->

    <script>
document.addEventListener("DOMContentLoaded", function () {

    const preloader = document.getElementById("gif-preloader");

    if (!preloader) {
        return;
    }

    const gifDuration = 80000;


    // Wait for GIF to finish
    setTimeout(function () {

        preloader.classList.add("hide");

        // Remove it completely after fade-out
        setTimeout(function () {
            preloader.remove();
        }, gifDuration);

    }, gifDuration);

});
</script>