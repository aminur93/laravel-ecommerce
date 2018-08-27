@extends('admin_layout')

@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span6">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer Details</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Mobile Number</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    @foreach($order_by_id as $order)
                    @endforeach
                    <td>{{$order->customer_name}}</td>
                    <td class="center">{{$order->mobile_number}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div><!--/span-->

    <div class="box span6">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping Details</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Mobile Number</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    @foreach($order_by_id as $order)
                    @endforeach
                    <td>{{$order->shipping_email}}</td>
                    <td class="center">{{$order->shipping_address}}</td>
                    <td>{{$order->shipping_mobile}}</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div><!--/span-->
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Order Details</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Product Sub Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order_by_id as $order)
                <tr>
                    <td>{{$order->product_name}}</td>
                    <td class="center">{{$order->product_price}}</td>
                    <td class="center">{{$order->product_sales_quantity}}</td>
                    <td>{{$order->product_price*$order->product_sales_quantity}}</td>
                </tr>
                @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="3">Total With Vat:</td>
                        <td><strong>= {{$order->order_total}} Tk</strong></td>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div><!--/span-->
    <a href="{{URL::to('/manage-order')}}" class="btn btn-warning pull-right">Back</a>
</div><!--/row-->
    @endsection