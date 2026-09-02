<div class="jSliderContainer jSblogs">
    <div class="row">
        <h2 class="h2 text-heading-dark col col--md-6 pl-1">
            Latest Real Estate Insights
        </h2>
        <div class="controls col col--md-6 pr-1 text-right">
            <button id="prev">&#10094;</button>
            <button id="next">&#10095;</button>
        </div>
    </div>
    <div class="coverflow">
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
    </div>
</div>