<div class="tk-section">
    @if(!empty(pagesetting('heading')) || !empty(pagesetting('paragraph')))
        <div class="tk-topcategory tk-section_title">
            @if( !empty(pagesetting('heading')) )<h2>{{ pagesetting('heading') ?? '' }}</h2>@endif
            @if( !empty(pagesetting('paragraph')) )<p>{!! pagesetting('paragraph') ?? '' !!}</p>@endif
        </div>
    @endif 
    @if(!empty(pagesetting('categories_data'))
        || !empty(pagesetting('category_sub_heading'))
        || !empty(pagesetting('category_description'))
        || !empty(pagesetting('btn_url'))
        || !empty(pagesetting('btn_text')))
        <ul class="tk-topcategory-list">
            @if(!empty(pagesetting('categories_data')))
                @if(is_array(pagesetting('categories_data')))
                    @foreach(pagesetting('categories_data') as $option)
                        @if(!empty($option['image'])
                            || !empty($option['sub_heading'])
                            || !empty($option['description']))
                            <li>
                                <div class="tk-topcategory-card">
                                    @if(!empty($option['image']))<img width="50" height="50" src="{{asset('storage/'.$option['image'][0]['path'])}}" alt="frame">@endif
                                    @if( !empty($option['sub_heading']) )<h3>{!! $option['sub_heading'] ?? '' !!}</h3>@endif
                                    @if( !empty($option['description']) )<p>{{ $option['description'] ?? '' }}</p>@endif
                                </div>
                            </li>
                        @endif
                    @endforeach 
                @endif
            @endif
            @if(!empty(pagesetting('category_sub_heading'))
                || !empty(pagesetting('category_description'))
                || !empty(pagesetting('btn_url'))
                || !empty(pagesetting('btn_text')))
                <li>
                    <div class="tk-topcategory-card tk-topcategory-cardvtwo">
                        @if( !empty(pagesetting('category_sub_heading')) )<h3>{{ pagesetting('category_sub_heading') ?? '' }}</h3>@endif
                        @if( !empty(pagesetting('category_description')) )<p>{!! pagesetting('category_description') ?? '' !!}</p>@endif
                        <a href="@if( !empty(pagesetting('btn_url')) ) {!! pagesetting('btn_url') !!}@endif" class="tk-btn-primary">
                            @if( !empty(pagesetting('btn_text')) )<span>{{ pagesetting('btn_text') ?? '' }}</span>@endif
                        </a>
                    </div>
                </li>
            @endif
        </ul>
    @endif
</div>