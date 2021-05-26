
@extends('home')

@section('title')
    Dashboard
@endsection

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Applicant Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table_id" class="table table-hover table-bordered table-stripped">

                            <thead class=" text-primary">
                            <tr>
                                <th>Id</th>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>gender</th>
                                <th>dob</th>
                                <th>c_address</th>
                                <th>f_name</th>
                                <th>f_number </th>
                                <th>grade</th>
                                <th style="width:200px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($students as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->firstname}}</td>
                                    <td>{{$data->lastname}}</td>
                                    <td>{{$data->gender}}</td>
                                    <td>{{$data->dob}}</td>
                                    <td>{{$data->c_address}}</td>
                                    <td>{{$data->f_name}}</td>
                                    <td>{{$data->f_number}}</td>
                                    <td>{{$data->grade}}</td>
                                    <td>
                                        <a href="{{url('dashboard/'.$data->id)}}" class="btn btn-success">EDIT</a>
                                        <a href="{{ url('students-show/'.$data->id) }}" class="btn btn-xs btn-success">View</a>
                                        <form  method="post" action="{{ url('students-delete/'.$data->id) }}" class="delete_form">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                           <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
             } );
    </script>
@endsection

@section('scripts')
@endsection
