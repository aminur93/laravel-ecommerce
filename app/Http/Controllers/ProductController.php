<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class ProductController extends Controller
{
    public function index()
    {
        $this->AdminAuthCheck();
        return view('admin.product');
    }
    
    public function all_product()
    {
        $this->AdminAuthCheck();
        $all_product_info = DB::table('tbl_products')
            ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
            ->join('manufacture','tbl_products.manufacture_id','=','manufacture.manufacture_id')
            ->select('tbl_products.*','tbl_category.category_name','manufacture.manufacture_name')
            ->get();
        $manage_product = view('admin.all_product')->with('all_product_info',$all_product_info);
        return view('admin_layout')->with('admin.all_product',$manage_product);
        //return view('admin.all_product');
    }
    
    public function save_product(Request $request)
    {
        $data = array();
        $data['category_id'] = $request->category;
        $data['manufacture_id'] = $request->manufacture;
        $data['product_name'] = $request->product_name;
        $data['product_short_description'] = $request->product_short_description;
        $data['product_long_description'] = $request->product_long_description;
        $data['product_price'] = $request->product_price;
        $data['product_size'] = $request->product_size;
        $data['product_color'] = $request->product_color;
        $data['publication_status'] = $request->publication_status;
        
        $image = $request->file('product_image');
        if ($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if ($success){
                $data['product_image'] = $image_url;
                
                DB::table('tbl_products')->insert($data);
                Session::put('message','Product Added Successfully!!');
                return Redirect::to('/add-product');
            }
        }
        $data['product_image'] = '';
        DB::table('tbl_products')->insert($data);
        Session::put('message','Product Added Successfully Without Image!!');
        return Redirect::to('/add-product');
        
    }
    
    public function unactive_product($product_id)
    {
        DB::table('tbl_products')
            ->where('product_id',$product_id)
            ->update(['publication_status' => 0]);
        Session::put('message','Product Unactive SuccessFully!!');
        return Redirect::to('/all-product');
    }
    
    public function active_product($product_id)
    {
        DB::table('tbl_products')
            ->where('product_id',$product_id)
            ->update(['publication_status' => 1 ]);
        Session::put('message','Product Active Successfully!!');
        return Redirect::to('/all-product');
    }
    
    public function delete_product($product_id)
    {
        DB::table('tbl_products')
            ->where('product_id',$product_id)
            ->delete();
        Session::put('message','Product Deleted Successfully!!');
        return Redirect::to('/all-product');
    }
    
    public function edit_product($product_id)
    {
        $this->AdminAuthCheck();
        $all_product_edit=DB::table('tbl_products')
            ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
            ->join('manufacture','tbl_products.manufacture_id','=','manufacture.manufacture_id')
            ->where('product_id',$product_id)
            ->first();
        $product_info = view('admin.edit_product')
            ->with('all_product_edit',$all_product_edit);
        return view('admin_layout')->with('admin.edit_product',$product_info);
    }
    
    public function update_product(Request $request,$product_id)
    {
        $data = array();
        $data['category_id'] = $request->category;
        $data['manufacture_id'] = $request->manufacture;
        $data['product_name'] = $request->product_name;
        $data['product_short_description'] = $request->product_short_description;
        $data['product_long_description'] = $request->product_long_description;
        $data['product_price'] = $request->product_price;
        $data['product_size'] = $request->product_size;
        $data['product_color'] = $request->product_color;
    
        $image = $request->file('product_image');
        if ($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if ($success){
                $data['product_image'] = $image_url;
            
                DB::table('tbl_products')->where('product_id',$product_id)->update($data);
                Session::put('message','Product Update Successfully!!');
                return Redirect::to('/all-product');
            }
        }
        $data['product_image'] = '';
        DB::table('tbl_products')->where('product_id',$product_id)->update($data);
        Session::put('message','Product Updated Successfully Without Image!!');
        return Redirect::to('/all-product');
    }
    
    public function AdminAuthCheck()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id)
        {
            return;
        }else{
            return Redirect::to('/admin-login')->send();
        }
    }
}
