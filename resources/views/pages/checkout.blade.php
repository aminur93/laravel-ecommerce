@extends('layout')

@section('content')
    <section id="cart_items">
        <div class="container col-sm-12">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Check out</li>
                </ol>
            </div><!--/breadcrums-->

            <div class="register-req">
                <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
            </div><!--/register-req-->

            <div class="shopper-informations">
                <div class="row">

                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <p>Shipping Details</p>
                            <div class="form-one">
                                <form action="{{url('/save-shipping-details')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="text" placeholder="Email*" name="shipping_email">
                                    <input type="text" placeholder="First Name *" name="shipping_first_name">
                                    <input type="text" placeholder="Last Name *" name="shipping_last_name">
                                    <input type="text" placeholder="Address  *" name="shipping_address">
                                    <input type="text" placeholder="Mobile Number *" name="shipping_mobile">
                                    <input type="text" placeholder="City *" name="shipping_city">
                                    <input type="submit" class="btn btn-default" value="Done">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--/#cart_items-->
    @endsection