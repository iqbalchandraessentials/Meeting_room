@extends('master')

@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.css') }}">
@endsection

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Add New Meeting Room</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Basic Info</h4>
                </div>
                <form action="{{ route('store-meeting-room')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="box-body">
                    <div class="form-group">
                        <label>Meeting Room Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Capacity</label>
                        <input type="number" class="form-control" name="capacity">
                    </div>
                    <div class="form-group">
                        <label>Room Location</label>
                        <textarea rows="5" cols="5" class="form-control" name="location"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Hours Availability</label>
                        <select class="form-control select2" id="selectHours" name="hours_availibility" style="width: 100%;">
                            <option selected="selected" value="Full Days">Full Days</option>
                            <option value="99">Custom hour</option>
						</select>
                        <div class="mt-4 d-none" id="customHour">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Start</label>
                                        <select class="form-control select2" name="startHour" style="width: 100%;">
                                            <option value="00.00">00.00</option>
                                            <option value="01.00">01.00</option>
                                            <option value="02.00">02.00</option>
                                            <option value="03.00">03.00</option>
                                            <option value="04.00">04.00</option>
                                            <option value="05.00">05.00</option>
                                            <option value="06.00">06.00</option>
                                            <option value="07.00">07.00</option>
                                            <option value="08.00">08.00</option>
                                            <option value="09.00">09.00</option>
                                            <option value="10.00">10.00</option>
                                            <option value="11.00">11.00</option>
                                            <option value="12.00">12.00</option>
                                            <option value="13.00">13.00</option>
                                            <option value="14.00">14.00</option>
                                            <option value="15.00">15.00</option>
                                            <option value="16.00">16.00</option>
                                            <option value="17.00">17.00</option>
                                            <option value="18.00">18.00</option>
                                            <option value="19.00">19.00</option>
                                            <option value="20.00">20.00</option>
                                            <option value="21.00">21.00</option>
                                            <option value="22.00">22.00</option>
                                            <option value="23.00">23.00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Until</label>
                                        <select class="form-control select2" name="untillHour" style="width: 100%;">
                                            <option value="00.00">00.00</option>
                                            <option value="01.00">01.00</option>
                                            <option value="02.00">02.00</option>
                                            <option value="03.00">03.00</option>
                                            <option value="04.00">04.00</option>
                                            <option value="05.00">05.00</option>
                                            <option value="06.00">06.00</option>
                                            <option value="07.00">07.00</option>
                                            <option value="08.00">08.00</option>
                                            <option value="09.00">09.00</option>
                                            <option value="10.00">10.00</option>
                                            <option value="11.00">11.00</option>
                                            <option value="12.00">12.00</option>
                                            <option value="13.00">13.00</option>
                                            <option value="14.00">14.00</option>
                                            <option value="15.00">15.00</option>
                                            <option value="16.00">16.00</option>
                                            <option value="17.00">17.00</option>
                                            <option value="18.00">18.00</option>
                                            <option value="19.00">19.00</option>
                                            <option value="20.00">20.00</option>
                                            <option value="21.00">21.00</option>
                                            <option value="22.00">22.00</option>
                                            <option value="23.00">23.00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Days Availability</label>
                        <select class="form-control select2" id="selectDays" name="days_availibility" style="width: 100%;">
                            <option selected="selected">All Days</option>
                            <option value="Weekdays">Weekdays Only</option>
                            <option value="Weekend">Weekend Only</option>
                            <option value="99">Custom day</option>
						</select>
                        <div class="mt-4 d-none" id="customDay">
                            <select class="form-control select2 mt-4" multiple="multiple" data-placeholder="Select days" style="width: 100%; font-size: 1rem" name="customDay[]">
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Meeting Room Status</label>
                        <div class="c-inputs-stacked">
                            <input name="status" type="radio" id="status_active" value="ACTIVE" checked>
                            <label for="status_active" class="mr-30">Active</label>
                            <input name="status" type="radio" id="status_inactive" value="INACTIVE">
                            <label for="status_inactive" class="mr-30">Inactive</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box">
				<div class="box-header">
					<h4 class="box-title">Meeting Room Facilities</h4>
				</div>
				<div class="box-body">
					<div class="form-group">
                        <label>Facilities</label>
                        <select class="form-control select2" name="facility[]" multiple style="width: 100%;">
                            @foreach ($facilities as $facility)
                                <option value="{{$facility->name}}">{{$facility->name}}</option>
                                @endforeach
						</select>
                    </div>
				</div>
			</div>
            <div class="box">
				<div class="box-header">
					<h4 class="box-title">Meeting Room Photo</h4>
				</div>
				<div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label>Thumbnails</label>
                          <input
                            type="file"
                            name="photo"
                            class="form-control"
                          />
                          <p class="text-muted">
                            Anda bisa pilih satu gambar lalu update gambar bila ingin menambah gambar</p>
                        </div>
                      </div>
					{{-- <form action="#" class="dropzone dz-clickable">
                        <div class="dz-default dz-message"><span>Click or drop files here to upload</span></div>
                    </form> --}}
				</div>
			</div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-3">
                    <button type="button" class="btn btn-bold btn-pure btn-secondary btn-block" onclick="window.history.go(-1)">Cancel</button>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-bold btn-pure btn-info btn-block">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection

@section('script')
    <script src="{{ asset('vendor/dropzone/dropzone.js') }}"></script>
    <script>
        $('#selectHours').on('change', function() {
            // alert( this.value );
            if(this.value == 99) {
                console.log('hello em')
                $('#customHour').removeClass('d-none')
            } else {
                $('#customHour').addClass('d-none')
            }
        });

        $('#selectDays').on('change', function() {
            // alert( this.value );
            if(this.value == 99) {
                console.log('hello em')
                $('#customDay').removeClass('d-none')
            } else {
                $('#customDay').addClass('d-none')
            }
        });
    </script>
@endsection

