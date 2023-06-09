<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();

            // //method 1-
            // $table->enum('role', ([admin, user]))-> default('user');

            // //method 2
            // $table -> string('role',5)->default(1);

            //method 3
            // very small binary requirement
            $table
            ->tinyInteger('role')
            ->default(\App\Enums\UserRole::User->value);

            $table->string('temp')->default('1.45') ->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();

            //profile
            $table->string('country')->nullable();
            $table->string('phone',10)->nullable();
            $table->string('card_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
