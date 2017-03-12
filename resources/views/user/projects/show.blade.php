@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Đề tài: {{ $project->name }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
        <h4><b>Giảng viên hướng dẫn:</b> {{ $project->user->name }}</h4>
        <hr>
        <p><b>Miêu tả:</b>{{ $project->description }}</p>
        </div>
    </div>
</div>
@endsection