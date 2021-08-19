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
                    <span class="ti-panel font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">6</div>
                    <span>Total Facility</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="flexbox flex-justified text-center mb-30 bg-danger">
                <div class="no-shrink py-30">
                    <span class="ti-link font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">6/<span class="font-size-18">7</span></div>
                    <span>Active Facility</span>
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
                            <a href="{{ url('/facilities/add-new') }}" class="btn btn-bold btn-pure btn-info">Add New Facility</a>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-striped dataTables">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-left">Code</th>
                                    <th class="text-left">Name</th>
                                    <th class="text-left text-nowrap">Category</th>
                                    <th class="text-left">Description</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-left text-nowrap">INF190281D</td>
                                    <td class="text-left text-nowrap">Infocus</td>
                                    <td class="text-left">Office Equipment</td>
                                    <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</td>
                                    <td class="text-center text-success"><span class="btn btn-sm btn-success btn-block btn-rounded">Active</span></td>
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
                                    <td class="text-left text-nowrap">SCR662891A</td>
                                    <td class="text-left text-nowrap">Screen</td>
                                    <td class="text-left">Office Equipment</td>
                                    <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</td>
                                    <td class="text-center text-success"><span class="btn btn-sm btn-success btn-block btn-rounded">Active</span></td>
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
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-left text-nowrap">GLS920182B</td>
                                    <td class="text-left text-nowrap">Glass Board</td>
                                    <td class="text-left">Stationery</td>
                                    <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</td>
                                    <td class="text-center text-success"><span class="btn btn-sm btn-success btn-block btn-rounded">Active</span></td>
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
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-left text-nowrap">SOS100267C</td>
                                    <td class="text-left text-nowrap">Sound System</td>
                                    <td class="text-left">Office Equipment</td>
                                    <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</td>
                                    <td class="text-center text-success"><span class="btn btn-sm btn-success btn-block btn-rounded">Active</span></td>
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
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="text-left text-nowrap">SOS100267D</td>
                                    <td class="text-left text-nowrap">Sound System Asd</td>
                                    <td class="text-left">Office Equipment</td>
                                    <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</td>
                                    <td class="text-center text-success"><span class="btn btn-sm btn-danger btn-block btn-rounded">Inactive</span></td>
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
                                <tr>
                                    <td class="text-center">6</td>
                                    <td class="text-left text-nowrap">PNM777829A</td>
                                    <td class="text-left text-nowrap">Pencils and memos</td>
                                    <td class="text-left">Stationery</td>
                                    <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</td>
                                    <td class="text-center text-success"><span class="btn btn-sm btn-success btn-block btn-rounded">Active</span></td>
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
                                <tr>
                                    <td class="text-center">7</td>
                                    <td class="text-left text-nowrap">INT000928A</td>
                                    <td class="text-left text-nowrap">Internet connection</td>
                                    <td class="text-left">Office Equipment</td>
                                    <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</td>
                                    <td class="text-center text-success"><span class="btn btn-sm btn-success btn-block btn-rounded">Active</span></td>
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
                        <div class="col-sm-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">View Facility</h4>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Facility Code</label>
                                        <input type="text" class="form-control" value="INF190281D" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Facility Name</label>
                                        <input type="text" class="form-control" value="Infocus" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <input type="text" class="form-control" value="Office Equipment" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="4" cols="4" class="form-control" placeholder="" readonly>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci.</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Facility Status</label>
                                        <input type="text" class="form-control" value="Active" placeholder="" readonly>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-3">
                                            <button type="button" class="btn btn-bold btn-pure btn-secondary btn-block" data-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-3">
                                            <a href="{{ url('/facilities/edit') }}" class="btn btn-bold btn-pure btn-info float-right btn-block">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

