<div class="slider-carousel">
    <div class="carousel slide" id='slider' data-ride='carousel'>
        <ul class="carousel-indicators">
            @for($i=0; $i<count($sliderContent); $i++)
                <li class="indicator {{$i==0 ? 'active' : ''}}" data-slide-to="0" data-target="#slider"></li>
            @endfor
            {{--<li class="active" data-slide-to="0" data-target="#slider"></li>--}}
            {{--<li data-slide-to="0" data-target="#slider"></li>--}}
            {{--<li data-slide-to="0" data-target="#slider"></li>--}}
        </ul>
        <div class="carousel-inner" style="height:400px">
            @forelse($sliderContent as $key=> $content)
                <div class="item {{$key==0 ?'active':''}}" id="slide{{$key+1}}">
                        <img class="carousel-image img-responsive"
                         src="{{url($content->filePath.$content->file)}}"
                         style=" height:400px;
                                 width:100%;
                                 object-fit: cover;
                                 position:relative">
                    <div class="carousel-caption"
                         style="top:50%;
                                margin:auto;
                                line-spacing:1rem;     
                                     ">
                        <h4 class="carousel-heading"> {{$content->title}}</h4>
                        <h5> {{date("j F Y", strtotime($content->created_at))}}</h5>
                    </div>
                </div>
            @empty
                @include('frontend.marketing.partials.slider-fallback')
            @endforelse


        </div>
        <a class="left carousel-control left"
           href="#slider"
           data-slide="prev"
           role="button"
           style="width:8%;">
            <span class="icon-prev left-icon"
                  style="left:20px; background-color: #ff3c00;">
                    {{-- <i class="fas fa-chevron-circle-left"></i> --}}
            </span>
        </a>

        <a class="right carousel-control right"
           href="#slider"
           data-slide="next"
           role="button"
           style="width:8%;">
            <span class="icon-next right-icon"
                  style="right:20px; background-color:#00BAFF;"></span>
        </a>
    </div>
</div>