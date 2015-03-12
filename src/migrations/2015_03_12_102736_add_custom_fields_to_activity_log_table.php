<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCustomFieldsToActivityLogTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activity_log', function(Blueprint $table)
		{
			$table->text('custom1')->nullable()->after('details');
            $table->text('custom2')->nullable()->after('custom1');
            $table->text('custom3')->nullable()->after('custom2');
		});
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activity_log', function(Blueprint $table)
		{
			$table->dropColumn('custom1');
            $table->dropColumn('custom2');
            $table->dropColumn('custom3');
		});
    }
}
