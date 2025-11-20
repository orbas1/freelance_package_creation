@if(!empty( pagesetting('counter_repeator')))
<div class="@if(!empty(pagesetting('conuter_description'))) tk-couter-wrapper @endif">
    @if(!empty(pagesetting('conuter_description')))
        <div class="tk-stats-section-content">
            <p>{{ pagesetting('conuter_description') }}</p>
        </div>
    @endif
    <ul class="tk-counternum">
        @foreach(pagesetting('counter_repeator') as $counter)
            <li>
                <div class="tk-countitem">
                    @if(!empty($counter['image'])) <img src="{{asset('storage/'.$counter['image'][0]['path'])}}" alt="banner">@endif
                    @if(!empty($counter['conuter_record']))<h3>{{ $counter['conuter_record'] }}</h3>@endif
                    @if(!empty($counter['heading']))<span>{{ $counter['heading'] }}</span>@endif
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endif



