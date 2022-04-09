<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin1Controller extends Controller
{

    public function index()
    {
        //
        $doctors=DB::table('doctors')->get();

        return view('admin.doctors',compact('doctors'));
    }


    public function create()
    {
        //
        return view('admin.add_doctor');
    }


    public function store(Request $request)
    {
        //
        $doctor=new doctor;
        $img=$request->img;
        $imgName=time().".".$img->getClientOriginalExtension();
        $request->img->move("doctorimg",$imgName);
        doctor::create([
            'name'=>$request->dr_name,
            'phon'=>$request->dr_number,
            'speciality'=>$request->dr_speciality,
            'img_name'=>$imgName,
        ]);
        return redirect()->back()->with('msg','تم اضافة الطبيب بنجاح ');
    }


    public function edit($id)
    {
        //
        $doctors=doctor::findorfail($id);
        return view('admin.edit_doctor',compact('doctors'));
    }


    public function update(Request $request, $id)
    {
        //
        $doctor=doctor::findorfail($id);
        $img=$request->img;
        $imgName=time().".".$img->getClientOriginalExtension();
        $request->img->move("doctorimg",$imgName);
        $doctor->name=$request->dr_name;
        $doctor->phon=$request->dr_number;
        $doctor->speciality=$request->dr_speciality;
        $doctor->img_name=$imgName;
        $doctor->save();

        return redirect()->route('doctor.index')->with('msge','تم تعديل الطبيب بنجاح ');
    }


    public function destroy($id)
    {
        //
       doctor::destroy($id);
     return redirect()->back()->with("msgd","تم الحذف بنجاح ");

    }


}
