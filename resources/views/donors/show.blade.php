@extends('donors.layout')
@section('title') {{ ' - Chi tiết' }} @endsection
@section('content')
    <div class="container">
        <h1 style="font-family:Verdana, Geneva, Tahoma, sans-serif">Thông tin tình nguyện viên hiến máu</h1>
        <form action="" method="">
            <div class="mb-2">
                <label>Tên</label>
                <input type="text" name="First_Name" id = "First_Name" value="{{ $donors->First_Name }}" class="form-control" disabled/>
            </div><br>
            <div class="mb-2">
                <label>Họ</label>
                <input type="text" name="Last_Name" id = "Last_Name" value="{{ $donors->Last_Name }}" class="form-control" disabled />
            </div><br>
            <div class="mb2">
                <label>Nhóm máu</label>
                <input type="text" name="Blood_Type" id = "Blood_Type" value="{{ $donors->Blood_Type }}" class="form-control" disabled/>
            </div><br>
            <div class="mb2">
                <label>Ngày sinh</label>
                <input type="text" name="DOB" id = "DOB" value="{{ $donors->DOB }}" class="form-control" disabled/>
            </div>
            <div class="mb2">
                <label>Giới tính</label>
                <input type="text" name="Gender" id = "Gender" value="{{ $donors->Gender }}" class="form-control" disabled/>
            </div>
            <div class="mb2">
                <label>Địa chỉ</label>
                <input type="text" name="Address" id = "Address" value="{{ $donors->Address }}" class="form-control" disabled/>
            </div>
            <div class="mb2">
                <label>Số điện thoại</label>
                <input type="text" name="Contact_Number" id = "Contact_Number" value="{{ $donors->Contact_Number }}" class="form-control" disabled/>
            </div>
        </td>
        </form>
    </div>

@endsection