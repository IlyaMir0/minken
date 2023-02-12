<?php namespace Minken\Products\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateMinkenProductsProducts extends Migration
{
    public function up()
{
    Schema::create('minken_products_products', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('images');
        $table->string('title');
        $table->integer('price')->unsigned();
        $table->string('description');
    });
}

public function down()
{
    Schema::dropIfExists('minken_products_products');
}
}
