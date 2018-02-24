<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticsController extends Controller
{
    public function index(){
		$data = Messages::orderBy('message_id','desc')->paginate(15);
		
		//DD($data->all()); 
		
		return view("/home",['data'=>$data]);
	}
}
