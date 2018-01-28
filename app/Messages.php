<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
	protected $table = 'tweet';
    protected $fillable = [
       'message_id', 'username', 'id', 'text', 'time_tweet'
    ];
}
