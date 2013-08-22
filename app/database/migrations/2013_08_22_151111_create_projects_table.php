<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('slug');
			$table->text('description')->nullable();
			$table->enum('type', array('local','outsource'))->default('local');
			$table->string('package', 20)->nullable();
			$table->float('budget', 8)->default(0);
			$table->string('site_uri', 100)->nullable();
			$table->string('repository_uri', 100)->nullable();
			$table->date('start_date');
			$table->date('end_date');
			$table->string('contact_person', 50)->nullable();
			$table->string('contact_designation', 30)->nullable();
			$table->string('contact_no', 50)->nullable();
			$table->string('contact_email', 50)->nullable();
			$table->string('contact_im', 100)->nullable()->comment('eg: skype:myskypeid;');
			$table->boolean('completed')->default(0);
			$table->date('completed_date');
			$table->boolean('cancelled')->default(0);
			$table->string('cancel_reason', 100)->nullable();
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
		Schema::drop('projects');
	}

}