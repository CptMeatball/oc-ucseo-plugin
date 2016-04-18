<?php namespace Unrebel\Ucseo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSeoPagesTable extends Migration
{

    public function up()
    {
        Schema::create('unrebel_ucseo_seo_pages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('page_id');
            $table->string('title');
            $table->string('url');
            $table->string('description');
            $table->string('og_title');
            $table->text('og_description');
            $table->string('og_type');
            $table->string('twt_card');
            $table->string('twt_site');
            $table->string('twt_creator');
            $table->string('twt_title');
            $table->text('twt_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('unrebel_ucseo_seo_pages');
    }

}
