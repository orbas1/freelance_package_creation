<div class="tk-section tk-faqs-section">
    <div class="tk-section-frequently">
        @if(!empty(pagesetting('heading')) || !empty(pagesetting('paragraph')))
            <div class="tk-section_title">
                @if( !empty(pagesetting('heading')) )<h2>{!! pagesetting('heading') !!}</h2>@endif
            </div>
            <div class="tk-jobdescription"> 
                @if( !empty(pagesetting('paragraph')) )<p>{!! pagesetting('paragraph') !!}</p>@endif
            </div>
        @endif  
    </div>
</div>

