@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Add New User</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">User Info</h4>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address <span class="text-danger">*</span></label>
                        <input type="mail" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label>Company <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label>User type</label>
                        <select name="" class="form-control select2" id="" data-tags="true" required>
                            <option value="">Administrator</option>
                            <option value="">Manager</option>
                            <option value="" selected >Employee</option>
                            <option value="">Food & Beverage</option>
                            <option value="">Frontdesk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" value="" placeholder="" readonly>
                        <span class="form-text text-muted font-size-12">The username follow the registered email address.</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" value="" placeholder="" readonly>
                        <span class="form-text text-muted font-size-12">The password is generated automatically by the system and will be sent to the user's email.</span>
                    </div>
                    <div class="form-group">
                        <label>User Status</label>
                        <div class="c-inputs-stacked">
                            <input name="status" type="radio" id="status_active" value="1" checked>
                            <label for="status_active" class="mr-30">Active</label>
                            <input name="status" type="radio" id="status_inactive" value="0">
                            <label for="status_inactive" class="mr-30">Inactive</label>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-3">
                            <button type="button" class="btn btn-bold btn-pure btn-secondary btn-block" onclick="window.history.go(-1)">Cancel</button>
                        </div>
                        <div class="col-3">
                            <a href="#" class="btn btn-bold btn-pure btn-info float-right btn-block">Create</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

