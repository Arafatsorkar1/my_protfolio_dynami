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
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($footers as $footer)
                            <tr>
                                <td>{{$loop->iteration }}</td>
                                    <td>{{$footer->addressLink}}</td>
                                    <td>{{$footer->mobileLink}}</td>
                                    <td>{{$footer->emailLink}}</td>
                                    <td>
                                        <a href="{{route('footer.edit',['id'=>$footer->id])}}" class="btn  btn-outline-primary ">EDIT</a>
                                        <a href="{{route('footer.delete',['id'=>$footer->id])}}" onclick="return confirm('Are you sure to delete this ');" class="btn  btn-outline-danger ">DELETE</a>
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
