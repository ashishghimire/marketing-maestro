<div class="slider-carousel">
    <div class="carousel slide" id='slider' data-ride='carousel'>
        <ul class="carousel-indicators">
            @for($i=0; $i<count($sliderContent); $i++)
                <li class="indicator {{$i==0 ? 'active' : ''}}" data-slide-to="0" data-target="#slider"></li>
            @endfor
        </ul>
        <div class="carousel-inner" style="height:400px">
            @forelse($sliderContent as $key=> $content)
                <div class="item {{$key==0 ?'active':''}}" id="slide{{$key+1}}">
                    <div class="image-slider">
                        <img class="img-responsive image-slide"
                             src="{{url($content->filePath.$content->file)}}">
                        <h4 class="carousel-heading">
                            {{$content->title}}
                        </h4>
                        <h5 class="carousel-date">
                            {{date("j F Y", strtotime($content->created_at))}}
                        </h5>
                    </div>
                </div>
            @empty
                @include('frontend.marketing.partials.slider-fallback')
            @endforelse
        </div>
        <a class="left carousel-control left left-carousel"
           href="#slider"
           data-slide="prev"
           role="button"
           style="width:8%;">
            <span class="icon-prev left-icon" style="left:50%;">
            </span>
        </a>
        <a class="right carousel-control right right-carousel"
           href="#slider"
           data-slide="next"
           role="button"
           style="width:8%;">
            <span class="icon-next right-icon" style="right:50%;"></span>
        </a>
    </div>
</div>