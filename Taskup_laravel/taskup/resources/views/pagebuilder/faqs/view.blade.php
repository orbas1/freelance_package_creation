<div class="tk-section tk-faqs-section">
    <div class="tk-section-frequently">
        @if(!empty(pagesetting('sub-heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph')))
            <div class="tk-section_title">
                @if( !empty(pagesetting('sub-heading')) )<span>{!! pagesetting('sub-heading') !!}</span>@endif
                @if( !empty(pagesetting('heading')) )<h2>{!! pagesetting('heading') !!}</h2>@endif
                @if( !empty(pagesetting('paragraph')) )<p>{!! pagesetting('paragraph') !!}</p>@endif
                <a href="@if( !empty(pagesetting('contact_us_url')) ) {!! pagesetting('contact_us_url') !!}@endif" class="tk-btn-primary">
                    <span>@if( !empty(pagesetting('contact_us_btn')) ) {!! pagesetting('contact_us_btn') !!}@endif</span>
                </a>
            </div>
        @endif  
        @if(!empty(pagesetting('faqs_data')))                      
            <div class="tk-section-accordion" id="FaqAccordion">
                @foreach(pagesetting('faqs_data') as $key => $faq)
                    <div class="accordion-item">
                        <div class="accordion-header" id="heading{{ $key }}">
                            <button class="accordion-button {{ $loop->first ? 'show' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}">
                                {!! $faq['question'] !!}
                            </button>
                        </div>
                        <div id="collapse{{ $key }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading{{ $key }}" data-bs-parent="#FaqAccordion">
                            <div class="tk-accordion-body">
                                <p>{!! $faq['answer'] !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>                        
        @endif
    </div>
</div>

