<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Asset::orderBy('id' , 'desc')->paginate(15);

        return response()->view('cms.assets.index' , compact('assets'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.assets.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator($request->all(),[
            'email' => 'required',
            'discrption' => 'required',
            'count' => 'required',
            'status' => 'required',
        ]);

        if (! $validated->fails()){

            $assets = new Asset ;
            $assets->email = $request->get('email');
            $assets->discrption = $request->get('discrption');
            $assets->count = $request->get('count');
            $assets->status = $request->get('status');

            $isSeved = $assets->save();


            if($isSeved){

                return response()->json([
                    "icon" => 'success' ,
                    "title" => 'Created its SccessFly'

                ], 200);
            }
            else{


                return response()->json([
                    "icon" => 'error' ,
                    "title" => $validated->getMessageBag()->first()

                ], 400);


            };



        }
        else {


            return response()->json([
                "icon" => 'error' ,
                "title" => $validated->getMessageBag()->first()

            ], 428);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assets = Asset::findOrFail($id);
        return response()->view('cms.assets.edit' , compact('assets'));

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
        $validated = Validator($request->all(),[
            'email' => 'required',
            'discrption' => 'required',
            'count' => 'required',
            'status' => 'required',
        ]);

        if (! $validated->fails()){

            $assets = Asset::findOrFail($id) ;
            $assets->email = $request->get('email');
            $assets->discrption = $request->get('discrption');
            $assets->count = $request->get('count');
            $assets->status = $request->get('status');

            $isUpdate = $assets->save();
            return ['redirect' => route('assets.index')];



        }
        else {


            return response()->json([
                "icon" => 'error' ,
                "title" => $validated->getMessageBag()->first()

            ], 428);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assets = Asset::destroy($id);
    }
}
