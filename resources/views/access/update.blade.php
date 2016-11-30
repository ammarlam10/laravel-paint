@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Access</div>
                    <div class="panel-body">



                        <form class="form-horizontal" method="POST" action="/access/{{$page->id}}">
                            <input type="hidden" name="_method" value="PUT">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">USER ID</label>
                                    <input type="text" name="uid" class="form-control" placeholder="enter User ID">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Old Page ID</label>
                                    <input type="text" name="oid" class="form-control" placeholder="enter Old ID">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">New Page ID</label>
                                    <input type="text" name="nid" class="form-control" placeholder="enter New ID">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 ">
                                    <input type="submit" name="submit" class = 'btn btn-primary' value="update">
                                </div>
                            </div>

                        </form>


                        {{--<form  method="post" action="/pages/{{$page->id}}">--}}
                            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}" />--}}

                            {{--<input type="hidden" name="_method" value="DELETE">--}}
                            {{--<br>--}}
                            {{--<br>--}}
                            {{--<input type="submit"  class = 'btn btn-primary' value="delete this user">--}}

                        {{--</form>--}}


                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection