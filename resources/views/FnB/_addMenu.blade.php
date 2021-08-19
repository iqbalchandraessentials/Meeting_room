@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Add New Menu</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Menu Info</h4>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" value="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="4" class="form-control" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Menu Status</label>
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

