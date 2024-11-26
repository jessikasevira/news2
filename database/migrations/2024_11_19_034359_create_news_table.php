<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();  // ID utama
            $table->string('title');  // Kolom judul
            $table->text('content');  // Kolom isi berita
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    /**
     * Membatalkan migrasi ini.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
