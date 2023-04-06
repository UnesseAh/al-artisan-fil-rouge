<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('title');
            $table->string('slug', 255)->unique();
            $table->text('description');
            $table->decimal('price', 6, 2)->default(0);
            $table->decimal('old_price', 6, 2)->default(0);
            $table->integer('stock')->default(0);
            $table->string('image');
            $table->foreignId('subcategory_id')->constrained('subcategories')->onDelete('cascade');
//            $table->unsignedBigInteger('subcategory_id');
//            $table->foreign('subcategory_id')->references('id')->on('subcategories');
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
        Schema::dropIfExists('products');
    }
};
