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
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($list as $booking)
                                <tr>
                                    <td class="text-center">{{$no}}</td>
                                    <td class="text-left text-nowrap">{{$booking->date}}</td>
                                    <td class="text-left text-nowrap">{{$booking->start}} - {{$booking->untill}}</td>
                                    <td class="text-left text-nowrap">{{$booking->room->name}}</td>
                                    <td class="text-left text-nowrap">{{$booking->pic_name}}</td>
                                    <td class="text-left text-nowrap">{{$booking->pic_email}}</td>
                                    <td class="text-center text-success">
                                        <span class="btn 
                                        {{ $booking->status == "APPROVE" ? 'btn-success' : 'btn-warning'}}
                                        btn-block btn-rounded">{{$booking->status}}</span></td>
                                    <td class="text-center">
                                        <a href="{{ route('detail-book-now', $booking->code) }}" data-toggle="tooltip" data-placement="bottom" title="View">
                                            <i class="ti-eye"></i>
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
