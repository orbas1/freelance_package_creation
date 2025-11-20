<div class="tk-section tk-content-box-wrapper">
    @if(!empty(pagesetting('pre_heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph')))
        <div class="tk-section_title">
            @if( !empty(pagesetting('pre_heading')) )<span>{{ pagesetting('pre_heading') ?? '' }}</span>@endif
            @if( !empty(pagesetting('heading')) )<h2>{{ pagesetting('heading') ?? '' }}</h2>@endif
            @if( !empty(pagesetting('paragraph')) )<p>{!! pagesetting('paragraph') ?? '' !!}</p>@endif
        </div>
    @endif 
    @if(!empty(pagesetting('infobox_data'))
        || !empty(pagesetting('category_sub_heading'))
        || !empty(pagesetting('category_description'))
        || !empty(pagesetting('btn_url'))
        || !empty(pagesetting('btn_text')))
        <ul class="tk-content-box-list">
            @foreach(pagesetting('infobox_data') as $option)
                @if(!empty($option['info_heading'])
                    || !empty($option['sub_heading'])
                    || !empty($option['description'])
                    || !empty($option['info_image']))
                    <li>
                        <div class="tk-info-box-layout-1">
                            <div class="tk-info-box-content">
                                {{-- <h6 class="tk-subtitle">Meet the top brands</h6>
                                <h2 class="tk-title">Work on a Database System</h2> --}}
                                @if( !empty($option['info_heading']) )<h6 class="tk-subtitle">{{ $option['info_heading'] ?? '' }}</h6>@endif
                                @if( !empty($option['sub_heading']) )<h2 class="tk-title">{!! $option['sub_heading'] ?? '' !!}</h2>@endif
                                @if( !empty($option['description']) )
                                    <div class="tk-description">
                                        <p>{{ $option['description'] ?? '' }}</p>
                                    </div>
                                @endif
                            </div>
                            <figure class="tk-image">
                            @if(!empty($option['info_image']))<img src="{{asset('storage/'.$option['info_image'][0]['path'])}}" alt="img">@endif             
                            </figure>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif
    @if(!empty(pagesetting('note')))
        <p>{{ pagesetting('note') ?? '' }}</p>
    @endif
</div>