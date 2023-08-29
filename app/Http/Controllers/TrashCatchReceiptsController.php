<?php

namespace App\Http\Controllers;

use App\Models\CatchReceipt;
use Illuminate\Http\Request;

class TrashCatchReceiptsController extends Controller
{

    public function indexTrash(){


        $catchreceipts = CatchReceipt::onlyTrashed()->paginate(15);
        return response()->view('cms.catchreceipts.trashcatch' , compact('catchreceipts'));


    }


    public function restoreALL(){


        $catchreceipts = CatchReceipt::onlyTrashed()->restore();


        if ($catchreceipts){

            // return redirect('/cms/catchreceipts');

            // return redirect(view('cms.catchreceipts.trashcatch'))
            return redirect()->back()->with('success', 'تم الاستعادة');


        }
        else {

            //
        }
    }


    // public function restore($id){


    //     $catchreceipts = CatchReceipt::onlyTrashed()->restore($id);


    //     if ($catchreceipts){

    //         return redirect('/cms/admin/catchreceipts');

    //     }
    //     else {

    //         //
    //     }
    // }


    public function restore($id)
    {
        $catchreceipts = CatchReceipt::withTrashed()
                        ->where('id', $id)
                        ->restore();
        // return redirect('cms/catchreceipts/indexTrash')->with('CatchReceipt', 'Restored Successfully');
        // return redirect(view('cms.catchreceipts.trashcatch'));
        return redirect()->back()->with('CatchReceipt', 'Restored Successfully');


    }



    public function foceDeleteEle($id)
    {
        $catchreceipts = CatchReceipt::withTrashed()
                        ->where('id', $id)
                        ->forceDelete();

        // return redirect('cms/catchreceipts/indexTrash')->with('CatchReceipt', 'Restored Successfully');
        return redirect()->back()->with('CatchReceipt', 'Restored Successfully');


    }

}
