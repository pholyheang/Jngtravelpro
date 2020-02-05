<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Category;
use Intervention\Image\ImageManagerStatic as Image;
class ProgramController extends Controller
{
    //
    //
    public function getList(){
        $posts = Post::orderBy('id', 'desc')->get();
    	return view('admin.post.list_post', compact('posts'));
    }

    public function getPost(){
    	return view('admin.post.form_post');
    }
  
    public function AddPost(Request $req){
        if ($req->hasFile('image')) {
            $image     = $req->file('image');
            $filename  = time().'-'.$image->getClientOriginalName();
        }else{
            $filename = "";
        }
        $aPost = new Post;
        $aPost->title = $req->title;
        $aPost->category_id = $req->category;
        $aPost->icon = $req->icon;
        $aPost->slug = str_slug($req->title, '-');
        $aPost->intro = $req->intro;
        $aPost->user_id = \Auth::user()->id;
        $aPost->image = $filename;
        if($aPost->save()){
            if ($req->hasFile('image')) {       
            	$img = Image::make($image->getRealPath())->resize(300, 200);
       			$img->save(public_path('photos/share/thumbs/'.$filename));         
                $image->move(public_path('photos/share/'), $filename);  				
            }   
            return back()->with('message', 'Published');
        }
    }

    public function getEditPost($id){
        $post = Post::find($id);
        return view('admin.post.form_edit_post', compact('post'));
    }

    public function updatePost(Request $req){
        if ($req->hasFile('image')) {
            $image     = $req->file('image');
            $filename  = time().'-'.$image->getClientOriginalName();
        }else{
            $filename = $req->old_image;
        }
        $aPost = Post::find($req->eid);
        $aPost->title = $req->title;
        $aPost->category_id = $req->category;
        $aPost->icon = $req->icon;
        $aPost->slug = str_slug($req->title, '-');
        $aPost->intro = $req->intro;
        $aPost->user_id = \Auth::user()->id;
        $aPost->image = $filename;
        if($aPost->save()){
            if ($req->hasFile('image')) {       
                $img = Image::make($image->getRealPath())->resize(300, 200);
                $img->save(public_path('photos/share/thumbs/'.$filename));         
                $image->move(public_path('photos/share/'), $filename);                
            }   
            return back()->with('message', 'Update Success');
        }
    }

    public function Delete(Request $req){
        if (Post::find($req->dataId)->delete()) {
            return response()
                ->json(['message' => 'Delete Success', 'status' => 1]);
        }
    }

    public function getCategory(){
        $getCat = Category::orderBy('title', 'ASC')->paginate(8);
        return view('admin.category.categoryList', compact('getCat'));
    }

    public function getAppCategory(){
        $cat = Category::orderBy('id', 'desc')->get();
        return response()->json($cat);
    }

    public function addCategory(Request $req){
        if (!Category::CheckCat($req->title)) {
            $addCat = new Category;
            $addCat->title = $req->title;
            $addCat->slug = str_slug($req->title, '-');
            $addCat->details = $req->details;
            if ($addCat->save()) {
                return response()->json(['message' => 'Success']);
            } 
        }else{
            return response()->json(['message' => 'Category name already exits']);
        }
    }

    public function updateCategory(Request $req){
        if (!Category::CheckCat($req->title)) {
            $addCat = Category::find($req->id);
            $addCat->title = $req->title;
            $addCat->slug = str_slug($req->title, '-');
            $addCat->details = $req->details;
            if ($addCat->save()) {
                return response()->json(['message' => 'Update Success']);
            } 
        }else{
            return response()->json(['message' => 'Category name already exits']);
        } 
    }

    public function DeleteCat( Request $req){
        if (Category::find($req->dataId)->delete()) {
            return response()->json(['message' => 'Delete Success']);
        }else{
            return response()->json(['message' => 'Fails to delete this item']);           
        }
    }

    public function getService(){
        $posts = Post::where('category_id', 1)->orderBy('id', 'desc')->get();
        return view('admin.service_package.serviceList', compact('posts'));
    }

    public function getOurService(){
        $posts = Post::where('category_id', 2)->orderBy('id', 'desc')->get();
        return view('admin.our_service.ourserviceList', compact('posts'));
    }


    // Category section

}
