<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Dotenv\Validator;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::withcount('cities')->orderBy('id' , 'desc')->paginate(15);

        return response()->view('cms.country.index' , compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('cms.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validdator = Validator($request->all(),)
        $validated = Validator($request->all(),[
            'name' => 'required|string|min:3|max:20',
            'code' => 'required|numeric|digits:4',
        ]);

        if (! $validated->fails()){

            $countries = new Country ;

            $countries->name = $request->get('name');
            $countries->code = $request->get('code');

            $isSeved = $countries->save();


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
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $countries = Country::findOrFail($id);
        return response()->view('cms.country.edit' , compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $validated = Validator($request->all(),[
            'name' => 'required|string|min:3|max:20',
            'code' => 'required|numeric|digits:4',
        ]);

        if (! $validated->fails()){

            $countries = Country::findOrFail($id) ;

            $countries->name = $request->get('name');
            $countries->code = $request->get('code');

            $isUpdate = $countries->save();


            return ['redirect' => route('countries.index')];


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
     */
    public function destroy(string $id)
    {
        $countries = Country::destroy($id);
    }
}
