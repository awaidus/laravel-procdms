@extends('layout.master')

@section('content')

    <h2>Supply Order</h2>
    {{Form::open(['url' => 'order/store'])}}
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">


                        <div class="form-group form-group-sm">
                            {{Form::label('email', 'Email', ['class' => 'control-label col-sm-2'])}}
                            <div class="col-sm-10">
                                {{Form::text('username', $order->order_no, ['class' => 'form-control'])}}
                            </div>
                        </div>

                        {{Form::formInput('Order.No', 'order_no', $order->order_no)}}

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{Form::close()}}


@endsection