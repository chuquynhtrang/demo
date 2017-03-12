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

    <form method="POST" action="{{ url('admin/projects/importExcel') }}" enctype="multipart/form-data">
        <div class="form-inline">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="file" name="fileProject">
            </div>
            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-upload"></i>&nbsp;Upload</button>
        </div>
    </form>
    <hr>
    <div class="row">
        <div class="col-lg-2">
            <div class="thumbnail">
                <img src="http://www.freeiconspng.com/uploads/pdf-icon-png-17.png" alt="...">
                <p>Cras justo odio, dapibus ac facilisis in.</p>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img src="http://www.freeiconspng.com/uploads/pdf-icon-png-17.png" alt="...">
                <p>Cras justo odio, dapibus ac facilisis in.</p>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img src="http://www.freeiconspng.com/uploads/pdf-icon-png-17.png" alt="...">
                <p>Cras justo odio, dapibus ac facilisis in.</p>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img src="http://www.freeiconspng.com/uploads/pdf-icon-png-17.png" alt="...">
                <p>Cras justo odio, dapibus ac facilisis in.</p>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img src="http://www.freeiconspng.com/uploads/pdf-icon-png-17.png" alt="...">
                <p>Cras justo odio, dapibus ac facilisis in.</p>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img src="http://www.freeiconspng.com/uploads/pdf-icon-png-17.png" alt="...">
                <p>Cras justo odio, dapibus ac facilisis in.</p>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img src="http://www.freeiconspng.com/uploads/pdf-icon-png-17.png" alt="...">
                <p>Cras justo odio, dapibus ac facilisis in.</p>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img src="http://www.freeiconspng.com/uploads/pdf-icon-png-17.png" alt="...">
                <p>Cras justo odio, dapibus ac facilisis in.</p>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img src="http://www.freeiconspng.com/uploads/pdf-icon-png-17.png" alt="...">
                <p>Cras justo odio, dapibus ac facilisis in.</p>
            </div>
        </div>
    </div>
</div>
@endsection