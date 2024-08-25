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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('account_type_id')->constrained('account_types');
            $table->foreignId('currency_id')->constrained('currencies');
            $table->string('name');
            $table->decimal('initial_balance', 18);
            $table->string('colour_code')->nullable();
            $table->integer('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
