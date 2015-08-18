<?php


use Illuminate\Database\Migrations\Migration;

class AddLengthSlugPost extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        DB::statement('ALTER TABLE `posts` MODIFY COLUMN `slug` VARCHAR(200)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

	}

}
