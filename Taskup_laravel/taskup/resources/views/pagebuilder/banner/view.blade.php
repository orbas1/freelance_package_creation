<div class="sc-banner-01-wrapper {{ pagesetting('select_verient') }}">
    @if(pagesetting('media_type') == 'image' && !empty(pagesetting('image')) && pagesetting('select_verient') == 'tk-hero-banner-eleven')
        <div class="tk-bg-image">
            <img src="{{asset('storage/'.pagesetting('image')[0]['path'])}}" alt="bg">
        </div>
    @endif
    <div class="tk-homebanner_content">   
        @if(!empty(pagesetting('heading')))
            <h1 class="banner-heading-text-color">{!! pagesetting('heading') !!}</h1>
        @endif
    
        @if(!empty(pagesetting('paragraph')))
            <p class="banner-paragraph-text-color">{!! pagesetting('paragraph') !!}</p>
        @endif  
        
        @php
            $searchText         = pagesetting('search-btn-txt');
            $searchPlaceholder  = pagesetting('search-placeholder');
        @endphp
        @if(is_array(pagesetting('configs_checkbox')) && in_array('search', pagesetting('configs_checkbox')))
            <x-search :btnText="$searchText" :placeholder="$searchPlaceholder" />
        @endif  

        @if(is_array(pagesetting('configs_checkbox')) && in_array('buttons', pagesetting('configs_checkbox')))
            @if(!empty(pagesetting('buttons_repeater')))
                <div class="tk-homebanner_btnwrapper">
                    @foreach(pagesetting('buttons_repeater') as $index => $btn)
                        <a href="{{ $btn['btn_url'] }}" class="@if ($loop->first)tk-btn @else tk-btn-secondary @endif banner-btn-bg-color-{{ $index }}">
                            @if(!empty($btn['btn_text']))
                                <span class="banner-btn-text-color-{{ $index }}">{{ $btn['btn_text'] }}</span>
                            @endif 
                            @if(!empty($btn['btn_icon']))
                                {!! $btn['btn_icon'] !!}
                            @endif 
                        </a>
                    @endforeach
                </div>  
            @endif
        @endif

        @if(is_array(pagesetting('configs_checkbox')) && in_array('categories', pagesetting('configs_checkbox')))
            <div class="tk-homebanner_categories">
                @if(pagesetting('select_verient') != 'tk-hero-banner-nine')
                    @if(!empty(pagesetting('category_heading')))
                        <span class="banner-category-heading-color">{{ pagesetting('category_heading') }}</span>
                    @endif
                @else
                    <div class="tk-icon-wrapper">
                        <i class="icon-grid"></i>
                        <span>@if(!empty(pagesetting('all_category_heading'))){{ pagesetting('all_category_heading') }}@endif</span>
                    </div>
                @endif

                @php
                    $textColor  = pagesetting('category_text_color');
                    $bgColor    = pagesetting('category_bg_color');
                @endphp
                <x-banner-categories :categoryTextColor="$textColor" :categoryBgColor="$bgColor" />
            </div>
        @endif

        @if(is_array(pagesetting('configs_checkbox')) && in_array('trusted_by', pagesetting('configs_checkbox')))
            <div class="tk-homebanner_trustedby">
                @if(!empty(pagesetting('trusted_by_heading')))
                    <span class="banner-trusted-by-heading-text-color">{{ pagesetting('trusted_by_heading') }}</span>
                @endif
                @if(is_array(pagesetting('trusted_by_image')) && count(pagesetting('trusted_by_image')) > 0)
                    <ul class="tk-homebanner_categories_list">
                        @foreach(pagesetting('trusted_by_image') as $image)
                            <li>
                                <img src="{{asset('storage/'.$image['path'])}}" alt="image">
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endif    
    </div>

    @if(pagesetting('media_type') == 'image')
        @if(pagesetting('media_frame') == 'yes')
            <div class="tk-bannerframe">
                <img src="{{ asset('demo-content/banner/frame.webp') }}" alt="frame">
                <div class="tk-bannerframe_content">
                    @if(!empty(pagesetting('image')))
                        <img src="{{asset('storage/'.pagesetting('image')[0]['path'])}}" alt="frame">
                    @endif
                </div>
            </div>
        @elseif(!empty(pagesetting('image')))
            <figure>
                <img src="{{asset('storage/'.pagesetting('image')[0]['path'])}}" alt="frame">
            </figure>
        @endif
    @endif

    @if(pagesetting('media_type') == 'slider')
        @if(pagesetting('media_frame') == 'yes')
            <div class="tk-bannerframe">
            <img src="{{ asset('demo-content/banner/frame.webp') }}" alt="frame">
                @if(!empty(pagesetting('slider_image')))
                    <div class="tk-bannerframe_content">
                        <div id="tk-banner-slider" class="swiper tk-banner-slider">
                            <div class="swiper-wrapper">
                                @foreach(pagesetting('slider_image') as $image)
                                    <div class="swiper-slide">
                                        <figure>
                                            <img src="{{asset('storage/'.$image['path'])}}" alt="img">
                                        </figure>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                @endif
            </div>
        @elseif(!empty(pagesetting('slider_image')))
            <div class="tk-bannersingle-slider">
                <div class="swiper {{ pagesetting('select_verient')}}-slider">
                    <div class="swiper-wrapper">
                        @foreach(pagesetting('slider_image') as $image)
                            <div class="swiper-slide">
                                <figure>
                                    <img src="{{asset('storage/'.$image['path'])}}" alt="img">
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        @endif
    @endif

    @if(pagesetting('media_type') == 'video')
        <div class="tk-bannerframe">
            @if(pagesetting('media_frame') == 'yes')
                <img src="{{ asset('demo-content/banner/frame.webp') }}" alt="frame">
            @endif
            <div class="tk-bannerframe_content">
                @if(!empty(pagesetting('video')))
                    <video src="{{asset('storage/'.pagesetting('video')[0]['path'])}}" autoplay muted loop></video>
                @endif
            </div>
        </div>
    @endif

    @if(!empty(pagesetting('banner_shape')))
        <div class="tk-banner-shape">
            <img class="tk-img2svg" src="{{asset('storage/'.pagesetting('banner_shape')[0]['path'])}}" alt="shape">
        </div>
    @endif

</div>

@pushonce(config('pagebuilder.site_script_var'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        bannerSlider();
        banner2Slider();
        banner3Slider();
        convertImageToSVG()
    });
</script>
@endpushonce

@pushonce(config('pagebuilder.site_style_var'))
    <style>
        @if(!empty(pagesetting('heading_text_color')) && pagesetting('heading_text_color') != 'rgba(0,0,0,0)')
            .banner-heading-text-color{
                color: {{ pagesetting('heading_text_color') }} !important;
            }
        @endif

        @if(!empty(pagesetting('paragraph_text_color')) && pagesetting('paragraph_text_color') != 'rgba(0,0,0,0)')
            .banner-paragraph-text-color{
                color: {{ pagesetting('paragraph_text_color') }} !important;
            }
        @endif

        @if(is_array(pagesetting('configs_checkbox')) && in_array('buttons', pagesetting('configs_checkbox')))
            @if(!empty(pagesetting('buttons_repeater')))
                @foreach(pagesetting('buttons_repeater') as $index => $btn)
                    @if(!empty($btn['btn_bg_color']) && $btn['btn_bg_color'] != 'rgba(0,0,0,0)')
                        .banner-btn-bg-color-{{ $index }} {
                            background-color: {{ $btn['btn_bg_color'] }} !important;
                        }
                    @endif

                    @if(!empty($btn['btn_text_color']) && $btn['btn_text_color'] != 'rgba(0,0,0,0)')
                        .banner-btn-text-color-{{ $index }} {
                            color: {{ $btn['btn_text_color'] }} !important;
                        }
                    @endif
                @endforeach
            @endif
        @endif

        @if(!empty(pagesetting('category_heading_text_color')) && pagesetting('category_heading_text_color') != 'rgba(0,0,0,0)')
            .banner-category-heading-color{
                color: {{ pagesetting('category_heading_text_color') }} !important;
            }
        @endif

        @if(!empty(pagesetting('trusted_by_heading_text_color')) && pagesetting('trusted_by_heading_text_color') != 'rgba(0,0,0,0)')
            .banner-trusted-by-heading-text-color{
                color: {{ pagesetting('trusted_by_heading_text_color') }} !important;
            }
        @endif

    </style>
@endpushonce

