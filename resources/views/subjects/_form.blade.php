<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Subject
            </div>
            <div class="panel-body">

                @include('layouts.partials.errors')
                @include('layouts.partials.success')

                <div class="row">
                    <div class="col-lg-6">
                        <form role="form">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
