<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePwdinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pwdinfos', function (Blueprint $table) {
                $table->id();
                $table->string('last_name');
                $table->string('first_name');
                $table->string('mid_name');
                $table->string('reg_num');
                $table->string('sss_num');
                $table->string('phealth_num');
                $table->date('b_day');
                $table->bigInteger('gender_id')->unsigned();
                $table->bigInteger('civstatus_id')->unsigned();
                $table->bigInteger('educbg_id')->unsigned();
                $table->string('mobile_num');
                $table->string('street_address');
                $table->bigInteger('barangay_id')->unsigned();
                $table->string('municipality');
                $table->string('province');
                $table->string('emp_status');
                $table->string('emp_type');
                $table->string('emp_nature');
                $table->string('pwd_skill');
                $table->mediumText('pwd_img')->nullable();
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
        Schema::dropIfExists('pwdinfos');
    }
}
