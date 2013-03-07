<?php

class Add_Childs {    

	public function up()
    {
		Schema::table('childs', function($table) 
{

});

    }    

	public function down()
    {
		Schema::table('childs', function($table) {
			$table->drop_column(array());
	});

    }

}