@extends('master.master')

@section('title')
    ContactPage
@endsection

@section('body')

    <section class="contact-me section" id="contact" data-scroll-index="7">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7 col-sm-12">
                    <h3 class="section-title">Contact<span>Me</span></h3>
                    <hr class="section-line-border">
                    <p class="section-sub-line">Please contact me if your mind has any question fitted.</p>
                </div>
            </div>
            <div class="contact-content">
                <div class="contact-form-outer">
                    <div class="contact-form">
                        <div class="empty-form" style="display: none;"><span>Please Fill Required Fields</span></div>
                        <div class="email-invalid" style="display: none;"><span>Email is invalid</span></div>
                        <div class="success-form"></div>

                        <h1 class="text-center text-dark">{{Session::has('success') ? Session::get('success') : ''}}</h1>
                        <hr>

                        <form class="form-horizontal p-t-20" action="{{ route('contact.stored') }}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Enter Name<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Add Email<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email"  placeholder="Enter email">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Add Subject<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="subject"  placeholder="Subject">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Add Details <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <textarea  class="form-control" name="details" id="exampleInputEmail3" placeholder="Add Details"> </textarea>
                                </div>
                            </div>





                            <div class="form-group row m-b-0">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-success waves-effect waves-light text-white">Send message </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
