@extends('layout.master')

@section('content')
    <div ng-controller="OrderListCtrl as vm">
        <h2>To Do List</h2>

        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif

        <div class="input-group col-md-6">
            <input type="text" class="form-control" ng-model="query" autofocus placeholder="Search...">
            <div class="input-group-btn">
                <a href="{{route('order.show', ['id' => null ])}}" class="btn btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"></i> New Supply Order
                </a>
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
            <tr ng-repeat="item in vm.orders |  filter:query | orderBy: item.order_date "
                ng-class="{danger: (item.deleted_at)}">
                <td>
                    <div>Supply Order # @{{ item.order_no }} dated @{{ item.order_date }}</div>
                    <div>( @{{ item.subject_stores }} )</div>
                    <div>Local Agent:
                        M/s. @{{ item.local_supplier.company_name }} @{{ item.local_supplier.city_country }}</div>
                    <div>Foreign Supplier:
                        M/s. @{{ item.foreign_supplier.company_name }} @{{ item.foreign_supplier.city_country }}</div>
                </td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{route('showOrder', ['id' => null ])}}/@{{ item.id }}" class="btn btn-info">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        </table>

    </div>
@endsection