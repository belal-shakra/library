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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->tinyInteger("number_of_parts")->default(1);
            $table->smallInteger("number_of_pages")->nullable();
            $table->dateTime("purchase_date")->nullable();
            $table->foreignId('copy_id')->constrained();
            $table->foreignId('publisher_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
