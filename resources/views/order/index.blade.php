@extends('layout.master')

@section('content')
    <h2>To Do List</h2>

    <div class="input-group col-md-6">
        <input type="text" class="form-control" ng-model="query" autofocus placeholder="Search...">
        <div class="input-group-btn">
            <a ui-sref="orderDetails({ orderId: null })" class="btn btn-primary">Add New</a>
        </div>
    </div>

    </br>

    <table class="table table-bordered table-hover">
        <tr class="default">
            <th>Supply Order</th>
            <th>Payments</th>
            <th>Shipments</th>
            <th></th>
        </tr>
        @foreach($orders as $item)
            <tr>
                <td>
                    <div>Supply Order # {{$item->order_no}} dated {{$item->order_date}}</div>
                    <div>[ {{$item->subject_stores}} ]</div>
                    <div>Local Agent:
                        M/s. {{$item->local_supplier['company_name']}} {{$item->local_supplier['city_country']}} </div>
                    <div>Foreign Supplier:
                        M/s. {{$item->foreign_supplier['company_name']}} {{$item->foreign_supplier['city_country']}}</div>
                </td>
                <td></td>
                <td></td>
                <td>
                    <a href="#/{{$item->id}}" class="btn btn-default"><i class="fa fa-pencil-square-o"
                                                                         aria-hidden="true"></i></a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection