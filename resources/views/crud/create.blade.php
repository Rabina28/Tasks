


@extends('crud.main')

@section('main-content')

    <div class="container">
        <div class="jumbotron">
            <h2>Application Form</h2>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                Create New Student
            </div>
            <div class="panel-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('application.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="firstname">First Name </label>
                                <input type="text" class="form-control" placeholder="firstname" name="firstname" id="firstname">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" placeholder="lastname" name="lastname" id="lastname">
                            </div>
                        </div>
                        <div class="form-group form-group-sm col-md-5">
                            <label for="dob">Date of Birth</label>
                            <input type="text" class="form-control" placeholder="dob" name="dob" id="dob" >
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="address">Current Address</label>
                                <input type="text" class="form-control" placeholder="c_address" name="c_address" id="c_address">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_address">Permanent Address</label>
                                <input type="text" class="form-control" placeholder="p_address" name="p_address" id="p_address">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="gender" class= "col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="radio" name="gender" value="male">
                                <label class="form-check-label" for="male">Male</label>
                                <input class="form-check-input" type="radio" name="gender" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="jumbotron">
                            <h2>Contact Information</h2>
                        </div>
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Father's Information
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f_name">Full Name</label>
                                        <input type="text" class="form-control" placeholder="f_name" name="f_name" id="f_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f_number">Mobile Number</label>
                                        <input type="text" class="form-control" placeholder="f_number" name="f_number" id="f_number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f_email">Email</label>
                                        <input type="email" class="form-control" placeholder="f_email" name="f_email" id="f_email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f_occupation">Occupation</label>
                                        <input type="text" class="form-control" placeholder="f_occupation" name="f_occupation" id="f_occupation">
                                    </div>
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        Mother's Information
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="m_name">Full Name</label>
                                                <input type="text" class="form-control" placeholder="m_name" name="m_name" id="m_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="m_number">Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="m_number" name="m_number" id="m_number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="m_email">Email</label>
                                                <input type="email" class="form-control" placeholder="m_email" name="m_email" id="m_email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="m_occupation">Occupation</label>
                                                <input type="text" class="form-control" placeholder="m_occupation" name="m_occupation" id="m_occupation">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Local Guardian's Information
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="l_name">Full Name</label>
                                    <input type="text" class="form-control" placeholder="l_name" name="l_name" id="l_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="l_number">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="l_number" name="l_number" id="l_number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="relation">Relation</label>
                                    <input type="text" class="form-control" placeholder="Relation" name="relation" id="relation">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="l_email">Email</label>
                                    <input type="email" class="form-control" placeholder="l_email" name="l_email" id="l_email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="l_occupation">Occupation</label>
                                    <input type="text" class="form-control" placeholder="l_occupation" name="l_occupation" id="l_occupation">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Academic Information
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="grade">Admission for Grades</label>
                                    <input type="text" class="form-control" placeholder="grade" name="grade" id="grade">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_school">Last attended school</label>
                                    <input type="text" class="form-control" placeholder="last_school" name="last_school" id="last_school">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="bus_needed" class= "col-md-4 col-form-label text-md-right">{{ __('School bus needed') }}</label>
                                <div class="form-check form-check-inline" >
                                    <input class="form-check-input" type="radio" name="bus_needed" value="yes">
                                    <label class="form-check-label" for="yes">Yes</label>
                                    <input class="form-check-input" type="radio" name="bus_needed" value="no">
                                    <label class="form-check-label" for="no">No</label>
                                    <input class="form-check-input" type="radio" name="bus_needed" value="notsure">
                                    <label class="form-check-label" for="no">Not sure</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pickup_address">Pickup address</label>
                                    <input type="text" class="form-control" placeholder="pickup_address" name="pickup_address" id="pickup_address">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('application.index') }}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>  <br>


    @include('crud.footer')

@endsection
