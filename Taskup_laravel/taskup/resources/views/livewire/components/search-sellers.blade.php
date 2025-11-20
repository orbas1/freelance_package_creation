<div class="col-lg-8 col-xl-9" wire:init="loadSellers" >
    <div class="tk-section-holder" wire:loading.class="tk-section-preloader" wire:target="selected_skills,keyword,languages,english_level,seller_type,selected_location,order_by">
        <div class="preloader-outer" wire:loading  wire:target="selected_skills,keyword,languages,english_level,seller_type,selected_location,order_by">
            <div class="tk-preloader">
                <img class="fa-spin" src="{{ asset('images/loader.png') }}" >
            </div>
        </div>
        @if( !empty($isloadedPage) )
            @if( !$sellers->isEmpty() )
                @foreach($sellers as $single)
                    <x-seller-item 
                        :profile="$single" 
                        :user_role="$roleName"
                        :currency_symbol="$currency_symbol" 
                        :is_save_item="false"
                        :address_format="$address_format"
                        />
                @endforeach
            @else
                <div class="tk-submitreview">
                    <figure>
                        <img src="{{ asset('images/empty.png') }}" alt="{{ __('general.no_record') }}">
                    </figure>
                    <h4>{{ __('general.no_record') }}</h4>
                </div>
            @endif 
            @if(!$sellers->isEmpty())
                <div class="col-sm-12">
                    {{ $sellers->links('pagination.custom') }}
                </div>
            @endif
        @else
            <x-search-skeleton />    
        @endif
    </div>
</div>
