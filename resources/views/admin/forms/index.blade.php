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
        @foreach($forms as $form)
            <div class="col-lg-1">
                <form method="POST" action="{{ url('admin/forms/' . $form->id) }}">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" onclick="return confirm('Are you sure delete?')" class="delete-form">
                        <img src="../images/x.png" alt="..." class="button-delete">
                    </button>
                    <div class="thumbnail">
                        <a href="http://localhost/demo/public/uploads/{{$form->name}}" target="_blank">
                            <img src="../images/document.png" alt="..." class="form-image">
                        </a>
                        <a href="http://localhost/demo/public/uploads/{{$form->name}}" target="_blank" class="form-text">{{ $form->name }}</a>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection