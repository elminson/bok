@extends('bok.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )
<!-- Clock css -->
<link href="{{ url('assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet"/>
<!-- Plugins css -->
<link href="{{ url('assets/plugins/timepicker/tempusdominus-bootstrap-4.css') }}" rel="stylesheet"/>
<link href="{{ url('assets/plugins/timepicker/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
<link href="{{ url('assets/plugins/clockpicker/jquery-clockpicker.min.css') }}" rel="stylesheet"/>
<link href="{{ url('assets/plugins/colorpicker/asColorPicker.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>

<link href="{{ url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet"/>

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Add new Kid</h4>
                            {{ html()->form('POST', route('frontend.auth.transfer.add'))->class('form-horizontal')->open() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">From To</label>
                                <select id="myaccount" name="myaccount" class="form-control">
                                    @foreach($my_accounts as $account)
                                        <option value="{{ $account->number }}">{{ $account->account_type  }} {{ $account->number}} (Current Balance @money($account->balance))</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Account To</label>
                                <select id="account" name="account" class="form-control">
                                    @foreach($accounts as $account)
                                        <option value="{{ $account->number }}">{{ $account->name  }} ({{ $account->number}}) (Year of Birthday {{ date("Y", strtotime($account->dob)) }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Amount</label>
                                <input type="text" class="form-control" name="amount" id="amount" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <input type="text" class="form-control" name="description" id="description" value="">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger">Cancel</button>
                            {{ html()->closeModelForm() }}
                        </div><!--end card-body-->
                    </div>

                </div>

            </div>
        </div> <!-- end col -->
    </div>
    <!-- jQuery  -->
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ url('assets/js/waves.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.slimscroll.min.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ url('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ url('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ url('assets/plugins/timepicker/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ url('assets/plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ url('assets/plugins/clockpicker/jquery-clockpicker.min.js') }}"></script>
    <script src="{{ url('assets/plugins/colorpicker/jquery-asColor.js') }}"></script>
    <script src="{{ url('assets/plugins/colorpicker/jquery-asGradient.js') }}"></script>
    <script src="{{ url('assets/plugins/colorpicker/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ url('assets/plugins/select2/select2.min.js') }}"></script>

    <script src="{{ url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>

    <script src="{{ url('assets/pages/jquery.clock-img.init.js') }}"></script>
    <script src="{{ url('assets/pages/jquery.forms-advanced.js') }}"></script>
@endsection