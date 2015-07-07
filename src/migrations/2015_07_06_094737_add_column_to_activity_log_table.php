<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToActivityLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('activity_log', function(Blueprint $table)
		{
			$table->longText('custom4')->nullable()->after('custom3');
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
			$table->dropColumn('custom4');
		});
	}

}
