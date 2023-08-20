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

                                <th>Title 1</th>
                                <th>Details 1</th>

                                <th>Title 2</th>
                                <th>Details 2</th>

                                <th>Title 3</th>
                                <th>Details 3</th>

                                <th>Title 4</th>
                                <th>Details 4</th>

                                <th>Title 5</th>
                                <th>Details 5</th>

                                <th>Title 6</th>
                                <th>Detail 6</th>
                                <th>Award</th>
                                <th>Client</th>
                                <th>Coffe date</th>
                                <th>Total Project</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                            <tr>
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$service->title1}}</td>
                                    <td>{{$service->details1}}</td>
                                    <td>{{$service->title2}}</td>
                                    <td>{{$service->details2}}</td>
                                    <td>{{$service->title3}}</td>
                                    <td>{{$service->details3}}</td>
                                    <td>{{$service->title4}}</td>
                                    <td>{{$service->details4}}</td>
                                    <td>{{$service->title5}}</td>
                                    <td>{{$service->details5}}</td>
                                    <td>{{$service->title6}}</td>
                                    <td>{{$service->details6}}</td>
                                    <td>{{$service->award}}</td>
                                    <td>{{$service->client}}</td>
                                    <td>{{$service->coffeDate}}</td>
                                    <td>{{$service->totalProject}}</td>

                                    <td>
                                        <a href="{{route('service.edit',['id'=>$service->id])}}" class="btn  btn-outline-primary ">EDIT</a>
                                        <a href="{{route('service.delete',['id'=>$service->id])}}" onclick="return confirm('Are you sure to delete this ');" class="btn  btn-outline-danger ">DELETE</a>
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
