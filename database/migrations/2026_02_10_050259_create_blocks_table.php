<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('blocks', function (Blueprint $table) {
    //         $table->id();
    //         $table->int('page_id')

    //         $table->timestamps();
    //     });
    // }

    // id
    // page_id
    // type        (text | image | mixed)
    // title
    // content     (TEXT)
    // image_path  (nullable)
    // order
    // is_active
    // created_at
    // updated_at

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
