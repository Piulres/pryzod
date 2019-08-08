<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5d4c871d198dfRelationshipsToExpenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expenses', function(Blueprint $table) {
            if (!Schema::hasColumn('expenses', 'expense_category_id')) {
                $table->integer('expense_category_id')->unsigned()->nullable();
                $table->foreign('expense_category_id', '332568_5d4c8701b60ba')->references('id')->on('expense_categories')->onDelete('cascade');
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
        Schema::table('expenses', function(Blueprint $table) {
            if(Schema::hasColumn('expenses', 'expense_category_id')) {
                $table->dropForeign('332568_5d4c8701b60ba');
                $table->dropIndex('332568_5d4c8701b60ba');
                $table->dropColumn('expense_category_id');
            }
            
        });
    }
}
