@extends('admin_layout')

@section('admin_content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{URL::to('/dashboard')}}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Update-Category</a></li>
    </ul>

    <div class="row-fluid sortable ui-sortable">
        <div class="box span12" style="">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Category</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{url('/update-category',$all_category_edit->category_id)}}" method="post">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Category Name *</label>
                            <div class="controls">
                                <input type="text" name="category_name" class="span6 typeahead" value="{{$all_category_edit->category_name}}">
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Category Discription *</label>
                            <div class="controls">
                                <textarea class="cleditor" name="category_description" id="textarea2" rows="3" required>{{$all_category_edit->category_description}}</textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div>
@endsection