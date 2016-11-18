@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Users</div>
                    <div class="panel-body">

                        {{--<ul>--}}
                            {{--@foreach($users as $user)--}}
                                {{--<li><a href="{{route('users.show',$user->id)}}">{{$user->name}}</a></li>--}}
                                {{--@foreach($user->pages as $page)--}}
                                {{--<li><a href="{{route('users.show',$user->id)}}">{{$page->name}}</a></li>--}}
                                {{--@endforeach--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}


                        <table class="table">
                            <thead class="thead-inverse">
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Admin</th>
                                <th>Page access (ID)</th>
                                <th>Edit rights</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                {{--<th scope="row">1</th>--}}
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>@if($user->admin=='1')  YES    @endif</td>
                                <td>  @foreach($user->pages as $page)    {{$page->name }}  ({{$page->id}})          @endforeach  </td>
                                <td>  <a class="btn btn-primary btn-sm" href="{{route('access.show',$user->id)}}">edit</a></td>


                            </tr>
                            @endforeach

                            </tbody>
                        </table>




                        <a class="btn btn-link" href="{{ url('/access/create') }}">Add a new right</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection