@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Booking List</h3>
    </div>
@endsection

@section('content')
    {{-- <div class="row">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="flexbox flex-justified text-center mb-30 bg-primary">
                <div class="no-shrink py-30">
                    <span class="ti-folder font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">4</div>
                    <span>Active</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="flexbox flex-justified text-center mb-30 bg-warning">
                <div class="no-shrink py-30">
                    <span class="ti-link font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">1</div>
                    <span>Waiting</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="flexbox flex-justified text-center mb-30 bg-success">
                <div class="no-shrink py-30">
                    <span class="ti-link font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">2</div>
                    <span>Done</span>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Booking List</h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-striped dataTables">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-left">Date</th>
                                    <th class="text-left">Time</th>
                                    <th class="text-left">Room</th>
                                    <th class="text-left">PIC Name</th>
                                    <th class="text-left">PIC Email</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-left text-nowrap">24 Jun 2021</td>
                                    <td class="text-left text-nowrap">09:00 - 10:30</td>
                                    <td class="text-left text-nowrap">Large Meeting Room</td>
                                    <td class="text-left text-nowrap">Dorota Lysistrata Dubravka</td>
                                    <td class="text-left text-nowrap">dorota.lysistrata@dubravka.com</td>
                                    <td class="text-center text-success"><span class="btn btn-success btn-block btn-rounded">Meeting Started</span></td>
                                    <td class="text-center">
                                        <a href="{{ url('/booking-list/view') }}" data-toggle="tooltip" data-placement="bottom" title="View">
                                            <i class="ti-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-left text-nowrap">24 Jun 2021</td>
                                    <td class="text-left text-nowrap">11:00 - 13:00</td>
                                    <td class="text-left text-nowrap">Large Meeting Room</td>
                                    <td class="text-left text-nowrap">Kerberos Aygun Olga</td>
                                    <td class="text-left text-nowrap">kerberos.aygun@olga.com</td>
                                    <td class="text-center text-success"><span class="btn btn-primary btn-block btn-rounded">Approve</span></td>
                                    <td class="text-center">
                                        <a href="{{ url('/booking-list/view') }}" data-toggle="tooltip" data-placement="bottom" title="View">
                                            <i class="ti-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-left text-nowrap">25 Jun 2021</td>
                                    <td class="text-left text-nowrap">11:00 - 13:00</td>
                                    <td class="text-left text-nowrap">Large Meeting Room</td>
                                    <td class="text-left text-nowrap">Nitin Claudie Nicol</td>
                                    <td class="text-left text-nowrap">nitin.claudie@nicol.com</td>
                                    <td class="text-center text-success"><span class="btn btn-warning btn-block btn-rounded">Waiting</span></td>
                                    <td class="text-center">
                                        <a href="{{ url('/booking-list/view') }}" data-toggle="tooltip" data-placement="bottom" title="View">
                                            <i class="ti-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-left text-nowrap">26 Jun 2021</td>
                                    <td class="text-left text-nowrap">11:00 - 13:00</td>
                                    <td class="text-left text-nowrap">Large Meeting Room</td>
                                    <td class="text-left text-nowrap">Quinctilius Malachi Ema</td>
                                    <td class="text-left text-nowrap">quinctilius.malachi@ema.com</td>
                                    <td class="text-center text-success text-nowrap"><span class="btn btn-danger btn-block btn-rounded">Room Issue</span></td>
                                    <td class="text-center">
                                        <a href="{{ url('/booking-list/view') }}" data-toggle="tooltip" data-placement="bottom" title="View">
                                            <i class="ti-eye"></i>
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
@endsection
