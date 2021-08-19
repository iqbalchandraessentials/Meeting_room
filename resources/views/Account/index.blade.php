@extends('master')

@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-1.0.3/skins/all.css') }}">
@endsection

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">My Profile</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Profile Info</h4>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control isInput" value="Jason Vonda Torill" disabled required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="mail" class="form-control isInput" value="jason.vonda@torill.com" disabled required>
                    </div>
                    <div class="form-group">
                        <label>Company</label>
                        <input type="text" class="form-control isInput" value="My Company Name" disabled required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" class="form-control isInput" value="081381358273" disabled required>
                    </div>
                    <div class="form-group">
                        <label>User Type</label>
                        <input type="text" class="form-control" value="Administrator" disabled required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" value="jason.vonda@torill.com" placeholder="" readonly>
                        <span class="form-text text-muted font-size-12">The username follow the registered email address.</span>
                    </div>
                    <div class="form-group d-none" id="isChangePass">
                        <label>Change Password</label>
                        <input type="password" class="form-control" value="" placeholder="New Password">
                    </div>
                    <div class="form-group ichack-input mb-0 pt-4">
                        <label>
                            <input type="checkbox" id="isEditCheckbox" class="square-green"><span class="ml-10 font-weight-400 text-initial font-size-1rem">Checklist for edit this data</span>
                        </label>
                    </div>
                </div>
                <div class="box-footer d-none" id="isEdit">
                    <div class="row">
                        <div class="col-3">
                            <a href="javascript:void(0);" class="btn btn-bold btn-pure btn-info float-right btn-block">Save</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('vendor/icheck-1.0.3/icheck.min.js') }}"></script>
    <script>
        $('.ichack-input input[type="checkbox"].square-green').iCheck({
            checkboxClass: 'icheckbox_square-green',
        });

        $('#isEditCheckbox').on('ifChanged', function(event){
            //Check if checkbox is checked or not
            var checkboxChecked = $(this).is(':checked');

            if(checkboxChecked) {
                $('.isInput').prop('disabled', false)
                $('#isChangePass').removeClass('d-none')
                $('#isEdit').removeClass('d-none')
            }else{
                $('.isInput').prop('disabled', true)
                $('#isChangePass').addClass('d-none')
                $('#isEdit').addClass('d-none')
            }
        });

    </script>
@endsection

