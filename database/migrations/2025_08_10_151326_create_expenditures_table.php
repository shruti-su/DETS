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
        Schema::create('expenditures', function (Blueprint $table) {
            $table->ulid()->primary();
            $table->foreignId('user_id')->constrained('users');
            $table->string('Name');
            $table->string('Description')->nullable();
            $table->timestamps();
        });
        Schema::create('expenditure_item', function (Blueprint $table) {
            $table->ulid()->primary();
            $table->foreignUlid('expenditure_id')
                ->constrained('expenditures')
                ->cascadeOnDelete();

            $table->foreignUlid('item_id')
                ->constrained('items')
                ->cascadeOnDelete();
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenditures');
        Schema::dropIfExists('expenditure_item');
    }
};
