<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5d4c871c5fd2aRelationshipsToTimeEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('time_entries', function(Blueprint $table) {
            if (!Schema::hasColumn('time_entries', 'work_type_id')) {
                $table->integer('work_type_id')->unsigned()->nullable();
                $table->foreign('work_type_id', '332547_5d4c7f9232021')->references('id')->on('time_work_types')->onDelete('cascade');
                }
                if (!Schema::hasColumn('time_entries', 'project_id')) {
                $table->integer('project_id')->unsigned()->nullable();
                $table->foreign('project_id', '332547_5d4c7f9253bdd')->references('id')->on('time_projects')->onDelete('cascade');
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
        Schema::table('time_entries', function(Blueprint $table) {
            if(Schema::hasColumn('time_entries', 'work_type_id')) {
                $table->dropForeign('332547_5d4c7f9232021');
                $table->dropIndex('332547_5d4c7f9232021');
                $table->dropColumn('work_type_id');
            }
            if(Schema::hasColumn('time_entries', 'project_id')) {
                $table->dropForeign('332547_5d4c7f9253bdd');
                $table->dropIndex('332547_5d4c7f9253bdd');
                $table->dropColumn('project_id');
            }
            
        });
    }
}
