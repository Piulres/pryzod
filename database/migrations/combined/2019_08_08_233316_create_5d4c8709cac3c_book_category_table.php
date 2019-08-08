<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5d4c8709cac3cBookCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('book_category')) {
            Schema::create('book_category', function (Blueprint $table) {
                $table->integer('book_id')->unsigned()->nullable();
                $table->foreign('book_id', 'fk_p_330001_330000_catego_5d4c8709cadf9')->references('id')->on('books')->onDelete('cascade');
                $table->integer('category_id')->unsigned()->nullable();
                $table->foreign('category_id', 'fk_p_330000_330001_book_c_5d4c8709caecd')->references('id')->on('categories')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_category');
    }
}
