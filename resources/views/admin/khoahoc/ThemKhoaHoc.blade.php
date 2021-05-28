@extends('admin.layout.Index')
@section('content')
    <div class="col-sm-4">
        <a href="admin/khoahoc/danhsach">
        <button type="button" class="btn btn-info add-new">Quay lại</button>
        </a>
    </div>
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">THÊM MỚI KHÓA HỌC</h1>
    </div>
    <form class="user" action="admin/khoahoc/them" method="post">
        <hr />
        <div class="form-group">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <h6 class="col-sm-4">Nhập khóa học mới</h6>
                <input type="text" class="form-control form-control-user"
                       placeholder="Nhập khóa học mới" name="nien_khoa">
        </div>
        <input type="submit" value="Xác nhận" class="btn btn-primary btn-user btn-block" />
    </form>
    <br>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif
@endsection
