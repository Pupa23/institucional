<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Services</h2>
            <p>
                {{ $mains['description_service'] }}
            </p>
        </div>

        <div class="row">

            @for($i = 0; $i < count($services); $i++)

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <h4><a href="">{{ $services[$i]['card_title'] }}</a></h4>
                        <p>{{ $services[$i]['card_description'] }}</p>
                    </div>
                </div>

            @endfor

        </div>
    </div>
</section>
