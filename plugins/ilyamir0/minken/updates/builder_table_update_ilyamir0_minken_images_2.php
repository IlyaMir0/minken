<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateIlyamir0MinkenImages2 extends Migration
{
    public function up()
{
    Schema::table('ilyamir0_minken_images', function($table)
    {
        $table->integer('product_id')->nullable()->change();
    });
}

public function down()
{
    Schema::table('ilyamir0_minken_images', function($table)
    {
        $table->integer('product_id')->nullable(false)->change();
    });
}
}
