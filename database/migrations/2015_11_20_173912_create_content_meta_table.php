<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('content_id')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->string('field_name');
            $table->string('field_type');
            $table->string('string_value')->nullable();
            $table->text('text_value')->nullable();
            $table->date('date_value')->nullable();
            $table->integer('integer_value')->nullable();
            $table->foreign('content_id')->references('id')->on('contents');
            $table->foreign('created_by')->references('id')->on('users');
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
        Schema::drop('content_meta');
    }
}
