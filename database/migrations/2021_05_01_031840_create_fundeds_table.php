<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundeds', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_funding');
            $table->string('reward_description')->nullable();
            $table->integer('investment_ratio')->nullable();
            $table->unsignedBigInteger('financier_id');
            $table->unsignedBigInteger('project_id');
            $table->foreign('financier_id')->references('id')->on('financiers')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

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
        Schema::dropIfExists('fundeds');
    }
}
