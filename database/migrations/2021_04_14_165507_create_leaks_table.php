<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // テーブルが無かったら作る
        if(!Schema::hasTable('leaks')){
            Schema::create('leaks', function (Blueprint $table) {
                $table->id();
                $table->string('title',32);
                $table->text('content');
                $table->timestamps();

            });
        }
        // カラムが無かったら作る
        if(!Schema::hasColumn('leaks','views')){
            Schema::table('leaks', function (Blueprint $table) {
                $table->integer('views')->default('0');
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaks');
    }
}
