@extends('admin_layout')

@section('admin_content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{URL::to('/dashboard')}}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">All-Slider</a></li>
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

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>All Slider List</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>

            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Slider ID</th>
                        <th>Slider Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_slider_info as $all_slider)
                        <tr>
                            <td>{{$all_slider->slider_id}}</td>
                            <td class="center"><img src="{{asset($all_slider->slider_image)}}" alt="" width="100"></td>
                            <td class="center">
                                @if($all_slider->publication_status == 1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-danger">UnActive</span>
                                @endif
                            </td>
                            <td class="center">
                                @if($all_slider->publication_status ==1)
                                    <a class="btn btn-danger" href="{{URL::to('/unactive-slider',$all_slider->slider_id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                @else
                                    <a class="btn btn-success" href="{{URL::to('/active-slider',$all_slider->slider_id)}}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                @endif
                                <a class="btn btn-info" href="{{URL::to('/edit-slider',$all_slider->slider_id)}}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{URL::to('/delete-slider',$all_slider->slider_id)}}" id="delete">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection