<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class emp extends Controller
{
    
        function add_emp(Request $req){
            $emp=new employee;
            $emp->ename=$req->ename;
            $emp->post=$req->post;
            $emp->contact=$req->contact;
            $emp->salary=$req->salary;
            $emp->save();
            return redirect('/');
            
        }

    
    function show_emp(){
        $data=employee::all();
        return view('welcome',['show_emp'=>$data]);

    }
    function edit_data($id){
        $data=employee::find($id);
      return view('edit_data',['emp_data'=>$data]);
    }
    function update_data(Request $req){
        $emp=employee::find($req->id);
        $emp->ename=$req->ename;
        $emp->post=$req->post;
        $emp->contact=$req->contact;
        $emp->salary=$req->salary;
        $emp->save();
        return redirect('/');

    }
    function del($id){
        $data=employee::find($id);
        $data->delete();
        return redirect('/');
    }
}
