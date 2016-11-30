@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Sales Orders</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Order Date</th>
                                <th>Party</th>
                                <th>Delivery Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    {{--<th scope="row">1</th>--}}
                                    <td>{{$order->id}}</td>
                                    <td> {{$order->sdate}}</td>
                                    <td>{{$order->party->name}} </td>
                                    <td>{{$order->ddate}} </td>
                                    <td><a href="{{route('order.show',$order->id)}}" class="btn-sm btn-primary">delivered</a></td>
                                    <td><a href="{{route('return.show',$order->party->id)}}" class="btn-sm btn-primary">Return</a></td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                        <button  onclick="location.href = '{{url('order/create')}}';" id="myButton" class="btn btn-primary btn-lg btn-block" >New order</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection