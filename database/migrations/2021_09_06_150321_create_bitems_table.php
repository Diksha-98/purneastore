<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitems', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("business_id")->onDelete('cascade');
            $table->string('contact');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('b_name');
            $table->string('like')->default(0);
            $table->string('dislike')->default(0);
            $table->string('open_time');
            $table->string('close_time');
            $table->string('type_of_service');
            $table->string('image');
            $table->text('description');
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
        Schema::dropIfExists('bitems');
    }
}
