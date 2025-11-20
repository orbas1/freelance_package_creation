<ul class="tk-employment">
    @foreach($projects as $project)
        <li>
            <div class="tk-employe-info">
                <div class="tk-employe-content">
                    <div class="tk-employe-title">
                        <div class="tk-employe-work">
                            <span>
                                {{ __('project.project_posted_date',['diff_time'=> getTimeDiff($project->updated_at)]) }}
                            </span>
                            <h3>
                                <a href="{{ route('project-detail', ['slug'=> $project->slug] ) }}">{{ $project->project_title }}</a>
                            </h3>
                        </div>
                        @guest
                            <a href="/login" class="tk-favicon"><i class="fa-regular fa-heart"></i></a>
                        @endguest
                        @role('seller')
                            @php
                                $isFavorite = in_array($project->id, $fav_projects);
                            @endphp
                            <a href="javascript:;" data-project-id="{{ $project->id }}" class="favorite-project tk-favicon{{ $isFavorite ? ' active' : '' }} "><i class="fa-regular fa-heart"></i></a>
                        @endrole  
                    </div>
                    <div class="tk-employe-price">
                        <span>{{ $project->project_type == 'fixed' ?  __('project.fixed_project') : __('project.hourly_project') }}</span>
                        <strong>{{ getProjectPriceFormat($project->project_type, $currency_symbol, $project->project_min_price, $project->project_max_price) }}</strong>
                    </div>
                    <p class="tk-employe-framework">{{ implode(' ', array_slice(str_word_count(strip_tags($project->project_description), 1), 0, 28)) }}. . .</p>
                    <ul class="tk-employe-tag">
                        <li>
                            <span class="tk-purple-tag"><i class="icon-map-pin"></i> {{ !empty($project->projectLocation) ? $project->projectLocation->name : '' }}</span>
                        </li>
                        <li>
                            <span class="tk-red-tag"><i class="icon-briefcase"></i>{{ !empty($project->expertiseLevel) ? $project->expertiseLevel->name : '' }}</span>
                        </li>
                        <li>
                            <span class="tk-green-tag">
                                <i class="{{ $project->project_hiring_seller > 1 ? 'icon-users' : 'icon-user' }}"></i>
                                {{ $project->project_hiring_seller .' '. ($project->project_hiring_seller > 1 ? __('project.freelancers') : __('project.freelancer')) }}
                            </span>
                        </li>
                    </ul>
                
                    @if(!empty($project->skills))
                        <ul class="tk-language-tags" id="skills-{{ $project->id }}">
                            @php
                                $remainingSkillsCount = $project->skills->count() - 3;
                            @endphp

                            @foreach($project->skills->take(3) as $index => $skill)
                                <li>
                                    <span class="tk-gray-tag">{{ $skill->name }}</span>
                                </li>
                            @endforeach

                            @if($remainingSkillsCount > 0)
                                <li class="more-skills">
                                    <a href="javascript:void(0)" class="tk-anchor-tag" 
                                    data-toggle="tooltip" 
                                    title="{{ implode(', ', $project->skills->slice(3)->pluck('name')->toArray()) }}">
                                    {{ __('general.more_skills',['count'=> $remainingSkillsCount]) }}</a>
                                </li>
                            @endif

                            @foreach($project->skills->slice(3) as $index => $skill)
                                <li class="hidden-skill-{{ $project->id }}" style="display: none;">
                                    <span class="tk-gray-tag">{{ $skill->name }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="tk-employe-footer">
                    <div class="tk-employe-img">
                        <figure>
                            @if(!empty($project->projectAuthor->image)) 
                                @php  
                                    $image_path     = getProfileImageURL( $project->projectAuthor->image, '130x130' );
                                    $author_image   = !empty($image_path) ? 'storage/' . $image_path : 'images/default-user-130x130.png';
                                @endphp 
                                <img src="{{ asset($author_image) }}" alt="img">
                            @else 
                                <img src="{{ asset('images/default-user-130x130.png')  }}" alt="img">
                            @endif
                        </figure>
                        <a href="javascript:void(0)">
                            {{ $project->projectAuthor?->full_name}}
                        </a>
                    </div>
                    <a href="{{ route('project-detail', ['slug'=> $project->slug] ) }}" target="_blank" class="tk-tag tk-btn-card">{{ __('project.view_detail') }}</a>
                </div>
            </div>
        </li>
    @endforeach
</ul>

@pushonce(config('pagebuilder.site_script_var'))
    <script src="{{ asset('common/js/popper-core.js') }}"></script> 
    <script src="{{ asset('common/js/tippy.js') }}"></script>
@endpushonce
