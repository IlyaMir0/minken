<?php namespace Ilyamir0\Minken\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateIlyamir0MinkenCategoryProduct extends Migration
{
    public function up()
{
    Schema::create('ilyamir0_minken_category_product', function($table)
    {
        $table->engine = 'InnoDB';
        $table->integer('category_id')->unsigned();
        $table->integer('product_id')->unsigned();
        $table->primary(['category_id','product_id']);
    });
}

public function down()
{
    Schema::dropIfExists('ilyamir0_minken_category_product');
}
}
