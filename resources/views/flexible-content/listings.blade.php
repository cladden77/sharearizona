<section class="listings py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="headline text-center">
                <h2>@sub('headline')</h2>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1 g-4 g-sm-2">
            <?php if( have_rows('listings_repeater') ): ?>
                <?php while (have_rows('listings_repeater')) : the_row(); ?>
                        <div class="col-10 col-sm-10 col-md-4 my-3 mx-auto mx-md-0 m-sm-3">
                        <div class="card h-100">
                            <div class="card-img-wrapper">
                            <img src="@sub('listings_image', 'url')" alt="@sub('listings_image', 'alt')" class="card-img-top img-fluid">
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">@sub('listing_title')</h5>
                            <p class="listing-price">@sub('listing_price')</p>
                            <p class="card-text">@sub('listing_description')</p>
                            </div>
                        </div>
                        </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>