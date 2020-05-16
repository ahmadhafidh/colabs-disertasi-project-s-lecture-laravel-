<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->string('sample');
            $table->bigInteger('lampu');
            $table->bigInteger('tt');
            $table->bigInteger('jd');
            $table->float('jaccard')->nullable();
            $table->float('cosine_similarity')->nullable();
            $table->float('euclidean_distance')->nullable();
            $table->float('manhattan')->nullable();
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
        Schema::dropIfExists('datas');
    }
}
