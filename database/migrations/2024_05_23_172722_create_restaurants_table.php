<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cuisine_type');
            $table->string('location');
            $table->string('detail_address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('website');
            $table->decimal('rating', 2, 1);
            $table->string('profile_image');
            $table->string('cover_image');
            $table->text('bio');
            $table->boolean('is_open');
            $table->boolean('has_delivery');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
