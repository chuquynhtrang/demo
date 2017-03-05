@extends('layouts.app')

@section('content')
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Subjects</h1>
	    </div>
	    <!-- /.col-lg-12 -->

	    <div class="row">
		    <div class="col-lg-6">
			 	@include('layouts.partials.errors')
			    @include('layouts.partials.success')
		        <div class="panel panel-default">
		            <div class="panel-heading table-panel">
		                Edit Subject
		            </div>
	    			@include('admin.subjects._form')
	    		</div>
	    	</div>
    	</div>
	</div>
</div>
@endsection