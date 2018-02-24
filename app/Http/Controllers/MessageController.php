<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Messages;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class MessageController extends Controller
{
    
	public function index(){
		$data = Messages::orderBy('message_id','desc')->paginate(15);
		$numPositive = Messages::where('prediction','positive')->count();
		$numNegative = Messages::where('prediction','negative')->count();
		$totalMessage = Messages::count();
		// DD("Positive:",$numPositive,", Negative:",$numNegative); 
		$total = $numNegative + $numPositive;
		$avgPos = round(($numPositive/$total)*100);
		$avgNeg = round(($numNegative/$total)*100);
		// DD("Positive:".$numPositive." ".$avgPos," Negative:".$numNegative." ".$avgNeg);

		return view("/home",
			[	'data'=>$data,
				'Positive'=>$numPositive,
				'Negative'=>$numNegative,
				'avgPos'=>$avgPos,
				'avgNeg'=>$avgNeg,
				'total'=>$totalMessage
			]);
	}


	public function getData(){

	}
}
