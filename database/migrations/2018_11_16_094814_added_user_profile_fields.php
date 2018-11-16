<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedUserProfileFields extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::table('users', function (Blueprint $table) {
          $table->string('avatar');
          $table->string('game1');
          $table->string('game2');
          $table->string('game3');
          $table->string('game4');
          $table->string('game5');
          $table->string('bio');

      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('avatar');
          $table->dropColumn('game1');
          $table->dropColumn('game2');
          $table->dropColumn('game3');
          $table->dropColumn('game4');
          $table->dropColumn('game5');
          $table->dropColumn('bio');
      });
  }
}
