@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{__('Create User')}}</h1>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <form role="form" id="createForm" action="{{route('user.store')}}" class="form-horizontal clearfix" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="first_name"
                                               class="col-sm-3 col-form-label">{{__('First Name')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="first_name" name="first_name"
                                                   value="{{ old('first_name') }}" required>
                                            @if ($errors->has('first_name'))
                                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="last_name"
                                               class="col-sm-3 col-form-label">{{__('Last Name')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                   value="{{ old('last_name') }}" required>
                                            @if ($errors->has('last_name'))
                                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">{{__('Email')}}</label>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" id="email" name="email"
                                                   value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password"
                                               class="col-sm-3 col-form-label">{{__('Password')}}</label>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control" id="password" name="password"
                                                   value="{{ old('password') }}" required>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="company_name"
                                               class="col-sm-3 col-form-label">{{__('Company Name')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="company_name" name="company_name"
                                                   value="{{ old('company_name') }}" required>
                                            @if ($errors->has('company_name'))
                                                <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="role"
                                               class="col-sm-3 col-form-label">{{__('Role')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="role" name="role"
                                                   value="{{ old('role') }}" required>
                                            @if ($errors->has('role'))
                                                <span class="text-danger">{{ $errors->first('role') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="job_start_date"
                                               class="col-sm-3 col-form-label">{{__('Start Date')}}</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control take_past_date" id="job_start_date" name="job_start_date"
                                                   value="{{ old('job_start_date') }}" required>
                                            @if ($errors->has('job_start_date'))
                                                <span class="text-danger">{{ $errors->first('job_start_date') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="job_end_date"
                                               class="col-sm-3 col-form-label">{{__('End Date')}}</label>
                                        <div class="col-sm-6 col-md-3">
                                            <input type="date" class="form-control take_past_date" id="job_end_date" name="job_end_date"
                                                   value="{{ old('job_end_date') }}" >
                                            @if ($errors->has('job_end_date'))
                                                <span class="text-danger">{{ $errors->first('job_end_date') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="current_job" value="1">
                                                <label class="form-check-label">Current Job</label>
                                            </div>
                                            @if ($errors->has('current_job'))
                                                <span class="text-danger">{{ $errors->first('current_job') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="company_description" class="col-sm-3 col-form-label">{{__('Company Description')}}</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" class="form-control" id="company_description" name="company_description"
                                                      required>{{ old('company_description') }}</textarea>
                                            @if ($errors->has('company_description'))
                                                <span class="text-danger">{{ $errors->first('company_description') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="organization_name"
                                               class="col-sm-3 col-form-label">{{__('Organization Name')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="organization_name" name="organization_name"
                                                   value="{{ old('organization_name') }}" required>
                                            @if ($errors->has('organization_name'))
                                                <span class="text-danger">{{ $errors->first('organization_name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="associated_as"
                                               class="col-sm-3 col-form-label">{{__('Associated as')}}</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="associated_as" name="associated_as"
                                                   value="{{ old('associated_as') }}" required>
                                            @if ($errors->has('associated_as'))
                                                <span class="text-danger">{{ $errors->first('associated_as') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="organization_start_date"
                                               class="col-sm-3 col-form-label">{{__('Start Date')}}</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control take_past_date" id="organization_start_date" name="organization_start_date"
                                                   value="{{ old('organization_start_date') }}" required>
                                            @if ($errors->has('organization_start_date'))
                                                <span class="text-danger">{{ $errors->first('organization_start_date') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="organization_end_date"
                                               class="col-sm-3 col-form-label">{{__('End Date')}}</label>
                                        <div class="col-sm-6 col-md-3">
                                            <input type="date" class="form-control take_past_date" id="organization_end_date" name="organization_end_date"
                                                   value="{{ old('organization_end_date') }}" >
                                            @if ($errors->has('organization_end_date'))
                                                <span class="text-danger">{{ $errors->first('organization_end_date') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="current_organization" value="1">
                                                <label class="form-check-label">Current Organization</label>
                                            </div>
                                            @if ($errors->has('current_organization'))
                                                <span class="text-danger">{{ $errors->first('current_organization') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="organization_description" class="col-sm-3 col-form-label">{{__('Organization Description')}}</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" class="form-control" id="organization_description" name="organization_description"
                                                      required>{{ old('organization_description') }}</textarea>
                                            @if ($errors->has('organization_description'))
                                                <span class="text-danger">{{ $errors->first('organization_description') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="card-footer text-center">
                                        @include('layouts.partials.backBtn')
                                        <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i>&nbsp;{{__('Save')}}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@push('customScripts')
    <!-- Page specific script -->
    <script>
        $("#user_ward_id").hide();
        $("#spouse_names").hide();

        //For National Id
        $("input[name*='nid']").keyup(function () {
            let value_input = $("input[name*='nid']").val();
            let regexp = /[^0-9]/g;
            if (value_input.match(regexp)) {
                $("input[name*='nid']").val(value_input.replace(regexp, ''))
            }
        });

        //For Phone Number
        $("input[name*='phone_number']").keyup(function () {
            let value_input = $("input[name*='phone_number']").val();
            let regexp = /[^0-9+]/g;
            if (value_input.match(regexp)) {
                $("input[name*='phone_number']").val(value_input.replace(regexp, ''))
            }
        });

        //For Emergency Contact
        $("input[name*='emergency_contact']").keyup(function () {
            let value_input = $("input[name*='emergency_contact']").val();
            let regexp = /[^0-9+]/g;
            if (value_input.match(regexp)) {
                $("input[name*='emergency_contact']").val(value_input.replace(regexp, ''))
            }
        });

        //For First Name
        $("input[name*='first_name']").keyup(function () {
            let value_input = $("input[name*='first_name']").val();
            let regexp = /[^A-Za-z ]/g;
            if (value_input.match(regexp)) {
                $("input[name*='first_name']").val(value_input.replace(regexp, ''))
            }
        });

        //For Last Name
        $("input[name*='last_name']").keyup(function () {
            let value_input = $("input[name*='last_name']").val();
            let regexp = /[^A-Za-z ]/g;
            if (value_input.match(regexp)) {
                $("input[name*='last_name']").val(value_input.replace(regexp, ''))
            }
        });

        //For Father Name
        $("input[name*='father_name']").keyup(function () {
            let value_input = $("input[name*='father_name']").val();
            let regexp = /[^A-Za-z ]/g;
            if (value_input.match(regexp)) {
                $("input[name*='father_name']").val(value_input.replace(regexp, ''))
            }
        });

        //For Mother Name
        $("input[name*='mother_name']").keyup(function () {
            let value_input = $("input[name*='mother_name']").val();
            let regexp = /[^A-Za-z ]/g;
            if (value_input.match(regexp)) {
                $("input[name*='mother_name']").val(value_input.replace(regexp, ''))
            }
        });

        //For Spouse Name
        $("input[name*='spouse_name']").keyup(function () {
            let value_input = $("input[name*='spouse_name']").val();
            let regexp = /[^A-Za-z ]/g;
            if (value_input.match(regexp)) {
                $("input[name*='spouse_name']").val(value_input.replace(regexp, ''))
            }
        });

        //For Designation
        $("input[name*='designation']").keyup(function () {
            let value_input = $("input[name*='designation']").val();
            let regexp = /[^A-Za-z ]/g;
            if (value_input.match(regexp)) {
                $("input[name*='designation']").val(value_input.replace(regexp, ''))
            }
        });
    </script>
@endpush




