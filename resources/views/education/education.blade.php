@extends('master.master')

@section('title')
EducationPage
@endsection

@section('body')

    <section class="education-experience pb-minus-70 section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7 col-sm-12">
                <h3 class="section-title">My<span>Education</span></h3>
                <hr class="section-line-border">
                <p class="section-sub-line">What I have learned and experience.</p>
            </div>
        </div>
        <div class="row justify-content-center text-center align-items-center">
            <div class="resume-tab-item col-md-6 col-lg-4 col-sm-6 col-xs-12 active">
                <div class="resume-tab-item-inner">
                    <i class="flaticon-022-learning"></i>
                    <h5>Education</h5>
                </div>
            </div>
        </div>


        <div class="resume-tab-content active animated fadeIn ">
            <div class="row">

                @foreach($educations as $education)

                <div class="col-md-6 data-container flex-container flex-item">
                    <div class="experience-item">
                        <div class="experience-item-header">
                            <div class="resume-univ-icon">
                               <span><img src="{{asset('/')}}assets/img/g.png" height="90" width="80" alt="Example Image"></span>
                            </div>
                            <div class="resume-univ-text">
                                <h6><i class="far fa-calendar-alt"></i>{{$education->year1}}</h6>
                                <h5>{{$education->degree1}}</h5>
                                <p>{{$education->university1}}</p>
                                <h6>Results :<span>&nbsp;{{$education->result4}}</span></h6>
                            </div>
                        </div>
                        <div class="experience-item-body">
                            <p>{{$education->details1}}</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 data-container flex-container flex-item">
                    <div class="experience-item">
                        <div class="experience-item-header">
                            <div class="resume-univ-icon">
                                <span><img src="{{asset('/')}}assets/img/c.png" height="90" width="80" alt="Example Image"></span>
                            </div>
                            <div class="resume-univ-text">
                                <h6><i class="far fa-calendar-alt"></i>{{$education->year2}}</h6>
                                <h5>{{$education->degree2}}</h5>
                                <p>{{$education->university2}}</p>
                                <h6>Results :<span>&nbsp;{{$education->result4}}</span></h6>
                            </div>
                        </div>
                        <div class="experience-item-body">
                            <p>{{$education->details2}}</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 data-container flex-container flex-item">
                    <div class="experience-item">
                        <div class="experience-item-header">
                            <div class="resume-univ-icon">
                                <span><img src="{{asset('/')}}assets/img/s.png" height="90" width="80" alt="Example Image"></span>
                            </div>
                            <div class="resume-univ-text">
                                <h6><i class="far fa-calendar-alt"></i>{{$education->year4}}</h6>
                                <h5>{{$education->degree4}}</h5>
                                <p>{{$education->university4}}</p>
                                <h6>Results :<span>&nbsp;{{$education->result4}}</span></h6>
                            </div>
                        </div>
                        <div class="experience-item-body">
                            <p>{{$education->details4}}</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 data-container flex-container flex-item">
                    <div class="experience-item">
                        <div class="experience-item-header">
                            <div class="resume-univ-icon">
                                <span><img src="{{asset('/')}}assets/img/ps.png" height="90" width="80" alt="Example Image"></span>
                            </div>
                            <div class="resume-univ-text">
                                <h6><i class="far fa-calendar-alt"></i>{{$education->year4}}</h6>
                                <h5>{{$education->degree4}}</h5>
                                <p>{{$education->university4}}</p>
                                <h6>Results :<span>&nbsp;{{$education->result4}}</span></h6>
                            </div>
                        </div>
                        <div class="experience-item-body">
                            <p>{{$education->details4}}</p>
                        </div>
                    </div>
                </div>



                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
