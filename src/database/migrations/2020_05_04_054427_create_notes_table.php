<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    const TABLE_NAME = 'notes';


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('記事ID');
            $table->string('title', 255)->nullable(false)->comment('タイトル');
            $table->text('content')->nullable(true)->comment('内容');
            $table->timestamp('created_at')->nullable(false)->useCurrent()->comment('登録日時');
            $table->timestamp('updated_at')->nullable(false)->useCurrent()->comment('更新日時');
            $table->timestamp('deleted_at')->nullable(true)->comment('削除日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}

