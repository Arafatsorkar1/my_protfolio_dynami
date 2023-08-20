@extends('master.master')

@section('title')
    AboutPage
@endsection

@section('body')


        <section class="about section" id="about-me" data-scroll-index="2">
            <div class="container">
                <div class="row justify-content-between">
                    @foreach($abouts as $about)
                    <div class="col-md-6 about-tilt-img col-sm-12 col-lg-6" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-perspective="1000">
                        <div class="about-img-wrap">
                            <img src="{{asset($about->image)}}" alt="About image" class="img-fluid about-img-thumb">
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-lg-6 about-inner">

                        <h4>{{$about->title}}</h4>
                        <div class="box">
                            <div class="details">
                                <p>{{$about->description}}</p>
                            </div>
                        </div>

                        <ul class="about-list">
                            <table class="mt-5 ">
                                <tr>
                                    <td>Name:</td>
                                    <td width="400px"><input type="text" id="name" value="{{($about->name)}}"></td>
                                </tr>
                                <tr>
                                    <td>Age:</td>
                                    <td width="400px"><input type="number" id="age" value="{{($about->age)}}" ></td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td width="400px"><input type="tel" id="mobile" value="{{($about->mobile)}}"></td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td  width="400px"><input type="text" id="country" value="{{($about->country)}}"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td  width="400px"><input type="email" id="email" value="{{($about->email)}}"></td>
                                </tr>
                                <tr>
                                    <td>University</td>
                                    <td  width="400px"><input type="text" id="university" value="{{($about->university)}}"></td>
                                </tr>
                            </table>
                        </ul>
                        <a href="#" class="default-orange-btn">Download Cv</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


@endsection
