<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Messages;



class MessageController extends Controller
{
    
	public function index(){
		$data = Messages::all();
		//DD($data->all());
		return view("/home",['data'=>$data]);
	}


	public function getData(){

	}
}
