<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Client;

use Intervention\Image\ImageManagerStatic as Image;
class ClientController extends Controller
{
    //
    public function getClientList(){
    	$clients =  Client::orderBy('client_name', "ASC")->get();
    	return view('admin.client.ClientList',compact('clients'));
    }


    public function getClientForm(){
    	return view('admin.client.clientForm');
    }

    public function clientCreate(Request $req){
    	// return $req->all();
    	if ($req->hasFile('image')) {
            $image     = $req->file('image');
            $filename  = time().'-'.$image->getClientOriginalName();
        }else{
            $filename = "";
        }
        $aPost = new Client;
        $aPost->client_name = $req->title;
        $aPost->slug = str_slug($req->title, '-');
        $aPost->description = $req->intro;
        $aPost->user_id = \Auth::user()->id;
        $aPost->logo = $filename;
        if($aPost->save()){
            if ($req->hasFile('image')) {       
                $img = Image::make($image->getRealPath())->resize(300, 200);
                $img->save(public_path('photos/share/thumbs/'.$filename));         
                $image->move(public_path('photos/share/'), $filename);               
            }   
            return back()->with('message', 'Client has been created');
        }
    }

    public function getClientedit($id){
        $client = Client::find($id);
        return view('admin.client.clientFormEdit', compact('client'));
    }

    public function clientUpdate(Request $req){
        if ($req->hasFile('image')) {
            $image     = $req->file('image');
            $filename  = time().'-'.$image->getClientOriginalName();
        }else{
            $filename = $req->old_image;
        }
        $aPost = Client::find($req->id);
        $aPost->client_name = $req->title;
        $aPost->slug = str_slug($req->title, '-');
        $aPost->description = $req->intro;
        $aPost->user_id = \Auth::user()->id;
        $aPost->logo = $filename;
        if($aPost->save()){
            if ($req->hasFile('image')) {       
                $img = Image::make($image->getRealPath())->resize(300, 200);
                $img->save(public_path('photos/share/thumbs/'.$filename));         
                $image->move(public_path('photos/share/'), $filename);               
            }   
            return back()->with('message', 'Client has been update');
        }
    }

    public function getClientDelete(Request $req){
        if ( Client::find($req->dataId)->delete() ) {         
            return response()
                ->json(['message' => 'Delete Success']);
        }
    }

}
