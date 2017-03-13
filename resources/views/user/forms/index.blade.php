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
            <div class="col-lg-1">
                <div class="thumbnail">
                    <img src="../images/document.png" alt="...">
                    <a href="http://localhost/demo/public/uploads/{{$form->name}}" target="_blank">{{ $form->name }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection