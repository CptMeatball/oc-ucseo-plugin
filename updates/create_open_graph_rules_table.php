<?php namespace Unrebel\Ucseo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOpenGraphRulesTable extends Migration
{

    public function up()
    {
        Schema::create('unrebel_ucseo_open_graph_rules', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('property');
            $table->integer('seopage_id');
            $table->string('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('unrebel_ucseo_open_graph_rules');
    }

}
