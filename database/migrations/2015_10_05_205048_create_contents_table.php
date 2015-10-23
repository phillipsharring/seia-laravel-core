<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('content_type_id')->unsigned();
            $table->integer('refers_to')->unsigned()->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('created_by')->unsigned();
            $table->datetime('release_at')->nullable();
            $table->datetime('expire_at')->nullable();
            $table->integer('language_id')->unsigned();
            $table->string('mime_type');
            $table->string('title');
            $table->string('summary')->nullable();
            $table->longText('body');
            $table->string('media')->nullable();
            $table->string('status')->default('approved'); // submitted, rejected, approved, expired, revision
            $table->timestamps();
            $table->foreign('content_type_id')->references('id')->on('content_types');
            $table->foreign('refers_to')->references('id')->on('contents');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('language_id')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contents');
    }
}
