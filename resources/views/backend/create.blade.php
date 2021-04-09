@extends('backend.layouts.master')

@section('content')



    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="m-0 font-weight-bold text-primary">New Entry (PWD Information)</h2>
    </div>


    <!-- Form -->
<form action="{{ route('pwd.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Name Row -->
    <div class="d-flex row">
        <div class="p-2">
            <span><h4 class="m-0 font-weight-bold text-primary">Personal Information</h4></span>
        </div>
    </div>
    <hr>
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-4">
                <div class="form-group">
                    <label for="last_name"><strong>Last Name: </strong></label>
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="" autocomplete="off" value="{{ old('last_name') }}">
                    @error('last_name')
                        <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-4">
                <div class="form-group">
                    <label for="first_name"><strong>First Name: </strong></label>
                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="" autocomplete="off" value="{{ old('first_name') }}">
                    @error('first_name')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-4">
                <div class="form-group">
                    <label for="mid_name"><strong>Middle Name: </strong></label>
                    <input type="text" name="mid_name" id="mid_name" class="form-control" placeholder="" autocomplete="off" value="{{ old('mid_name') }}">
                    @error('mid_name')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-4">
                <div class="form-group">
                    <label for="reg_num"><strong>Identification Number: </strong></label>
                    <input type="text" name="reg_num" id="reg_num" class="form-control" placeholder="" autocomplete="off" value="{{ old('reg_num') }}">
                    @error('reg_num')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-4">
                <div class="form-group">
                    <label for="sss_num"><strong>SSS / GSIS Number: </strong></label>
                    <input type="text" name="sss_num" id="sss_num" class="form-control" placeholder="" autocomplete="off" value="{{ old('sss_num') }}">
                    @error('sss_num')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-4">
                <div class="form-group">
                    <label for="phealth_num"><strong>Philhealth Number: </strong></label>
                    <input type="text" name="phealth_num" id="phealth_num" class="form-control" placeholder="" autocomplete="off" value="{{ old('phealth_num') }}">
                    @error('phealth_num')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-4">
                <div class="form-group">
                    <label for="b_day"><strong>Birthdate: </strong></label>
                    <input type="date" name="b_day" id="b_day" class="form-control" placeholder="" autocomplete="off" value="{{ old('b_day') }}">
                    @error('b_day')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-4">
                <div class="form-group">
                    <label for="gender_id"><strong>Gender: </strong></label>
                    <select class="form-control" name="gender_id" id="gender_id">
                        @foreach ($pwd_gender as $pwdgender)
                            <option value="{{ $pwdgender->id }}">{{ $pwdgender->gender }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-4">
                <div class="form-group">
                    <label for="civstatus_id"><strong>Civil Status: </strong></label>
                    <select class="form-control" name="civstatus_id" id="civstatus_id">
                        @foreach ($civil_status as $civstatus)
                            <option value="{{ $civstatus->id }}">{{ $civstatus->civil_status }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="disability_id"><strong>Type of Disability: </strong></label>
                    <select class="form-control" name="disability_name[]" id="disabilities">
                        @foreach ($pwd_disabilities as $pwddisability)
                            <option value="{{$pwddisability->id}}">{{ $pwddisability->pwd_disability }}</option>
                        @endforeach
                    </select>
                </div>
                    <div id="input_fields_wrap">
                    </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-1">
                <div class="form-group">
                    <label for="Add"><strong>Add Disability</strong></label>
                <button class="btn btn-primary" id="add_field_button"><i class="fa fa-plus"></i></button>
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-4">
                <div class="form-group">
                    <label for="educbg_id"><strong>Educational Background: </strong></label>
                    <select class="form-control" name="educbg_id" id="educbg_id">
                        @foreach ($educ_bg as $educbg)
                            <option value="{{$educbg->id}}">{{ $educbg->educ_bg }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-4">
                <div class="form-group">
                    <label for="mobile_num"><strong>Mobile Number: </strong></label>
                    <input type="text" name="mobile_num" id="mobile_num" class="form-control" placeholder="09xx-xxxx-xxx" autocomplete="off" value="{{ old('mobile_num') }}">
                    @error('mobile_num')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

        </div>

        {{-- <div class="flex-row">
            <div class="d-flex justify-content-center">
                <div>
                    <label for="uploadImage" class="p-1"><strong>Image: </strong></label>
                     <input id="uploadImage" type="file" class="btn btn-sm btn-primary" name="pwd_img" accept="image/*" capture="camera" onchange="readURL(this);"/>
                </div>

                <div>
                    <label for="uploadMedical" class="p-1"><strong>Attach File: </strong></label>
                     <input id="uploadMedical" type="file" class="btn btn-sm btn-primary" name="pwd_files" accept="all/*" onchange="readURL(this);"/>
                </div>
            </div>

        </div> --}}


        <span><h4 class="m-0 font-weight-bold text-primary">Address</h4></span>
    <hr>

        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="street_address"><strong>House No. / Street, Barangay </strong></label>
                    <input type="text" name="street_address" id="street_address" class="form-control" placeholder="1234 Main St. Brgy" autocomplete="off" value="{{ old('street_address') }}">
                    @error('street_address')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="barangay_id"><strong>Barangay: </strong></label>
                    <select class="form-control" name="barangay_id" id="barangay_id">
                        @foreach ($barangays as $barangay)
                            <option value="{{$barangay->id}}">{{ $barangay->barangay }}</option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="municipality"><strong>Municipality </strong></label>
                    <input type="text" name="municipality" id="municipality" class="form-control" placeholder="" autocomplete="off" value="Calauan" readonly>
                    @error('municipality')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="province"><strong>Province</strong></label>
                    <input type="text" name="province" id="province" class="form-control" placeholder="" autocomplete="off" value="Laguna" readonly>
                    @error('province')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>
        </div>

        <span><h4 class="m-0 font-weight-bold text-primary">Employment</h4></span>

        <hr>

        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="emp_status"><strong>Employment Status: </strong></label>
                    <input type="text" name="emp_status" id="emp_status" class="form-control" placeholder="" autocomplete="off" value="{{ old('emp_status') }}">
                    @error('emp_status')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="emp_type"><strong>Type of Employment: </strong></label>
                    <input type="text" name="emp_type" id="emp_type" class="form-control" placeholder="" autocomplete="off" value="{{ old('emp_type') }}">
                    @error('emp_type')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="emp_nature"><strong>Nature of Employment: </strong></label>
                    <input type="text" name="emp_nature" id="emp_nature" class="form-control" placeholder="" autocomplete="off" value="{{ old('emp_nature') }}">
                    @error('emp_nature')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="pwd_skill"><strong>Type of Skills: </strong></label>
                    <input type="text" name="pwd_skill" id="pwd_skill" class="form-control" placeholder="" autocomplete="off" value="{{ old('pwd_skill') }}">
                    @error('pwd_skill')
                    <p style="color:red"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

        </div>

        <button class="btn btn-primary btn-sm" type="submit">Save Data</button>
</form>


@endsection

@section('page_level_scripts')

<script src="{{ asset('assetsbackend/js/2x2-image.js') }}"></script>
<script>
$(document).ready(function() {
    var wrapper = $("#input_fields_wrap"); //Fields wrapper
    var add_button = $("#add_field_button"); //Add button ID
    fieldCounter = 0;
    $(add_button).click(function(e){ //on add input button click
        fieldCounter++;
        e.preventDefault();
        if(fieldCounter <= 2){
            $(wrapper).append('<div class="form-group" style="position: relative;"><select class="form-control" name="disability_name[]" id="disabilities">@foreach ($pwd_disabilities as $pwddisability)<option value="{{$pwddisability->id}}">{{ $pwddisability->pwd_disability }}</option>@endforeach</select> <a class="btn btn-danger remove_field" style="text-decoration: none; position: absolute; margin-top: 1rem;">Remove</a> </div>'); //add input box
        }else{

        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    fieldCounter--;
    e.preventDefault(); $(this).parent('div').remove(); x--;

})
});
</script>
@endsection
