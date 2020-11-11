<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopTable extends Migration
{
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('description', 1024)->nullable();
            $table->string('address', 512)->nullable();
            $table->string('telephone', 64)->nullable();
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('description', 1024)->nullable();
            $table->string('address', 512)->nullable();
            $table->string('telephone', 64)->nullable();
            $table->timestamps();
        });

        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('description', 1024)->nullable();
            $table->timestamps();
        });

        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->unsigned();
            $table->string('name',128);
            $table->string('from',128)->nullable();
            $table->double('buy')->nullable();
            $table->double('sell')->nullable();
            $table->double('howlong')->nullable();
            $table->timestamps();
            $table->foreign('cat_id') ->references('id') ->on('cats')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('buys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('good_id')->unsigned();
            $table->integer('supplier_id')->nullable()->unsigned();
            $table->string('name',128);
            $table->double('price');
            $table->double('amount');
            $table->double('money');
            $table->date('date');
            $table->string('who',32)->nullable();
            $table->timestamps();
            $table->foreign('good_id') ->references('id') ->on('goods')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('supplier_id') ->references('id') ->on('suppliers')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('sells', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('good_id')->unsigned();
            $table->integer('customer_id')->nullable()->unsigned();
            $table->string('name',128);
            $table->double('price');
            $table->double('amount');
            $table->double('money');
            $table->date('date');
            $table->string('who',32)->nullable();
            $table->timestamps();
            $table->foreign('good_id') ->references('id') ->on('goods')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('customer_id') ->references('id') ->on('customers')->onUpdate('cascade')->onDelete('cascade');
        });

    }

    public function down()
    {
        Schema::dropifexists('sells');
        Schema::dropifexists('buys');
        Schema::dropifexists('goods');
        Schema::dropifexists('cats');
        Schema::dropifexists('customers');
        Schema::dropifexists('suppliers');
    }
}
