<!-- profile section start -->
<div class="wr-profile-section {{ pagesetting('profile_verient') }}">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <figure>
                    @if(!empty(pagesetting('image'))) <img src="{{asset('storage/'.pagesetting('image')[0]['path'])}}" alt="banner"> @endif
                </figure>
            </div>
            <div class="col-6">
                <div class="wr-profile-content">
                    <div class="wr-tagline">
                        @if(!empty(pagesetting('sub-heading')))<span>{!! pagesetting('sub-heading') !!}</span> @endif
                    </div>
                    @if(!empty(pagesetting('heading')))<h1>{!! pagesetting('heading') !!}</h1> @endif
                    @if(!empty(pagesetting('paragraph')))
                        <p>{!! pagesetting('paragraph') !!}</p>
                    @endif
                    @if(!empty( pagesetting('list-data')))
                        <ul class="wr-bannerlist">
                            @foreach(pagesetting('list-data') as $data)
                                <li>
                                    {!! $data['list_item'] !!}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- profile section end -->