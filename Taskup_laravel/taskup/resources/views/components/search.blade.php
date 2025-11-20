@props(['btnText' => 'Search', 'placeholder' => 'Search by keyword', 'header_position' => false])
<form class="tk-search_category"> 
    @if($header_position)
        <i class="fa-solid fa-grip-dots-vertical"></i>
    @endif
    <input type="text" @if($header_position) class="search_keyup" @endif id="search_keyword{{ $header_position ? "_top" : "" }}" placeholder="{{ $placeholder }}">
    <div class="tk-search-menu tk-select">
        <select id="tk_category_opt{{ $header_position ? "_top" : "" }}" data-placeholderinput="{{__('general.search')}}" data-placeholder="{{__('pages.select_list_type')}}" class="form-control tk_category_opt">
            {{-- <option label="{{__('pages.select_list_type')}}"></option> --}}
            <option value="sellers" data-icon="fa-regular fa-users">{{__('pages.seller_opt')}}</option>
            @if(projectEnabled())
                <option value="projects" data-icon="fa-regular fa-clipboard">{{__('pages.project_opt')}}</option>
            @endif
            @if(gigEnabled())
                <option value="gigs" data-icon="fa-regular fa-calendar">{{__('pages.gigs_opt')}}</option>
            @endif    
        </select>
    </div>
    @if(!$header_position)
        @if(!empty($btnText))
            <button type="button" class="tk-search_icon searchBtn">{{ $btnText }}
                <i class="fa-solid fa-magnifying-glass"></i>     
            </button>
        @else
            <button type="button" class="tk-search_icon searchBtn">
                <i class="fa-solid fa-magnifying-glass"></i>     
            </button>
        @endif
    @endif
</form>

@pushonce(config('pagebuilder.site_script_var'))
<script defer src="{{ asset('common/js/select2.min.js')}}"></script>
<script> 
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(() => {
            $('#tk_category_opt').select2(
                { allowClear: true, minimumResultsForSearch: -1, templateSelection: formatText, templateResult: formatText}
            );
            $('#tk_category_opt_top').select2(
                { allowClear: true, minimumResultsForSearch: -1, templateSelection: formatText, templateResult: formatText}
            );
        }, 1000);
    });

    $('.searchBtn').on('click',function(){
        searchCategory();
    });
    
    $('#search_keyword_top').on('keydown', function (event) {
        if (event.which == 13) {
            event.preventDefault();
            if ($(this).hasClass('search_keyup')) {
                searchCategory(true);
            }
        }
    });
    
    $('#search_keyword').on('keydown', function (event) {
        if (event.which == 13) {
            event.preventDefault();
        }
    });

    function searchCategory(top=false) {
        var categoryType, keyword = '';
        let searchParams        = new URLSearchParams(window.location.search);
        if(!top){
            categoryType        = $('#tk_category_opt').val();
            keyword             = jQuery('#search_keyword').val();
        }else{
            categoryType        = $('#tk_category_opt_top').val();
            keyword             = jQuery('#search_keyword_top').val();
        }
        let route               = '';
        if( categoryType == 'sellers' ){
            route = "{{route('search-sellers')}}";
        }else if(categoryType == 'gigs'){
            route = "{{route('search-gigs')}}";
        }else{
            route = "{{route('search-projects')}}";
        }

        if( route != ''){
            let URL = `${route}?&keyword=${keyword}`;
            location.href = URL;
        }
    }

    function formatText (option) {
        var icon = $(option.element).data('icon');
        return $(`<span><i class="${icon}"></i> ${option.text}</span>`);
    };
</script>
@endpushonce

