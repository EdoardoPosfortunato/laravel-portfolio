<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();

            $table->string('titolo'); // titolo del progetto
            $table->text('descrizione')->nullable(); // descrizione del progetto
            $table->string('tecnologie')->nullable(); // tecnologie usate (es. PHP, Laravel, JS)
            $table->string('link')->nullable(); // eventuale link esterno (es. GitHub, sito)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
