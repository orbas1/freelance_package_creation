<div class="tk-homebanner tk-hero-banner-eight">
    @php
        $searchText         = pagesetting('search-btn-txt');
        $searchPlaceholder  = pagesetting('search-placeholder');
    @endphp
    <x-search :btnText="$searchText" :placeholder="$searchPlaceholder" />
    <div class="tk-homebanner_trustedby">
        @if(!empty(pagesetting('trusted-by-heading')))
            <span>{{ pagesetting('trusted-by-heading') }}</span>
        @endif
        @if(is_array(pagesetting('trusted-by-image')) && count(pagesetting('trusted-by-image')) > 0)
            <ul class="tk-homebanner_trustedby_list">
                @foreach(pagesetting('trusted-by-image') as $image)
                    <li>
                        <img src="{{asset('storage/'.$image['path'])}}" alt="image">
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>