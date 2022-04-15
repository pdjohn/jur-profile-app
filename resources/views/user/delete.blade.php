@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{__('Delete Employee Information')}}</h1>
                    </div>
                </div><!-- /.container-fluid -->
                </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <form role="form" id="dltForm" action="{{ route('employee.destroy', $data->slug) }}" class="form-horizontal clearfix"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label id="full_name" class="col-sm-3 col-form-label">{{__('Name (English)')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucwords($data->full_name) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="full_name_bn" class="col-sm-3 col-form-label">{{__('নাম (বাংলায়)')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ "{$data->first_name_bn} {$data->last_name_bn}" }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="father_name" class="col-sm-3 col-form-label">{{__('Father Name (English)')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucwords($data->father_name) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="father_name_bn" class="col-sm-3 col-form-label">{{__('বাবার নাম (বাংলায়)')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ $data->father_name_bn }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="mother_name" class="col-sm-3 col-form-label">{{__('Mother Name (English)')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucwords($data->mother_name) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="mother_name_bn" class="col-sm-3 col-form-label">{{__('মায়ের নাম (বাংলায়)')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ $data->mother_name_bn }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="gender" class="col-sm-3 col-form-label">{{__('Gender')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucfirst($data->gender) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="phone_number" class="col-sm-3 col-form-label">{{__('Phone Number')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ $data->phone_number }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="emergency_contact" class="col-sm-3 col-form-label">{{__('Emergency Contact')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ $data->emergency_contact }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="dob" class="col-sm-3 col-form-label">{{__('Date Of Birth')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ normalDateFormat($data->dob) }}
                                        </div>
                                    </div>
                                    @if( $data->blood_group_id != null)
                                        <div class="form-group row">
                                            <label id="blood_group_id" class="col-sm-3 col-form-label">{{__('Blood Group')}} :</label>
                                            <div class="col-sm-9 pt-2">
                                                {{ ucfirst($data->bloodGroups->name) }}
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group row">
                                        <label id="marital_status" class="col-sm-3 col-form-label">{{__('Marital Status')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucfirst($data->marital_status) }}
                                        </div>
                                    </div>

                                    @if( $data->marital_status == 'married' )
                                        <div class="form-group row">
                                            <label id="spouse_name" class="col-sm-3 col-form-label">{{__('Spouse Name (English)')}} :</label>
                                            <div class="col-sm-9 pt-2">
                                                {{ ucwords($data->spouse_name) }}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label id="spouse_name_bn" class="col-sm-3 col-form-label">{{__('স্বামী বা স্ত্রীর নাম (বাংলায়)')}} :</label>
                                            <div class="col-sm-9 pt-2">
                                                {{ $data->spouse_name_bn }}
                                            </div>
                                        </div>
                                    @endif

                                    <div class="form-group row">
                                        <label id="present_address" class="col-sm-3 col-form-label">{{__('Present Address')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucfirst($data->present_address) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="permanent_address" class="col-sm-3 col-form-label">{{__('Permanent Address')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucfirst($data->permanent_address) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="nid" class="col-sm-3 col-form-label">{{__('National Id')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ $data->nid }}
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label id="designation" class="col-sm-3 col-form-label">{{__('Designation')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucfirst($data->designation) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="job_type" class="col-sm-3 col-form-label">{{__('Job Type')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ ucfirst($data->job_type) }}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label id="join_date" class="col-sm-3 col-form-label">{{__('Join Date')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ normalDateFormat($data->join_date) }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label id="salary" class="col-sm-3 col-form-label">{{__('Salary')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ $data->salary }}
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label id="email" class="col-sm-3 col-form-label">{{__('Email')}} :</label>
                                        <div class="col-sm-9 pt-2">
                                            {{ $data->email }}
                                        </div>
                                    </div>

                                    {{--                                    @if( $data->ward_id != NULL)--}}
                                    @if( in_array( 'commissioner', $data->getRoleNames()->toArray() ))
                                        <div class="form-group row">
                                            <label id="ward_id" class="col-sm-3 col-form-label">{{__('Ward')}} :</label>
                                            <div class="col-sm-9 pt-2">
                                                {{ ucfirst($data->wards->name) }}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-center">
                                    @include('layouts.partials.backBtn')
                                    <button type="submit" name="dltBtn" id="dltBtn" value="Save"
                                            class="btn btn-danger ml-2"><i
                                            class="fas fa-trash"></i>&nbsp;{{__('Delete')}}
                                    </button>
                                    {{--                                    <button type="submit" name="createBtn" id="createBtn" value="Save" class="btn btn-info">Save</button>--}}
                                    {{--                                    <button type="submit" class="btn btn-default float-right">Cancel</button>--}}
                                </div>
                                <!-- /.card-footer -->
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

    </script>
@endpush



