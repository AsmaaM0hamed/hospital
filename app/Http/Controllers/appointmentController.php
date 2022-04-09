<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class appointmentController extends Controller
{

    public function index()
    {
        //
        $appoints=DB::table('appointments')->get();
    return view('admin.appoints',compact('appoints'));
    }


    public function destroy($id)
    {
        //
        appointment::destroy($id);
        return redirect()->back()->with("msgd","تم الحذف بنجاح");
     }

}
