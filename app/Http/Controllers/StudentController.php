<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
class StudentController extends Controller
{
    public function saveStudent(Request $request){
    	$validator=Validator::make($request->all(),[
    		'name' =>'required',
    		'email' =>'required',
    		'mobile' =>'required'
    	]);
    	if(!$validator->passes()){
    		return response()->json(["status"=>0,"error"=>$validator->errors()->toArray()]);
    	}
    	$data=[
    		"name"=>$request->input('name'),
    		"email"=>$request->input('email'),
    		"mobile"=>$request->input('mobile')
    	];
    	$sql=DB::table("students")->insert($data);
    	return response()->json(["status"=>1,"message"=>"Data saved successfully"]);
    }
}
