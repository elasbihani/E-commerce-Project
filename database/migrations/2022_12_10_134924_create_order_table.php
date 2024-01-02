<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('lname', 191);
            $table->string('email', 191);
            $table->string('phoneno', 191);
            $table->string('address1', 191);
            $table->string('address2', 191);
            $table->string('city', 191);
            $table->string('state', 191);
            $table->string('country', 191);
            $table->string('pincode', 191);
            $table->string('total_price', 191);  // Unique declaration for 'total_price'
            $table->tinyInteger('status')->default(0);
            $table->string('message', 191)->nullable();
            $table->string('tracking_no', 191);
            $table->timestamps();

            // Rest of the columns and index definitions

            // Remove the duplicate 'total_price' column declaration below
            // $table->string('total_price', 191);  // Remove this line
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};
