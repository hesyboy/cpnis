<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('creator_id')->nullable();
            $table->unsignedBigInteger('worker_id')->nullable();

            $table->unsignedBigInteger('document_id')->nullable();

            $table->text('description')->nullable();

            $table->unsignedTinyInteger('priority_id')->nullable();
            $table->unsignedTinyInteger('status_id')->nullable();

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
        Schema::dropIfExists('tasks');
    }
}
