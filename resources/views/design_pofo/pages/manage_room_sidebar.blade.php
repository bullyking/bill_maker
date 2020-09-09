<div class="caption">
    <div class="title"></div>
    <a type="button" class="close close_sidebar">
        <span aria-hidden="true">×</span>
    </a>
</div>
<div class="details-header">
    <div class="flex">
        <div class="details-header__descr">
            <h5 class="text-extra-dark-gray text-uppercase alt-font text-extra-large font-weight-600 margin-15px-bottom d-block">เพิ่มห้องเช่า</h5>
        </div>
    </div>
</div>
<div class="accordeon padding-bottom-60px">
    <div class="accordeon__header view_team hidden">
        <div class="title">
            เพิ่มข้อมูลผู้เช่า (Add Renter's Info)
        </div>
        <a type="button" class="close view_team">
            <i class="fa fa-chevron-down font-size-15px icon"></i>
        </a>
    </div>
    <div class="team-member-item details-member">
        <div class="team-member-item__descr">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <label class="title">คำนำหน้า (Title Name)</label><br />
                    <select class="form-control" id="title_name">
                        @foreach ($title as $key => $value)
                        <option value="{{ @$value->IDTitleName }}" {{ @$value->IDTitleName == @$room_detail->title_name ? 'selected' : '' }}>{{ @$value->TitleNameTH }}</option>
                        @endforeach
                    </select>
                    <label class="title">ชื่อ-นามสกุล (Full Name)</label>
                    {{ Form::text('fullname',@$room_detail->fullname, ['class'=>'form-control fullname','id'=>'fullname']) }}
                    {{-- <input type="text" class="form-control font-bold" id="fullname" value="{{ @$room_detail->fullname }}" /> --}}
                    <label class="title">ชื่อเล่น (Nickname)</label>
                    {{ Form::text('nickname',@$room_detail->nickname, ['class'=>'form-control nickname','id'=>'nickname']) }}
                    {{-- <input type="text" class="form-control font-bold" id="nickname" /> --}}
                    <label class="title">อายุ (Age)</label>
                    {{ Form::number('age',@$room_detail->age, ['class'=>'form-control age','id'=>'age']) }}
                    {{-- <input type="number" class="form-control font-bold" id="age" value="0" /> --}}
                    <label class="title">วันเกิด (Date of Birth)</label>
                    <div class='input-group date' id='box_dob'>
                        {{ Form::text('dob',@$room_detail->dob, ['class'=>'form-control dob','id'=>'dob']) }}
                        <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                        </span>
                    </div>
                    <label class="title">เพศ (Gender)</label>
                    <select id="gender" class="form-control">
                        @foreach ($genders as $key => $value)
                        <option value="{{ @$value->idGender }}" {{ @$value->idGender == @$room_detail->gender ? 'selected' : '' }}>{{ @$value->Name_TH }}</option>
                        @endforeach
                    </select>
                    <label class="title">เบอร์โทรศัพท์ (Telephone Number)</label>
                    {{ Form::text('contact',@$room_detail->contact, ['class'=>'form-control phone_number','id'=>'phone_number','placeholder'=>'xxx-xxx-xxxx or xx-xxx-xxxx']) }}
                    {{-- <input type="text" class="form-control font-bold" placeholder="xxx-xxx-xxxx or xx-xxx-xxxx" id="phone_number" /> --}}
                    <label class="title">อีเมล (Email)</label>
                    {{ Form::email('email',@$room_detail->email, ['class'=>'form-control email','id'=>'email']) }}
                    {{-- <input type="email" class="form-control font-bold" id="email" /> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="accordeon__header">
        <div class="title">เพิ่มข้อมูลห้องเช่า (Add Rented Room's Info)</div>
        <a type="button" class="close view_member">
            <i class="fa fa-chevron-down font-size-15px icon"></i>
        </a>
    </div>
    <div class="team-member-item details-member">
        <div class="team-member-item__descr">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <label class="title">หมายเลขห้อง (Room Number)<span class="text-danger"> *</span></label>
                    {{ Form::number('room_number',@$room_detail->room_number, ['class'=>'form-control room_number','id'=>'room_number']) }}
                    {{-- <input type="number" class="form-control font-bold" id="room_number" value="0" /> --}}
                    <label class="title">ค่าห้อง (Room price)</label>
                    {{ Form::number('room_price',@$room_detail->room_price, ['class'=>'form-control room_price','id'=>'room_price']) }}
                    {{-- <input type="number" class="form-control font-bold" id="room_price" value="0" /> --}}
                    <label class="title">ค่าเคเบิ้ล (Cable price)</label>
                    {{ Form::number('cable_price',@$room_detail->cable_price, ['class'=>'form-control cable_price','id'=>'cable_price']) }}
                    {{-- <input type="number" class="form-control font-bold" id="cable_price" value="0" /> --}}
                    <label class="title">ค่าขยะ (Trash's price)</label>
                    {{ Form::number('trash_price',@$room_detail->trash_price, ['class'=>'form-control trash_price','id'=>'trash_price']) }}
                    {{-- <input type="number" class="form-control font-bold" id="trash_price" value="0" /> --}}
                    <label class="title">เข้าอยู่เมื่อ (Check-in date)</label>
                    <div class='input-group date' id='box_check_in_date'>
                        {{ Form::text('check_in_date',@$room_detail->check_in_date, ['class'=>'form-control check_in_date','id'=>'check_in_date']) }}
                        <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                        </span>
                    </div>
                    <label class="title">หมายเหตุ (Remark)</label>
                    {{ Form::textarea('remark',@$room_detail->remark, ['rows'=>'3','cols'=>'3','class'=>'form-control remark','id'=>'remark']) }}
                    {{-- <textarea cols="3" rows="3" class="form-control font-bold" id="remark"></textarea> --}}
                </div>
                <br />
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <a class="btn btn-very-small btn-transparent-black lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto save_room" href="javascript:void(0)"><i class="fa fa-save"></i> Save</a>
                    <a class="btn btn-very-small btn-transparent-black lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto close_sidebar" href="javascript:void(0)">Cancel</a>
                    <a class="btn btn-very-small btn-transparent-black lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto clear_sidebar" href="javascript:void(0)">Clear</a>
                </div>
            </div>
        </div>

    </div>
</div>
