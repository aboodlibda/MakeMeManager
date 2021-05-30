<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fronts', function (Blueprint $table) {
            $table->id();
            $table->string('home_page_image')->nullable()->default('hero_bg_1.jpg');
            $table->string('how_it_work_image')->nullable();
            $table->longText('how_it_work_text_1')->nullable();
            $table->longText('how_it_work_text_2')->nullable();
            $table->string('projects_page_image')->nullable();
            $table->string('about_page_image_1')->nullable();
            $table->string('financiers_page_image')->nullable();
            $table->string('entrepreneur_page_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fronts');
    }
}
