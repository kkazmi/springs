<!-- <div class="l-gallery__split row background background--cover">
    <?php foreach($preloader_gallery as $section=>$images): ?>
    <div class=" col col--xs-4 col--md-6">
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
    <?php endforeach; ?>
</div> -->
<div class="l-gallery__split row background background--cover" id="preloaderVideo">

    <div class="col col--xs-12 col--md-12">
        <div class="preloader-video__background">

            <iframe
                src="https://player.vimeo.com/video/1223554112?autoplay=1&muted=1&autopause=0&background=1"
                allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen>
            </iframe>

        </div>
    </div>

</div>

<style>
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
#preloaderVideo {
    opacity: 1;
    visibility: visible;
    transition: opacity 0.5s ease, visibility 0.5s ease;
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const preloader = document.getElementById("preloaderVideo");

    if (!preloader) return;

    setTimeout(function () {
        preloader.style.opacity = "0";
        preloader.style.visibility = "hidden";
        preloader.style.pointerEvents = "none";

        setTimeout(function () {
            preloader.remove();
        }, 500);

    }, 22000);

});
</script>