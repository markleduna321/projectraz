<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->text('user_email');
            $table->text('name');
            $table->text('address');
            $table->text('contact');
            $table->text('phone');
            $table->text('type');
            $table->text('status');
            
            $table->text('orderid');

            $table->integer('prodid')->nullable();
            $table->text('product')->nullable();
            $table->text('endinv')->nullable();
            $table->text('newdel')->nullable();
            $table->text('invnum');
            $table->text('totalstock')->nullable();
            $table->text('stockleft')->nullable();
            $table->text('stocksold')->nullable();
            $table->integer('amount')->nullable();
            $table->double('price')->nullable();

            $table->integer('prodid2')->nullable();
            $table->text('product2')->nullable();
            $table->text('endinv2')->nullable();
            $table->text('newdel2')->nullable();
            $table->text('invnum2')->nullable();
            $table->text('totalstock2')->nullable();
            $table->text('stockleft2')->nullable();
            $table->text('stocksold2')->nullable();
            $table->integer('amount2')->nullable();
            $table->double('price2')->nullable();

            $table->integer('prodid3')->nullable();
            $table->text('product3')->nullable();
            $table->text('endinv3')->nullable();
            $table->text('newdel3')->nullable();
            $table->text('invnum3')->nullable();
            $table->text('totalstock3')->nullable();
            $table->text('stockleft3')->nullable();
            $table->text('stocksold3')->nullable();
            $table->integer('amount3')->nullable();
            $table->double('price3')->nullable();

            $table->integer('prodid4')->nullable();
            $table->text('product4')->nullable();
            $table->text('endinv4')->nullable();
            $table->text('newdel4')->nullable();
            $table->text('invnum4')->nullable();
            $table->text('totalstock4')->nullable();
            $table->text('stockleft4')->nullable();
            $table->text('stocksold4')->nullable();
            $table->integer('amount4')->nullable();
            $table->double('price4')->nullable();

            $table->integer('prodid5')->nullable();
            $table->text('product5')->nullable();
            $table->text('endinv5')->nullable();
            $table->text('newdel5')->nullable();
            $table->text('invnum5')->nullable();
            $table->text('totalstock5')->nullable();
            $table->text('stockleft5')->nullable();
            $table->text('stocksold5')->nullable();
            $table->integer('amount5')->nullable();
            $table->double('price5')->nullable();
            
            $table->integer('prodid6')->nullable();
            $table->text('product6')->nullable();
            $table->text('endinv6')->nullable();
            $table->text('newdel6')->nullable();
            $table->text('invnum6')->nullable();
            $table->text('totalstock6')->nullable();
            $table->text('stockleft6')->nullable();
            $table->text('stocksold6')->nullable();
            $table->integer('amount6')->nullable();
            $table->double('price6')->nullable();

            $table->integer('prodid7')->nullable();
            $table->text('product7')->nullable();
            $table->text('endinv7')->nullable();
            $table->text('newdel7')->nullable();
            $table->text('invnum7')->nullable();
            $table->text('totalstock7')->nullable();
            $table->text('stockleft7')->nullable();
            $table->text('stocksold7')->nullable();
            $table->integer('amount7')->nullable();
            $table->double('price7')->nullable();
            
            $table->integer('prodid8')->nullable();
            $table->text('product8')->nullable();
            $table->text('endinv8')->nullable();
            $table->text('newdel8')->nullable();
            $table->text('invnum8')->nullable();
            $table->text('totalstock8')->nullable();
            $table->text('stockleft8')->nullable();
            $table->text('stocksold8')->nullable();
            $table->integer('amount8')->nullable();
            $table->double('price8')->nullable();

            $table->integer('prodid9')->nullable();
            $table->text('product9')->nullable();
            $table->text('endinv9')->nullable();
            $table->text('newdel9')->nullable();
            $table->text('invnum9')->nullable();
            $table->text('totalstock9')->nullable();
            $table->text('stockleft9')->nullable();
            $table->text('stocksold9')->nullable();
            $table->integer('amount9')->nullable();
            $table->double('price9')->nullable();

            $table->integer('prodid10')->nullable();
            $table->text('product10')->nullable();
            $table->text('endinv10')->nullable();
            $table->text('newdel10')->nullable();
            $table->text('invnum10')->nullable();
            $table->text('totalstock10')->nullable();
            $table->text('stockleft10')->nullable();
            $table->text('stocksold10')->nullable();
            $table->integer('amount10')->nullable();
            $table->double('price10')->nullable();

            $table->integer('prodid11')->nullable();
            $table->text('product11')->nullable();
            $table->text('endinv11')->nullable();
            $table->text('newdel11')->nullable();
            $table->text('invnum11')->nullable();
            $table->text('totalstock11')->nullable();
            $table->text('stockleft11')->nullable();
            $table->text('stocksold11')->nullable();
            $table->integer('amount11')->nullable();
            $table->double('price11')->nullable();

            $table->integer('prodid12')->nullable();
            $table->text('product12')->nullable();
            $table->text('endinv12')->nullable();
            $table->text('newdel12')->nullable();
            $table->text('invnum12')->nullable();
            $table->text('totalstock12')->nullable();
            $table->text('stockleft12')->nullable();
            $table->text('stocksold12')->nullable();
            $table->integer('amount12')->nullable();
            $table->double('price12')->nullable();

            $table->integer('prodid13')->nullable();
            $table->text('product13')->nullable();
            $table->text('endinv13')->nullable();
            $table->text('newdel13')->nullable();
            $table->text('invnum13')->nullable();
            $table->text('totalstock13')->nullable();
            $table->text('stockleft13')->nullable();
            $table->text('stocksold13')->nullable();
            $table->integer('amount13')->nullable();
            $table->double('price13')->nullable();

            $table->integer('prodid14')->nullable();
            $table->text('product14')->nullable();
            $table->text('endinv14')->nullable();
            $table->text('newdel14')->nullable();
            $table->text('invnum14')->nullable();
            $table->text('totalstock14')->nullable();
            $table->text('stockleft14')->nullable();
            $table->text('stocksold14')->nullable();
            $table->integer('amount14')->nullable();
            $table->double('price14')->nullable();

            $table->integer('prodid15')->nullable();
            $table->text('product15')->nullable();
            $table->text('endinv15')->nullable();
            $table->text('newdel15')->nullable();
            $table->text('invnum15')->nullable();
            $table->text('totalstock15')->nullable();
            $table->text('stockleft15')->nullable();
            $table->text('stocksold15')->nullable();
            $table->integer('amount15')->nullable();
            $table->double('price15')->nullable();

            $table->integer('prodid16')->nullable();
            $table->text('product16')->nullable();
            $table->text('endinv16')->nullable();
            $table->text('newdel16')->nullable();
            $table->text('invnum16')->nullable();
            $table->text('totalstock16')->nullable();
            $table->text('stockleft16')->nullable();
            $table->text('stocksold16')->nullable();
            $table->integer('amount16')->nullable();
            $table->double('price16')->nullable();

            $table->integer('prodid17')->nullable();
            $table->text('product17')->nullable();
            $table->text('endinv17')->nullable();
            $table->text('newdel17')->nullable();
            $table->text('invnum17')->nullable();
            $table->text('totalstock17')->nullable();
            $table->text('stockleft17')->nullable();
            $table->text('stocksold17')->nullable();
            $table->integer('amount17')->nullable();
            $table->double('price17')->nullable();

            $table->integer('prodid18')->nullable();
            $table->text('product18')->nullable();
            $table->text('endinv18')->nullable();
            $table->text('newdel18')->nullable();
            $table->text('invnum18')->nullable();
            $table->text('totalstock18')->nullable();
            $table->text('stockleft18')->nullable();
            $table->text('stocksold18')->nullable();
            $table->integer('amount18')->nullable();
            $table->double('price18')->nullable();

            $table->integer('prodid19')->nullable();
            $table->text('product19')->nullable();
            $table->text('endinv19')->nullable();
            $table->text('newdel19')->nullable();
            $table->text('invnum19')->nullable();
            $table->text('totalstock19')->nullable();
            $table->text('stockleft19')->nullable();
            $table->text('stocksold19')->nullable();
            $table->integer('amount19')->nullable();
            $table->double('price19')->nullable();

            $table->integer('prodid20')->nullable();
            $table->text('product20')->nullable();
            $table->text('endinv20')->nullable();
            $table->text('newdel20')->nullable();
            $table->text('invnum20')->nullable();
            $table->text('totalstock20')->nullable();
            $table->text('stockleft20')->nullable();
            $table->text('stocksold20')->nullable();
            $table->integer('amount20')->nullable();
            $table->double('price20')->nullable();

            $table->double('total')->nullable();
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
        Schema::dropIfExists('inventories');
    }
}
