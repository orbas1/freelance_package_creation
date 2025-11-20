<div class="tk-clients-section">
    @if(!empty(pagesetting('heading')))
        <div class="tk-clients_title"><h2>{!! pagesetting('heading') !!}</h2></div>
    @endif
    <div id="tk-clients-slider" class="swiper tk-clients-slider">
        <div class="swiper-wrapper">
            @if(is_array(pagesetting('images')) && count(pagesetting('images')) > 0)
                @foreach(pagesetting('images') as $image)
                    <div class="swiper-slide">
                        <img src="{{asset('storage/'.$image['path'])}}" alt="image">
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

@pushonce(config('pagebuilder.site_script_var'))

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const clientSlider = new Swiper('#tk-clients-slider', {
            slidesPerView: "auto",
            allowTouchMove: false,
            loop: true,
            loopedSlides:8,
            speed: 2000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
        });

        // Check if there is only one slide
        if (clientSlider.slides.length >= 1) {
        // Clone the slides
        const slides = clientSlider.slides;
        const slidesCount = slides.length;
            for (let i = 0; i < slidesCount; i++) {
                const slide = slides[i].cloneNode(true);
                clientSlider.wrapperEl.appendChild(slide);
            }
        }

    });
</script>
@endpushonce



