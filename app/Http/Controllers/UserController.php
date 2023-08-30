<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Attachment;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id' , 'desc')->paginate(5);
        return response()->view('cms.user.index' , compact('users'));
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
        return response()->view('cms.user.create' ,compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'first_name' => 'required' ,
            'last_name' => 'required' ,
            'identity' => 'required' ,
            'email' => 'required|email' ,
            'password' => 'required' ,
            'mobile' => 'required' ,
            'address' => 'required' ,
            'gender' => 'required' ,
            'status' => 'required' ,
            'city_id' => 'required' ,
        ];

        $messages = [
            'first_name.required' => 'الاسم مطلوب' ,
        ];

        $validator = Validator($request->all() , $rules , $messages);

        if(! $validator->fails()){

            // data in users table
            $users = new User();
            $users-> email = $request->get('email');
            $users-> password = Hash::make($request->get('password'));
            $users-> first_name = $request->get('first_name');
            $users-> last_name = $request->get('last_name');
            $users-> identity = $request->get('identity');
            $users-> mobile = $request->get('mobile');
            $users-> address = $request->get('address');
            $users-> birth_date = $request->get('birth_date');
            $users-> gender = $request->get('gender');
            $users-> status = $request->get('status');
            $users-> city_id = $request->get('city_id');
            $isSaved = $users->save();
            if(!$isSaved){
                return redirect()->back()->with(['error' => 'مشكلة في حفظ بيانات المستخدم']);
                // return response()->json([
                //     'icon' => 'error' ,
                //     'title' => 'users store failed '
                // ] , 400);
            }
            // data in attachments table
            $attachments = new Attachment();

            if ($request->hasFile('fileUrl')) {
                $file = $request->file('fileUrl');
                $fileName = time() .'.'. $file->getClientOriginalExtension();
                $file->move('storage/'.$request->fileType.'/user', $fileName);
                $attachments->url = $fileName;
            }else{
                $attachments->url ='AdminLTELogo.png';
            }

            $attachments->type = $request->fileType;
            $attachments->actor()->associate($users);
            $isSaved = $attachments->save();
            if(!$isSaved){
                return redirect()->back()->with(['error' => 'مشكلة في رفع المرفقات']);

                // return response()->json([
                //     'icon' => 'error' ,
                //     'title' => 'attachments store failed '
                // ] , 400);
            }

            return redirect()->back()->with(['success' => 'تمت الاضافة بنجاح']);
            // return response()->json([
            //     'icon' => 'success' ,
            //     'title' => 'Created is Successfully'
            // ] , 200);

        }
        // if validator failed
        else{
            return redirect()->back()->withErrors($validator)->withInputs($request->all());

            // return response()->json([
            //     'icon' => 'error' ,
            //     'title' => $validator->getMessageBag()->first()
            // ] , 400);
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
        $users = User::findOrFail($id);
        return response()->view('cms.user.show' , compact('users'));
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
        $users = User::findOrFail($id);
        return response()->view('cms.user.edit' , compact('users','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {

        $rules = [
            'first_name' => 'required' ,
            'last_name' => 'required' ,
            'identity' => 'required' ,
            'email' => 'required|email' ,
            'password' => 'nullable' ,
            'mobile' => 'required' ,
            'address' => 'required' ,
            'gender' => 'required' ,
            'status' => 'required' ,
            'city_id' => 'required' ,
            'fileUrl' => 'nullable' ,
            'fileType' => 'nullable' ,
        ];

        $messages = [
            'first_name.required' => 'الاسم مطلوب' ,
        ];

        $validator = Validator($request->all() , $rules , $messages);

        if(! $validator->fails()){

            // data in users table
            $users = User::findOrFail($id);
            $users-> email = $request->get('email');
            $users-> password = Hash::make($request->get('password'));
            $users-> first_name = $request->get('first_name');
            $users-> last_name = $request->get('last_name');
            $users-> identity = $request->get('identity');
            $users-> mobile = $request->get('mobile');
            $users-> address = $request->get('address');
            $users-> birth_date = $request->get('birth_date');
            $users-> gender = $request->get('gender');
            $users-> status = $request->get('status');
            $users-> city_id = $request->get('city_id');
            $isUpdated = $users->save();

            if(!$isUpdated){
                return redirect()->back()->with(['error' => 'مشكلة في تحديث بيانات المستخدم']);
                // return response()->json([
                //     'icon' => 'error' ,
                //     'title' => 'users store failed '
                // ] , 400);
            }
            // data in attachments table
            $attachments = $users->attachments->first();

            if ($request->hasFile('fileUrl')) {
                $file = $request->file('fileUrl');
                $fileName = time() .'.'. $file->getClientOriginalExtension();
                $file->move('storage/'.$request->fileType.'/user', $fileName);
                $attachments->url = $fileName;
            }

            $attachments->type = $request->fileType;
            $attachments->actor()->associate($users);
            $isUpdated = $attachments->save();
            if(!$isUpdated){
                return redirect()->back()->with(['error' => 'مشكلة في رفع المرفقات']);

                // return response()->json([
                //     'icon' => 'error' ,
                //     'title' => 'attachments store failed '
                // ] , 400);
            }

            return redirect()->route('users.index')->with(['success' => 'تم تحديث البيانات  بنجاح']);
            // return response()->json([
            //     'icon' => 'success' ,
            //     'title' => 'Created is Successfully'
            // ] , 200);

        }
        // if validator failed
        else{

            return redirect()->back()->withErrors($validator)->withInputs($request->all());

            // return response()->json([
            //     'icon' => 'error' ,
            //     'title' => $validator->getMessageBag()->first()
            // ] , 400);
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
        $users = User::findOrFail($id)->delete();

    }
}
