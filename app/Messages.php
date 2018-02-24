<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
	protected $table = 'tweet';
    protected $fillable = [
       'message_id', 'screen_name', 'id', 'text', 'time_tweet','prediction'
    ];
}
