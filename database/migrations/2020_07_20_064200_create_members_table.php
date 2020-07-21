<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 255)->comment('メールアドレス');
            $table->string('password', 255)->comment('パスワード');
            $table->string('last_name', 255)->comment('姓');
            $table->string('first_name', 255)->comment('名');
            $table->string('last_name_kana', 255)->comment('姓（カナ）');
            $table->string('first_name_kana', 255)->comment('名（カナ）');
            $table->unsignedTinyInteger('sex')->comment('性別 1:男性 2:女性');
            $table->date('birthday')->comment('誕生日');
            $table->string('post_code', 7)->comment('郵便番号');
            $table->string('addr1')->comment('都道府県');
            $table->string('addr2')->comment('郡市区(島)');
            $table->string('addr3')->comment('以降の住所');
            $table->string('addr4')->nullable()->comment('マンション名等');
            $table->string('tel1', 13)->comment('電話番号1');
            $table->string('tel2', 13)->nullable()->comment('電話番号2');
            $table->unsignedInteger('height')->comment('身長（cm）');
            $table->unsignedInteger('weight')->comment('体重（kg）');
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
        Schema::dropIfExists('members');
    }
}
