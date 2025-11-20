<!-- HOW ITS WORK START -->
<div class="tk-howitwork">
    <div class="tk-howworkwrapper">
        <div class="tk-howworkleft {{ pagesetting('theme_style') == 'light' ? 'tk-howitworkvtwo' : '' }}">
            <div class="tk-workinfo">
                @if(!empty(pagesetting('sub-heading')) || !empty(pagesetting('heading')))
                    <div class="tk-section_title">
                        @if(!empty(pagesetting('sub-heading')))<span>{!! pagesetting('sub-heading') !!}</span>@endif
                        @if(!empty(pagesetting('heading')))<h2>{!! pagesetting('heading') !!}</h2>@endif
                    </div>
                @endif
                @if(!empty(pagesetting('working-steps-repeater')))
                    <ul class="tk-workinglist">
                        @foreach(pagesetting('working-steps-repeater') as $step)
                            <li>
                                <div class="tk-howworklist">
                                    <span class="@if(!empty($step['icon_color'])) {!! $step['icon_color'] !!} @endif">@if(!empty($step['icon'])) {!! $step['icon'] !!} @endif</span>
                                    <div class="tk-workslist">
                                        @if(!empty($step['heading']))<h4>{!! $step['heading'] !!}</h4>@endif
                                        @if(!empty($step['paragraph']))<p>{!! $step['paragraph'] !!}</p>@endif
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        @if(!empty(pagesetting('image')))
            <div class="tk-howworkright">
                <figure>
                    @if(!empty(pagesetting('image'))) <img src="{{asset('storage/'.pagesetting('image')[0]['path'])}}" alt="banner"> @endif
                </figure>
            </div>
        @endif
    </div>
</div>
<!-- HOW ITS WORK END -->


   