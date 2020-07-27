<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 255)->comment('メールアドレス');
            $table->string('password', 255)->comment('パスワード');
            $table->dateTime('created_at')->nullable()->comment('登録日時');
            $table->unsignedInteger('create_member')->nullable()->comment('登録者');
            $table->dateTime('updated_at')->nullable()->comment('更新日時');
            $table->unsignedInteger('update_member')->nullable()->comment('更新者');
            $table->dateTime('dateted_at')->nullable()->comment('削除日時');
            $table->unsignedInteger('delete_member')->nullable()->comment('削除者');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
