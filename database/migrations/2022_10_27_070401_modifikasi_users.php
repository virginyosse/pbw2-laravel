<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifikasiUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //penambahan kolom baru
            $table->string('username',100);
            $table->string('address',1000);
            $table->string('phonenumber',20);
            $table->date('birthdate')->nullable();

            $table->string('agama',20);
            $table->tinyInteger('jeniskelamin');
            //modifikasi kolom
            $table->renameColumn('name','fullname');
            $table->string('email')->nullable()->change();
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
            //
        });
    }
}
