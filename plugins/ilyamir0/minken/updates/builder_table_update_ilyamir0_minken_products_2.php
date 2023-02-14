<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateIlyamir0MinkenProducts2 extends Migration
{
    public function up()
{
    Schema::table('ilyamir0_minken_products', function($table)
    {
        $table->string('color', 10)->nullable(false)->unsigned(false)->default(null)->change();
    });
}

public function down()
{
    Schema::table('ilyamir0_minken_products', function($table)
    {
        $table->integer('color')->nullable(false)->unsigned()->default(null)->change();
    });
}
}
