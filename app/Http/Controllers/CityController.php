<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cities = City::with('country')->orderBy('id' , 'desc')->paginate(15);

        return response()->view('cms.city.index' , compact('cities'));




    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::get();
        return response()->view('cms.city.create' , compact('countries'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator($request->all(),[
            'name' => 'required|string|min:3|max:20',
            'street' => 'required',
            'country_id' => 'required',
        ]);

        if (! $validated->fails()){

            $cities = new City ;
            $cities->name = $request->get('name');
            $cities->street = $request->get('street');
            $cities->country_id = $request->get('country_id');

            $isSeved = $cities->save();


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
        $cities = City::findOrFail($id);
        $countries = Country::all();
        return response()->view('cms.city.edit' , compact('cities' , 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $validated = Validator($request->all(),[
            'name' => 'required|string|min:3|max:20',
            'street' => 'required',
            'country_id' => 'required',
        ]);

        if (! $validated->fails()){
            $cities = City::findOrFail($id) ;
            $cities->name = $request->get('name');
            $cities->street = $request->get('street');
            $cities->country_id = $request->get('country_id');

            $isUpdate = $cities->save();
            return ['redirect' => route('cities.index')];

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
               $cities = City::destroy($id);

    }
}
