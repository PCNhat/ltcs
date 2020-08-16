<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $data['cate'] = DB::table('categories')->get();
        foreach($data['cate'] as $val){
            if($val->mode == 1) $arr[] = $val->id;
        }
        $data['info_post'] = DB::table('info_post')->where('cate_id','<>',$arr)->orderBy('id','DESC')->paginate(15);
        return view('frontend.index',$data);
    }
    public function getCourse(){
        return view('frontend.course');
    }
    public function getGood_post(){
        return view('frontend.good_post');
    }
    public function getAuthor(){
        return view('frontend.author');
    }
    public function getNav($page){
        return view('frontend.products.products');
    }
    public function productDetail()
    {
        return view('frontend.products.product_detail');
    }
    public function compareProducts()
    {
        return view('frontend.products.compare_products');
    }
}
