<?php namespace Unrebel\Ucseo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOpenGraphPropertiesTable extends Migration
{

    public function up()
    {
        Schema::create('unrebel_ucseo_open_graph_properties', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('property');
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('unrebel_ucseo_open_graph_properties');
    }

}
