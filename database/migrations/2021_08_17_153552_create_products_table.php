<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\DB;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->String('pro_name_AR');
            $table->String('pro_name_EN');
            $table->String('pro_name_FR');
            $table->String('pro_name_GR');
            $table->String('pro_name_DU');
            $table->Float('pro_price');
            $table->timestamps();
            
        }); 
        DB::statement("ALTER TABLE products ADD pro_image LONGBLOB");
        DB::statement("ALTER TABLE products ADD pro_description_AR MEDIUMTEXT");
        DB::statement("ALTER TABLE products ADD pro_description_EN MEDIUMTEXT");
        DB::statement("ALTER TABLE products ADD pro_description_FR MEDIUMTEXT");
        DB::statement("ALTER TABLE products ADD pro_description_GR MEDIUMTEXT");
        DB::statement("ALTER TABLE products ADD pro_description_DU MEDIUMTEXT");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
