@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new rights</div>
                    <div class="panel-body">


                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/access') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="uid" class="col-md-4 control-label">USER ID</label>

                                <div class="col-md-6">
                                    <input id="uid" type="text" class="form-control" name="uid"  required autofocus>


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pid" class="col-md-4 control-label">Page ID</label>

                                <div class="col-md-6">
                                    <input id="pid" type="text" class="form-control" name="pid"  required>


                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection