{{--
listings_repeater
listing_title
listing_price
listing_description --}}

<section class="listings py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="headline text-center">
                <h2>@sub('headline')</h2>
            </div>
        </div>

            <?php if( have_rows('listings_repeater') ): ?>
                <?php while (have_rows('listings_repeater')) : the_row(); ?>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
    </div>
</section>