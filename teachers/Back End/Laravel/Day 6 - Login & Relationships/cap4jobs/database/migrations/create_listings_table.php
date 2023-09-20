<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('listings', function (Blueprint $table) {
            // 1. Create 'listings' table with all the fields we need
            $table->id();
            // new field to store the user id
            // it's of type foreignId because we need a foreign key that references the users table
            // constrained() is here to check if the user_id we insert is present in the users table
            // onDelete('cascade') will remove all listings owned by the a user if it gets deleted
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('logo')->nullable();
            // nullable() means that this value can be null if no value (or image for us)
            $table->string('tags');
            $table->string('company');
            $table->string('location');
            $table->string('email');
            $table->string('website');
            $table->longtext('description');
            $table->timestamps();
            // Next step => database.txt (3.)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};