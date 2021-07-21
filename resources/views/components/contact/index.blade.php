<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <a href="#">
                            <p>{{ $contact['street']}} {{ $contact['number'] }}, {{ $contact['city'] }}, {{ $contact['province'] }}, {{ $contact['country'] }}</p>
                        </a>
                        </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <a href="mailto:">
                            <p>{{ $contact['email'] }}</p>
                        </a>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <a href="phone:#">
                            <p>{{ $contact['phone'] }}</p>
                        <a>
                    </div>

                    <div class="facebook">
                        <i class="icofont-facebook"></i>
                        <h4>Facebook:</h4>
                        <a href="#">
                            <p>{{ $contact['phone'] }}</p>
                        </a>
                    </div>
                    
                    <div class="google">
                        <i class="icofont-brand-google"></i>
                        <h4>Google bussines:</h4>
                        <a href="#">
                            <p>{{ $contact['phone'] }}</p>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea style="max-height: 200px" class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
