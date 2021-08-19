@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">User</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="flexbox flex-justified text-center mb-30 bg-primary">
                <div class="no-shrink py-30">
                    <span class="ti-user font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">1</div>
                    <span>Total User</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="flexbox flex-justified text-center mb-30 bg-danger">
                <div class="no-shrink py-30">
                    <span class="ti-link font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">1/<span class="font-size-18">1</span></div>
                    <span>Active User</span>
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
                            <h4 class="box-title">User List</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ url('/user/add') }}" class="btn btn-bold btn-pure btn-info">Add New User</a>
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
                                    <th class="text-left text-nowrap">Email Address</th>
                                    <th class="text-left">Company</th>
                                    <th class="text-left text-nowrap">Phone Number</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-left text-nowrap">Jason Vonda Torill</td>
                                    <td class="text-left">jason.vonda@torill.com</td>
                                    <td class="text-left">My Company Name</td>
                                    <td class="text-left">081381358273</td>
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
                                    <h4 class="box-title">View User</h4>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" value="Jason Vonda Torill" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" class="form-control" value="jason.vonda@torill.com" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" class="form-control" value="My Company Name" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="number" class="form-control" value="081381358273" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>User Type</label>
                                        <input type="text" class="form-control" value="Employee" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" value="jason.vonda@torill.com" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>User Status</label>
                                        <input type="text" class="form-control" value="Active" placeholder="" readonly>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-3">
                                            <button type="button" class="btn btn-bold btn-pure btn-secondary btn-block" data-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-3">
                                            <a href="{{ url('/user/edit') }}" class="btn btn-bold btn-pure btn-info float-right btn-block">Edit</a>
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


