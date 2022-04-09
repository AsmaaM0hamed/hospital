<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=DB::table('users')->get();
        return view('admin.allusers',compact('users'));
    }


    public function update( $id)
    {
        //
        $user=User::findorfail($id);
        if($user->type=='1')
        {
          $user->type='0';
          $user->save();

        }
         else
         {
            $user->type='1';
            $user->save();
         }

         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::destroy($id);
        return redirect()->back()->with("msgd","تم الحذف بنجاح");
    }
}
