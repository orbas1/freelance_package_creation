@php 
    use Carbon\Carbon;

    $sellerPackages = $packages->filter(function ($package) {
        return $package['role_id'] == 2;
    })->values()->all();

    $buyerPackages = $packages->filter(function ($package) {
        return $package['role_id'] == 3;
    })->values()->all();
@endphp
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="saller" role="tabpanel" aria-labelledby="saller-tab">
        <ul class="tk-busines-tabs">
            @foreach( $sellerPackages as $sellerPackage )
                @php
                    $subsc_packages     = array_key_exists($sellerPackage->id, $subscribe_packages) ? $subscribe_packages[$sellerPackage->id] : [];
                    $rem_quota          = [];
                    $pkg_status         = '';
                    $remaining_duration = '';
                    $pkg_type           = '';

                        if( !empty($subsc_packages) && $subsc_packages->status == 'active'){
                            $subsc_options      = @unserialize($subsc_packages->package_options);
                            $rem_quota          = !empty($subsc_options['rem_quota']) ? $subsc_options['rem_quota'] : [];
                            $pkg_status         = $subsc_packages->status;
                            $expiry_date        = Carbon::parse($subsc_packages->package_expiry);
                            $pkg_type           = $subsc_options['type'];
                            if( $expiry_date->gte(Carbon::now()) ){
                                if( $pkg_type == 'day'){
                                    $remaining_duration = Carbon::now()->floatDiffInDays($expiry_date);
                                    $remaining_duration = intval( $remaining_duration );
                                } elseif( $pkg_type == 'month'){
                                    $remaining_duration = Carbon::now()->floatDiffInMonths($expiry_date);
                                    $remaining_duration = intval( $remaining_duration );
                                } elseif( $pkg_type == 'year'){
                                    $remaining_duration = Carbon::now()->floatDiffInYears($expiry_date);
                                    $remaining_duration = intval( $remaining_duration );
                                }
                            }
                        } elseif( !empty($subsc_packages) && $subsc_packages->status == 'expired'){
                            $pkg_status = $subsc_packages->status;
                        }
                    elseif( !empty($subsc_packages) && $subsc_packages->status == 'expired'){
                        $pkg_status = $subsc_packages->status;
                    }
                    $options          = unserialize($sellerPackage->options);
                    // dd($options['project_featured_days']);
                    $duration         = $options['duration'] > 1 ? $options['duration'] .' '. $options['type'].'s' : $options['duration'] .' '. $options['type'];
                    
                @endphp
                <li class="tk-packageitem @php echo ($loop->index == 1 ? 'tk-packagepopular' : null) @endphp" >
                    @if($loop->index == 1)
                        <span>Most Popular</span>
                    @endif
                    <div class="tk-packageitem_starter">
                        <span>{{ $sellerPackage->title }}</span>
                        <figure>
                            @php 
                                $package_image      = 'images/default-img-286x186.png';
                                if(!empty($sellerPackage->image)){
                                    $files  = unserialize($sellerPackage->image);
                                    $images = $files['file_path'];
                                    if( !empty($images)){
                                        $package_image = 'storage/'.$images;
                                    }
                                }
                            @endphp
                            <img src="{{ asset($package_image) }}"  alt="image">
                        </figure>
                    </div>
                    <div class="tk-packageitem_price">
                        <h3>{{ $currency_symbol }}{{ number_format( $sellerPackage->price, 2) }} {{ __('general.'.$options['type']) }}</h3> 
                        <span>{{ __('general.include_all_tax') }}</span>
                    </div>
                    <div class="tk-whatinclude">
                        <h4>{{ __('general.it_includes') }}</h4>
                        <ul class="tk-packageitem_package">
                            @if( !empty($options) && isset($options['posted_projects']) )
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="fas fa-check"></i>
                                        <span>
                                            @if( !empty($rem_quota) && isset($rem_quota['posted_projects']) )
                                                <em>{{ $rem_quota['posted_projects'] }} / </em>
                                            @endif
                                            {{ $options['posted_projects']}} {{ __('general.no_of_projects') }}
                                        </span>
                                    </div>
                                </li>
                            @endif
                            @if( !empty($options) && isset($options['featured_projects']) )
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="fas fa-check"></i>
                                        <span>
                                            @if( !empty($rem_quota) && isset($rem_quota['featured_projects']) )
                                                <em>{{ $rem_quota['featured_projects'] }} / </em>
                                            @endif
                                            {{ $options['featured_projects'] }} {{ __('general.feature_projects') }}
                                        </span>
                                    </div>
                                </li>
                            @endif
                            @if( !empty($options) && isset($options['credits']) )
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="tk-icon-cross fas fa-check"></i>
                                        <span>
                                            @if( !empty($rem_quota) && isset($rem_quota['credits']) )
                                                <em>{{ $rem_quota['credits'] }} / </em>
                                            @endif
                                            {{ $options['credits'] }} {{ __('general.credit_for_project') }}
                                        </span>
                                    </div>
                                </li>
                            @endif
                            <li>
                                <div class="tk-packageinfo">
                                    <i class="fas fa-check"></i>
                                    <span>
                                        {{ $options['profile_featured_days'] ?? $sellerPackage->id }} {{ __('general.profile_feature_duration') }} 
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="tk-packageinfo">
                                    <i class="fas fa-check"></i>
                                    <span>
                                        {{ $options['project_featured_days'] ?? $sellerPackage->id }} {{ __('general.feature_project_duration') }} 
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ Auth::check() ? route('packages') : route('login') }}" class="tk-btn-card @php echo ($loop->index == 1 ? 'active' : null) @endphp">
                        <span>{{ __('general.buy_now') }}</span>
                    </a>
                </li>
            @endforeach
          
        </ul>
    </div>
    <div class="tab-pane fade" id="buyer" role="tabpanel" aria-labelledby="buyer-tab">
        <ul class="tk-busines-tabs">
            @foreach( $buyerPackages as $buyerPackage )
                @php
                    $subsc_packages     = array_key_exists($buyerPackage->id, $subscribe_packages) ? $subscribe_packages[$buyerPackage->id] : [];
                    $rem_quota          = [];
                    $pkg_status         = '';
                    $remaining_duration = '';
                    $pkg_type           = '';

                    if( !empty($subsc_packages) && $subsc_packages->status == 'active'){
                        $subsc_options      = @unserialize($subsc_packages->package_options);
                        $rem_quota          = !empty($subsc_options['rem_quota']) ? $subsc_options['rem_quota'] : [];
                        $pkg_status         = $subsc_packages->status;
                        $expiry_date        = Carbon::parse($subsc_packages->package_expiry);
                        $pkg_type           = $subsc_options['type'];
                        if( $expiry_date->gte(Carbon::now()) ){
                            if( $pkg_type == 'day'){
                                $remaining_duration = Carbon::now()->floatDiffInDays($expiry_date);
                                $remaining_duration = intval( $remaining_duration );
                            } elseif( $pkg_type == 'month'){
                                $remaining_duration = Carbon::now()->floatDiffInMonths($expiry_date);
                                $remaining_duration = intval( $remaining_duration );
                            } elseif( $pkg_type == 'year'){
                                $remaining_duration = Carbon::now()->floatDiffInYears($expiry_date);
                                $remaining_duration = intval( $remaining_duration );
                            }
                        }
                    } elseif( !empty($subsc_packages) && $subsc_packages->status == 'expired'){
                        $pkg_status = $subsc_packages->status;
                    }
                    $options          = unserialize($buyerPackage->options);
                    // dd($options['project_featured_days']);
                    $duration         = $options['duration'] > 1 ? $options['duration'] .' '. $options['type'].'s' : $options['duration'] .' '. $options['type'];
                    
                @endphp
                <li class="tk-packageitem @php echo ($loop->index == 1 ? 'tk-packagepopular' : null) @endphp">
                    @if($loop->index == 1)
                        <span>{{ __('general.most_popular') }}</span>
                    @endif
                    <div class="tk-packageitem_starter">
                        <span>{{ $buyerPackage->title }}</span>
                        <figure class="tk-online-img">
                            @php 
                                $package_image      = 'images/default-img-286x186.png';
                                if(!empty($buyerPackage->image)){
                                    $files  = unserialize($buyerPackage->image);
                                    $images = $files['file_path'];
                                    if( !empty($images)){
                                        $package_image = 'storage/'.$images;
                                    }
                                }
                            @endphp
                            <img src="{{ asset($package_image) }}"  alt="image">
                        </figure>
                    </div>
                    <div class="tk-packageitem_price">
                        <h3>{{ $currency_symbol }}{{ number_format( $buyerPackage->price, 2) }} {{ __('general.'.$options['type']) }}</h3> 
                        <span>{{ __('general.include_all_tax') }}</span>
                    </div>
                    <div class="tk-whatinclude">
                        <h4>{{ __('general.it_includes') }}</h4>
                        <ul class="tk-packageitem_package">
                            {{-- <li>
                                <div class="tk-packageinfo">
                                    <i class="fas fa-check"></i>
                                    <span>
                                        @if( $remaining_duration > 0 )
                                            <em>{{ number_format( $remaining_duration) }} / </em>
                                        @elseif( $remaining_duration == 0 && !empty($pkg_type))
                                            <em> {{ __('general.last_'.$pkg_type) }} / </em>
                                        @endif
                                    {{ $duration }} {{ __('general.package_duration') }}
                                    </span>
                                </div>
                            </li> --}}
                            @if( !empty($options) && isset($options['posted_projects']) )
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="fas fa-check"></i>
                                        <span>
                                            @if( !empty($rem_quota) && isset($rem_quota['posted_projects']) )
                                                <em>{{ $rem_quota['posted_projects'] }} / </em>
                                            @endif
                                            {{ $options['posted_projects']}} {{ __('general.no_of_projects') }}
                                        </span>
                                    </div>
                                </li>
                            @endif
                            @if( !empty($options) && isset($options['featured_projects']) )
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="fas fa-check"></i>
                                        <span>
                                            @if( !empty($rem_quota) && isset($rem_quota['featured_projects']) )
                                                <em>{{ $rem_quota['featured_projects'] }} / </em>
                                            @endif
                                            {{ $options['featured_projects'] }} {{ __('general.feature_projects') }}
                                        </span>
                                    </div>
                                </li>
                            @endif
                            @if( !empty($options) && isset($options['credits']) )
                                <li>
                                    <div class="tk-packageinfo">
                                        <i class="fas fa-check"></i>
                                        <span>
                                            @if( !empty($rem_quota) && isset($rem_quota['credits']) )
                                                <em>{{ $rem_quota['credits'] }} / </em>
                                            @endif
                                            {{ $options['credits'] }} {{ __('general.credit_for_project') }}
                                        </span>
                                    </div>
                                </li>
                            @endif
                            <li>
                                <div class="tk-packageinfo">
                                    <i class="fas fa-check"></i>
                                    <span>
                                        {{ $options['profile_featured_days'] ?? $buyerPackage->id }} {{ __('general.profile_feature_duration') }} 
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="tk-packageinfo">
                                    <i class="fas fa-check"></i>
                                    <span>
                                        {{ $options['project_featured_days'] ?? $buyerPackage->id }} {{ __('general.feature_project_duration') }} 
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ Auth::check() ? route('packages') : route('login') }}" class="tk-btn-card @php echo ($loop->index == 1 ? 'active' : null) @endphp">
                        <span>{{ __('general.buy_now') }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>