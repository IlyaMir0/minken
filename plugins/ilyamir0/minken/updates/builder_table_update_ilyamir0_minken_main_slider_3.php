<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateIlyamir0MinkenMainSlider3 extends Migration
{
    public function up()
{
    Schema::table('ilyamir0_minken_main_slider', function($table)
    {
        $table->increments('id')->unsigned();
    });
}

public function down()
{
    Schema::table('ilyamir0_minken_main_slider', function($table)
    {
        $table->dropColumn('id');
    });
}
}
