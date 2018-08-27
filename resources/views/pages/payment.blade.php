@extends('layout')
@section('content')

@section('content')
    <section id="cart_items">
        <div class="container col-sm-12">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <?php
                $contents = Cart::content();
                //echo "<pre>";
                //print_r($content);
                //echo "</pre>";
                ?>
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Image</td>
                        <td class="description">Name</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contents as $content)
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="{{$content->options->image}}" alt="" width="80"></a>
                            </td>
                            <td class="cart_description">
                                <p>{{$content->name}}</p>
                            </td>
                            <td class="cart_price">
                                <p>Tk {{$content->price}}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <form action="{{url('/update-cart')}}" method="post">
                                        {{csrf_field()}}
                                        <input class="cart_quantity_input" type="text" name="qty" value="{{$content->qty}}" autocomplete="off" size="2">

                                        <input type="hidden" name="rowId" value="{{$content->rowId}}">

                                        <input type="submit" name="submit" value="update" class="btn btn-sm btn-default" style="margin-left: 10px;">
                                    </form>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">Tk {{$content->total}}</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$content->rowId)}}"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Payment method</li>
                </ol>
            </div>
            <div class="paymentCont col-sm-8">
                <div class="headingWrap">
                    <h3 class="headingTop text-center">Select Your Payment Method</h3>
                    <p class="text-center">Created with bootsrap button and using radio button</p>
                </div>
                <form action="{{url('/order-place')}}" method="post">
                    {{csrf_field()}}
                    <div class="paymentWrap">
                        <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                            <label class="btn paymentMethod active">
                                <div class="method visa"></div>
                                <input type="radio" name="payment_method" value="handcash" checked>
                            </label>
                            <label class="btn paymentMethod">
                                <div class="method master-card"></div>
                                <input type="radio" name="payment_method" value="debitcart">
                            </label>
                            <label class="btn paymentMethod">
                                <div class="method amex"></div>
                                <input type="radio" name="payment_method" value="bekash">
                            </label>
                            <label class="btn paymentMethod">
                                <div class="method vishwa"></div>
                                <input type="radio" name="payment_method" value="payza">
                            </label>
                        </div>
                    </div>

                <div class="footerNavWrap clearfix">
                    <div class="btn btn-success pull-left btn-fyi">
                         <a href="{{URL::to('/')}}" style="color: white;"><span class="glyphicon glyphicon-chevron-left"></span>CONTINUE SHOPPING</a></div>
                    <input type="submit" name="submit" class="btn btn-success pull-right btn-fyi" value="Done">
                </div>
                </form>
            </div>
        </div>
    </section><!--/#do_action-->

@endsection