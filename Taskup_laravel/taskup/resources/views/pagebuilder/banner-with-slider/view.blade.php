<div class="tk-homebanner tk-hero-banner-six">
    @if (!empty(pagesetting('banner6_repeator')))
        <div class="swiper tk-bannersixsliger">
            <div class="swiper-wrapper">
                @foreach (pagesetting('banner6_repeator') as $item)
                    <div class="swiper-slide">
                        <div class="tk-bannertopserch">
                            <div class="tk-homebanner_content">
                                @if(!empty($item['heading']))
                                    <h1>{!! $item['heading'] !!}</h1>
                                @endif
                                @if(!empty($item['paragraph']))
                                    <p>{!! $item['paragraph'] !!}</p>
                                @endif
                                <div class="tk-homebanner_btnwrapper">
                                    <a href="{{ $item['first_btn_url'] }}" class="tk-btn">
                                        @if(!empty($item['btn_green_text']))
                                            <span>{{ $item['btn_green_text'] }}</span>
                                        @endif
                                    </a>
                                    <a href="@if(!empty($item['second_btn_url'])){{ $item['second_btn_url'] }}@endif" class="tk-btn-two" data-action="hover-effect">
                                        @if(!empty($item['simple_btn_text']))
                                            <span>{{ $item['simple_btn_text'] }}</span>
                                        @endif
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                            </div>
                            <figure>
                                @if(!empty($item['image']))
                                    <img src="{{asset('storage/'.$item['image'][0]['path'])}}" alt="img">
                                @endif
                            </figure>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="tk-paginationarea">
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"> <i class="fa fa-chevron-right"></i></div>
                <div class="swiper-button-prev"> <i class="fa fa-chevron-left"></i></div>
            </div>
        </div>
    @endif
</div>


@pushonce(config('pagebuilder.site_script_var'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        banner6Slider();
    });
</script>
@endpushonce