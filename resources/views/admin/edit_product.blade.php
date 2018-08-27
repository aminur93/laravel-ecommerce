@extends('admin_layout')

@section('admin_content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{URL::to('/dashboard')}}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Update Products</a></li>
    </ul>

    <div class="row-fluid sortable ui-sortable">
        <div class="box span12" style="">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Products</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <p class="alert-success">
                <?php
                $message = Session::get('message');
                if ($message){
                    echo $message;
                    Session::put('message',null);
                }
                ?>
            </p>
            <div class="box-content">
                <form class="form-horizontal" action="{{url('/update-product',$all_product_edit->product_id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="typeahead"> Select Category *</label>
                            <div class="controls">
                                <select name="category" id="category" class="form-control">
                                    <option value="">Select category</option>
                                    <?php
                                    $all_category_publish = DB::table('tbl_category')
                                        ->where('publication_status',1)
                                        ->get();
                                    foreach ($all_category_publish as $category){
                                    ?>
                                    <option value="{{$category->category_id}}" {{$category->category_id == $all_product_edit->category_id?'selected="selected"':''}}>{{$category->category_name}}</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead"> Select Manufacture *</label>
                            <div class="controls">
                                <select name="manufacture" id="manufacture" class="form-control">
                                    <option value="">Select Manufacture</option>
                                    <?php
                                    $all_manufacture_publish = DB::table('manufacture')
                                        ->where('publication_status',1)
                                        ->get();
                                    foreach ($all_manufacture_publish as $manufacture){
                                    ?>
                                    <option value="{{$manufacture->manufacture_id}}" {{$manufacture->manufacture_id == $all_product_edit->manufacture_id?'selected="selected"':''}}>{{$manufacture->manufacture_name}}</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">product Name *</label>
                            <div class="controls">
                                <input type="text" name="product_name" value="{{$all_product_edit->product_name}}" class="span6 typeahead" required>
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">product Short Discription *</label>
                            <div class="controls">
                                <textarea class="cleditor" name="product_short_description" id="textarea2" rows="3" required>{{$all_product_edit->product_short_description}}</textarea>
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">product Long Discription *</label>
                            <div class="controls">
                                <textarea class="cleditor" name="product_long_description" id="textarea2" rows="3" required>{{$all_product_edit->product_long_description}}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">product Price *</label>
                            <div class="controls">
                                <input type="text" name="product_price" value="{{$all_product_edit->product_price}}" class="span6 typeahead" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">product Image *</label>
                            <div class="controls">
                                <input type="file" name="product_image" class="span6 typeahead" required>
                            </div>

                            <div class="controls">
                                <img src="{{asset($all_product_edit->product_image)}}" alt="" width="100">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">product Size *</label>
                            <div class="controls">
                                <input type="text" name="product_size" value="{{$all_product_edit->product_size}}" class="span6 typeahead" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">product Color *</label>
                            <div class="controls">
                                <input type="text" name="product_color" value="{{$all_product_edit->product_color}}" class="span6 typeahead" required>
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div>
@endsection