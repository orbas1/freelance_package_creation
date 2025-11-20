<!-- Online Marketplace  START -->
 <div class="tk-working-flow tk-section">
     @if(!empty(pagesetting('sub-heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph')))
     <div class="tk-section_title">
         @if(!empty(pagesetting('sub-heading')))<span>{{ pagesetting('sub-heading') }}</span>@endif
         @if(!empty(pagesetting('heading')))<h2>{{ pagesetting('heading') }}</h2>@endif
         @if(!empty(pagesetting('paragraph')))
            <div class="tk-section_desciption">
                <p>{{ pagesetting('paragraph') }}</p>
            </div>
         @endif
     </div>
     @endif
     @if(!empty( pagesetting('market_place_repeator')))
     <div class="tk-marketplace">
        <div class="swiper tk-marketplace-slider">
            <div class="swiper-wrapper">
                @foreach(pagesetting('market_place_repeator') as $item)
                    <div class="swiper-slide">
                        <div class="tk-marketitem">
                            <figure>
                                @if(!empty($item['image_sub_heading']))<span>{{ $item['image_sub_heading'] }}</span>@endif
                                @if(!empty($item['image'])) <img src="{{asset('storage/'.$item['image'][0]['path'])}}" alt="img">@endif
                                @if(!empty($item['image_heading']))
                                    <a href="#">
                                        {{ $item['image_heading'] }}
                                    </a>
                                @endif
                            </figure>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="swiper-scrollbar"></div>
     </div>
     @endif
</div>
<!-- Online Marketplace END -->

@pushonce(config('pagebuilder.site_script_var'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        marketplaceSlider()
    });
</script>
@endpushonce



