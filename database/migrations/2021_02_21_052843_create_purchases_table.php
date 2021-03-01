<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();

            $table->string('user_email');
            $table->string('name');
            $table->string('address');
            $table->string('contact');
            $table->string('phone');
            $table->string('type');
            $table->string('status');

            $table->string('orderid');

            $table->integer('prodid');
            $table->string('product');
            $table->text('endinv')->nullable();
            $table->integer('amount');
            $table->double('price');

            $table->integer('prodid2')->nullable();
            $table->string('product2')->nullable();
            $table->text('endinv2')->nullable();
            $table->integer('amount2')->nullable();
            $table->double('price2')->nullable();

            $table->integer('prodid3')->nullable();
            $table->string('product3')->nullable();
            $table->text('endinv3')->nullable();
            $table->integer('amount3')->nullable();
            $table->double('price3')->nullable();

            $table->integer('prodid4')->nullable();
            $table->string('product4')->nullable();
            $table->text('endinv4')->nullable();
            $table->integer('amount4')->nullable();
            $table->double('price4')->nullable();

            $table->integer('prodid5')->nullable();
            $table->string('product5')->nullable();
            $table->text('endinv5')->nullable();
            $table->integer('amount5')->nullable();
            $table->double('price5')->nullable();

            $table->integer('prodid6')->nullable();
            $table->string('product6')->nullable();
            $table->text('endinv6')->nullable();
            $table->integer('amount6')->nullable();
            $table->double('price6')->nullable();

            $table->integer('prodid7')->nullable();
            $table->string('product7')->nullable();
            $table->text('endinv7')->nullable();
            $table->integer('amount7')->nullable();
            $table->double('price7')->nullable();

            $table->integer('prodid8')->nullable();
            $table->string('product8')->nullable();
            $table->text('endinv8')->nullable();
            $table->integer('amount8')->nullable();
            $table->double('price8')->nullable();

            $table->integer('prodid9')->nullable();
            $table->string('product9')->nullable();
            $table->text('endinv9')->nullable();
            $table->integer('amount9')->nullable();
            $table->double('price9')->nullable();

            $table->integer('prodid10')->nullable();
            $table->string('product10')->nullable();
            $table->text('endinv10')->nullable();
            $table->integer('amount10')->nullable();
            $table->double('price10')->nullable();

            $table->integer('prodid11')->nullable();
            $table->string('product11')->nullable();
            $table->text('endinv11')->nullable();
            $table->integer('amount11')->nullable();
            $table->double('price11')->nullable();

            $table->integer('prodid12')->nullable();
            $table->string('product12')->nullable();
            $table->text('endinv12')->nullable();
            $table->integer('amount12')->nullable();
            $table->double('price12')->nullable();

            $table->integer('prodid13')->nullable();
            $table->string('product13')->nullable();
            $table->text('endinv13')->nullable();
            $table->integer('amount13')->nullable();
            $table->double('price13')->nullable();

            $table->integer('prodid14')->nullable();
            $table->string('product14')->nullable();
            $table->text('endinv14')->nullable();
            $table->integer('amount14')->nullable();
            $table->double('price14')->nullable();

            $table->integer('prodid15')->nullable();
            $table->string('product15')->nullable();
            $table->text('endinv15')->nullable();
            $table->integer('amount15')->nullable();
            $table->double('price15')->nullable();

            $table->integer('prodid16')->nullable();
            $table->string('product16')->nullable();
            $table->text('endinv16')->nullable();
            $table->integer('amount16')->nullable();
            $table->double('price16')->nullable();

            $table->integer('prodid17')->nullable();
            $table->string('product17')->nullable();
            $table->text('endinv17')->nullable();
            $table->integer('amount17')->nullable();
            $table->double('price17')->nullable();

            $table->integer('prodid18')->nullable();
            $table->string('product18')->nullable();
            $table->text('endinv18')->nullable();
            $table->integer('amount18')->nullable();
            $table->double('price18')->nullable();

            $table->integer('prodid19')->nullable();
            $table->string('product19')->nullable();
            $table->text('endinv19')->nullable();
            $table->integer('amount19')->nullable();
            $table->double('price19')->nullable();

            $table->integer('prodid20')->nullable();
            $table->string('product20')->nullable();
            $table->text('endinv20')->nullable();
            $table->integer('amount20')->nullable();
            $table->double('price20')->nullable();

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
        Schema::dropIfExists('purchases');
    }
}
