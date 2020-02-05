<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactUs;

use \App\Post;
use \App\News;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    //
    public function getHomePage(){
    	return view('index');
    }

    public function getPostDetails($name){
    	$post = Post::where('slug', $name)->first();
    	return view('program_details.program_details', compact('post'));
    }

    public function contact(){
    	return view('contactUs.contact');
    }

    public function contactForm(Request $req){
        $data = [ 'username' => $req->username,
                    'email' => $req->email,
                    'phone' => $req->phone,
                    'topic' => $req->topic,
                    'message' => $req->message
                ];
        Mail::to(config('app.email'))->send(new ContactUs($data));
        return back()->with('message', 'Thanks for your email, we will get back to you shortly.');   	// return response()
            // ->json(['message' => 'Your message has been seen']);	
    }

    public function getService(){
        return view('service.service');
    }

    public function getNews(){
        $news = News::orderBy('id', 'DEC')->paginate(8);
        return view('news.news', compact('news'));
    }

    public function getNewsDetails($name){
        $new = News::where('slug', $name)->first();
        return view('news.single_view', compact('new'));
    }
}
