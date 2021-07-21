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
                    <img class="card-img-top" src="assets/img/portfolio/portfolio-9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $services[$i]['card_title'] }}</h5>
                        <p class="card-text">{{ $services[$i]['card_description'] }}</p>
                    </div>

                    <a type="button" class="buy-btn m-4" data-toggle="modal" data-target="#exampleModal">Get Started</a>
                </div>
            @endfor

        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>