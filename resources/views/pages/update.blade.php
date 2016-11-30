@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Page</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/pages/{{$page->id}}">

                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <div class="col-md-6">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="enter NAME" value="{{$page->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                            <label for="name" class="control-label">URL</label>
                            <input type="text" name="url" class="form-control" placeholder="enter URL" value="{{$page->url}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 ">
                            <input type="submit" name="submit" class = 'btn btn-primary' value="update">
                                    </div>
                            </div>

                        </form>


                        <form  method="post" action="/pages/{{$page->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <input type="hidden" name="_method" value="DELETE">
                            <br>
                            <input type="submit"  class = 'btn btn-primary btn-sm' value="delete this user">

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection