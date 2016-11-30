@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">All Pages</div>
                    <div class="panel-body">
    {{--<ul>--}}
        {{--@foreach($pages as $page)--}}
            {{--<li><a href="{{route('pages.show',$page->id)}}"> {{$page->id  }} {{$page->name}}</a></li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}

                        <table class="table">
                            <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Page NAME</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    {{--<th scope="row">1</th>--}}
                                    <td>{{$page->id}}</td>
                                    <td>  <a href="{{route('pages.show',$page->id)}}"> {{$page->name}}</a></td>


                                </tr>
                            @endforeach

                            </tbody>
                        </table>


    <a class="btn btn-link" href="{{ url('/pages/create') }}">Add a new page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection