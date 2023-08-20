@extends('admin.master')

@section('body')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Dashboard 1</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Education</a></li>
                    <li class="breadcrumb-item active">Dashboard 1</li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button>
            </div>
        </div>
    </div>

    <div class="row mt-3">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" align="center">Add Education page Form </h4>
                    <hr/>
                    <h1 class="text-center text-dark">{{Session::has('success') ? Session::get('success') : ''}}</h1>

                    <form class="form-horizontal p-t-20" action="{{route('education.update',['id'=>$educations->id])}}" method="post" enctype="multipart/form-data">
                        @csrf




                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Year<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="year1" value="{{$educations->year1}}" placeholder="Add Year">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Degree<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="degree1" value="{{$educations->degree1}}" placeholder="Add you Degree">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add University<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="university1" value="{{$educations->university1}}" id="exampleInputuname3" placeholder="University Name ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Result<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="result1" value="{{$educations->result1}}"  placeholder="Result ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Write Details<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="details1" id="exampleInputEmail3" placeholder="Details ">{{$educations->details1}} </textarea>
                            </div>
                        </div>






                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Year<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="year2" value="{{$educations->year2}}" placeholder="Add Year">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Degree<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="degree2" value="{{$educations->degree2}}"  placeholder="Add you Degree">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add University<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="university2" value="{{$educations->university2}}" id="exampleInputuname3" placeholder="University Name ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Result<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="result2" value="{{$educations->result2}}" id="exampleInputuname3" placeholder="Result ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Write Details<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="details2" id="exampleInputEmail3" placeholder="Details ">{{$educations->details2}} </textarea>
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Year<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="year3" value="{{$educations->year3}}" placeholder="Add Year">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Degree<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="degree3" value="{{$educations->degree3}}" placeholder="Add you Degree">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add University<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="university3" value="{{$educations->university3}}" id="exampleInputuname3" placeholder="University Name ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Result<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="result3" value="{{$educations->result3}}" id="exampleInputuname3" placeholder="Result ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Write Details<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="details3" id="exampleInputEmail3" placeholder="Details ">{{$educations->details3}}</textarea>
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Year<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="year4" value="{{$educations->year4}}" placeholder="Add Year">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Degree<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="degree4" value="{{$educations->degree4}}"  placeholder="Add you Degree">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add University<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="university4" value="{{$educations->university4}}" id="exampleInputuname3" placeholder="University Name ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Result<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="result4" value="{{$educations->result4}}" id="exampleInputuname3" placeholder="Result ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Write Details<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="details4" id="exampleInputEmail3" placeholder="Details ">{{$educations->details4}} </textarea>
                            </div>
                        </div>





                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New education  page</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

