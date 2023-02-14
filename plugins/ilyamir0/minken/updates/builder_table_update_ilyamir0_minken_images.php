<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateIlyamir0MinkenImages extends Migration
{
    public function up()
{
    Schema::table('ilyamir0_minken_images', function($table)
    {
        $table->integer('product_id')->unsigned();
    });
}

public function down()
{
    Schema::table('ilyamir0_minken_images', function($table)
    {
        $table->dropColumn('product_id');
    });
}
}
