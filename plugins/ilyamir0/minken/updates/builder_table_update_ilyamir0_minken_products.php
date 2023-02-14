<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateIlyamir0MinkenProducts extends Migration
{
    public function up()
{
    Schema::table('ilyamir0_minken_products', function($table)
    {
        $table->renameColumn('titile', 'title');
    });
}

public function down()
{
    Schema::table('ilyamir0_minken_products', function($table)
    {
        $table->renameColumn('title', 'titile');
    });
}
}
