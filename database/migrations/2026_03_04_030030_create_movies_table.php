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
        Schema::create('movies', function (Blueprint $table) {
        $table->id();
        $table->string('title');    // a. title (string)
        $table->text('synopsis');   // b. synopsis (text)
        $table->integer('year');    // c. year (integer)
        $table->string('cover');    // d. cover (string) - ESTA ES LA QUE FALTABA
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
