<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Attachment;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::orderBy('id' , 'desc')->paginate(5);
        return response()->view('cms.admin.index' , compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        // $roles = Role::where('guard_name' , 'admin')->get();
        return response()->view('cms.admin.create' ,compact('cities'));
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
            'name' => 'required' ,
            'identity' => 'required' ,
            'email' => 'required|email' ,
            'password' => 'required' ,
            'mobile' => 'required' ,
            'address' => 'required' ,
            'dob' => 'required' ,
            'gender' => 'required' ,
            'status' => 'required' ,

        ] ,[

        ]);

        if(! $validator->fails()){
            // data in admins table
            $admins = new Admin();
            $admins->email = $request->input('email');
            $admins->password = Hash::make($request->input('password'));

            $isSaved = $admins->save();

            if($isSaved){
                // data in users table
                $users = new User();

                // $roles = Role::findOrFail($request->get('role_id'));
                // $admins->assignRole($roles->name);

                $users->name = $request->input('name');
                $users->identity = $request->input('identity');
                $users->mobile = $request->input('mobile');
                $users->address = $request->input('address');
                $users->dob = $request->input('dob');
                $users->gender = $request->input('gender');
                $users->status = $request->input('status');
                $users->city_id = $request->input('city_id');
                $users->actor()->associate($admins);

                $isSaved = $users->save();
                if($isSaved){
                    // data in attachments table
                    $attachments = new Attachment();
                    if (request()->hasFile('fileUrl')) {
                        $file = $request->file('fileUrl');
                        $fileName = time() . $file->getClientOriginalExtension();
                        $file->move('storage/'.$request->fileType.'/admin', $fileName);
                        $attachments->fileUrl = $fileName;

                    }else{
                        $attachments->fileUrl ='AdminLTELogo.png';
                    }

                    $attachments->fileType = $request->fileType;
                    $attachments->actor()->associate($users);
                    $isSaved = $attachments->save();


                }


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
        $admins = Admin::findOrFail($id);
        return response()->view('cms.admin.show' , compact('admins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cities= City::all();
        $admins = Admin::findOrFail($id);
        return response()->view('cms.admin.edit' , compact('admins','cities'));
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
            'name' => 'required' ,
            'identity' => 'required' ,
            'email' => 'required|email' ,
            'mobile' => 'required' ,
            'address' => 'required' ,
            'dob' => 'required' ,
            'gender' => 'required' ,
            'status' => 'required' ,

        ] ,[

        ]);

        if(! $validator->fails()){
            // data in admins table
            $admins = Admin::findOrFail($id);
            $admins->email = $request->input('email');
            $admins->password = Hash::make($request->input('password'));

            $isSaved = $admins->save();

            if($isSaved){
                // data in users table
                $users = $admins->user;

                // $roles = Role::findOrFail($request->get('role_id'));
                // $admins->assignRole($roles->name);

                $users->name = $request->input('name');
                $users->identity = $request->input('identity');
                $users->mobile = $request->input('mobile');
                $users->address = $request->input('address');
                $users->dob = $request->input('dob');
                $users->gender = $request->input('gender');
                $users->status = $request->input('status');
                $users->city_id = $request->input('city_id');
                $users->actor()->associate($admins);
                $isSaved = $users->save();

                if($isSaved){
                    // data in attachments table
                    $attachments = $users->attachment;

                    if (request()->hasFile('fileUrl')) {
                        $file = $request->file('fileUrl');
                        $fileName = time() . $file->getClientOriginalExtension();
                        $file->move('storage/'.$request->fileType.'/admin', $fileName);
                        $attachments->fileUrl = $fileName;

                    }else{

                        $attachments->fileUrl ='AdminLTELogo.png';
                    }

                    $attachments->fileType = $request->fileType;
                    $attachments->actor()->associate($users);
                    $isSaved = $attachments->save();


                }



                return ['redirect' => route('admins.index')];


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
        $admins = Admin::findOrFail($id)->delete();
    }
}
