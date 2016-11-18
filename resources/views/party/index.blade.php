@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">All Parties </div>
                    <div class="panel-body">


                        <div class="table-responsive">
                        <table class="table table-hover table-inverse">
                            <thead >
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Area</th>
                                <th>Address</th>
                                <th>Balance</th>
                                <th>Credit Limit</th>
                                <th>Day</th>
                                <th>Fax</th>
                                <th>Mobile</th>
                                <th>Salesman</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($party as $sale)
                                <tr>
                                    {{--<th scope="row">1</th>--}}
                                    <td>{{$sale->id}}</td>
                                    <td>  <a href="{{route('party.show',$sale->id)}}"> {{$sale->name}}</a></td>
                                    <td>{{$sale->area}}</td>
                                    <td> {{ $sale->address}}</td>
                                    <td>{{$sale->balance}}</td>
                                    <td>{{$sale->credit_limit}}</td>
                                    <td>{{$sale->day}}</td>
                                    <td>{{$sale->fax}}</td>
                                    <td>{{$sale->mobile}}</td>
                                    <td>{{  $sale->salesmen->name}}  </td>  {{--FOR PARTY ACCESS ITS SALESMEN NAME--}}
                                    {{--@if($sale->cell_other = ''){{ $sale->cell_other}} @endif--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                            </div>


                        <a class="btn btn-link" href="{{ url('/party/create') }}">Add a new user</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection