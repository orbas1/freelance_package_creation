@if(!empty($page->settings['grids']))
@foreach ($page->settings['grids'] as $grid)
@php $columns = getColumnInfo($grid['grid']); @endphp
<!-- Section start -->
@php
setGridId($grid['grid_id']);
$css = getCss();
if(!empty(getBgOverlay()))
$css = 'position:relative;'.$css;
@endphp
<section class="pb-themesection {{ getClasses() }}" {!!getCustomAttributes() !!} {!! !empty($css)? 'style="' .$css.'"':'' !!}>
    {!! getBgOverlay() !!}
    <div {!! getContainerStyles() !!}>
        <div class="row">
            @if(!empty($grid['data']))
            @foreach ($grid['data'] as $column => $components)
            <div class="{{ $columns[$column] }}">
                @foreach ($components as $component)
                @php setSectionId($component['id']);@endphp
                @if(view()->exists('pagebuilder.' . $component['section_id'] . '.view') && $loop->parent->parent->first)
                    {!! view('pagebuilder.' . $component['section_id']. '.view')->render() !!}
                @elseif(view()->exists('pagebuilder.' . $component['section_id'] . '.view'))    
                    {!! view('pagebuilder.' . $component['section_id']. '.view')->render() !!}
                    {{-- <div class="component-to-load" data-component-id="{{ $component['id'] }}" data-section-id="{{ $component['section_id'] }}"></div> --}}
                @else
                {{-- {{ __('pagebuilder::pagebuilder.no_view',['block'=>$component['section_id']??'']) }} --}}
                @endif
                @endforeach
            </div>

            @endforeach
            @endif
        </div>
    </div>
</section>
<!-- Section end -->
@endforeach
@endif

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var components = document.querySelectorAll('.component-to-load');
        components.forEach(function(component) {
            var sectionId = component.getAttribute('data-section-id');
            var componentId = component.getAttribute('data-component-id');
            lazyLoadComponent(sectionId, componentId, component);
        });
    });
    
    function lazyLoadComponent(sectionId, componentId, component) {
        let url = '{{ route("pagebuilder.html", ["section_id"=>"sId", "component_id"=> "cId"]) }}';
        url = url.replace('sId', sectionId).replace('cId',componentId).replace('&amp;','&');
        url += '&page_id={{ $page->id }}';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });

        $.ajax({
            url: url,
            method: 'get',
            async: false,
            success: function(data){
                component.innerHTML = data;
            }
        });
    }
    </script>
@endpush
