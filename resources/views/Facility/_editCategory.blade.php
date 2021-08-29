@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Edit Category</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Category Info</h4>
                </div>
                <form action="{{ route('update-category-facilities',$category->id)}}" method="post">
                    @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="4" class="form-control" name="description">{{$category->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Category Status</label>
                        <div class="c-inputs-stacked">
                            <input name="status" type="radio" id="status_active" value="ACTIVE"
                            {{$category->status == 'ACTIVE' ? 'checked' : ''}}
                            >
                            <label for="status_active" class="mr-30">Active</label>
                            <input name="status" type="radio" id="status_inactive" value="INACTIVE"
                            {{$category->status == 'INACTIVE' ? 'checked' : ''}}
                            >
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
                            <button type="submit" class="btn btn-bold btn-pure btn-info float-right btn-block">Edit</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection

