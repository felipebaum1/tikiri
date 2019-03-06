<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_attachment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('thread_id')->unsigned()->nullable()->index('thread_id');
			$table->string('size');
			$table->string('type');
			$table->string('poster');
			$table->timestamps();
			$table->binary('file', 16777215)->nullable();
			$table->string('driver');
			$table->string('path');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_attachment');
	}

}
