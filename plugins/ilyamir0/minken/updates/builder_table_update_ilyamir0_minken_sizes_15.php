<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateIlyamir0MinkenSizes15 extends Migration
{
    public function up()
{
    Schema::table('ilyamir0_minken_sizes', function($table)
    {
        $table->string('size', 255)->nullable(false)->unsigned(false)->default(null)->change();
        $table->dropColumn('dimensionless');
    });
}

public function down()
{
    Schema::table('ilyamir0_minken_sizes', function($table)
    {
        $table->integer('size')->nullable(false)->unsigned(false)->default(null)->change();
        $table->string('dimensionless', 255);
    });
}
}
