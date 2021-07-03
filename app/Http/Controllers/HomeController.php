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
    // check session login and return view login
    public function login(Request $request){
        if($request->session()->get('user') != ""){
            Redirect::to('atnpage');
        }
            return view('login');
    }

    // check login with database
    public function login_check(Request $request){
        $username = $request->username;
        $password = $request->password;
        $result = DB::table('user')->where('username',$username)->where('password',$password)->first();
        if($result){
            FacadesSession::put('message','Đăng nhập thành công');
            FacadesSession::put('user',$username);
            $request->session()->put('user',$username);
            return Redirect::to('atnpage');
        }else{
            return Redirect::to('');
        }
    }

    // return view register
    public function register(){
        return view('register');
    }
    // check register with database
    public function register_execute(Request $request){
        $data = array();
        if($request->username != "" || $request->password != "" || $request->password_again != "" || $request->shop != ""){
        $data['username'] = $request->username;
        $data['password'] = $request->password;
        $data['shop'] = $request->shop;
            DB::table('user')->insert($data);
            FacadesSession::put('message','Đăng ký thành công');
            FacadesSession::put('user',$request->username);
            return Redirect::to('atnpage');
        }else{
            FacadesSession::put('message','Không được bỏ trống ');
            return Redirect::to('register');
        }
    }
    // logout
    public function logout(){
        return view('login');
    }   
    
    //get listuser
    public function listUser(){
        $list_user = DB::table('user')->get();
        return view('listUser',['list_user' => $list_user]);
    }    
    

    // get all product from database
    public function all_product(){
        $all_product = DB::table('product')->get();
        return view('category',['all_product' => $all_product]);
    }

        // getProduct hot in order to show index
        public function getProduct(){
            $data = DB::table("product")->where('cate','hot')->get();
            return view('index',['product' => $data]);
        }
    
        // get product hot
        public function hotProduct(){
            $data = DB::table('product')->where('cate','hot')->get();
            return view('hotProduct',['product'=>$data]);
        }
        //get product normal
        public function normalProduct(){
            $data = DB::table('product')->where('cate','normal')->get();
            return view('normalProduct',['product'=>$data]);
        }//get product sale
        public function saleProduct(){
            $data = DB::table('product')->where('cate','sale')->get();
            return view('saleProduct',['product'=>$data]);
        }

    // return view add product
    public function add_product(){
        return view('addproduct');
    }

    // insert product to database
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
                return Redirect::to('add');
            }else{
                DB::table('product')->insert($data);
                FacadesSession::put('message','Thêm sản phẩm thành công');
                return Redirect::to('category');
            }
    }

    // return view edit 
    public function edit_product($product_id){
        $edit_product = DB::table('product')->where('id',$product_id)->get();
        return view('edit',['edit_product' => $edit_product]);
    }

    // edit information of product
    public function update_product(Request $request,$product_id){
        
        $data = array();
        $data['name'] = $request->product_name;
        $data['cost'] = $request->product_price;
        $data['cate'] = $request->product_cate;

        DB::table('product')->where('id',$product_id)->update($data);
        FacadesSession::put('message','Cập nhật thành công');
        return Redirect::to('category');
    }

    // DELETE
    // delete product
    public function delete_product($product_id){
        DB::table('product')->where('id',$product_id)->delete();
        FacadesSession::put('message',"Đã xóa sản phẩm");
        return Redirect::to('category');
    }
}
