@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Facility</h3>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-xl-3">
        <div class="flexbox flex-justified text-center mb-30 bg-primary">
            <div class="no-shrink py-30">
                <span class="ti-folder font-size-50"></span>
            </div>
            <div class="py-30 bg-white text-dark">
                <div class="font-size-30">{{$total}}</div>
                <span>Total Menu</span>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-3">
        <div class="flexbox flex-justified text-center mb-30 bg-danger">
            <div class="no-shrink py-30">
                <span class="ti-link font-size-50"></span>
            </div>
            <div class="py-30 bg-white text-dark">
                <div class="font-size-30">{{$active}}/<span class="font-size-18">{{$total}}</span></div>
                <span>Active Menu</span>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <div class="row">
                        <div class="col-6 text-left">
                            <h4 class="box-title">Facilities List</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('add-menu-facilities') }}" class="btn btn-bold btn-pure btn-info">Add New Facility</a>
                            <a href="{{ route('print-facilities') }}" target="_blank" class="btn btn-bold btn-pure btn-success">Print <i class="ti-printer"></i></a>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-striped dataTables">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-left">Name</th>
                                    <th class="text-left text-nowrap">Category</th>
                                    <th class="text-left">Description</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($menus as $menu)   
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td class="text-left text-nowrap">{{$menu->name}}</td>
                                    <td class="text-left text-nowrap">{{ $menu->category->name }}</td>
                                    <td class="text-left">{{$menu->description}}</td>
                                    <td class="text-center text-success text-lowercase"><span class="btn btn-block btn-rounded 
                                        {{ $menu->status == "ACTIVE" ? 'btn-success' : 'btn-danger'}}    
                                            ">{{$menu->status}}</span></td>
                                    <td class="text-center">
                                        <span data-toggle="modal" data-target="#modal-fill">
                                            <a href="{{route('edit-menu-facilities',$menu->id)}}" title="View">
                                                <i class="ti-eye"></i>
                                            </a>
                                        </span>
                                        <a href="{{route('delete-menu-facilities',$menu->id)}}" class="ml-3" title="Delete">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

