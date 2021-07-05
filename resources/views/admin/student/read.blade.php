
@extends('home')


@section('content')
    <div class="container">
        <div class="jumbotron">
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                View student details
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" disabled value="{{ $students->firstname }}" class="form-control" placeholder="FirstName" name="firstname" id="firstname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" disabled value="{{ $students->lastname }}" class="form-control" placeholder="LastName" name="lastname" id="lastname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" disabled value="{{ $students->gender }}" class="form-control" placeholder="gender" name="gender" id="gender">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dateofbirth">Date of Birth</label>
                        <input type="text" disabled value="{{ $students->dateofbirth }}" class="form-control" placeholder="dob" name="dateofbirth" id="dateofbirth" >
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="c_address">Current Address</label>
                            <input type="text" disabled value="{{ $students->c_address }}" class="form-control" placeholder="c_address" name="Current Address" id="c_address">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="p_address">Permanent Address</label>
                            <input type="text" disabled value="{{ $students->p_address }}" class="form-control" placeholder="p_address" name="p_address" id="p_address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="gender" class= "col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                        <div class="form-check form-check-inline" >
                            <input disabled value="male" {{ $students->gender || old('gender') == 'male' ? 'checked' : '' }} class="form-check-input" type="radio" name="gender">
                            <label class="form-check-label" for="male">Male</label>
                            <input disabled value="female" {{ $students->gender || old('gender') == 'female' ? 'checked' : '' }} class="form-check-input" type="radio" name="gender" >
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Contact Information
                    </div>
                </div>
                <br>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Father's Information
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="f_name">Full Name</label>
                                <input type="text" disabled value="{{ $students->f_name }}" class="form-control" placeholder="f_name" name="f_name" id="f_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="f_number">Mobile Number</label>
                                <input type="text" disabled value="{{ $students->f_number }}" class="form-control" placeholder="f_number" name="f_number" id="f_number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="f_email">Email</label>
                                <input type="email" disabled value="{{ $students->f_email }}" class="form-control" placeholder="f_email" name="f_email" id="f_email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="f_occupation">Occupation</label>
                                <input type="text" disabled value="{{ $students->f_occupation }}" class="form-control" placeholder="f_occupation" name="f_occupation" id="f_occupation">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Mother's Information
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=m_name">Full Name</label>
                                <input type="text" disabled value="{{ $students->m_name }}" class="form-control" placeholder="m_name" name="m_name" id="m_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="m_number">Mobile Number</label>
                                <input type="text" disabled value="{{ $students->m_number }}" class="form-control" placeholder="m_number" name="m_number" id="m_number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="m_email">Email</label>
                                <input type="email" disabled value="{{ $students->m_email }}" class="form-control" placeholder="m_email" name="m_email" id="m_email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="m_occupation">Occupation</label>
                                <input type="text" disabled value="{{ $students->m_occupation }}" class="form-control" placeholder="m_occupation" name="m_occupation" id="m_occupation">
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
                                <input type="text" disabled value="{{ $students->l_name }}" class="form-control" placeholder="l_name" name="l_name" id="l_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="l_number">Mobile Number</label>
                                <input type="text" disabled value="{{ $students->l_number }}" class="form-control" placeholder="l_number" name="l_number" id="l_number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="relation">Relation</label>
                                <input type="text" disabled value="{{ $students->relation }}" class="form-control" placeholder="Relation" name="relation" id="relation">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="l_email">Email</label>
                                <input type="email" disabled value="{{ $students->l_email }}" class="form-control" placeholder="l_email" name="l_email" id="l_email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="l_occupation">Occupation</label>
                                <input type="text" disabled value="{{ $students->l_occupation }}" class="form-control" placeholder="l_occupation" name="l_occupation" id="l_occupation">
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
                                <label for="admission for grade">Admission for Grades</label>
                                <input type="text" disabled value="{{ $students->garde }}" class="form-control" placeholder="Admission for grade" name="admission for grade" id="admission for grade">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_school">Last attended school</label>
                                <input type="text" disabled value="{{ $students->last_school }}" class="form-control" placeholder="last_school" name="last_school" id="last_school">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="bus_needed" class= "col-md-4 col-form-label text-md-right">{{ __('School bus needed') }}</label>
                            <div class="form-check form-check-inline" >
                                <input disabled value="yes" {{ $students->bus_needed || old('bus_needed') == 'yes' ? 'checked' : '' }} class="form-check-input" type="radio" name="bus_needed">
                                <label class="form-check-label" for="yes">Yes</label>
                                <input disabled value="no" {{ $students->bus_needed || old('bus_needed') == 'no' ? 'checked' : '' }} class="form-check-input" type="radio" name="bus_needed">
                                <label class="form-check-label" for="no">No</label>
                                <input disabled value="not_sure" {{ $students->bus_needed || old('bus_needed') == 'not_sure' ? 'checked' : '' }} class="form-check-input" type="radio" name="bus_needed">
                                <label class="form-check-label" for="no">Not sure</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pickup_address">Pickup address</label>
                                <input type="text" disabled value="{{ $students->pickup_address }}" class="form-control" placeholder="pickup_address" name="pickup_address" id="pickup_address">
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{url('index')}}" class="btn btn-secondary" data-dismiss="modal">Back</a>
            </div>
            </form>

        </div>
    </div>
    <br>

    @include('crud.footer')
@endsection


