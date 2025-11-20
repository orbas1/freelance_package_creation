 <!-- FEEDBACK START -->
 <div class="tk-feedback-section-wrpper">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="tk-section_title">
                     @if(!empty(pagesetting('heading')))<h2>{!! pagesetting('heading') !!}</h2> @endif
                 </div>
             </div>
         </div>
     </div>
     <div class="tk-feedback-slider-container">
         <div class="tk-feedback-slide">
             @if(!empty(pagesetting('feedback')))
                 @foreach(pagesetting('feedback') as $option)
                    <div class="tk-feedback-item" @if(!empty($option['feedback_image'][0]['path'])) style="background-image: url({{asset('storage/'.$option['feedback_image'][0]['path'])}});" @endif>
                        <div class="tk-feedback-slider-content">
                            <div class="tk-feedback-slider-description">
                                <svg fill="none" viewBox="0 0 46 58">
                                    <path fill="#ee4710" d="M0 12.836C0 6.161 5.411.75 12.086.75c6.676 0 12.087 5.411 12.087 12.086V28.74L0 41.462V12.836Z"></path>
                                    <path fill="#EAEAEA" stroke="#F7F7F8" stroke-width="4" d="M15.727 50.75v3.313l2.931-1.543 13.488-7.099A22 22 0 0 0 43.9 25.953v-3.829c0-7.78-6.307-14.086-14.087-14.086-7.78 0-14.086 6.306-14.086 14.086V50.75Z"></path>
                                </svg>
                                <p>{!! $option['paragraph'] ?? '' !!}</p>
                            </div>
                            <div class="tk-feedback-slider-ratting">
                            <span class="tk-stars"><span></span></span>
                                <h3>{{ $option['name'] ?? '' }}</h3>
                                <span>{{ $option['role'] ?? '' }} <strong>@ {{ $option['company'] ?? '' }}</strong></span>
                            </div>
                        </div>
                    </div>
                 @endforeach
             @endif
         </div>
         <div class="tk-feedback-slider-button">
             <button class="prev"><i class="fas fa-chevron-left"></i></button>
             <button class="next"><i class="fas fa-chevron-right"></i></button>
         </div>

     </div>
 </div>
<!-- FEEDBACK END -->

@pushonce(config('pagebuilder.site_script_var'))

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let next = document.querySelector('.next')
        let prev = document.querySelector('.prev')

        if(next && prev) { 
            next.addEventListener('click', function(){
                let items = document.querySelectorAll('.tk-feedback-item')
                document.querySelector('.tk-feedback-slide').appendChild(items[0])
            })
        
            prev.addEventListener('click', function(){
                let items = document.querySelectorAll('.tk-feedback-item')
                document.querySelector('.tk-feedback-slide').prepend(items[items.length - 1]) 
            })
        }

    });
</script>
@endpushonce
   