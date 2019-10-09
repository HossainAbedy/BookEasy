<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->unsignedBigInteger('book_info');
            $table->foreign('book_info')
                  ->references('id')
                  ->on('book_infos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');       
            $table->integer('book_code')->nullable();
            $table->integer('version')->nullable();
            $table->string('publication')->nullable();
            $table->string('image')->nullable();
            $table->integer('price');
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
        Schema::dropIfExists('books');
    }
}
