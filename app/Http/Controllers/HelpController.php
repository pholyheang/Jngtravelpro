<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docs;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($getslug)
    {   
        $item = Docs::where('slug', $getslug)->first();
        return view('docs.help.index', compact('item'));
    }

    public function research(Request $req)
    {        
        $data_dosc = Docs::where('title', 'like', '%' . $req->search . '%')->get();
        $arrayName = [];
        foreach ($data_dosc as $key => $value) {

            $arrayName[] = array('id' => $value->id ,
                               'title' => $value->title ,
                               'desc' => str_limit($value->desc, 300) ,
                               'slug' => $value->slug );
        }
        return response()->json($arrayName);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('docs.help.search');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
