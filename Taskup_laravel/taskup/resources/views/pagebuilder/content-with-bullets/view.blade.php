<!-- Counter section start -->
<div class="tk-profile-content {{ pagesetting('theme_style') == 'dark' ? 'tk-profile-contentvtwo' : '' }}">
    <div class="tk-tagline">
        @if(!empty(pagesetting('sub-heading')))<span>{!! pagesetting('sub-heading') !!}</span>@endif
    </div>
    @if(!empty(pagesetting('heading')))<h2>{!! pagesetting('heading') !!}</h2>@endif
    @if(!empty(pagesetting('paragraph')))
        <p>{!! pagesetting('paragraph') !!}</p>
    @endif
    @if(!empty( pagesetting('list-data')))
        <ul class="tk-bannerlist">
            @foreach(pagesetting('list-data') as $data)
                <li>
                    {!! $data['list_item'] !!}
                </li>
            @endforeach
        </ul>
    @endif
    @if( !empty(pagesetting('get_started_url')) || !empty(pagesetting('get_started_btn')))
        <a href="@if( !empty(pagesetting('get_started_url')) ) {!! pagesetting('get_started_url') !!}@endif" class="tk-btn-primary">
            <span>@if( !empty(pagesetting('get_started_btn')) ) {!! pagesetting('get_started_btn') !!}@endif</span>
        </a>
    @endif
</div>
<!-- Counter section start -->

