<?php

use App\Models\Author;
use App\Models\Category;
use App\Models\Editor;
use App\Models\Translator;
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
            $table->string('title', 250);

            $table->unsignedBigInteger('translator_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('editor_id')->nullable();

            $table->foreign('category_id')->references('id')->on('categories')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('editor_id')->references('id')->on('editors')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('translator_id')->references('id')->on('translators')
                ->nullOnDelete()
                ->cascadeOnUpdate();

            $table->string("genre", 40);
            $table->text('description')->nullable();
            $table->string("language", 30);
            $table->string('cover_img')->nullable();
            $table->bigInteger('isbn')->unique();
            $table->decimal('price', 8, 2)->unsigned();
            $table->unsignedSmallInteger('pages');
            $table->boolean('is_available');
            $table->string('state')->nullable();
            $table->softDeletes();
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
