<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('content');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->bigInteger('event_category_id')->unsigned()->index()->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

              $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
              // $table->foreign('event_category_id')->references('id')->on('event_categories')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
