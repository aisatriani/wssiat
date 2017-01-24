<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnSetujuiKontrakkrs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kontrak_krs', function (Blueprint $table) {
            $table->integer('setujui')->default(0)->after('pa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kontrak_krs', function (Blueprint $table) {
            //
        });
    }
}
