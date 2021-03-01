<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('accountname');
            $table->string('grossinc');
            $table->string('pharmacypercent');
            $table->string('pharmacy');
            $table->string('pharmacistpercent');
            $table->string('pharmacist');
            $table->string('doctorpercent');
            $table->string('doctor');
            $table->string('allocatedbudgetpercent');
            $table->string('allocatedbudget');
            $table->string('expensespercent');
            $table->string('expenses');
            $table->string('buildingpercent');
            $table->string('building');
            $table->string('deductionpercent');
            $table->string('deduction');
            $table->string('capital');
            $table->string('totaldeduction');
            $table->double('netincome');
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
        Schema::dropIfExists('reports');
    }
}
