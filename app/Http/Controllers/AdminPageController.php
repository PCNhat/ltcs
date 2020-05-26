<?php

namespace App\Http\Controllers;
use Validator,DB;
use Illuminate\Http\Request;
use Auth;
class AdminPageController extends Controller
{
    public function getDashBoard(){
        $data['name'] = Auth::user()->name;
        return view('backend.dashboard',$data);
    }
    public function getAddCategories(){
        return view('backend.add.add_categories');
    }
    public function postAddCategories(Request $request){
        $rules = [
            'cate_name'=>'required',
            'cate_des'=>'required',
            'mode'=>'required'
        ];
        $messages = [
            'cate_name.required' => 'Không được để trống Tên danh mục.',
            'cate_des.required' => 'Không được để trống Mô tả danh mục.',
            'mode.required' => 'Không được để trống Chế độ hiển thị.'
        ];
        $vali = Validator::make($request->all(),$rules,$messages);
        if($vali->fails()){
            return redirect()->back()->withErrors($messages);
        }
        else{
            $data = [
                'cate_name' => $request->cate_name,
                'cate_des' => $request->cate_des,
                'mode' => $request->mode
            ];
            $sql = DB::table('categories')->insert($data);
            if($sql == true){
                return redirect()->back()->with('success','Thêm danh mục thành công.');
            }
            else{
                return redirect()->back()->with('fails','Thêm danh mục thất bại');
            }
        }
    }
    public function getListCategories(){
        $data['cate'] = DB::table('categories')->orderBy('id','DESC')->get();
        return view('backend.list.list_categories',$data);
    }
    public function deleteCategories($id){
        $sql = DB::table('categories')->where('id',$id)->delete();
        if($sql == true){
            return redirect()->route('list.categories')->with('success','Xóa thành công!');
        }
        else{
            return redirect()->route('list.categories')->with('fails','Xóa thất bại!');
        }
    }

    public function getEditCategories($id){
        $data['cate'] = DB::table('categories')->where('id',$id)->get();
        return view('backend.edit.edit_categories',$data);
    }
    public function postEditCategories($id,Request $request){
        $rules = [
            'cate_name'=>'required',
            'cate_des'=>'required',
            'mode'=>'required'
        ];
        $messages = [
            'cate_name.required' => 'Không được bỏ trống Tên danh mục.',
            'cate_des.required' => 'Không được bỏ trống Mô tả danh mục',
            'mode.required' => 'Không được bỏ trống Chế độ hiển thị',
        ];
        $vali = Validator::make($request->all(),$rules,$messages);
        if($vali->fails()){
            return redirect()->back()->withErrors($messages);
        }
        else{
            $data = [
                'cate_name' => $request->cate_name,
                'cate_des' => $request->cate_des,
                'mode' => $request->mode
            ];
            $sql = DB::table('categories')->where('id',$id)->update($data);
            if($sql == true){
                return redirect()->route('list.categories')->with('success','Cập nhật danh mục thành công!');
            }
            else{
                return redirect()->route('list.categories')->with('fails','Cập nhật danh mục không thành công!');
            }
        }
    }







    public function getAddInfoPost(){
        $data['categories'] = DB::table('categories')->select('id','cate_name')->get();
        return view('backend.add.add_info_post',$data);
    }
    public function postAddInfoPost(Request $request){
        $rules = [
            'post_name' => 'required',
            'post_img' => 'required',
        ];
        $messages = [
            'post_name.required' => 'Không được để trống Tiêu đề bài viết.',
            'post_img.required' => 'Không đươc để trống Hình ảnh minh họa.',
        ];
        $vali = Validator::make($request->all(),$rules,$messages);
        if($vali->fails()){
            return redirect()->back()->withErrors($messages);
        }
        else{
            $post_des = $request->post_des;
            if($post_des == null) $post_des = '';
            $img = $request->post_img;
            if($img->getMimeType() == 'image/jpeg' || $img->getMimeType() == 'image/png' || $img->getMimeType() == 'image/svg+xml' || $img->getMimeType() == 'image/gif'){
                $img->move('images',$img->getClientOriginalName());
                $data = [
                    'cate_id' => $request->cate_id,
                    'post_name' => $request->post_name,
                    'post_img' =>$img->getClientOriginalName(),
                    'post_des' => $post_des
                ];
                $sql = DB::table('info_post')->insert($data);
                if($sql == true){
                    return redirect()->back()->with('success','Thêm gới thiệu bài viết thành công');
                }
                else{
                    return redirect()->back()->with('fails','Thêm giới thiệu bài viết thất bại');
                }
            }
            else{
                return redirect()->back()->with('fails','File cậu vừa chọn không phải file ảnh cậu ơi!');
            }
            
        }
    }
    public function getListInfoPost(){
        $data['categories'] = DB::table('categories')->select('id','cate_name')->get();
        $data['info_post'] = DB::table('info_post')->orderBy('id','DESC')->paginate(4);
        return view('backend.list.list_info_post',$data);
    }
    public function deleteInfoPost($id){
        $sql = DB::table('info_post')->where('id',$id)->delete();
        if($sql == true){
            return redirect()->route('list.infopost')->with('success','Xóa thành công!');
        }
        else{
            return redirect()->route('list.infopost')->with('fails','Xóa thất bại!');
        }
    }
    public function getEditInfoPost($id){
        $data['categories'] = DB::table('categories')->select('id','cate_name')->get();
        $data['info'] = DB::table('info_post')->where('id',$id)->get();
        return view('backend.edit.edit_info_post',$data);
    }
}
