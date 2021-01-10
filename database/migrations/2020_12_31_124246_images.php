<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Images extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
			Schema::create('images', function (Blueprint $table) {
             $table->id();
             $table->integer('user_id');
			 $table->text('path');
			 $table->boolean('approved')->default('0');
			 $table->boolean('removed')->default('0');
			 $table->timestamps();

        
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
