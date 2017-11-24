<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationArticlesContraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
          $table->integer('users_id')->unsigned();
          $table->foreign('users_id')->references('idusers')->on('users');
          $table->integer('categories_id')->unsigned();
          $table->foreign('categories_id')->references('idcategory')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
          $table->dropForeign('articles_users_id_foreign');
          $table->dropForeign('articles_categories_id_foreign');
          $table->dropColumn('users_id');
          $table->dropColumn('categories_id');
        });
    }
}
