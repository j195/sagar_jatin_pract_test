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
        Schema::create('models', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('brand_id')->unsigned()->index()->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->biginteger('manufacturing_year')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('models', function(Blueprint $table)
        {
        $table->dropForeign('brand_id'); //
        });
    }
};
