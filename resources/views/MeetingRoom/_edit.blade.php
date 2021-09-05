@extends('master')

@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.css') }}">
    <style>
.delete-gallery{
    display: block;
      position: absolute;
      top: -10px;
      right: -1;
}

    </style>
@endsection

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Edit Meeting Room</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Basic Info</h4>
                </div>
                @foreach ($menus as $menu)
                <form action="{{route('update-meeting-room',$menu->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                


                <div class="box-body">
                    <div class="form-group">
                        <label>Meeting Room Name</label>
                        <input type="text" class="form-control" value="{{$menu->name}}" name="name">
                    </div>
                    <div class="form-group">
                        <label>Capacity</label>
                        <input type="number" class="form-control" value="{{$menu->capacity}}" name="capacity">
                    </div>
                    <div class="form-group">
                        <label>Room Location</label>
                        <textarea rows="5" cols="5" class="form-control" name="location">{{$menu->location  }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Hours Availability</label>
                        <input type="text" class="form-control" disabled value="{{$menu->hours_availibility}}">
                        <select class="form-control select2" id="selectHours" name="hours_availibility" style="width: 100%;">
                            <option selected="selected" value="{{$menu->hours_availibility}}">Select Hours</option>
                            <option value="Full Days">Full Days</option>
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
                        <input type="text" class="form-control" disabled value="{{$menu->days_availibility}}">
                        <select class="form-control select2" id="selectDays" name="days_availibility" style="width: 100%;">
                            <option selected="selected" value="{{$menu->days_availibility}}">select days availability</option>
                            <option value="All Days">All Days</option>
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
                @endforeach
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
                        <input type="text" value="{{$menu->facility  }}" class="d-none" name="fasilitasHide">
                        <textarea rows="2" cols="5" class="form-control" disabled>{{$menu->facility  }}</textarea>
                        
                        <select class="form-control select2 mt-3" name="facility[]" multiple style="width: 100%;">
                            @foreach ($facilities as $facility)
                            <option value="{{$facility->name}}">{{$facility->name}}</option>
                            @endforeach
						</select>
                        <p class="text-mute">*) it will replace your existing data</p>
                    </div>
				</div>
			</div>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <button type="submit" onclick="window.history.go(-1)" class="btn btn-bold btn-pure btn-secondary btn-block">Cancel</button>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <button type="submit" class="btn btn-bold btn-pure btn-info btn-block">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            <div class="box">
				<div class="box-header">
					<h4 class="box-title">Meeting Room Photo</h4>
				</div>
				<div class="card-body">
                    <div class="row">
        
                      @foreach ($menu->galleries as $gallery)
                      <div class="col-md-4">
                        <div class="gallery-container">
                          <img
                          src="{{Storage::url($gallery->photos ?? '')}}"
                          alt=""
                          class="w-100"
                          />
                          <a class="delete-gallery" href="
                          {{route('meeting-room-gallery-delete', $gallery->id)}}"
                          >
                            <img src="{{url('img/icon-delete.svg')}}" alt="" />
                          </a>
                        </div>
                      </div>
                      @endforeach
        
                      
                      <div class="col-12 mt-3">
                        <form action="
                        {{ route('update-photo-meeting-room') }}
                        " method="post" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="room_id" value="{{ $menu->id }}">
                          <input
                            type="file"
                            name="photos"
                            id="file"
                            style="display: none"
                            onchange="form.submit()"
                          />
                            <button
                              type="button"
                              class="btn btn-secondary btn-block mt-3"
                              onclick="thisFileUpload()"
                            >
                            Add Photo
                            </button>
                        </form>
                      </div>  
        
                    </div>
			</div>
        </div>
       
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
    <script>
        function thisFileUpload() {
          document.getElementById("file").click();
        }
      </script>
@endsection

