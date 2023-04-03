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
        Schema::create('gpt_books', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('company_id')->nullable()->index();
            $table->string('title', 255)->index();
            $table->string('writer', 40)->nullable();
            $table->string('publication_year', 10)->nullable();
            $table->string('edition', 10)->nullable();
            $table->string('publisher', 40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gpt_books');
    }
};
