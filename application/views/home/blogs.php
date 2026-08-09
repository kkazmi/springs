<div class="jSliderContainer">
    <h1 class="section-title">
    Latest Real Estate Insights
    </h1>
    <div class="coverflow">
    <div class="viewport">
        <div class="track">
            <?php foreach($blogs as $blog): ?>
            <article class="newCard">
                <div class="jSimage">
                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1200"
                    alt="">
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
            <!-- <article class="newCard">
                <div class="jSimage">
                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=1200"
                    alt="">
                </div>
                <div class="jScontent">
                <div class="blog-meta">
                    <span class="jStag">Investment</span>
                    <div class="meta-item">❤️ <span>248</span></div>
                    <div class="meta-item">💬 <span>36</span></div>
                </div>
                <h2>Top Locations for Property Investment</h2>
                <p>Discover emerging residential locations with excellent appreciation
                    potential, connectivity, lifestyle amenities and strong rental
                    demand.
                </p>
                <a href="#" class="btn btn--secondary">Read More</a>
                </div>
            </article>
            <article class="newCard">
                <div class="jSimage">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1200"
                    alt="">
                </div>
                <div class="jScontent">
                <div class="blog-meta">
                    <span class="jStag">Architecture</span>
                    <div class="meta-item">❤️ <span>248</span></div>
                    <div class="meta-item">💬 <span>36</span></div>
                </div>
                <h2>Luxury Interior Design Trends</h2>
                <p>Minimalist layouts, natural lighting and sustainable materials
                    continue
                    to redefine modern luxury home experiences.
                </p>
                <a href="#" class="btn btn--secondary">Read More</a>
                </div>
            </article>
            <article class="newCard">
                <div class="jSimage">
                <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=1200"
                    alt="">
                </div>
                <div class="jScontent">
                <div class="blog-meta">
                    <span class="jStag">Buying Guide</span>
                    <div class="meta-item">❤️ <span>248</span></div>
                    <div class="meta-item">💬 <span>36</span></div>
                </div>
                <h2>Things to Check Before Buying a Home</h2>
                <p>Understand documentation, construction quality, legal approvals and
                    financing options before making your next investment.
                </p>
                <a href="#" class="btn btn--secondary">Read More</a>
                </div>
            </article>
            <article class="newCard">
                <div class="jSimage">
                <img src="https://images.unsplash.com/photo-1605146769289-440113cc3d00?w=1200"
                    alt="">
                </div>
                <div class="jScontent">
                <div class="blog-meta">
                    <span class="jStag">Commercial</span>
                    <div class="meta-item">❤️ <span>248</span></div>
                    <div class="meta-item">💬 <span>36</span></div>
                </div>
                <h2>Office Spaces That Boost Productivity</h2>
                <p>Flexible workspaces designed with modern architecture help improve
                    employee wellbeing while enhancing business growth.
                </p>
                <a href="#" class="btn btn--secondary">Read More</a>
                </div>
            </article>
            <article class="newCard">
                <div class="jSimage">
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1200"
                    alt="">
                </div>
                <div class="jScontent">
                <div class="blog-meta">
                    <span class="jStag">Lifestyle</span>
                    <div class="meta-item">❤️ <span>248</span></div>
                    <div class="meta-item">💬 <span>36</span></div>
                </div>
                <h2>Why Waterfront Properties Are Trending</h2>
                <p>Premium waterfront communities offer scenic beauty, excellent resale
                    value and unmatched luxury living experiences.
                </p>
                <a href="#" class="btn btn--secondary">Read More</a>
                </div>
            </article> -->
        </div>
    </div>
    </div>
    <div class="controls">
    <button id="prev">&#10094;</button>
    <button id="next">&#10095;</button>
    </div>
</div>