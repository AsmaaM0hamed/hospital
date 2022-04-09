<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $doctors=DB::table('doctors')->get();

         return view('user.home',compact('doctors'));
    }
    public function rediresct()
    {
        if(Auth::id())
        {
            if(Auth::user()->type=='0')
            {
                $doctors=DB::table('doctors')->get();
               return view('user.home',compact('doctors'));
            }
            else
            {
                return view('admin.home');
            }

        }
        else
        {
            return redirect()->back();
        }
    }
    public function appointment(Request $request)
    {
        appointment::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'date'=>$request->date,
            'dr_name'=>$request->dr_name,
            'phon_number'=>$request->number,
            'nots'=>$request->nots,
        ]);
      return redirect()->back()->with('msg','تم حجز الموعد ...سوف نتواصل معك من خلال واتساب');
    }
}
