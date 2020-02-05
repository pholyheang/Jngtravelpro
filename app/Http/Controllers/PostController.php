<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\News;
use Intervention\Image\ImageManagerStatic as Image;
class PostController extends Controller
{
    //
    public function getNewsList(){
    	$news = News::orderBy('id', 'desc')->get();
    	return view('admin.news.newsList', compact('news'));
    }

    public function getNewsForm(){
    	return view('admin.news.newsForm');
    }

    public function AddNews(Request $req){
    	if ($req->hasFile('image')) {
            $image     = $req->file('image');
            $filename  = time().'-'.$image->getClientOriginalName();
        }else{
            $filename = "";
        }
        $aPost = new News;
        $aPost->title = $req->title;
        // $aPost->category_id = $req->category;
        $aPost->slug = str_slug($req->title, '-');
        $aPost->details = $req->intro;
        $aPost->user_id = \Auth::user()->id;
        $aPost->photo = $filename;
        if($aPost->save()){
            if ($req->hasFile('image')) {       
                $img = Image::make($image->getRealPath())->resize(300, 200);
                $img->save(public_path('photos/share/thumbs/'.$filename));         
                $image->move(public_path('photos/share/'), $filename);               
            }   
            return back()->with('message', 'Published');
        }
    }

    public function getUpdate($id) {
        $news = News::find($id);
        return view('admin.news.newsFormedit', compact('news'));
    }

    public function updateNews (Request $req){
        if ($req->hasFile('image')) {
            $image     = $req->file('image');
            $filename  = time().'-'.$image->getClientOriginalName();
        }else{
            $filename = $req->old_image;
        }
        $aPost = News::find($req->id);
        $aPost->title = $req->title;
        $aPost->slug = str_slug($req->title, '-');
        $aPost->details = $req->intro;
        $aPost->user_id = \Auth::user()->id;
        $aPost->photo = $filename;
        if($aPost->save()){
            if ($req->hasFile('image')) {       
                $img = Image::make($image->getRealPath())->resize(300, 200);
                $img->save(public_path('photos/share/thumbs/'.$filename));         
                $image->move(public_path('photos/share/'), $filename);               
            }   
            return back()->with('message', 'Update Success');
        }
    }

    public function deleteNews(Request $req){
        if ( News::find($req->dataId)->delete() ) {         
            return response()
                ->json(['message' => 'Delete Success', 'status' => 1]);
        }
    }

}
