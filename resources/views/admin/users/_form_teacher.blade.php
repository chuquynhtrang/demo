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
    <div class="col-md-3">
        <input type="date" name="email" class="form-control" required="">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="email">Gender</label>
    <div class="col-md-5">
        <input type="radio" name="gender" value="0" checked> Male
  		<input type="radio" name="gender" value="1"> Female
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
	<label class="col-md-3 control-label" for="course">Position</label>
	<div class="col-md-3">
		<select id="course" name="position" class="form-control">
			<option value="0">Thạc sĩ</option>
			<option value="1">Tiến sĩ</option>
		</select>
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
