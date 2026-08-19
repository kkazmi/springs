<div class="l-residences sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--md-down" id="l-residences-sticky-1" data-plugin="reveal">
   <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky data-scroll-target="#l-residences-sticky-1" data-scroll-snap-point='[{ "viewport": 0, "element": 100 }, { "viewport": 0, "element": 200 }, { "viewport": 0, "element": 300 }, { "viewport": 0, "element": 400 }]'>
      <div class="l-residences__slide l-residences__webgl">
         <?php if(!empty($amenities_slider)): ?>
         <div class="background background--cover background--bottom">
            <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move" data-plugin="appear " draggable="false">
               <source data-srcset="<?php echo base_url($amenities_slider['image_xxxl']); ?>"
                  srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22451%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20451%22%3E%3C/svg%3E"
                  media="(min-width: 1920px) and (min-height: 700px)" width="720" height="451">
               <source data-srcset="<?php echo base_url($amenities_slider['image_xxl']); ?>"
                  srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22451%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20451%22%3E%3C/svg%3E"
                  media="(min-width: 1440px) and (min-height: 700px)" width="720" height="451">
               <source
                  data-srcset="<?php echo base_url($amenities_slider['image_md']); ?>"
                  srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                  media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)"
                  width="1440" height="900">
               <img data-src="<?php echo base_url($amenities_slider['image_xs']); ?>"
                  src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%22451%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%20451%22%3E%3C/svg%3E"
                  alt="" width="720" height="451" data-plugin="parallax" data-parallax-clamp="true"
                  data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                  data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                  draggable="false">
            </picture>
            <noscript>
               <picture class=" img-cover parallax-image-move" draggable="false">
                  <source srcset="<?php echo base_url($amenities_slider['image_xxxl']); ?>"
                     media="(min-width: 1920px) and (min-height: 700px)" width="720" height="451">
                  <source srcset="<?php echo base_url($amenities_slider['image_xxl']); ?>"
                     media="(min-width: 1440px) and (min-height: 700px)" width="720" height="451">
                  <img src="<?php echo base_url($amenities_slider['image_md']); ?>" alt=""
                     width="720" height="451" data-plugin="parallax" data-parallax-clamp="true"
                     data-parallax-0-0="{&quot;transform&quot;: &quot;scale(1.2)&quot;}"
                     data-parallax--200-0="{&quot;transform&quot;: &quot;scale(1.0)&quot;}"
                     draggable="false">
               </picture>
            </noscript>
         </div>
         <div class="l-residences__webgl-caption pt-6:md pt-4:xxxl px-layout">
            <div class="col ">
               <h1 class="g1 leading-trim" data-reveal="title"><?php echo $amenities_slider['title']; ?></h1>
               <div class="mt-1"><p class="text-c1 leading-trim" data-reveal="title"><?php echo $amenities_slider['sub_title']; ?></p></div>
            </div>
         </div>
         <?php endif; ?>
      </div>
      <?php if(!empty($amenities_gallery)): ?>
         <?php $i = 0;foreach($amenities_gallery as $gallery): ?>
            <div class="l-residences__slide"
               data-plugin="parallax"
               data-parallax-enable-mq="md-up"
               data-parallax-clamp="true"
               data-parallax-measure-selector=".sticky"
               data-parallax--<?= ($i+1)*100 ?>-0='{"clip-path":"polygon(100% 0%,100% 0%,100% 100%,100% 100%)","transform":"scale(1.2)"}'
               data-parallax--<?= ($i+2)*100 ?>-0='{"clip-path":"polygon(0% 0%,100% 0%,100% 100%,0% 100%)","transform":"scale(1.1)"}'
               data-parallax--<?= ($i+3)*100 ?>-0='{"clip-path":"polygon(0% 0%,100% 0%,100% 100%,0% 100%)","transform":"scale(1.0)"}'>
               <div class=" background background--cover">
                  <picture class="is-invisible--js is-hidden--no-js img-cover parallax-image-move"
                     data-plugin="appear " draggable="false">
                     <source srcset="<?php echo base_url($gallery['image_xxxl']); ?>"
                        srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                        media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                     <source srcset="<?php echo base_url($gallery['image_xxl']); ?>"
                        srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                        media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">
                     <source srcset="<?php echo base_url($gallery['image_md']); ?>"
                        srcset="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E"
                        media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)" width="1440" height="900">
                     <img data-src="<?php echo base_url($gallery['image_xs']); ?>" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%221440%22%20height=%22900%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%201440%20900%22%3E%3C/svg%3E" alt="" width="1440" height="900" draggable="false">
                  </picture>
                  <noscript>
                     <picture class="img-cover parallax-image-move" draggable="false">
                        <source srcset="<?php echo base_url($gallery['image_xxxl']); ?>" media="(min-width: 1920px) and (min-height: 700px)" width="1440" height="900">
                        <source srcset="<?php echo base_url($gallery['image_xxl']); ?>" media="(min-width: 1440px) and (min-height: 700px)" width="1440" height="900">   
                        <source srcset="<?php echo base_url($gallery['image_md']); ?>" media="(min-width: 568px) and (max-aspect-ratio: 13 / 9), (min-width: 668px) and (min-height: 416px), (min-width: 980px)" width="1440" height="900">
                        <img data-src="<?php echo base_url($gallery['image_xs']); ?>" alt="" width="1440" height="900" draggable="false">
                     </picture>
                  </noscript>
               </div>
            </div>
         <?php $i++;endforeach; ?>
      <?php endif; ?>
   </div>
   <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
      data-scroll-target="#l-residences-sticky-1" data-plugin="parallax"
      data-parallax-pattern="residencesSlide">
      <div class="l-residences__caption col col--md-3 offset--md-9" data-plugin="parallax"
         data-parallax-enable-mq="md-up" data-parallax-clamp="true"
         data-parallax-measure-selector=".sticky"
         data-parallax--100-0='{"transform": "translateX(60vw)"}'
         data-parallax--200-0='{"transform": "translateX(0vw)"}'>
         <div class="l-residences__caption__line">
            <div class="l-residences__caption__line-progress js-residences-progress-line"></div>
         </div>
         <div class="l-residences__caption__content-animation js-residences-content" data-plugin="contentAnimation" data-content-animation-animations='{ "changeShow": {"name": "fadeIn"}, "changeHide": {"name": "fadeOut"}}' data-content-aninmation-fixed-height="true" data-content-animation-plugins="controller events">
            <div class="content-animation">
               <?php if(!empty($amenities_gallery)): ?>
               <?php $i = 1; foreach($amenities_gallery as $item): ?>
                  <div data-content-animation-item="<?= $i; ?>" class="ui-background ui-dark <?= ($i == 1) ? '' : 'is-hidden'; ?>" aria-hidden="<?= ($i == 1) ? 'false' : 'true'; ?>">
                     <div class="l-residences__caption__card ui-background">
                        <div class="l-residences__caption__card-content">
                           <p class="h4 l-residences__caption__type text-t1 leading-trim"><?= htmlspecialchars($item['title']); ?></p>
                           <p class="l-residences__caption__description text-color-small text-small leading-trim"><?= htmlspecialchars_decode($item['sub_title']); ?></p>
                           <div class="l-residences__caption__item">
                              <p class="h4 leading-trim"><?= htmlspecialchars_decode($item['description']); ?></p>
                           </div>
                        </div>
                        <div class="l-residences__caption__button group group--button group--nowrap group--middle ui-background">
                           <!-- <a class="btn btn--text-small btn--sm btn--outline btn--clone" href="#"
                              data-plugin=" button" data-button-clone-content="true">
                              <span class="btn__content">
                                 <span class="btn__text  ">
                                    View More
                                 </span>
                              </span>
                           </a> -->
                        </div>
                     </div>
                  </div>
               <?php $i++; endforeach; ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
   <div id="residences" data-themed-class="ui-dark"></div>
</div>
<div class="l-residences__webgl-container sticky sticky--full-height sticky--under-previous sticky--under-next is-hidden--lg-up ui-dark ui-background" id="l-residences-sticky-2">
   <div class="sticky__layer sticky__layer--sticky" data-scroll data-scroll-sticky
      data-scroll-target="#l-residences-sticky-2">
      <?php if(!empty($amenities_slider)): ?>
      <div class="l-residences__webgl pt-3">
         <div class="background background--cover" data-plugin="parallax" data-parallax-clamp="true" data-parallax-measure-selector=".sticky" data-parallax-enable-mq="md-down" data-parallax-0-0='{"transform": "scale(1.2)"}' data-parallax--200-0='{"transform": "scale(1.0)"}'>
            <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear" draggable="false">
               <img data-src="<?php echo $amenities_slider['image_xs']; ?>" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22720%22%20height=%221280%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20720%201280%22%3E%3C/svg%3E" alt="" width="720" height="1280" draggable="false">
            </picture>
            <noscript>
               <picture class=" img-cover" draggable="false">
                  <img src="<?php echo $amenities_slider['image_xs']; ?>" alt="" width="720" height="1280" draggable="false">
               </picture>
            </noscript>
         </div>
         <div class="l-residences__webgl-caption px-layout">
            <div class="col ">
               <p class="g1 leading-trim"><?php echo $amenities_slider['title']; ?></p>
               <div class="col col--xs-2 mt-1">
                  <p class="text-c1 leading-trim"><?php echo $amenities_slider['sub_title']; ?></p>
               </div>
            </div>
         </div>
      </div>
      <?php endif; ?>
   </div>
   <div id="residences-mobile"></div>
   <div class="l-residences__theme" data-themed-class="ui-dark"></div>
</div>
<div class="l-residences__slider-container is-hidden--lg-up ui-dark ui-background">
   <div class="l-residences__slider__gradient">
      <div></div>
   </div>
   <div class="l-residences__slider pt-3">
      <div class="l-residences__slider__images mx-layout js-residences-content-animation-controller"
         data-plugin="mobileScrollable">
         <div class="p-relative">
            <ul class="mobile-scrollable col col--md-auto mx-auto">
               <?php foreach($amenities_gallery as $slider): ?>
                  <li class="mobile-scrollable__item">
                     <picture class="is-invisible--js is-hidden--no-js img-cover" data-plugin="appear" draggable="false">
                        <img
                           data-src="<?php echo $slider['image_xs']; ?>"
                           src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22360%22%20height=%22360%22%20preserveAspectRatio=%22xMinYMax%20meet%22%20viewBox=%220%200%20360%20360%22%3E%3C/svg%3E"
                           alt="" width="360" height="360" decoding="async" draggable="false">
                     </picture>
                     <noscript>
                        <picture class=" img-cover" draggable="false">
                           <img src="<?php echo $slider['image_xs']; ?>" alt="" width="360" height="360" decoding="async" draggable="false">
                        </picture>
                     </noscript>
                  </li>
               <?php endforeach; ?>
            </ul>
         </div>
         <div class="carousel__thumb group group--nowrap px-layout ">
            <?php foreach($amenities_gallery as $index => $type): ?>
               <a role="button" class="col col--xs-2 text-c1 carousel__thumb__item js-mobile-scrollable-thumbnail leading-trim <?= ($index == 0) ? 'is-active' : ''; ?>">   
                  <span class="carousel__thumb__item__text"><?= $type['title']; ?></span>
               </a>
            <?php endforeach; ?>
         </div>
      </div>
      <div class="l-residences__caption col col--xs-4 ui-dark">
         <div data-plugin="contentAnimation" data-content-animation-fixed-height="false" data-content-animation-animations='{ "changeShow": {"name": "fadeIn"}, "changeHide": {"name": "fadeOut"} }' data-content-animation-plugins="controller events height counter" data-content-animation-controller-selector=":root .js-residences-content-animation-controller">
            <div class="l-residences__caption-text content-animation col col--md-12">
               <?php foreach($amenities_gallery as $index => $type): ?>
                  <div data-content-animation-item="<?= $index + 1; ?>" class="l-residences__caption__item px-layout pt-layout pb-2 ui-background ui-dark" aria-hidden="<?= ($index == 0) ? 'false' : 'true'; ?>">
                     <div class="l-residences__caption__top">
                        <p class="l-residences__caption__type h2 leading-trim"><?= htmlspecialchars($type['title']); ?></p>
                        <p class="l-residences__caption__description text-color-small text-small leading-trim"><?= htmlspecialchars_decode($type['sub_title']); ?></p>
                     </div>
                     <div class="row row--nowrap mt-1">
                        <div class="col col--xs-full l-residences__caption__item-inner">
                           <p class="l-residences__caption__item-title h2 text-h2-stc leading-trim"><?= htmlspecialchars_decode($type['description']); ?></p>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
            </div>
         </div>
      </div>
   </div>
</div>