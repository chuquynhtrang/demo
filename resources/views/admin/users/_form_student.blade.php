<div class="form-group">
	<label class="col-md-1 control-label" for="name" focus>Name</label>
	<div class="col-md-5">
		<input type="text" name="name" class="form-control" required="">
	</div>
	<label class="col-md-1 control-label" for="email">Email</label>
	<div class="col-md-5">
		<input type="email" name="email" class="form-control" required="">
	</div>
</div>
<div class="form-group">
	<label class="col-md-1 control-label" for="address">Address</label>
	<div class="col-md-5">
		<input type="text" name="address" class="form-control" required="">
	</div>
	<label class="col-md-1 control-label" for="phone">Phone</label>
	<div class="col-md-5">
		<input type="text" name="phone" class="form-control" required="">
	</div>
</div>
<div class="form-group">
	<label class="col-md-1 control-label" for="course">Course</label>
	<div class="col-md-5">
		<select id="course" name="course" class="form-control">
			@foreach($courses as $course)
			<option value="{{$course->id}}">{{ $course->name }}</option>
			@endforeach
		</select>
	</div>
	<label class="col-md-1 control-label" for="subject">Group</label>
	<div class="col-md-5">
		<select id="subject" name="subject" class="form-control">
			@foreach($subjects as $subject)
			<option value="{{$subject->id}}">{{ $subject->name }}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-md-1 control-label" for="group">Group</label>
	<div class="col-md-5">
		<select id="group" name="group" class="form-control">
			@foreach($groups as $group)
			<option value="{{$group->id}}">{{ $group->name }}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group">
	<div class="col-md-10"></div>
	<div class="col-md-1">
		<button id="create_student" name="create" class="btn btn-success">
			<i class="fa fa-plus-square"></i>&nbsp;Create
		</button>
	</div>
</div>
