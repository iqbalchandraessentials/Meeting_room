@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Facility Categories</h3>
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
                <span>Total Category</span>
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
                <span>Active Category</span>
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
                            <h4 class="box-title">Category List</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('add-category-facilities') }}" class="btn btn-bold btn-pure btn-info">Add New Category</a>
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
                                    <th class="text-left">Description</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                                @foreach ($category as $item)
                                <tr>
                                    <td class="text-center">{{$no}}</td>
                                    <td class="text-left text-nowrap">{{$item->name}}</td>
                                    <td class="text-left">{{$item->description}}</td>
                                    <td class="text-center text-success text-lowercase"><span class="btn btn-block btn-rounded 
                                        {{ $item->status == "ACTIVE" ? 'btn-success' : 'btn-danger'}}    
                                            ">{{$item->status}}</span></td>

                                    <td class="text-center">
                                            <a href="{{route('edit-category-facilities',$item->id)}}" >
                                                <i class="ti-eye"></i>
                                            </a>
                                        <a href="{{route('delete-category-facilities',$item->id)}}" class="ml-3" >
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @php
                                $no++;
                            @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

