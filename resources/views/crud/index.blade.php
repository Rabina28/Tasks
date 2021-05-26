
@extends('crud.main')

@section('main-content')


    <div class="container">
        <div class="jumbotron">
            <h1>Student List</h1>

        </div>
        @if(Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                <a href="{{ route('application.create') }}" data-toggle="modal" data-target="#addModal" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i> Add New</a>
            </div>
            <div  class = "panel-body"  >
                <table class="table table-hover table-bordered table-stripped">
                    <thead>
                    <tr>
                        <th>S.N</th>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>gender</th>
                        <th>dob</th>
                        <th>c_address</th>
                        <th>f_name</th>
                        <th>f_number </th>
                        <th>grade</th>
                        <th style="width:200px;">Action</th>
                        <th style="width:200px;">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $student->firstname}}</td>
                            <td>{{ $student->lastname }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->dob }}</td>
                            <td>{{ $student->c_address }}</td>
                            <td>{{ $student->f_name }}</td>
                            <td>{{ $student->f_number }}</td>

                            <td>{{ $student->grade }}</td>
                            <td>
                                <form  method="post" action="{{ route('application.destroy',$student->id) }}" class="delete_form">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{ route('application.edit',$student->id) }}" class="btn btn-xs btn-primary">Edit</a>

                                    <a href="{{ route('application.show',$student->id) }}" class="btn btn-xs btn-success">View</a>

                                    <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Are You Sure? Want to Delete It.');">Delete</button>
                                </form>
                                <td>
                                    @if($student->status == "")
                                        <span class="label label-primary"></span>
                                    @elseif($student->status == "Approved")
                                        <span class="label label-success">Approved</span>
                                    @elseif($student->status == "Rejected")
                                        <span class="label label-danger">Rejected</span>
                                    @else
                                        <span class="label label-info">Postponed</span>
                                    @endif
                                        <button type="button" class="btn btn-primary" onclick="return confirm('Are You Sure? Want to pend It.');">Pending</button>
                                        <button type="button" class="btn btn-warning"  onclick="return confirm('Are You Sure? Want to approve It.');">Approved</button>
                                        <button type="button" class="btn btn-success" onclick="return confirm('Are You Sure? Want to reject It.');">Rejected</button>
                                        <button type="button" class="btn btn-danger" onclick="return confirm('Are You Sure? Want to postpond It.');">Postponded</button>
                                </td>
                            </td>

                        </tr>




                    @endforeach
                    </tbody>
                </table>
                <p class="pull-right">
                    {{ $students->links() }}
                </p>
            </div>
        </div>
    </div> <br>


    @include('crud.footer')
@endsection

