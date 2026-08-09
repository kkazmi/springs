<div class="pxltsSlider">
    <div id="pxltsSliderUniverse9045">
    <div class="pxltsSliderHeading6789">
        <h2 class="h2 text-heading-dark">What our Client's say about us!</h2>
        <button id="pxltsPrev9045" class="pxltsArrow9045">&#10094;</button>
        <button id="pxltsNext9045" class="pxltsArrow9045">&#10095;</button>
    </div>
    <div class="pxltsViewport9045">
        <div class="pxltsTrack9045">
            <?php foreach($testimonials as $testimonial): ?>
            <div class="pxltsItem9045">
                <div class="pxltsCard9045">
                <div class="pxltsQuote9045">❝</div>
                <p class="pxltsText9045">
                    <?php echo $testimonial['testimonial']; ?>
                </p>
                <div class="pxltsUser9045">
                    <!-- <img src="https://i.pravatar.cc/100?img=12"> -->
                    <div>
                        <div class="pxltsName9045"><?php echo $testimonial['client_name']; ?></div>
                        <div class="pxltsRole9045"><?php echo $testimonial['property_type_name']; ?></div>
                        <div class="pxltsStars9045"><?php echo str_repeat('★', $testimonial['rating']); ?></div>
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- <div class="pxltsItem9045">
                <div class="pxltsCard9045">
                <div class="pxltsQuote9045">❝</div>
                <p class="pxltsText9045">
                    Being a new developer entering the Delhi NCR market, this has been one of the
                    strongest investment opportunities I've seen. In fact, I'd say it's among the
                    best in Delhi NCR.<br />
                    When we initially offered this project to our clients at launch prices, many were
                    skeptical. But today, the appreciation has exceeded expectations. We're not
                    talking about a modest 20% or 30% increase. The property values have doubled,
                    delivering nearly 100% appreciation for our early investors.
                </p>
                <div class="pxltsUser9045">
                    <img src="https://i.pravatar.cc/100?img=32">
                    <div>
                        <div class="pxltsName9045">Bhanu Mohan</div>
                        <div class="pxltsRole9045">BST Customer</div>
                        <div class="pxltsStars9045">★★★★★</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="pxltsItem9045">
                <div class="pxltsCard9045">
                <div class="pxltsQuote9045">❝</div>
                <p class="pxltsText9045">
                    BST has delivered a well-planned project with
                    strong attention to detail. The location on a
                    75-meter road with direct connectivity to the
                    Dwarka Expressway adds great value, and the
                    thoughtfully designed parks enhance the
                    overall experience.
                    It's truly one of the best developed project in this area.
                </p>
                <div class="pxltsUser9045">
                    <img src="https://i.pravatar.cc/100?img=54">
                    <div>
                        <div class="pxltsName9045">Sandeep Batela</div>
                        <div class="pxltsRole9045">BST Customer</div>
                        <div class="pxltsStars9045">★★★★★</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="pxltsItem9045">
                <div class="pxltsCard9045">
                <div class="pxltsQuote9045">❝</div>
                <p class="pxltsText9045">
                    I have yet to find a more helpful and polite staff than BST. My bookings in BST
                    has been so well executed and communicated, that I will recommend BST to all my
                    contacts.
                </p>
                <div class="pxltsUser9045">
                    <img src="https://i.pravatar.cc/100?img=18">
                    <div>
                        <div class="pxltsName9045">Emily Clark</div>
                        <div class="pxltsRole9045">Product Manager</div>
                        <div class="pxltsStars9045">★★★★★</div>
                    </div>
                </div>
                </div>
            </div> -->
        </div>
    </div>
    </div>
</div>