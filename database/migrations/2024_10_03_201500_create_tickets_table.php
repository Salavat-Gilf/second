<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();         
            $table->string('theme'); 
            $table->string('email'); 
            $table->date('date');    
            $table->timestamps();    
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
