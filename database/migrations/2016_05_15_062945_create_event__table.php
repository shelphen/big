<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Domain\Event\Event;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->integer('price_amount');
            $table->string('price_currency', 64);
            $table->string('location',100);//TODO change with geographic points
            $table->text('description');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->enum('type', [Event::CONFERENCE, EVENT::WORKSHOP]);        
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
        Schema::drop('event');
    }
}
