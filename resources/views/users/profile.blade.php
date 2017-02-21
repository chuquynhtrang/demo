@extends('layouts.app')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profile</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class="row">
                    <form method="POST" class="form-horizontal" enctype="multipart/form-data" action="{{ url('/profile/'. $user->id) }}">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="PUT">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="text-center">
                                <img id="show_avatar" src="../../{{ $user->url_avatar }}"> 
                                <h6> Choose avatar </h6>
                                <input type="file" name="avatar" class="text-center center-block well well-sm">
                            </div>
                            <div class="list-group">

                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 personal-info">
                            <h4> User Infomation </h4>
                            <div class="form-group">
                                <label for="name" class="col-lg-3 control-label">
                                    Name
                                </label>
                                <div class="col-lg-8 input-group">
                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" name="name" value="{{$user->name}}" class="form-control" autofocus="autofocus">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="col-lg-3 control-label">
                                    Address
                                </label>
                                <div class="col-lg-8 input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <input type="text" name="address" value="{{$user->address}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-lg-3 control-label">
                                    Phone
                                </label>
                                <div class="col-lg-8 input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                    <input type="text" name="phone" value="{{$user->phone}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mail" class="col-lg-3 control-label">
                                    Mail
                                </label>
                                <div class="col-lg-8 input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                    <input type="text" name="email" value="{{$user->email}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-primary btn-md">Update Profile</button>
                                    <a href="{{ url('/home') }}" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop