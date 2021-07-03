<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends Controller
{
    public function login(){
        return view('login');
    }       
    public function login_check(Request $request){
        $username = $request->username;
        $password = $request->password;
        $result = DB::table('user')->where('username',$username)->where('password',$password)->first();
        if($result){
            FacadesSession::put('message','Đăng nhập thành công');
            session('username',$username);
            return Redirect::to('index');
        }else{
            return Redirect::to('login');
        }
    }
    
    public function all_product(){
        $all_product = DB::table('product')->get();
        return view('category',['all_product' => $all_product]);
    }

    public function add_product(){
        return view('addproduct');
    }

    public function save_new_product(Request $request){
        $data = array();
        
        $data['name'] = $request->product_name;
        $data['image'] = $request->product_image;
        $data['cost'] = $request->product_price;
        $data['cate'] = $request->product_cate;
        $data['decs'] = $request->product_decs;
        
        if( 
            $data['name'] == "" ||
            $data['image'] == "" ||
            $data['cost'] == ""||
            $data['cate'] == ""||
            $data['decs'] == ""){
                FacadesSession::put('message','Không được bỏ trống các mục');
                return Redirect::to('addproduct');
            }else{
                DB::table('product')->insert($data);
                FacadesSession::put('message','Thêm sản phẩm thành công');
                return Redirect::to('category');
            }
    }
    public function update_product(Request $request,$product_id){
        $data = array();
        $data['name'] = $request->product_name;
        $data['cost'] = $request->product_price;
        $data['cate'] = $request->product_cate;

        DB::table('product')->where('id',$product_id)->update($data);
        FacadesSession::put('message','Cập nhật thành công');
        return Redirect::to('category');
    }
    public function getProduct(){
        $data = DB::table("product")->where('cate','hot')->get();
        return view('index',['product' => $data]);
    }
    
    public function edit_product($product_id){
        
        $edit_product = DB::table('product')->where('id',$product_id)->get();
        return view('edit',['edit_product' => $edit_product]);
    }
    public function delete_product($product_id){
        DB::table('product')->where('id',$product_id)->delete();
        FacadesSession::put('message',"Đã xóa sản phẩm");
        return Redirect::to('category');
    }
}
