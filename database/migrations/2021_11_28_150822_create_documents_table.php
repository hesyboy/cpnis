<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_type')->nullable()->constrained('document_types')->onUpdate('cascade')->onDelete('set null');
            $table->string('document_number')->nullable();
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('description')->nullable();
            $table->string('issue_date')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=>no activity,1=>working,2=>done');
            $table->tinyInteger('lock')->default(1)->comment('0=>lock,1=>open');
            $table->string('creator')->nullable();
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
        Schema::dropIfExists('documents');
    }
}
