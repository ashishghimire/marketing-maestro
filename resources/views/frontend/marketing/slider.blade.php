@extends('frontend.marketing.master')
@section('section1')
<!-- Slider Section -->
<div class="slider-carousel">
    <div class="carousel slide" id='slider' data-ride='carousel'>
        <ul class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#slider"></li>
            <li data-slide-to="0" data-target="#slider"></li>
            <li data-slide-to="0" data-target="#slider"></li>
        </ul>
        <div class="carousel-inner">
            <div class="item active" id="slide1">
                <img src={{url('/uploads/Slider/im1.jpeg')}}
                        alt="Los Angeles"
                        style="width:935px%; height:600px;">
                <div class="carousel-caption">
                    <h4> Marketing Maestro</h4>
                    <p> We are one of the finest digital marketing company of Nepal. </p>
                </div>
            </div>
            <div class="item" id="slide2">
                <img src={{url('/uploads/Slider/im2.jpeg')}}
                        alt="Los Angeles"
                        style="width:935px%; height:600px;">
                <div class="carousel-caption">
                    <h4> Our Motto </h4>
                    <p> Our main motto is to provide customers with latest marketing news. </p>
                </div>
            </div>
            <div class="item" id="slide3">
                <img src={{url('/uploads/Slider/im3.jpeg')}}
                        alt="Los Angeles"
                        style="width:935px%; height:600px;">
                <div class="carousel-caption">
                    <h4> Request </h4>
                    <p> Keep supporting us!! </p>
                </div>
            </div>
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
<!-- End of slider section -->
@endsection