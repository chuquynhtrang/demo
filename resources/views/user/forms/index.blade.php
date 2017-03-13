@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách biểu mẫu</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        @foreach($forms as $form)
            <div class="col-lg-2">
                <div class="thumbnail">
                    <a href="http://localhost/demo/public/uploads/{{$form->name}}" target="_blank">
                        <img src="../images/document.png" alt="..." class="form-image">
                    </a>
                    <a href="http://localhost/demo/public/uploads/{{$form->name}}" target="_blank" class="form-text">{{ $form->name }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection