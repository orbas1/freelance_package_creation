    <!-- OPPORTUNITY START -->
    <div class="tk-section {{ pagesetting('enable_footer_bg')  == 'yes' ? 'tk-topfooter' : '' }}">
        <div class="tk-opportunity">
            <figure class="tk-bg-img">
                <img src="{{ asset('images/bg-img.png') }}" alt="image">
            </figure>
            <div class="tk-section_title">
                <span>{{ pagesetting('pre_heading') }}</span>
                <h3>{!! pagesetting('heading') !!}</h3>
                <p>{!! pagesetting('description') !!}</p>
            </div>
            <div class="tk-opportunity-button">
                <a href="@if( !empty(pagesetting('btn_url')) ) {!! pagesetting('btn_url') !!}@endif" class="tk-btn-primary">
                    <span>{{ pagesetting('btn_text') }}</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
                <figure>
                    <svg width="277" height="168" viewBox="0 0 322 273" fill="none">
                        <g filter="url(#filter0_f_8001_11749)">
                        <rect x="113.002" y="113.5" width="95.998" height="46" fill="#EE4710" style="mix-blend-mode:lighten"/>
                        </g>
                        <g filter="url(#filter1_f_8001_11749)">
                        <rect x="126.717" y="121.715" width="20.571" height="9.85714" fill="#F16334" style="mix-blend-mode:lighten"/>
                        </g>
                        <defs>
                        <filter id="filter0_f_8001_11749" x="0.101952" y="0.599998" width="321.798" height="271.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feGaussianBlur stdDeviation="56.45" result="effect1_foregroundBlur_8001_11749"/>
                        </filter>
                        <filter id="filter1_f_8001_11749" x="81.7168" y="76.7148" width="110.571" height="99.8569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feGaussianBlur stdDeviation="22.5" result="effect1_foregroundBlur_8001_11749"/>
                        </filter>
                        </defs>
                    </svg>
                </figure>
                <span>
                    {{ pagesetting('promo_text') }}
                </span>
            </div>
            <figure>
                <img src="{{ asset('images/bg-img-02.png') }}" alt="image">
            </figure>
        </div>
    </div>
    <!-- OPPORTUNITY END -->