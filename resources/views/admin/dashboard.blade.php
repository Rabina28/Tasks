



@extends('home')

@section('css')
    <link rel="stylesheet" href="https//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
    @endsection

@section('title')
    Index
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
                        <table class="table table-hover table-bordered table-stripped" id="table_id">

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
                                        <a href="{{url('home/'.$data->id)}}" class="btn btn-success">EDIT</a>
                                        <a href="{{ url('students-show/'.$data->id) }}" class="btn btn-xs btn-success">View</a>
                                        <form  method="post" action="{{ url('students-delete/'.$data->id) }}" class="delete_form">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Are You Sure? Want to Delete It.');">Delete</button>
                                        </form>
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

@push('scripts')

    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
             } );
    </script>
@endpush

@section('scripts')
@endsection
