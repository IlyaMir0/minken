<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateIlyamir0MinkenSizes3 extends Migration
{
    public function up()
{
    Schema::table('ilyamir0_minken_sizes', function($table)
    {
        $table->integer('size')->nullable(false)->change();
    });
}

public function down()
{
    Schema::table('ilyamir0_minken_sizes', function($table)
    {
        $table->integer('size')->nullable()->change();
    });
}
}
