<?php

class Create_Child_Table {    

	public function up()
    {
		Schema::create('child_table', function($table) {
			$table->increments('id');
			$table->string('nombre');
			$table->integer('sentado');
			$table->integer('mesa');
			$table->integer('euskera');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('child_table');

    }

}