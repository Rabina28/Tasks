@extends('home')


@section('title')
    Dashboard
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-chart">
                        <div class="card-header">
                            <h5 class="card-category">Total Application</h5>
                            <h3 class="card-title">Total Application={{{ App\Models\Student::count() }}}</h3>
                        </div>

                    <div class="card-footer">
                        <div class="stats">
                            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">Email Statistics</h5>
                        <h4 class="card-title">This month={{{ App\Models\Student::whereMonth('created_at', today()->month)->count() }}}</h4>
                    </div>

                    <div class="card-footer">
                        <div class="stats">
                            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">Total Application Received Today</h5>
                        <h4 class="card-title">Today={{{ App\Models\Student::whereDate('created_at', today())->count() }}}</h4>
                    </div>

                    <div class="card-footer">
                        <div class="stats">
                            <i class="now-ui-icons ui-2_time-alarm"></i> Today
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


@section('scripts')
@endsection

