@extends('donors.layout')
@section('title') {{ ' - Thêm mới' }} @endsection
@section('content')
    <div class="container">
        <h1 style="font-family:Verdana, Geneva, Tahoma, sans-serif">Thêm mới tình nguyện viên hiến máu</h1>
        <form action="{{ url('donors') }}" method="post">
            {!! csrf_field() !!}
            <div class="mb-2">
                <label>Tên</label>
                <input type="text" name="First_Name" id = "First_Name" class="form-control" />
            </div>
            <div class="mb-2">
                <label>Họ</label>
                <input type="text" name="Last_Name" id = "Last_Name" class="form-control" />
            </div>
            <div class="mb-2">
                <label>Nhóm máu</label>
                <!-- <input type="text" name="categoryID" class="form-control" /> -->
                <select name="Blood_Type" id="lang-select">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>
            <div class="mb-2">
                <label>Ngày sinh</label>
                <input type="date" name="DOB" id = "DOB" class="form-control" />
            </div>
            <div class="mb2">
                <label>Giới tính</label>
                <input type="checkbox" name='Gender' value="Nam">Nam
                <input type="checkbox" name='Gender' value="Nữ">Nữ
            </div>
            <div class="mb-2">
                <label>Địa chỉ</label>
                <input type="text" name="Address" id = "Address" class="form-control" />
            </div>
            <div class="mb-2">
                <label>Số điện thoại</label>
                <input type="text" name="Contact_Number" id = "Contact_Number" class="form-control" />
            </div>
            <input class="btn btn-primary" type="submit" value="Thêm" >
        </td>
        </form>
    </div>
@endsection