@extends('master.master')

@section('title')
    Services Page
@endsection

@section('body')

    @foreach($services as $service)
        <section class="section my-services pb-minus-70" id="services" data-scroll-index="3">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7 col-sm-12">
                        <h3 class="section-title"><span>My Services</span></h3>
                        <hr class="section-line-border">
                        <p class="section-sub-line">You can also get support for the service you want.</p>
                    </div>
                </div>

                <div class="row">
                    <!-- Service 1 -->
                    <div class="col-md-6 data-container flex-container flex-item">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-011-strategy"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>{{$service->title1}}</h5>
                                <p>{{$service->details1}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="col-md-6 data-container flex-container flex-item">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-011-strategy"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>{{$service->title2}}</h5>
                                <p>{{$service->details2}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Add more service blocks as needed -->

                    <div class="col-md-6 data-container flex-container flex-item">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-011-strategy"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>{{$service->title3}}</h5>
                                <p>{{$service->details3}}</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 data-container flex-container flex-item">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-011-strategy"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>{{$service->title4}}</h5>
                                <p>{{$service->details4}}</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 data-container flex-container flex-item">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-011-strategy"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>{{$service->title5}}</h5>
                                <p>{{$service->details5}}</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 data-container flex-container flex-item">
                        <div class="services-box">
                            <div class="services-box-icon">
                                <span class="flaticon-011-strategy"></span>
                            </div>
                            <div class="services-box-body">
                                <h5>{{$service->title6}}</h5>
                                <p>{{$service->details6}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="pb-minus-70 section" id="counters">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7 col-sm-12">
                        <h3 class="section-title"><span>My Skills & Values</span></h3>
                        <hr class="section-line-border">
                        <p class="section-sub-line">Some of the skills I've gained.</p>
                    </div>
                </div>

                <div class="row">
                    <!-- Counter 1 -->
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="counters-item">
                            <span class="flaticon-005-trophy"></span>
                            <div class="counters-body">
                                <h3 class="counter">{{$service->award}}</h3>
                                <span>Awards & Winners</span>
                            </div>
                        </div>
                    </div>

                    <!-- Counter 2 -->
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="counters-item">
                            <span class="flaticon-015-partnership"></span>
                            <div class="counters-body">
                                <h3 class="counter">{{$service->client}}</h3>
                                <span>Happy Clients</span>
                            </div>
                        </div>
                    </div>

                    <!-- Add more counter blocks as needed -->

                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="counters-item">
                            <span class="flaticon-032-coffee-cup"></span>
                            <div class="counters-body">
                                <h3 class="counter">{{$service->coffeDate}}</h3>
                                <span>Cups Of Coffee</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="counters-item">
                            <span class="flaticon-020-meeting"></span>
                            <div class="counters-body">
                                <h3 class="counter">{{$service->totalProject}}</h3>
                                <span>Complete Project</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endforeach

@endsection
