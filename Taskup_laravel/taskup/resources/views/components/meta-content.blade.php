@props(['OgContent'=>null,'siteName'=>null,'page'=>null,'title'=>null])

@if( !empty($page->title) )
    <title>{!! $page->title !!}</title>
    <meta property="og:title" content="{!! $page->title !!}">
@elseif(!empty($title))
    <title>{{ $title }}</title>
    @if (isset($OgContent))
        @foreach ($OgContent as $property => $content)
            @if (!empty($content))
                <meta property="{{ $property }}" content="{{ $content }}">
            @endif
            @if($property == 'og:description')
                <meta name="description" content="{{ Str::limit(strip_tags($content), 160) }}">
            @endif
        @endforeach
    @endif
@else
    <title>{{ __('general.dashboard')  }} | {{ $siteName }}</title>
@endif

@if(!empty($page))
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:type" content="website">
    <meta property="og:url"  content="{{ url()->current() }}">
@endif

@if( !empty($page->description) )
    <meta property="og:description" content="{!! $page->description !!}">
    <meta name="description" content="{!! $page->description !!}">
@endif


