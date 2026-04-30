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
    Schema::create('menus', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->text('deskripsi')->nullable();
        $table->integer('harga');
        $table->string('emoji')->default('🍽️');
        $table->integer('stok')->default(0);
        $table->integer('kategori_id');
        $table->boolean('tersedia')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
