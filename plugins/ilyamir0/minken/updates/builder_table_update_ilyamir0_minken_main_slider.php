<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateIlyamir0MinkenMainSlider extends Migration
{
    public function up()
{
    Schema::rename('ilyamir0_minken_swiper', 'ilyamir0_minken_main_slider');
}

public function down()
{
    Schema::rename('ilyamir0_minken_main_slider', 'ilyamir0_minken_swiper');
}
}
