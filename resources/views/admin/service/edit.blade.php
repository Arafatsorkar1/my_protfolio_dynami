@extends('admin.master')

@section('body')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Dashboard 1</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Service</a></li>
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
                    <h4 class="card-title" align="center">Add service page Form </h4>
                    <hr/>
                    <h1 class="text-center text-dark">{{Session::has('success') ? Session::get('success') : ''}}</h1>

                    <form class="form-horizontal p-t-20" action="{{route('service.update',['id'=>$services->id])}}" method="post" enctype="multipart/form-data">
                        @csrf




                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Titile 1 Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title1" value="{{$services->title1}}" placeholder="Title   Name">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Your Details 1 <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="details1"  placeholder="Details">{{$services->details1}}</textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Titile 2 Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title2" value="{{$services->title2}}" placeholder="Title   Name">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Your Details 2 <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="details2"  placeholder="Details">{{$services->details2}}</textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Titile 3 Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title3" value="{{$services->title3}}" placeholder="Title   Name">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Your Details 3 <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="details3"  placeholder="Details">{{$services->details3}}</textarea>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Titile 4 Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title4" value="{{$services->title4}}" placeholder="Title   Name">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Your Details 4 <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="details4"  placeholder="Details">{{$services->details4}}</textarea>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Titile 5 Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title5" value="{{$services->title5}}" placeholder="Title   Name">
                            </div>
                        </div>
                        5
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Your Details 5 <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="details5"  placeholder="Details">{{$services->details5}}</textarea>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Add Titile 6 Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title6" value="{{$services->title6}}" placeholder="Title   Name">
                            </div>
                        </div>6

                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Your Details 6 <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea  class="form-control" name="details6"  placeholder="Details">{{$services->details6}}</textarea>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Award Number<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="award" value="{{$services->award}}" id="exampleInputuname3" placeholder="Award Number ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Client Number <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="client" value="{{$services->client}}" id="exampleInputuname3" placeholder="Client  Number ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">coffe client <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="coffeDate" value="{{$services->coffeDate}}" id="exampleInputuname3" placeholder="Coffe Date Total Client ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Total comple Project<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="totalProject" value="{{$services->totalProject}}" id="exampleInputuname3" placeholder="Total Project">
                            </div>
                        </div>




                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Service page</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
