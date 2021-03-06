<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('agent_national_id');
            $table->unsignedBigInteger('landlord_national_id')->nullable();
            $table->string('contract_number');
            $table->string('rent_duration');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('payment_term');
            $table->text('contract_file')->nullable();
            $table->timestamps();

            $table->foreign('agent_national_id')->references('national_id')->on('agents')->onDelete('cascade');
            $table->foreign('landlord_national_id')->references('national_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
