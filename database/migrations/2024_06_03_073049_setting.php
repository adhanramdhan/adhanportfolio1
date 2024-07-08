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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email' , 50);
            $table->string('phone' , 15);
            $table->string('address');
            $table->text('description');
            $table->string('github_link')->null();
            $table->string('linkedin_link')->null();
            $table->string('twitter_link')->null();
            $table->string('facebook_link')->null();
            $table->string('linkwa')->null();
            $table->string('linkemail')->null();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};