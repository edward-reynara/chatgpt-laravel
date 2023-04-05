<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gpt_book_details', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('gpt_book_id')->index();
            $table->integer('batch_no')->default(1);
            $table->char('status', 20)->default('pending')->comment('pending|success|failure')->index();
            $table->longtext('content')->nullable();
            $table->longtext('command')->nullable();
            $table->longtext('result')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gpt_book_details');
    }
};
