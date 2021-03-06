<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.slider');
    }
    
    public function all_slider()
    {
        $all_slider_info = DB::table('tbl_slider')->get();
        $manage_slider = view('admin.all_slider')->with('all_slider_info',$all_slider_info);
        
        return view('admin_layout')->with('admin.all_slider',$manage_slider);
    }
    
    public function save_slider(Request $request)
    {
        $data = array();
        $data['publication_status'] = $request->publication_status;
        $image = $request->file('slider_image');
        if ($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'simage/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if ($success){
                $data['slider_image'] = $image_url;
            
                DB::table('tbl_slider')->insert($data);
                Session::put('message','Slider Image Added Successfully');
                return Redirect::to('/add-slider');
            }
        }
    }
    
    public function unactive_slider($slider_id)
    {
        DB::table('tbl_slider')
            ->where('slider_id',$slider_id)
            ->update(['publication_status' => 0]);
        Session::put('message','Slider Image Unactive Successfully');
        return Redirect::to('/all-slider');
    }
    
    public function active_slider($slider_id)
    {
        DB::table('tbl_slider')
            ->where('slider_id',$slider_id)
            ->update(['publication_status' => 1]);
        Session::put('message','Slider Image Active Successfully');
        return Redirect::to('/all-slider');
    }
    
    public function edit_slider($slider_id)
    {
        $edit_slider = DB::table('tbl_slider')
            ->where('slider_id',$slider_id)
            ->first();
        $slider_info = view('admin.edit_slider')->with('edit_slider',$edit_slider);
        return view('admin_layout')->with('admin.edit_slider',$slider_info);
    }
    
    public function update_slider(Request $request,$slider_id)
    {
        $data = array();
        $image = $request->file('slider_image');
        if ($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'simage/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if ($success){
                $data['slider_image'] = $image_url;
            
                DB::table('tbl_slider')->where('slider_id',$slider_id)->update($data);
                Session::put('message','Slider Image Updated Successfully');
                return Redirect::to('/all-slider');
            }
        }
    }
    
    public function delete_slider($slider_id)
    {
        DB::table('tbl_slider')
            ->where('slider_id',$slider_id)
            ->delete();
        Session::put('message','Slider Image Deleted Successfully');
        return Redirect::to('/all-slider');
    }
}
