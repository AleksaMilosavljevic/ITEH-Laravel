<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoviNazivKoloneIskustvo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vlasniks', function (Blueprint $table) {
            $table->renameColumn('vozackoIskustvo', 'iskustvo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vlasniks', function (Blueprint $table) {
            $table->renameColumn('iskustvo', 'vozackoIskustvo');
        });
    }
}
