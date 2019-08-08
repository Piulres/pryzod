<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5d4c871cd61c4RelationshipsToIncomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incomes', function(Blueprint $table) {
            if (!Schema::hasColumn('incomes', 'income_category_id')) {
                $table->integer('income_category_id')->unsigned()->nullable();
                $table->foreign('income_category_id', '332567_5d4c86f2db72c')->references('id')->on('income_categories')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incomes', function(Blueprint $table) {
            if(Schema::hasColumn('incomes', 'income_category_id')) {
                $table->dropForeign('332567_5d4c86f2db72c');
                $table->dropIndex('332567_5d4c86f2db72c');
                $table->dropColumn('income_category_id');
            }
            
        });
    }
}
