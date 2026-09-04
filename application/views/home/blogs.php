
<div class="jSliderContainer jSblogs">
    <!-- <div class="row">
        <h2 class="h2 text-heading-dark col col--md-12 pl-1">
            Latest Real Estate Insights
        </h2>
        <div class="underline"></div>
          <p class="textb text-heading-dark col col--md-12 pl-1">
           Expert perspectives. Market trends. Smarter decisions.
        </p>
        <div class="controls col col--md-6 pr-1 text-right">
            <button id="prev">&#10094;</button>
            <button id="next">&#10095;</button>
        </div>
    </div> -->
 <section class="blogs-slider-section">

    <!-- Heading + Arrows -->
    <div class="blogs-slider-header">

        <div class="blogs-slider-title">
            <h2 class="h2 text-heading-dark">Latest Real Estate Insights</h2>
            <div class="underline"></div>
            <p>
                Expert perspectives. Market trends. Smarter decisions.
            </p> 
        </div>

        <div class="blogs-slider-arrows">

            <button
                type="button"
                class="blogs-slider-arrow blogs-slider-prev"
                aria-label="Previous article">
                <span>&#8249;</span>
            </button>

            <button
                type="button"
                class="blogs-slider-arrow blogs-slider-next"
                aria-label="Next article">
                <span>&#8250;</span>
            </button>

        </div>

    </div>


    <!-- Slider -->
    <div class="blogs-slider">

        <div class="blogs-slider-track">
             <?php foreach ($blogs as $blog): ?>

            <!-- CARD 5 -->
            <article class="blogs-slide">

                <a href="#">

                    <div class="blogs-slide-image">
                        <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200" alt="">
                    </div>

                    <div class="blogs-slide-content">

                        <span class="blogs-slide-category">
                            <?php echo $blog['category']; ?>
                        </span>

                        <h3>
                           <?php echo $blog['heading']; ?>
                        </h3>

                        <p>
                            <?php echo $blog['description']; ?>
                        </p>

                        <div class="blogs-slide-meta">

                              <span class="meta-">❤️ Likes <span><?php echo $blog['total_likes']; ?></span></span>
                                <span class="meta-">💬 Comments <span><?php echo $blog['total_comments']; ?></span></span>
                                <span class="meta-">👁️ Views <span><?php echo $blog['total_view']; ?></span></span>
                        </div>

                    </div>

                </a>

            </article>

 <?php endforeach; ?>
        </div>

    </div>


    <!-- Bottom -->
    <div class="blogs-slider-bottom">

        <a href="<?php echo base_url('blog');?>" class="blogs-view-all">
            <span>VIEW ALL ARTICLES</span>
            <span class="blogs-view-arrow">&#8594;</span>
        </a>

        <div class="blogs-slider-dots">

            <button
                type="button"
                class="blogs-dot active"
                data-slide="0">
            </button>

            <button
                type="button"
                class="blogs-dot"
                data-slide="1">
            </button>

            <button
                type="button"
                class="blogs-dot"
                data-slide="2">
            </button>

        </div>

    </div>

</section>

    <!-- <div class="coverflow">
        <div class="viewport">
            <div class="track">
                <?php foreach ($blogs as $blog): ?>
                    <article class="newCard">
                        <div class="jSimage">
                            <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200" alt="">
                        </div>
                        <div class="jScontent">
                            <div class="blog-meta">
                                <span class="jStag"><?php echo $blog['category']; ?></span>
                                <div class="meta-item">❤️ <span><?php echo $blog['total_likes']; ?></span></div>
                                <div class="meta-item">💬 <span><?php echo $blog['total_comments']; ?></span></div>
                                <div class="meta-item">👁️ <span><?php echo $blog['total_view']; ?></span></div>
                            </div>
                            <h2><?php echo $blog['heading']; ?></h2>
                            <p><?php echo $blog['description']; ?></p>
                            <a href="#" class="btn btn--secondary">Read More</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <p class="text-center">
                <a href="<?php echo base_url('blog');?>" class="btn btn--primary btn--clone btn--text-small is-hidden--sm-down btn--cloned" data-plugin=" button" data-button-clone-content="true">
                    <span class="btn__content">
                        <span class="btn__text btn__text--clone">
                            View All Blogs
                        </span>
                    </span>
                </a>
            </p>
        </div>
    </div> -->
</div>