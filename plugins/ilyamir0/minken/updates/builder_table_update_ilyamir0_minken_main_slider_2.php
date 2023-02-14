<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateIlyamir0MinkenMainSlider2 extends Migration
{
    public function up()
{
    Schema::table('ilyamir0_minken_main_slider', function($table)
    {
        $table->string('link')->nullable(false)->unsigned(false)->default(null)->change();
    });
}

public function down()
{
    Schema::table('ilyamir0_minken_main_slider', function($table)
    {
        $table->text('link')->nullable(false)->unsigned(false)->default(null)->change();
    });
}
}
