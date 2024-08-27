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

            //Foreign keys
            $table->foreignIdFor(Author::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreignIdFor(Category::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreignIdFor(Editor::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreignIdFor(Translator::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete()
                ->cascadeOnUpdate();

            $table->string("title", 250);
            $table->longText("description")->nullable();
            $table->string("cover_img")->nullable();
            $table->bigInteger("isbn")->unique();
            $table->decimal("price", 8, 2, true);
            $table->unsignedSmallInteger("pages");
            $table->boolean("is_available");
            $table->string("state")->nullable();
            $table->softDeletes('deleted_at', 0);

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
