@extends('donors.layout')
@section('content')
<div class = "container">
    <h1 style="font-family:Verdana, Geneva, Tahoma, sans-serif">Danh sách người tình nguyện hiến máu</h1>
    <a href="{{ url('/donors/create') }}" class = "btn btn-primary">+ Thêm Người hiến máu</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Họ</th>
                <th scope="col">Nhóm máu</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donors as $donor)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{$donor-> First_Name }}</td>
                    <td>{{$donor-> Last_Name }}</td>
                    <td>{{$donor-> Blood_Type }}</td>
                    <td>{{$donor-> DOB }}</td>
                    <td>{{$donor-> Gender }}</td>
                    <td>{{$donor-> Address }}</td>
                    <td>{{$donor-> Contact_Number }}</td>
                    <td>
                        <form method="POST" action="{{ url('donors' . '/' . $donor->Donor_ID) }}" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" title="Delete Donor" onclick="return Del()" class = "btn btn-danger">X</button>
                        </form>
                        <a href="{{ url('donors/' . $donor->Donor_ID . '/edit')}}" class = "btn btn-warning">[1</a>
                        <a href="{{ url('donors/' . $donor->Donor_ID) }}" class = "btn btn-info">...</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
</div>
@endsection
<script>
    function Del() {
        return confirm("Bạn chắc chắn muốn xóa không?");
    }
</script>

