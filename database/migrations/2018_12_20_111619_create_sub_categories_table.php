<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->increments('sub_category_id');
            $table->unsignedInteger('category_id');
            $table->string('sub_category_name');
            $table->string('link_page');
            $table->unsignedInteger('sort');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('sub_categories', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('category_id')
                ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('sub_categories');
    }
}
