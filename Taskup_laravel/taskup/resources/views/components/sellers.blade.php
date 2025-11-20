<ul class="tk-talent-section-users">
    @foreach ($profile as $single)
        <li>
            <div class="tk-talent">
                <div class="tk-talent-content">
                    @if(!empty($single->image))
                        <figure>
                            @php
                                if( !empty($single->image) ){
                                    $image_path      = getProfileImageURL( $single->image, '380x240' );
                                    $seller_image    = !empty($image_path) ? '/storage/' . $image_path : '/images/default-user-380x240.png';
                                }else{
                                    $seller_image = '/images/default-user-380x240.png';
                                }
                            @endphp
                            <img src="{{ asset($seller_image) }}" alt="img">
                        </figure>
                    @endif
                    <div class="tk-talent_wrppaer">
                        <div class="tk-talent-profile-detail">
                            <div class="tk-talent-title">
                                @if(!empty($single->full_name))
                                    <h3>
                                        <a href="{{ route('seller-profile', ['slug' => $single->slug]) }}">
                                            {{ $single->full_name }}
                                            <x-verified-tippy />
                                        </a>
                                    </h3>
                                @endif
                                @if (!empty($single->profile_visits_count))
                                    <span>
                                        <i class="icon-eye"></i>
                                        {{ $single->profile_visits_count == 1 ? __('general.single_view') : __('general.user_views', ['count' => number_format($single->profile_visits_count) ] ) }}
                                    </span>
                                @elseif (empty($single->profile_visits_count))
                                    <span>
                                        {{ __('general.zero_view') }}
                                    </span>
                                @endif
                                @if($single->is_featured)
                                    <span>
                                        <i class="fa-solid fa-bolt"></i>
                                        {{ __('general.pro') }}
                                    </span>
                                @endif
                            </div>
                            @if(!empty($single->tagline))
                                    <h3>{{ $single->tagline }}</h3>
                                @endif
                            <div class="tk-rating-star">
                                <i class="fa-solid fa-star"></i>
                                <span>{{ ratingFormat( $single->ratings_avg_rating ) }} ( {{ $single->ratings_count == 1 ? __('general.user_review') : __('general.user_reviews', ['count' => number_format($single->ratings_count) ]) }} )</span>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="tk-talent-rate">
                    <li>
                        <span>
                            <i class="icon-credit-card"></i>
                            {{ __('general.starting_from') }}
                        </span>
                        <strong>{{ __('general.per_hour_rate', ['rate' => number_format($single->user->userAccountSetting->hourly_rate, 2), 'currency_symbol' => $currency_symbol]) }}</strong>
                    </li>
                    <li>
                        <span>
                            <i class="icon-map-pin"></i>
                            {{ __('general.location') }}
                        </span>
                        <strong>{!! getUserAddress($single->address, 'city_state_country') !!}</strong>
                    </li>
                </ul>

                @if(!empty($single->skills))
                    <div class="tk-talent-tags" id="skills-{{ $single->id }}">
                        <ul>
                            @php
                                $skills = $single->skills;
                                $remainingSkillsCount = $skills->count() - 5;
                            @endphp

                            @foreach($skills->take(5) as $index => $skill)
                                <li>
                                    <span>{{ $skill->name }}</span>
                                </li>
                            @endforeach

                            @if($remainingSkillsCount > 0)
                                <li class="more-skills">
                                    <a href="javascript:void(0)"  
                                    data-toggle="tooltip" 
                                    title="{{ implode(', ', $skills->slice(5)->pluck('name')->toArray()) }}">
                                    {{ __('general.more_skills',['count'=> $remainingSkillsCount]) }}
                                </li>
                            @endif
                            @foreach($skills->slice(5) as $index => $skill)
                                <li class="hidden-skill-{{ $single->id }}" style="display: none;">
                                    <span>{{ $skill->name }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="tk-talent-btns">
                    <a href="{{ route('seller-profile', ['slug'=> $single->slug] ) }}" target="_blank" class="tk-btn-card"><span>{{ __('general.profile') }}</span></a>
                    
                    @guest
                        <button onclick="redirectToLogin()" class="tk-favicon"><i class="fa-regular fa-heart"></i></button>
                    @endguest
                    {{-- @role('buyer')
                        @php
                            $isFavorite = in_array($single->id, $favourite_sellers);
                        @endphp
                        <a href="javascript:;" data-project-id="{{ $single->id }}" class="favorite-seller tk-favicon{{ $isFavorite ? ' active' : '' }} "><i class="fa-regular fa-heart"></i></a>
                    @endrole   --}}
                </div>
            </div>
        </li>
    @endforeach
</ul>

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


