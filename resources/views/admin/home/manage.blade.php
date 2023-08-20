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
                                <th>Link 1</th>
                                <th>Link 2</th>
                                <th>Link 3</th>
                                <th>Title Name</th>
                                <th>Description </th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($homes as $home)
                            <tr>

                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$home->link1}}</td>
                                    <td>{{$home->link2}}</td>
                                    <td>{{$home->link3}}</td>
                                    <td>{{$home->title}}</td>
                                    <td>{{$home->description}}</td>
                                    <td>
                                        <img src="{{asset($home->image)}}" alt="" height="50" width="60">
                                    </td>
                                    <td>
                                        <a href="{{route('home.edit',['id'=>$home->id])}}" class="btn  btn-outline-primary ">EDIT</a>
                                        <a href="{{route('home.delete',['id'=>$home->id])}}" onclick="return confirm('Are you sure to delete this ');" class="btn  btn-outline-danger ">DELETE</a>
                                    </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
