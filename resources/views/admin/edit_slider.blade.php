@extends('admin_layout')

@section('admin_content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{URL::to('/dashboard')}}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Update Slider</a></li>
    </ul>

    <p class="alert-success">
        <?php
        $message = Session::get('message');
        if ($message){
            echo $message;
            Session::put('message',null);
        }
        ?>
    </p>

    <div class="row-fluid sortable ui-sortable">
        <div class="box span12" style="">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Slider</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{url('/update-slider',$edit_slider->slider_id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Slider Image *</label>
                            <div class="controls">
                                <input type="file" name="slider_image" class="span6 typeahead" required>
                            </div>

                            <div class="controls">
                                <img src="{{asset($edit_slider->slider_image)}}" alt="" width="200">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Slider</button>
                            <a href="{{URL::to('/all-slider')}}" class="btn btn-default">Back</a>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div>
@endsection