<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateIlyamir0MinkenCategories extends Migration
{
    public function up()
{
    Schema::create('ilyamir0_minken_categories', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title');
    });
}

public function down()
{
    Schema::dropIfExists('ilyamir0_minken_categories');
}
}
