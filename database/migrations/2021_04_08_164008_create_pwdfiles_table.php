<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePwdfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pwdfiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('file_id')->constrained('pwdinfos')->onDelete('cascade')->onUpdate('cascade');
            $table->mediumText('pwd_files');
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
        Schema::dropIfExists('pwdfiles');
    }
}
