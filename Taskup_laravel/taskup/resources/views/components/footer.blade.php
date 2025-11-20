<div class="tk-footerwrap">
	<footer class="tk-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-7 col-xl-4">
					<div class="tk-footer_info">
						@if( !empty(setting('_site.site_lite_logo')) )
                            <strong class="tk-footerlogo"><a href="{{ url('/')}}"><img src="{{asset('storage/'.setting('_site.site_lite_logo')[0]['path'])}}" alt="{{ __('general.logo') }}" /></a></strong>
                        @else
                            <strong ><a href="{{ url('/')}}"><img src="{{asset('demo-content/logo.png')}}" alt="{{ __('general.logo') }}" /></a></strong>
                        @endif
						@if(!empty(setting('_site.footer_text')))
							<div class="tk-description">
								<p>{!! nl2br(setting('_site.footer_text')) !!}</p>
							</div>
						@endif
						@if(!empty(setting('_site.footer_apps_heading')) || !empty(setting('_site.android_app_logo')) || !empty(setting('_site.android_app_url')))
					<div class="tk-footer-mobile-app">
						@if(!empty(setting('_site.footer_apps_heading')))
							<div class="tk-title">
								<h3>{!! setting('_site.footer_apps_heading') !!}</h3>
							</div>
						@endif
						<ul class="tk-socailapp">
							@if(!empty(setting('_site.android_app_logo')))
								<li>
									<a href="{{setting('_site.android_app_url')??'#'}}">
										<img src="{{asset('storage/'.setting('_site.android_app_logo')[0]['path'])}}" alt="{{__('pages.app_store_alt')}}">
									</a>
								</li>
							@endif
							@if(!empty(setting('_site.ios_app_logo')))
								<li>
									<a href="{{setting('_site.ios_app_url')??'#'}}">
										<img src="{{asset('storage/'.setting('_site.ios_app_logo')[0]['path'])}}" alt="{{__('pages.play_store_alt')}}">
									</a>
								</li>
							@endif
						</ul>
					</div>
				@endif
					</div>
				</div>
				@if(!empty($categories))
					<div class="col-12 col-lg-6 col-xl-4">
						<div class="tk-fwidget">
							@if(!empty(setting('_site.footer_categories_heading')))
								<div class="tk-fwidget_title">
									<strong>{!! setting('_site.footer_categories_heading') !!}</strong>
								</div>
							@endif
							<ul class="tk-fwidget_list">
								@foreach($categories as $index => $category)
									@if($index > 8)
										<li class="tk-showall"><a href="{{ route('search-projects')}}" target="_blank">{{__('pages.show_all')}}</a></li>
									@endif
									@php if($index > 8){
											break;
										}
									@endphp
									<li><a href="{{ route('search-projects', ['category' => $category->slug])}}" target="_blank">{{$category->name}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				@endif
				<div class="col-12 col-lg-6 col-xl-4">
				
					<div class="tk-footernewsletter tk-footernewsletterv2">
						@if(!empty(setting('_site.footer-contact-heading')))
							<div class="tk-fwidget_title">
								<h5>{!! setting('_site.footer-contact-heading') !!}</h5>
							</div>
						@endif
						@if(!empty(setting('_contact.phone')) || !empty(setting('_contact.email')) || !empty(setting('_contact.whatsapp')) || !empty(setting('_contact.fax')) )
							<ul class="tk-fwidget_contact_list">
								@if(!empty(setting('_contact.phone')))
									<li>
										<i class="icon icon-phone-call"></i>
										<a href="tel:{{setting('_contact.phone')}}">{{setting('_contact.phone')}}</a>
										@if(!empty(setting('_contact.phone_call_availability')))
											<span>{!! setting('_contact.phone_call_availability') !!}</span>
										@endif
									</li>
								@endif
								@if(!empty(setting('_contact.email')))
									<li>
										<i class="icon icon-mail"></i>
										<a href="mailto:{{setting('_contact.email')}}">{!! setting('_contact.email') !!}</a>
									</li>
								@endif
								@if(!empty(setting('_contact.fax')))
									<li>
										<i class="icon icon-printer"></i>
										<a href="fax:{{setting('_contact.fax')}}">{!! setting('_contact.fax') !!}</a>
									</li>
								@endif
								@if(!empty(setting('_contact.whatsapp')))
									<li>
										<i class="fab fa-whatsapp"></i>
										<a target="_blank" href="https://api.whatsapp.com/send?phone={{setting('_contact.whatsapp')}}">{!! setting('_contact.whatsapp') !!}</a>
										@if(!empty(setting('_contact.whatsapp_call_availability')))
											<span>{!! setting('_contact.whatsapp_call_availability') !!}</span>
										@endif
									</li>
								@endif
							</ul>
						@endif
					</div>
				</div>
			</div>
		</div>
		<div class="tk-footer_copyright">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="tk-footer-copywrapper">
							<div class="tk-fcopyright">
								@if( !empty($footer_menu) && $footer_menu->count() > 0 )  
									<nav class="tk-fcopyright_list">
										<ul class="tk-copyrights-list">
											@foreach( $footer_menu as $menu)
												<li>
													<a href="{{ !empty($menu->route) ? url($menu->route ) : 'javascript:;' }}">{!! ucfirst($menu->label) !!}</a>
												</li>
											@endforeach	
										</ul>
									</nav>
								@endif
								<span class="tk-fcopyright_info">{{ __('general.copy_right_text').' '. date('Y')}}</span>
							</div>
							@if(!empty(setting('_social.facebook')) || !empty(setting('_social.twitter')) || !empty(setting('_social.linkedin')) || !empty(setting('_social.dribbble')))
								<ul class="tk-socialicons">
									@if(!empty(setting('_social.facebook')))
										<li>
											<a href="{{setting('_social.facebook')}}" class="tk-facebook"><i class="fab fa-facebook-f"></i></a>
										</li>
									@endif
									@if(!empty(setting('_social.twitter')))
										<li>
											<a href="{{setting('_social.twitter')}}" class="tk-twitter"><i class="fab fa-twitter"></i></a>
										</li>
									@endif
									@if(!empty(setting('_social.linkedin')))
										<li>
											<a href="{{setting('_social.linkedin')}}" class="tk-linkedin"><i class="fab fa-linkedin-in"></i></a>
										</li>
									@endif
									@if(!empty(setting('_social.dribbble')))
										<li>
											<a href="{{setting('_social.dribbble')}}" class="tk-dribbble"><i class="fab fa-dribbble"></i></a>
										</li>
									@endif
								</ul>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
