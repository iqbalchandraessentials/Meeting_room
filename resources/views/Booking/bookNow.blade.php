@extends('master')

@section('head')
    <link href='{{ asset('vendor/fullcalendar-5.6.0/lib/main.css')}}' rel='stylesheet' />
@endsection

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Book Now</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div id="calendar"></div>
        </div>
    </div>





    
    {{-- modal here --}}
    <div class="modal" data-backdrop="false" tabindex="-1" id="modal-fill" style="z-index: 9999; background: #fff;">
        <div class="modal-dialog modal-lg">
            {{-- <div class="modal-content" style="max-width: 1024px"> --}}
            <div class="modal-content" style="box-shadow: none">
                {{-- <div class="modal-header">
                    <button type="button" class="close" style="padding-right: 28px" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div> --}}








                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Review New Meeting</h4>
                                </div>
                                <form action="{{route('store-book-now')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="code" value="{{$code}}" class="d-none">
                                    <input type="text" class="d-none" value="{{$name}}" name="pic_name">
                                    <input type="text" class="d-none" value="{{$email}}" name="pic_email">
                                    <input type="text" class="d-none" value="{{$phone}}" name="pic_phone">
                                
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Meeting date</label>
                                        <div class="row align-items-center">
                                            <div class="col-sm-12 col-12">
                                                <input type="text" class="form-control" value="04 May 2021" name="date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Meeting time</label>
                                        <div class="row align-items-center">
                                            <div class="col-sm-5 col-5">
                                                <input type="text" class="form-control" value="14:00" name="start" readonly>
                                            </div>
                                            <div class="col-sm-2 col-2 text-center">
                                                <p class="mb-0">Until</p>
                                            </div>
                                            <div class="col-sm-5 col-5">
                                                <input type="text" class="form-control" value="16:00" name="untill" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Select Room</label>
                                        <div class="">
                                            <select name="id_room" class="select2" id="selectMRoom" style="width: 100%">
                                                <option value="">Select room meeting</option>
                                                @foreach ($rooms as $room)
                                                    <option value="{{$room->id}}">{{$room->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- display none and block when select change  --}}
                                    <div class="form-group d-none mt-4" id="detailMRoom">
                                        <div class="detail-meeting-room">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="text-left font-size-11 text-uppercase text-bold">Large Meeting Room</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-4">
                                                    <img src="{{ asset('img/meeting-room/meeting_room_1.jpeg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="text-left font-size-11 text-uppercase text-bold">Capacity</p>
                                                    <p class="text-left">100 Participants</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p class="text-left font-size-11 text-uppercase text-bold" style="margin-top: 1rem">Room Facility</p>

                                                            <ol class="nav d-block nav-stacked">
                                                                <li class="nav-item">
                                                                    <p class="text-capitalize mb-0">1. Infocus</p>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <p class="text-capitalize mb-0">2. Screen</p>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <p class="text-capitalize mb-0">3. Glass board</p>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <p class="text-capitalize mb-0">4. Sound system</p>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <p class="text-capitalize mb-0">5. Pencils and memos</p>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <p class="text-capitalize mb-0">6. Internet connection</p>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-3">
                                            <button type="button" class="btn btn-bold btn-pure btn-secondary btn-block" data-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" class="btn btn-bold btn-pure btn-info float-right btn-block">Next</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src='{{  asset('vendor/fullcalendar-5.6.0/lib/main.js') }}'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                themeSystem: 'standart',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'timeGridWeek,timeGridDay',
                    // right: 'timeGridWeek',
                    // right: 'today prev,next'
                },
                timeZone: 'local',
                editable: true,
                selectable: true,
                allDaySlot: false,
                weekends: false,
                businessHours: false,
                nowIndicator: false,
                validRange: {
                    start: moment().day(),
                },
                firstDay: moment().day(),
                select: function(info) {
                    console.log('selected ' + info.startStr + ' to ' + info.endStr);
                    $('#modal-fill').modal('show');
                },
                eventDidMount: function(info) {
                    var tooltip = new Tooltip(info.el, {
                        title: info.event.extendedProps.description,
                        placement: 'top',
                        trigger: 'hover',
                        container: 'body'
                    });
                },
                events: 'https://fullcalendar.io/demo-events.json'
            });
            calendar.render();
        });

        // show detail meeting room
        $('.modal-body').on('change','#selectMRoom', function() {
            // alert( this.value );
            // if(this.value == 99) {
                console.log('hello em')
                $('#detailMRoom').removeClass('d-none')
            // } else {
                // $('#detailMRoom').addClass('d-none')
            // }
        });
    </script>
@endsection
