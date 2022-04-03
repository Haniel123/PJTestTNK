<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDvvcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvvc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenDVVC');
            $table->string('TenVietTat');
            $table->integer('MaDVVC')->nullable();
            $table->date('NgayHetHan');
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
        Schema::dropIfExists('dvvc');
    }
}
