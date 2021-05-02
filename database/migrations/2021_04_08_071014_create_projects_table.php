<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('category');
            $table->decimal('requested_financing',10,2);
            $table->string('country');
            $table->date('publication_date');
            $table->string('image');
            $table->decimal('funding_goal',10,2);
            $table->decimal('minimum_amount',10,2);
            $table->integer('duration');
            $table->longText('description');
            $table->string('link')->nullable();
            $table->string('reward_description')->nullable();
            $table->integer('investment_ratio')->nullable();
            $table->decimal('collected_money')->nullable();
            $table->tinyInteger('isFunded')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
