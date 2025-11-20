<!-- Online Marketplace 2  START -->
<div class="tk-section tk-talent-section {{ pagesetting('seller_verient') }}">
	@if(!empty(pagesetting('sub-heading')) || !empty(pagesetting('heading')) || !empty(pagesetting('paragraph')))
		<div class="tk-section_title tk-service-title">
			@if(!empty(pagesetting('sub-heading')))<span>{!! pagesetting('sub-heading') !!}</span>@endif
			@if(!empty(pagesetting('heading')))<h2>{!! pagesetting('heading') !!}</h2> @endif
			@if(!empty(pagesetting('paragraph')))
				<div class="tk-section_desciption">
					<p>{!! pagesetting('paragraph') !!}</p>
				</div>
			@endif
		</div>
	@endif
	<x-sellers :limit="pagesetting('no_of_sellers') ?? 6" />
	@if( !empty(pagesetting('btn_text')) )
		<div class="tk-button-wrapper">
			<a href="{{ route('search-sellers') }}" class="tk-btn-two tk-btn-task">
				<span>{!! pagesetting('btn_text') ?? '' !!}</span>
				<i class="fa-solid fa-chevron-right"></i>
			</a>
		</div>
	@endif
</div>
<!-- Online Marketplace 2 END -->

@pushonce(config('pagebuilder.site_script_var'))
<script>
	function redirectToLogin() {
    	window.location.href = "/login";
	}
</script>
@endpushonce