<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateIlyamir0MinkenSizes extends Migration
{
    public function up()
{
    Schema::create('ilyamir0_minken_sizes', function($table)
    {
        $table->engine = 'InnoDB';
        $table->integer('size');
    });
}

public function down()
{
    Schema::dropIfExists('ilyamir0_minken_sizes');
}
}
