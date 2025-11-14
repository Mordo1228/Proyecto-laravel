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
    Schema::table('reservas', function (Blueprint $table) {
        $table->foreignId('solicitante_id')
              ->after('espacio_id')
              ->constrained('solicitantes')
              ->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('reservas', function (Blueprint $table) {
        $table->dropForeign(['solicitante_id']);
        $table->dropColumn('solicitante_id');
    });
}
};
