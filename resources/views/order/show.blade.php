@extends('layout.master')

@section('content')

    <h2>Supply Order</h2>

    {{ Form::model($order, ['route' => ['order.store'],  'method'=>'post']) }}

    <div class="form-horizontal">
        <div class="row">
            @if($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{Form::hidden('id')}}
                        {{Form::formSelect('Cover.Company', 'cover_company', $coverCompanies)}}
                        {{Form::formInput('Order.No', 'order_no')}}
                        {{Form::formInput('Order.date', 'order_date')}}
                        {{Form::formInput('Subject.Stores', 'subject_stores')}}
                        {{Form::formSelect('Local.Supplier', 'local_supplier_id', $localSuppliers)}}
                        {{Form::formSelect('Foreign.Supplier', 'foreign_supplier_id', $foreignSuppliers)}}
                        {{Form::formCheckbox('Partial.Shipment', 'partial_shipment')}}

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>


            </div>
        </div>
    </div>

    {{ Form::close() }}

    @if( is_null($order->deleted_at) )
        {{ Form::open(['route' => ['destroyOrder', $order->id]]) }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
        {{ Form::close()  }}
    @else
        {{ Form::open(['route' => ['restoreOrder', $order->id]]) }}
        {{ method_field('POST') }}
        <button type="submit" class="btn btn-warning"><i class="fa fa-refresh"></i> Restore</button>
        {{ Form::close()  }}

    @endif


@endsection