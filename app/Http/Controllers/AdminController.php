<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\SlideShow;
use Intervention\Image\ImageManagerStatic as Image;
class AdminController extends Controller
{
    //

    public function getAdmin(){
    	return view('admin.index');
    }
// fdsafdsafdsafds
    public function getSlide(){
    	$slides = SlideShow::orderBy('title', 'ASC')->get();
    	return view('admin.slide.SlideList', compact('slides'));
    }

    public function getSlideForm(){

    	return view('admin.slide.homeslide');
    }

    public function addSlide(Request $req){
    	// return $req->file('image');
    	foreach ($req->file('slide') as $key => $value) {
            $filename  = time().'-'.str_random(15).'-'.$value->getClientOriginalName();
    		$Asl = new SlideShow;
    		$Asl->slide = $filename;
            $Asl->slide_for = $req->slide_for;
    		$Asl->intro = $req->intro[$key];
    		$Asl->title = $req->title[$key];
    		$Asl->user_id = \Auth::user()->id;
    		if($Asl->save()){
    			$img = Image::make($value->getRealPath())->resize(300, 200);
       			$img->save(public_path('photos/share/thumbs/'.$filename));         
                $value->move(public_path('photos/share/'), $filename);
    		}
    	}
    	return back()->with('message', 'Slide has been added');
    }

    public function getEditSlide($id){
    	$slide = SlideShow::find($id);
    	return view('admin.slide.slideFormEdit', compact('slide'));
    }
    
    public function udateSlide(Request $req){ 
    	if ($req->hasFile('slide') ) {
            $image = $req->file('slide');
            $filename = time().str_random(15).'-'.$image->getClientOriginalName();
        }else{
        	$filename = $req->old_slide;
        }
        // return $filename;
    	$Asl = SlideShow::find($req->id);
		$Asl->intro = $req->intro;
		$Asl->title = $req->title;
        $Asl->slide_for = $req->slide_for;
		$Asl->slide = $filename;
		$Asl->user_id = \Auth::user()->id;
		if($Asl->save()){
			if ($req->hasFile('slide')) {
				$img = Image::make($image->getRealPath())->resize(300, 200);
       			$img->save(public_path('photos/share/thumbs/'.$filename));         
                $image->move(public_path('photos/share/'), $filename);	
			}    			
			return back()->with('message', 'Slide has been Update');
		}
    }

    public function delete(Request $req){
    	if (SlideShow::find($req->dataId)->delete()) {
            return response()
                ->json(['message' => $req->dataId, 'status' => 1]);
        }
    }
}
