<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateIlyamir0MinkenSwiper extends Migration
{
    public function up()
{
    Schema::create('ilyamir0_minken_swiper', function($table)
    {
        $table->engine = 'InnoDB';
        $table->text('link');
        $table->string('image');
    });
}

public function down()
{
    Schema::dropIfExists('ilyamir0_minken_swiper');
}
}
