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

                <div class="card d-flex align-items-stretch mb-4 mx-auto" style="width: 18rem;" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $services[$i]['card_title'] }}</h5>
                        <p class="card-text">{{ $services[$i]['card_description'] }}</p>
                    </div>
                </div>
            @endfor

        </div>
    </div>
</section>
