<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Employee;
use App\Models\Investor;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('id' , 'desc')->paginate(5);
        return response()->view('cms.car.index' , compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $employees=Employee::all();
      $investors=Investor::all();
      return response()->view('cms.car.create',compact('employees','investors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all() , [
            'type_car' => 'required' ,
            'car_license' => 'required' ,
            'status' => 'required|email' ,
            'rental_price' => 'required' ,
            'gear_type' => 'required' ,
            'employee_id' => 'required' ,
            'investor_id' => 'required' ,


        ] ,[

        ]);

        if(! $validator->fails()){
            $cars = new Car();
            $cars->type_car = $request->input('type_car');
            $cars->car_license = $request->input('car_license');
            $cars->status = $request->input('status');
            $cars->rental_price = $request->input('rental_price');
            $cars->gear_type = $request->input('gear_type');
            $cars->employee_id = $request->input('employee_id');
            $cars->investor_id = $request->input('investor_id');


            $isSaved = $cars->save();
                if($isSaved){


                return response()->json([
                    'icon' => 'success' ,
                    'title' => 'Created is Successfully'

                ] , 200);


            }
        }
        // if validator failed
        else{
            return response()->json([
                'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first()
            ] , 400);
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
        $cars=Car::findOrFail($id);
        $employees=Employee::all();
        $investors=Investor::all();
        return response()->view('cms.city.edit',compact('cars','employees','investors'));
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
        $validator = Validator($request->all() , [
            'type_car' => 'required' ,
            'car_license' => 'required' ,
            'status' => 'required|email' ,
            'rental_price' => 'required' ,
            'gear_type' => 'required' ,
            'employee_id' => 'required' ,
            'investor_id' => 'required' ,


        ] ,[

        ]);

        if(! $validator->fails()){
            $cars = Car::findOrFail($id);
            $cars->type_car = $request->input('type_car');
            $cars->car_license = $request->input('car_license');
            $cars->status = $request->input('status');
            $cars->rental_price = $request->input('rental_price');
            $cars->gear_type = $request->input('gear_type');
            $cars->employee_id = $request->input('employee_id');
            $cars->investor_id = $request->input('investor_id');


            $isSaved = $cars->save();
                if($isSaved){


              return['redirect'=>route('cars.index')];


            }
        }
        // if validator failed
        else{
            return response()->json([
                'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first()
            ] , 400);
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
       $cars=Car::destroy($id);
    }
}
