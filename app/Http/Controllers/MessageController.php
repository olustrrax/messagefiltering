<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Messages;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class MessageController extends Controller
{
	
	public function index(){
		$data = Messages::where('prediction','negative')
						->orderBy('message_id','desc')->paginate(15);
		$numNegative = Messages::where('prediction','negative')->count();
		$numPositive = Messages::where('prediction','positive')->count();

		$totalMessage = Messages::count();
		return view("/bully",
			[	'data'=>$data,
				'Negative'=>$numNegative,
				'total'=>$totalMessage
			]);
	}
	public function totalMessages(){
		$data = Messages::orderBy('message_id','desc')->paginate(15);
		$numPositive = Messages::where('prediction','positive')->count();
		$numNegative = Messages::where('prediction','negative')->count();
		$totalMessage = Messages::count();
		// DD("Positive:",$numPositive,", Negative:",$numNegative); 
		$avgPos = $avgNeg = 0;
		$total = $numNegative + $numPositive;
		if($total!=0){
			$avgPos = round(($numPositive/$total)*100);
			$avgNeg = round(($numNegative/$total)*100);
		}
		
		// DD("Positive:".$numPositive." ".$avgPos," Negative:".$numNegative." ".$avgNeg);

		return view("/total_messages",
			[	'data'=>$data,
				'Positive'=>$numPositive,
				'Negative'=>$numNegative,
				'avgPos'=>$avgPos,
				'avgNeg'=>$avgNeg,
				'total'=>$totalMessage
			]);
	}


	public function delete(){
		
		DB::statement('SET FOREIGN_KEY_CHECKS=0');
		
		
		DB::table('tw1')->truncate();
		return redirect('/home');
	}
}
