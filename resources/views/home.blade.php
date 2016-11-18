@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Your Access Rights</div>

                <div class="panel-body">
                    @if($user->admin=='1')   WELCOME ADMIN   @endif

                        @foreach($user->pages as $page )
                            <div class="list-group">
                                <a href="{{$page->url}}" class="list-group-item active">{{$page->name}}</a>
                            </div>


                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
