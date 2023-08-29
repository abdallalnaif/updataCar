<?php

namespace App\Http\Controllers;

use App\Models\AnotherExpense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnotherExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anotherexpenses = AnotherExpense::orderBy('id' , 'desc')->paginate(15);

        return response()->view('cms.anotherexpenses.index' , compact('anotherexpenses'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.anotherexpenses.create');
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
            'name' => 'required|string|min:3|max:20',
            'discrption' => 'required',
            'date' => 'required',
            'price' => 'required',
        ]);

        if (! $validated->fails()){

            $anotherexpenses = new AnotherExpense ;
            $anotherexpenses->name = $request->get('name');
            $anotherexpenses->discrption = $request->get('discrption');
            $anotherexpenses->date = $request->get('date');
            $anotherexpenses->price = $request->get('price');

            $isSeved = $anotherexpenses->save();


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
        $anotherexpenses = AnotherExpense::findOrFail($id);
        return response()->view('cms.anotherexpenses.edit' , compact('anotherexpenses'));


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
            'name' => 'required|string|min:3|max:20',
            'discrption' => 'required',
            'date' => 'required',
            'price' => 'required',
        ]);

        if (! $validated->fails()){

            $anotherexpenses = AnotherExpense::findOrFail($id) ;
            $anotherexpenses->name = $request->get('name');
            $anotherexpenses->discrption = $request->get('discrption');
            $anotherexpenses->date = $request->get('date');
            $anotherexpenses->price = $request->get('price');


            $isUpdate = $anotherexpenses->save();
            return ['redirect' => route('anotherexpenses.index')];



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
        $anotherexpenses = AnotherExpense::destroy($id);
    }
}
