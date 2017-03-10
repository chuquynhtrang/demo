<div class="form-group">
	<label class="col-md-3 control-label" for="name" focus>Name</label>
	<div class="col-md-3">
		<input type="text" name="name" class="form-control" required="">
	</div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="email">Email</label>
    <div class="col-md-5">
        <input type="email" name="email" class="form-control" required="">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="email">Birthday</label>
    <div class="col-md-2">
        <input type="date" name="email" class="form-control" required="">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="email">Email</label>
    <div class="col-md-5">
        <input type="email" name="email" class="form-control" required="">
    </div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="address">Address</label>
	<div class="col-md-5">
		<textarea class="form-control" rows="5" name="address"></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="phone">Phone</label>
	<div class="col-md-3">
		<input type="text" name="phone" class="form-control" required="">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="course">Course</label>
	<div class="col-md-3">
		<select id="course" name="course_id" class="form-control">
			@foreach($courses as $course)
			<option value="{{$course->id}}">{{ $course->name }}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="subject">Subject</label>
	<div class="col-md-4">
		<select id="subject" name="subject_id" class="form-control">
			@foreach($subjects as $subject)
			<option value="{{$subject->id}}">{{ $subject->name }}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="group">Group</label>
	<div class="col-md-3">
		<select id="group" name="group_id" class="form-control">
			@foreach($groups as $group)
			<option value="{{$group->id}}">{{ $group->name }}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="score">Score</label>
	<div class="col-md-3">
		<input type="text" name="score" class="form-control" required="">
	</div>
</div>
<div class="form-group">
	<div class="col-md-3"></div>
	<div class="col-md-3">
		<button id="create_student" name="create" class="btn btn-success">
			<i class="fa fa-plus-square"></i>&nbsp;Create
		</button>
	</div>
</div>
