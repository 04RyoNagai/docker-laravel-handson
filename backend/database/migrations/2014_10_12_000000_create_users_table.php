<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 254);
            $table->string('login_id', 254)->unique();
            $table->string('password_digest', 254);
            $table->string('mail', 254)->unique();
            $table->string('next_mail', 254)->unique()->nullable()->default(null);
            $table->string('token', 254)->unique();
            $table->string('reset_password_token', 254)->unique()->nullable();
            $table->timestamp('reset_password_expire_time')->nullable();
            $table->string('confirmation_token', 254)->unique()->nullable();
            $table->timestamp('confirmation_expire_time')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
