<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('guest_id')->nullable();
            $table->foreign('guest_id')->references('id')->on('guests')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->string('proof_of_payment')->nullable();
            $table->string('code')->nullable();
            $table->dateTime('uploaded_at')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
