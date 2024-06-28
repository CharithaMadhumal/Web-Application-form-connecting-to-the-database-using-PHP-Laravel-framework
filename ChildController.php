<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function AddChild(){
        return view('index');
    }

    public function save(Request $request){

     Child::create([
         'children_name' => $request->name,
         'children_email' => $request->email,
         'children_number' => $request->number,
         'children_dob' => $request->dob
     ]);

     $notification = [
        "message" => "Student Added Successfully"
     ];

     return redirect()->back()->with($notification);
    }
}
