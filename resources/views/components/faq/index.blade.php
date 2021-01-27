<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
            <ul>
                @for($i = 0; $i < count($faqs); $i++)
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-{{ $faqs[$i]['id'] }}">{{ $faqs[$i]['question'] }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-{{ $faqs[$i]['id'] }}" class="collapse show" data-parent=".faq-list">
                            <p>
                                {{ $faqs[$i]['response'] }}
                            </p>
                        </div>
                    </li>
                @endfor
            </ul>
        </div>

    </div>
</section>
