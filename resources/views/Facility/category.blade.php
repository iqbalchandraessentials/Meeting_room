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
                    <div class="font-size-30">2</div>
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
                    <div class="font-size-30">2/<span class="font-size-18">2</span></div>
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
                            <a href="{{ url('/facilities/categories/add-new') }}" class="btn btn-bold btn-pure btn-info">Add New Category</a>
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
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-left text-nowrap">Office Equipment</td>
                                    <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</td>
                                    <td class="text-center text-success"><span class="btn btn-success btn-block btn-rounded">Active</span></td>
                                    <td class="text-center">
                                        <span data-toggle="modal" data-target="#modal-fill">
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="View">
                                                <i class="ti-eye"></i>
                                            </a>
                                        </span>
                                        <a href="javascript:void(0);" class="ml-3" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-left text-nowrap">Stationery</td>
                                    <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</td>
                                    <td class="text-center text-success"><span class="btn btn-success btn-block btn-rounded">Active</span></td>
                                    <td class="text-center">
                                        <span>
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="View">
                                                <i class="ti-eye"></i>
                                            </a>
                                        </span>
                                        <a href="javascript:void(0);" class="ml-3" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal here --}}
    <div class="modal modal-fill fade" data-backdrop="false" id="modal-fill" tabindex="-1" style="z-index: 9999">
        <div class="modal-dialog modal-lg"">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title">Large Meeting Room	</h5> --}}
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
                                        <input type="text" class="form-control" value="Office Equipment	" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="4" cols="4" class="form-control" placeholder="" readonly>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" class="form-control" value="Active" placeholder="" readonly>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-3">
                                            <button type="button" class="btn btn-bold btn-pure btn-secondary btn-block" data-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-3">
                                            <a href="{{ url('/facilities/categories/edit') }}" class="btn btn-bold btn-pure btn-info float-right btn-block">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">

                </div> --}}
            </div>
        </div>
    </div>
@endsection

