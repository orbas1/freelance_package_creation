<div class="tk-experience-section">
    <div class="tk-section-shape">
        <img src="{{ asset('demo-content/section-shape.png') }}" alt=""> 
    </div>
    @if(!empty(pagesetting('heading')) || !empty(pagesetting('paragraph')))
        <div class="tk-topcategory tk-section_title">
            @if( !empty(pagesetting('heading')) )<h2>{{ pagesetting('heading') ?? '' }}</h2>@endif
            @if( !empty(pagesetting('paragraph')) )<p>{!! pagesetting('paragraph') ?? '' !!}</p>@endif
        </div>
    @endif 
    @if(!empty(pagesetting('experience_data')))
        <ul class="tk-experience-list">
            @foreach(pagesetting('experience_data') as $option)
                @if(!empty($option['image'])
                    || !empty($option['sub_heading'])
                    || !empty($option['description']))
                    <li>
                        <div class="tk-experience-card">
                            @if(!empty($option['image']))<img width="88" height="88" src="{{asset('storage/'.$option['image'][0]['path'])}}" alt="frame">@endif
                            @if( !empty($option['sub_heading']) )<h3>{!! $option['sub_heading'] ?? '' !!}</h3>@endif
                            @if( !empty($option['description']) )<p>{{ $option['description'] ?? '' }}</p>@endif
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif
</div>