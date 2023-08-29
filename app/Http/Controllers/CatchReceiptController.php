<?php

namespace App\Http\Controllers;

use App\Models\CatchReceipt;
use Illuminate\Http\Request;

class CatchReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catchreceipts = CatchReceipt::orderBy('id' , 'desc')->paginate(15);

        return response()->view('cms.catchreceipts.index' , compact('catchreceipts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.catchreceipts.create');
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
            'discrption' => 'required',
            'date' => 'required',
            'price' => 'required',
        ]);

        if (! $validated->fails()){

            $catchreceipts = new CatchReceipt ;
            $catchreceipts->discrption = $request->get('discrption');
            $catchreceipts->date = $request->get('date');
            $catchreceipts->price = $request->get('price');

            $isSeved = $catchreceipts->save();


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
        $catchreceipts = CatchReceipt::findOrFail($id);
        return response()->view('cms.catchreceipts.edit' , compact('catchreceipts'));

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
            'discrption' => 'required',
            'date' => 'required',
            'price' => 'required',
        ]);

        if (! $validated->fails()){

            $catchreceipts = CatchReceipt::findOrFail($id) ;
            $catchreceipts->discrption = $request->get('discrption');
            $catchreceipts->date = $request->get('date');
            $catchreceipts->price = $request->get('price');


            $isUpdate = $catchreceipts->save();
            return ['redirect' => route('catchreceipts.index')];



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
        $catchreceipts = CatchReceipt::destroy($id);
    }
}
