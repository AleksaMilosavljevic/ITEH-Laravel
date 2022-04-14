<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajSpoljniKljucVlasnik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('motors', function (Blueprint $table) {
            $table->after('proizvodjac_id', function ($table) {
                $table->foreignId('vlasnik_id')->constrained('vlasniks');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('motors', function (Blueprint $table) {
            $table->dropForeign('motors_vlasnik_id_foreign');
            $table->dropColumn('vlasnik_id');
        });
    }
}
