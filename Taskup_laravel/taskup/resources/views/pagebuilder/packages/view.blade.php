@if(packagesEnabled())
	<div class="tk-section tk-package-section">
		<div class="tk-section-busines">
			<div class="tk-section_title">
				@if(!empty(pagesetting('sub-heading')))<span>{!! pagesetting('sub-heading') !!}</span> @endif
				@if(!empty(pagesetting('heading')))<h2>{!! pagesetting('heading') !!}</h2> @endif
				@if(!empty(pagesetting('paragraph')))
					<p>{!! pagesetting('paragraph') !!}</p>
				@endif
			</div>
			<div class="tk-busines">
				<div class="tk-busines_content">
					@if(!empty(pagesetting('btn_heading')))<em>{!! pagesetting('btn_heading') !!}</em> @endif
					<div class="tk-busines_content_tabs">
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<button class="nav-link active" id="saller-tab" data-bs-toggle="tab" data-bs-target="#saller" type="button" role="tab" aria-controls="saller" aria-selected="true">@if(!empty(pagesetting('talent_btn_text'))){!! pagesetting('talent_btn_text') !!} @endif</button>
							<button class="nav-link" id="buyer-tab" data-bs-toggle="tab" data-bs-target="#buyer" type="button" role="tab" aria-controls="buyer" aria-selected="false">@if(!empty(pagesetting('employer_btn_text'))){!! pagesetting('employer_btn_text') !!} @endif</button>
						</div>
					</div>
				</div>
				<x-packages />
			</div>
			@if(!empty(pagesetting('note_heading')))<span>{!! pagesetting('note_heading') !!}</span> @endif
		</div>
	</div>
@endif