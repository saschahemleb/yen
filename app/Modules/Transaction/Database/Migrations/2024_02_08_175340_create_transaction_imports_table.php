<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaction_imports', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('user_id')->nullable()->index();
            $table->binary('file');
            $table->unsignedBigInteger('total_number_of_transactions')->nullable();
            $table->unsignedBigInteger('imported_number_of_transactions')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('parsed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_import');
    }
};
