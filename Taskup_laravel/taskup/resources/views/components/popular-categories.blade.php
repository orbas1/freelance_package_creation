<ul class="tk-offering_list">
    @foreach( $categories as $single )
        @if( !$single->children->isEmpty() )
            <li>
                <div class="tk-offcard">
                    <div class="tk-offcard_head">
                            <h3>{!! $single->name !!}</h3>
                        <ul class="tk-offcard_listing">
                            @if( !$single->children->isEmpty() )

                                @foreach( $single->children as $child )
                                    <li>
                                        <a href="{{ route('search-projects', ['category' => $child->slug])}}" target="_blank">
                                            <span>{!! $child->name !!}</span>
                                            <em>({{ $child->children_count }})</em>
                                        </a>
                                    </li>
                                @endforeach
                                @endif 
                        </ul>
                        <div class="tk-offcard_footer">
                            <a href="{{ route('search-projects', ['category' => $single->slug])}}" target="_blank" class="tk-btn-card" data-action="hover-effect">
                                <span>{{ __('pages.explore_all')}}</span>
                            </a>
                        </div>
                    </div>
                    @php  
                        $image_url  = 'images/default-img-306x200.png'; 
                        if ( !empty($single->image) ){
                            $image = @unserialize($single->image);
                            if( $image == 'b:0;' || $image !== false ){
                                $file_path      = $image['file_path'];
                                $image_sizes    = !empty($image['sizes']) ? $image['sizes'] : null;
                                $image_url      = !empty($image_sizes['306x200']) ? 'storage/'.$image_sizes['306x200'] : 'storage/'.$file_path;
                            }
                        }
                    @endphp
                    <figure class="tk-offcard_img">
                        <img src="{{asset($image_url)}}" alt="{{$single->name}}">
                    </figure>
                </div>
            </li>
        @endif 
    @endforeach
</ul>



