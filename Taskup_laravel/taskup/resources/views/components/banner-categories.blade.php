@props(['categoryTextColor' => '', 'categoryBgColor' => ''])
<ul class="tk-homebanner_categories_list">
    @foreach($categories->take(3) as $category)
        <li>
            <a class="tk-tag banner-category-bg-color" href="{{ route('search-projects', ['category' => $category->slug])}}">
                <span class="banner-category-text-color">{!! $category->name !!}</span>
            </a>
        </li>
    @endforeach    
</ul>

@pushonce(config('pagebuilder.site_style_var'))
    <style>
        @if(!empty($categoryTextColor) && $categoryTextColor != 'rgba(0,0,0,0)')
            .banner-category-text-color{
                color: {{ $categoryTextColor }} !important;
            }
        @endif

        @if(!empty($categoryBgColor) && $categoryBgColor != 'rgba(0,0,0,0)')
            .banner-category-bg-color{
                background-color: {{ $categoryBgColor }} !important;
            }
        @endif
    </style>
@endpushonce