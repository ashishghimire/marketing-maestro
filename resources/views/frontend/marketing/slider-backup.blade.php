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
        <div class="carousel-inner">
            @forelse($sliderContent as $key=> $content)
                <div class="item {{$key==0 ?'active':''}}" id="slide{{$key+1}}">
                    {{--                    {{dd('')}}--}}
                    <img src="{{url($content->filePath.$content->file)}}" style="width:935px;
                height:600px;object-fit: cover;">
                    <div class="carousel-caption">
                        <h4> Bipin Maestro</h4>
                        <p> We are one of the finest digital marketing company of Nepal. </p>
                    </div>
                </div>
            @empty
                @include('frontend.marketing.partials.slider-fallback')
            @endforelse


        </div>
        <a class="left carousel-control left"
           href="#slider"
           data-slide="prev"
           role="button">
            <span class="icon-prev left-icon"></span>
        </a>
        <a class="right carousel-control right"
           href="#slider"
           data-slide="next"
           role="button">
            <span class="icon-next right-icon"></span>
        </a>
    </div>
</div>
