<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		
		
			Schema::create('posts', function (Blueprint $table) {
             $table->id();
             $table->integer('user_id');
			 $table->longtext('post');
			 $table->boolean('approved')->default('0');
			 $table->boolean('removed')->default('0');
			 $table->timestampsTz($precision = 0);

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
