@extends('admin.layout.Index')
@section('content')
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">CHỌN VỊ TRÍ CÔNG TÁC</h1>
    </div>
    <form class="user" action="admin/giangvien/chon" method="post" >
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <hr />
        <div class="form-group">
            <h6 class="col-sm-4">Nhập vị trí công tác</h6>
            <select class="form-control" style="font-size: 0.8rem;border-radius: 10rem;height: 3.1rem;"
                    name="noi_cong_tac">
                @foreach($vitri as $tl)
                    <option value="{{$tl->id}}">{{$tl->noi_cong_tac}}</option>
                @endforeach
            </select>
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
    @if(session('loi'))
        <div class="alert alert-danger">
            {{session('loi')}}
        </div>
    @endif
@endsection

