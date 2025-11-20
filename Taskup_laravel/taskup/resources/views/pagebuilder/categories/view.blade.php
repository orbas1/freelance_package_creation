
<div class="tk-section tk-offering-section"> 
    <div class="tk-section_title">
        @if(!empty(pagesetting('sub-heading')))<span>{!! pagesetting('sub-heading') !!}</span> @endif
        @if(!empty(pagesetting('heading')))<h2>{!! pagesetting('heading') !!}</h2> @endif
        @if(!empty(pagesetting('paragraph')))
            <p>{!! pagesetting('paragraph') !!}</p>
        @endif
    </div>
    <x-popular-categories />
    @if(!empty(pagesetting('btn_text')))
        <div class="tk-button-wrapper">
            <a href="{{ route('search-projects')}}" target="_blank" class="tk-btn-two tk-btn-more">
                <span>{!! pagesetting('btn_text') !!}</span>
                <i class="fa-regular fa-angle-right"></i>
            </a>
        </div>
    @endif  
</div>

   