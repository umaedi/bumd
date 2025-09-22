<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sarans', function (Blueprint $table) {
            $table->id();
            $table->string('subdomain');
            $table->string('nama');
            $table->string('ktp');
            $table->string('email');
            $table->string('no_hp');
            $table->enum('jenis', ['Saran', 'Aduan', 'Pertanyaan']);
            $table->string('pelayanan');
            $table->text('komentar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarans');
    }
};
