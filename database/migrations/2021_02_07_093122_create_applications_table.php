<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {

            $table->id();

            // Personal Information
            $table->string('name');
            $table->timestamp('date_of_birth');
            $table->string('photo')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->string('gender');
            $table->string('nationality')->default('Thailnand');
            $table->string('national_id_card_number');

            // Manual payments
            $table->string('payment_method')->nullable();
            $table->string('payment_account_number')->nullable();
            $table->string('payment_amount')->nullable();
            $table->string('transaction_number')->nullable();
            // DateTime
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
        Schema::dropIfExists('applications');
    }
}
