<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5d41a722e8dd1BookCategoryTable extends Migration
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
                $table->foreign('book_id', 'fk_p_330001_330000_catego_5d41a722e8f3b')->references('id')->on('books')->onDelete('cascade');
                $table->integer('category_id')->unsigned()->nullable();
                $table->foreign('category_id', 'fk_p_330000_330001_book_c_5d41a722e9003')->references('id')->on('categories')->onDelete('cascade');
                
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
