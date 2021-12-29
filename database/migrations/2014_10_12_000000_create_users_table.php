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
            $table->increments('id');
            $table->integer('role_id')->unsigned()->default(0);
            $table->string('name',100);
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('language')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('confirm_password');
            $table->text('description',100)->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['yes', 'no'])->default('no');
            $table->date('account_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('blocked_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
