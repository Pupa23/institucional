<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Portfolio</h2>
        </div>

        {{--        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">--}}
        {{--            <li data-filter="*" class="filter-active">All</li>--}}
        {{--            <li data-filter=".filter-app">App</li>--}}
        {{--            <li data-filter=".filter-card">Card</li>--}}
        {{--            <li data-filter=".filter-web">Web</li>--}}
        {{--        </ul>--}}

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @for($i = 0; $i < count($portfolios); $i++)
            <a href="assets/img/portfolio/{{ $portfolios[$i]['url_image'] }}" data-gall="portfolioGallery" class="venobox preview-link">
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img">
                        <img src="assets/img/portfolio/{{ $portfolios[$i]['url_image'] }}" class="img-fluid" alt="">
                    </div>    
                </div>
            </a>
            @endfor
        </div>

    </div>
</section><!-- End Portfolio Section -->
