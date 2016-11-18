@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update</div>
                    <div class="panel-body">



        <form method="POST" class="form-horizontal" action="/users/{{$user->id}}">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            {{--*********************NAME*************************--}}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name"  value="{{$user->name}}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


        {{--<input type="text" name="name" placeholder="enter name" value="{{$user->name}}">--}}
        {{--<br>--}}
        {{--<br>--}}

            {{--*********************EMAIL*************************--}}



            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Email</label>

                <div class="col-md-6">
                    <input id="email" type="text" class="form-control" name="email" value="{{$user->email}}" required >

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
        {{--<input type="text" name="email" placeholder="enter email" value="{{$user->email}}">--}}
        {{--<br>--}}
        {{--<br>--}}


            {{--*********************PASSWORD*************************--}}


            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="text" class="form-control" name="password" value="" required >

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            {{--*********************ADMIN*************************--}}

            <div class="form-group">
                <label for="admin" class="col-md-4 control-label">Admin</label>
                <label class="radio-inline"><input type="radio" name="optradio" value="1">Yes</label>
                <label class="radio-inline"><input type="radio" name="optradio" value="0">No</label>
            </div>
        {{--<br>--}}
        {{--<br>--}}

            {{--*********************SUBMIT*************************--}}
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
            <input type="submit" name="submit" value="update"  class = 'btn btn-primary btn-sm'>
                </div>
                </div>


    </form>

    <form class="form-horizontal" method="post" action="/users/{{$user->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <input type="hidden" name="_method" value="DELETE">
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
        <input type="submit" value="delete this user"  class = 'btn btn-primary btn-sm'>
        </div>
        </div>
    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection