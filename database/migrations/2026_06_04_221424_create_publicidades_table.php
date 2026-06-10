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
        Schema::create('publicidades', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignUuid('company_id')->references('id')->on('empresas')->onDelete('cascade')->nullable();
            $table->foreignUuid('contract_id')->references('id')->on('contratos')->onDelete('cascade')->nullable();
            $table->string('title');
            $table->decimal('price', 10, 2);
            $table->string('address')->nullable();
            $table->date('deadline')->nullable();
            $table->enum('status', ['Pendente', 'Concluida', 'Cancelada'])->default('Pendente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicidades');
    }
};
