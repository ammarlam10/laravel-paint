@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Users</div>
                    <div class="panel-body">

                        {{--<table class="table">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                        {{--<th>USER</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--@foreach($users as $user)--}}
                            {{--$i=0--}}
                            {{--<tr>--}}
                                {{--<th scope="row">{{$i}}</th>--}}
                                {{--<td>{{$user->name}}</td>--}}
                            {{--</tr>--}}
                        {{--<li><a href="{{route('users.show',$user->id)}}">{{$user->name}}</a></li>--}}
                        {{--@endforeach--}}

                        <table class="table">
                            <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>USERNAME</th>
                                <th>Admin</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    {{--<th scope="row">1</th>--}}
                                    <td>{{$user->id}}</td>
                                    <td>  <a href="{{route('users.show',$user->id)}}"> {{$user->name}}</a></td>
                                    <td>@if($user->admin==1)  YES  @endif</td>


                                </tr>
                            @endforeach

                            </tbody>
                        </table>


    <a class="btn btn-link" href="{{ url('/users/create') }}">Add a new user</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

{{--<table class="table">--}}
    {{--<thead>--}}
    {{--<tr>--}}
        {{--<th>#</th>--}}
        {{--<th>First Name</th>--}}
        {{--<th>Last Name</th>--}}
        {{--<th>Username</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--<tr>--}}
        {{--<th scope="row">1</th>--}}
        {{--<td>Mark</td>--}}
        {{--<td>Otto</td>--}}
        {{--<td>@mdo</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
        {{--<th scope="row">2</th>--}}
        {{--<td>Jacob</td>--}}
        {{--<td>Thornton</td>--}}
        {{--<td>@fat</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
        {{--<th scope="row">3</th>--}}
        {{--<td>Larry</td>--}}
        {{--<td>the Bird</td>--}}
        {{--<td>@twitter</td>--}}
    {{--</tr>--}}
    {{--</tbody>--}}
{{--</table>--}}