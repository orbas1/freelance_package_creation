@if(!empty(pagesetting('image')))
    <figure class="tk-profile-images">
        <img src="{{asset('storage/'.pagesetting('image')[0]['path'])}}" alt="frame">
    </figure>
@endif

