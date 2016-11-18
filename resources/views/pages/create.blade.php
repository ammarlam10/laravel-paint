@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Page</div>
                    <div class="panel-body">

    {!! Form::open(['method'=>'POST','action'=>'PageController@store','class'=>'form-horizontal']) !!}
    <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
        <div class="col-md-6">
        {!! Form::label('url','URL') !!}
        {!! Form::text('url',null, ['class'=>'form-control'])!!}
            @if ($errors->has('url'))
                <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
            @endif
            </div>
    </div>
           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-6">
        {!! Form::label('name','NAME') !!}
        {!! Form::text('name',null, ['class'=>'form-control'])!!}
                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
                </div>
               </div>
               <div class="form-group">
                   <div class="col-md-6">
        {!! Form::submit('Create Page',['class'=>'btn btn-primary']) !!}
                   </div>
               </div>

    </div>
          </div>
                 </div>
                        </div>
                              </div>

{!! Form::close() !!}
@endsection()
