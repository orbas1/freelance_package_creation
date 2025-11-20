<div class="tk-section tk-blog-section">
    @if(!empty(pagesetting('heading')) || !empty(pagesetting('paragraph')))
        <div class="tk-section_title">
            @if( !empty(pagesetting('heading')) )<h2>{!! pagesetting('heading') ?? '' !!}</h2>@endif
            @if( !empty(pagesetting('paragraph')) )<p>{!! pagesetting('paragraph') ?? '' !!}</p>@endif
        </div>
    @endif  
    @if(!empty(pagesetting('blog_data')))
        <ul class="tk-blog-list">
            @foreach(pagesetting('blog_data') as $option)
                <li>
                    <div class="tk-blog-list-item">
                        <figure>
                            @if(!empty($option['blog_image']))
                            <img src="{{asset('storage/'.$option['blog_image'][0]['path'])}}" alt="frame">
                            @endif
                        </figure>
                        <div class="tk-blog-tag">
                            @if( !empty($option['sub_heading']) )<span>{!! $option['sub_heading'] ?? '' !!}</span>@endif
                            @if( !empty($option['date']) )<em>{!! $option['date'] ?? '' !!}</em>@endif
                        </div>
                        @if( !empty($option['blog_heading']) )<h4>{!! $option['blog_heading'] ?? '' !!}</h4>@endif
                        @if( !empty($option['paragraph']) )<p>{!! $option['paragraph'] ?? '' !!}</p>@endif
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
    @if( !empty(pagesetting('btn_text')) )
        <div class="tk-button-wrapper">
            <a href="@if( !empty(pagesetting('explore_more_url')) ) {!! pagesetting('explore_more_url') !!}@endif" class="tk-btn-two tk-btn-task">
                <span>{!! pagesetting('btn_text') ?? '' !!}</span>
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>
    @endif
</div>