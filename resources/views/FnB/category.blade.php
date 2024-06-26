@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Menu Categories</h3>
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
                            <a href="{{ route('addCategory') }}" class="btn btn-bold btn-pure btn-info">Add New Category</a>
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
                                @foreach ($categories as $category )
                                <tr>
                                    <td class="text-center">{{$no}}</td>
                                    <td class="text-left text-nowrap">{{$category->name}}</td>
                                    <td class="text-left">{{$category->description}}</td>
                                    <td class="text-center text-success text-lowercase"><span class="btn btn-block btn-rounded 
                                    {{ $category->status == "ACTIVE" ? 'btn-success' : 'btn-danger'}}    
                                        ">{{$category->status}}</span></td>
                                    <td class="text-center d-lg-block">
                                            <a href="{{route('editCategory',$category->id)}}" title="View">
                                                <i class="ti-eye"></i>
                                            </a>
                                        <a href="{{route('deleteCategory',$category->id)}}" class="ml-3" title="Delete">
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

    {{-- modal here --}}
    {{-- <div class="modal modal-fill fade" data-backdrop="false" id="modal-fill" tabindex="-1" style="z-index: 9999">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" style="padding-right: 28px" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">View Category</h4>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" class="form-control" value="Food" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="4" cols="4" class="form-control" placeholder="" readonly>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" class="form-control" value="Inactive" placeholder="" readonly>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-3">
                                            <button type="button" class="btn btn-bold btn-pure btn-secondary btn-block" data-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-3">
                                            <a href="{{ url('/foodandbaverages/categories/edit') }}" class="btn btn-bold btn-pure btn-info float-right btn-block">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div> --}}
@endsection


