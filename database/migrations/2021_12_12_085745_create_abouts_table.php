<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->longText('about_AR');
            $table->longText('about_EN');
            $table->longText('about_FR');
            $table->longText('about_GR');
            $table->longText('about_DU');
            $table->timestamps();
        });
        // DB::statement("ALTER TABLE abouts ADD about_AR MEDIUMTEXT");
        // DB::statement("ALTER TABLE abouts ADD about_EN MEDIUMTEXT");
        // DB::statement("ALTER TABLE abouts ADD about_FR MEDIUMTEXT");
        // DB::statement("ALTER TABLE abouts ADD about_GR MEDIUMTEXT");
        // DB::statement("ALTER TABLE abouts ADD about_DU MEDIUMTEXT");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
