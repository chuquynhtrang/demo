@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Subjects</h1>
    </div>
    <!-- /.col-lg-12 -->
    @include('subjects._form')
</div>
@endsection