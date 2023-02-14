<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateIlyamir0MinkenImages extends Migration
{
    public function up()
{
    Schema::create('ilyamir0_minken_images', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->string('url');
    });
}

public function down()
{
    Schema::dropIfExists('ilyamir0_minken_images');
}
}
