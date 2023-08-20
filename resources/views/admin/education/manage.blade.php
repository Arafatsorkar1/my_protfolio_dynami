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

                                <th>Year1 </th>
                                <th>Degree1</th>
                                <th>University1</th>
                                <th>Result1</th>
                                <th>Details1</th>
                                <th>Year2 </th>
                                <th>Degree2</th>
                                <th>University2</th>
                                <th>Result2</th>
                                <th>Details2</th>
                                <th>Year3 </th>
                                <th>Degree3</th>
                                <th>University3</th>
                                <th>Result3</th>
                                <th>Details3</th>
                                <th>Year4 </th>
                                <th>Degree4</th>
                                <th>University4</th>
                                <th>Result4</th>
                                <th>Details4</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($educations as $education)

                                <tr>

                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$education->year1}}</td>
                                    <td>{{$education->degree1}}</td>
                                    <td>{{$education->university1}}</td>
                                    <td>{{$education->result1}}</td>
                                    <td>{{$education->details1}}</td>

                                    <td>{{$education->year2}}</td>
                                    <td>{{$education->degree2}}</td>
                                    <td>{{$education->university2}}</td>
                                    <td>{{$education->result2}}</td>
                                    <td>{{$education->details2}}</td>

                                    <td>{{$education->year3}}</td>
                                    <td>{{$education->degree3}}</td>
                                    <td>{{$education->university3}}</td>
                                    <td>{{$education->result3}}</td>
                                    <td>{{$education->details3}}</td>

                                    <td>{{$education->year4}}</td>
                                    <td>{{$education->degree4}}</td>
                                    <td>{{$education->university4}}</td>
                                    <td>{{$education->result4}}</td>
                                    <td>{{$education->details4}}</td>

                                    <td>
                                        <a href="{{route('education.edit',['id'=>$education->id])}}" class="btn  btn-outline-primary ">EDIT</a>
                                        <a href="{{route('education.delete',['id'=>$education->id])}}" onclick="return confirm('Are you sure to delete this ');" class="btn  btn-outline-danger ">DELETE</a>
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
