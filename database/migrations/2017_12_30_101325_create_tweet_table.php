<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweet', function (Blueprint $table) {
            $table->increments('message_id');
            $table->string('id');
            $table->string('screen_name');
            $table->string('text');
            $table->string('time_tweet');
            $table->string('prediction');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('tweet', function (Blueprint $table) {
        //     //
        // });
        Schema::dropIfExists('tweet'); 
    }
}
