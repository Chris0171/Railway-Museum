<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('visitorFullName', 150);
            $table->string('accompanistFullName', 150)->nullable();
            $table->date('dateOfSale')->default(now());
            $table->date('dateOfVisit');
            $table->enum('tycketType', ['MENOR4', 'DISCAPACITADO', 'DESEMPLEADO', 'ENTRE4Y12', 'MAYOR65', 'ESTUDIANTE', 'PROFESOR', 'ADULTO']);
            $table->string('documentNumber', 25);
            $table->string('email', 255);
            $table->double('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
