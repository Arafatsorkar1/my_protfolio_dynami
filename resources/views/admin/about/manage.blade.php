@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Table</h4>
                    <h6 class="card-subtitle">Data table example</h6>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                            <tr>
                                <th>SI.NO</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Mobile</th>
                                <th>Country</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($abouts as $about)
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$about->title}}</td>
                                    <td>{{$about->description}}</td>
                                    <td>{{$about->name}}</td>
                                    <td>{{$about->age}}</td>
                                    <td>{{$about->mobile}}</td>
                                    <td>{{$about->country}}</td>
                                    <td>{{$about->email}}</td>
                                    <td>{{$about->university}}</td>
                                    <td>
                                        <img src="{{asset($about->image)}}" alt="" height="50" width="60">
                                    </td>
                                    <td>
                                        <a href="{{route('about.edit',['id'=>$about->id])}}" class="btn  btn-outline-primary ">EDIT</a>
                                        <a href="{{route('about.delete',['id'=>$about->id])}}" onclick="return confirm('Are you sure to delete this ');" class="btn  btn-outline-danger ">DELETE</a>
                                    </td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
