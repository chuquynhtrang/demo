@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách biểu mẫu</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    @include('layouts.partials.errors')
    @include('layouts.partials.success')

    <form method="POST" action="{{ url('admin/forms/upload') }}" enctype="multipart/form-data">
        <div class="form-inline">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="file" name="form">
            </div>
            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-upload"></i>&nbsp;Upload</button>
        </div>
    </form>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-4">
                <h4>Tên file</h4>
                <ul style="list-style-type:none">
                @foreach($forms as $form)
                    <li>
                        <a href="http://localhost/demo/public/uploads/{{$form->name}}" target="_blank">
                            <img src="../images/document.png" alt="..." class="form-image">
                        </a>
                        <a href="http://localhost/demo/public/uploads/{{$form->name}}" target="_blank" class="form-text">{{ $form->name }}</a>
                    </li>
                @endforeach
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Ngày tạo</h4>
                <ul style="list-style-type:none">
                @foreach($forms as $form)
                    <li style="height: 30px;">
                        {{$form->created_at}}
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection