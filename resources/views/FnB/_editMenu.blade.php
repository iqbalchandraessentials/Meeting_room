@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Edit Menu</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Menu Info</h4>
                </div>
                <form action="{{route('update-menu',$menu->id)}}" method="post">
                    @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="{{$menu->name}}" name="name">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="id_category" class="form-control">
                            <option value="{{$menu->id}}">{{$menu->category->name}}</option>
                            @foreach ($categories as $item)   
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="4" class="form-control" name="description">{{$menu->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Menu Status</label>
                        <div class="c-inputs-stacked">
                            <input name="status" type="radio" id="status_active" value="ACTIVE"
                            {{$menu->status == 'ACTIVE' ? 'checked' : ''}}
                            >
                            <label for="status_active" class="mr-30">Active</label>
                            <input name="status" type="radio" id="status_inactive" value="INACTIVE"
                            {{$menu->status == 'INACTIVE' ? 'checked' : ''}}
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
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection

