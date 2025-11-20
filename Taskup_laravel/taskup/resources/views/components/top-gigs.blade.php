@props(['btnText' => 'Explore More Gigs'])
<div class="tk-online-section">
    <ul class="tk-online-main">
        @foreach( $gigs as $gig )
            <li>
                <div class="tk-online-content">
                    <div class="tk-online-img-content">
                        <figure class="tk-online-img">
                            @php 
                                $gig_image = 'images/default-img-286x186.png';
                                if(!empty($gig->attachments['files'])){
                                    $images = $gig->attachments['files'];
                                    $latest = current($images);
                                    if( !empty($latest) && substr($latest->mime_type, 0, 5) == 'image'){
                                        if(!empty($latest->sizes['286x186'])){
                                            $gig_image = 'storage/'.$latest->sizes['286x186'];
                                        } elseif(!empty($latest->file_path)){
                                            $gig_image = 'storage/'.$latest->file_path;
                                        }
                                    }
                                }
                            @endphp
                            <img height="230" src="{{ asset($gig_image) }}"  alt="image" />
                        </figure>
                        @guest
                            <a href="/login"><i class="fa-regular fa-heart"></i></a>
                        @endguest
                        @role('buyer')
                            <a href="javascript:;" data-gig-id="{{ $gig->id }}" class="favorite-gig tk-favicon{{ $gig?->is_favourite ? ' active' : '' }}"><i class="fa-regular fa-heart"></i></a>
                        @endrole
                    </div>
                    <div class="tk-online-info">
                        <div class="tk-online-user">
                            <div class="tk-online-user_content">
                                <figure>
                                    @php
                                        if( !empty($gig->gigAuthor->image) ){
                                            $image_path      = getProfileImageURL( $gig->gigAuthor->image, '50x50' );
                                            $seller_image    = !empty($image_path) ? '/storage/' . $image_path : '/images/default-user-50x50.png';
                                        }else{
                                            $seller_image = '/images/default-user-50x50.png';
                                        }
                                    @endphp
                                    <img src="{{ asset($seller_image) }}" alt="img">
                                </figure>
                                <a href="{{route('seller-profile',[ 'slug'=> $gig->gigAuthor->slug ])}}">
                                    {!! $gig->gigAuthor->full_name !!} 
                                    <x-verified-tippy />
                                </a>
                            </div>
                            @if($gig->is_featured == 1)
                                <em><i class="fa-solid fa-bolt"></i>{{ __('general.pro') }}</em>
                            @endif
                        </div>
                        <a href="{{ route('gig-detail', [ 'slug'=> $gig->slug ]) }}">{!! $gig->title !!}</a>
                        <div class="tk-online-stars">
                            <span class="tk-stars"></span>
                            <em>{{ratingFormat($gig->ratings_avg_rating)}} /5.0 ( {{ $gig->ratings_count == 1 ? __('general.user_review') : __('general.user_reviews', ['count' => number_format($gig->ratings_count)]) }} )</em>
                        </div>
                        @if(!empty($gig->address))
                            <div class="tk-online-location">
                                <span><i class="fa-regular fa-location-dot"></i></span>
                                <em>{!! getUserAddress($gig->address, 'city_state_country') !!}</em>
                            </div>
                        @endif
                        <div class="tk-online-footer">
                            <span>{{ __('gig.starting_from') }}</span>
                            <strong>{{getPriceFormat($currency_symbol, $gig->gig_plans_min_price)}}</strong>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="tk-button-wrapper">
        <a href="{{ route('search-gigs') }}" class="tk-btn-two tk-btn-task">
            <span>{{ $btnText }}</span>
            <i class="fa-solid fa-chevron-right"></i>
        </a>
    </div>
</div>

@pushonce(config('pagebuilder.site_script_var'))
    <script src="{{ asset('common/js/popper-core.js') }}"></script> 
    <script src="{{ asset('common/js/tippy.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let tb_tippy = document.querySelectorAll(".tk-hastippy");
            tb_tippy.forEach(function(element) {
                tippy(element, {
                    content: element.querySelector('.tk-tippycontent').innerHTML,
                    animation: "scale",
                });
            });
        });
    </script>
@endpushonce