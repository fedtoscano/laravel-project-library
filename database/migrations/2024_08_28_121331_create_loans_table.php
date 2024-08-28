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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("user_id")->nullable();
            // $table->unsignedBigInteger("book_id")->nullable();

            $table->foreign('user_id')->references('id')->on('users')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            // $table->foreign('book_id')->references('id')->on('books')
            //     ->nullOnDelete()
            //     ->cascadeOnUpdate();

            $table->date("start_date");
            $table->date("end_date");
            $table->tinyText("notes");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
