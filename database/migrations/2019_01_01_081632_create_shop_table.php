<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopTable extends Migration
{
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('description', 1024)->nullable();
            $table->timestamps();
        });

        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->nullable()->unsigned();
            $table->string('name',128);
            $table->string('from',128);
            $table->double('buy')->default(0);
            $table->double('sell')->default(0);
            $table->double('howlong')->default(0);
            $table->timestamps();
            $table->foreign('cat_id') ->references('id') ->on('cats')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('buys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('good_id')->nullable()->unsigned();
            $table->string('name',128);
            $table->double('price');
            $table->double('amount');
            $table->double('money');
            $table->date('date');
            $table->string('who',32);
            $table->timestamps();
            $table->foreign('good_id') ->references('id') ->on('goods')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('sells', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('good_id')->nullable()->unsigned();
            $table->string('name',128);
            $table->double('price');
            $table->double('amount');
            $table->double('money');
            $table->date('date');
            $table->string('who',32);
            $table->timestamps();
            $table->foreign('good_id') ->references('id') ->on('goods')->onUpdate('cascade')->onDelete('cascade');
        });

    }

    public function down()
    {
        Schema::dropifexists('sells');
        Schema::dropifexists('buys');
        Schema::dropifexists('goods');
        Schema::dropifexists('cats');
    }
}
