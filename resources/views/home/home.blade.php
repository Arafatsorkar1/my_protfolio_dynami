@extends('master.master')

@section('title')
    HomePage
@endsection

@section('body')

    <section class="hero-banner" data-scroll-index="1">
        <div class="container h-100">
            @foreach($called as $call)
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 col-sm-12">

                        <div class="hero-inner">
                            <div class="hero-social">
                                <a href="{{$call->link1}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{$call->link2}}" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="{{$call->link3}}"><i class="fab fa-linkedin"></i></a>

                            </div>
                            <h1>{{$call->title}}</h1>

                            <p>{{$call->description}}</p>

                            <a href="{{route('contact.add')}}" class="default-orange-btn">Hire Me </a>
                        </div>
                    </div>
                    <div class="col-lg-5 " data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-perspective="1000">
                        <img src="{{asset($call->image)}}" alt="Hero Image" height="500px" width="350" class=" hero-img">
                    </div>
                </div>
            @endforeach
        </div>
        {{--        <div class="button-group-center wow zoomIn" data-wow-delay="0.4s">--}}
        {{--            <a href="#" class="scroll-down-btn" data-scroll-nav="2">--}}
        {{--                <i class="fas fa-angle-double-down"></i>--}}
        {{--            </a>--}}
        {{--            <a href="https://www.youtube.com/watch?v=WbXKOQJNerE" class="popup-youtube my-video-btn">--}}
        {{--                <span class="fa fa-play"></span>--}}
        {{--            </a>--}}
        {{--        </div>--}}
    </section>

@endsection
