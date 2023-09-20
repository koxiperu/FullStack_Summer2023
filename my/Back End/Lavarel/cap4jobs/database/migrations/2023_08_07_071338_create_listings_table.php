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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            //new field to store the user id
            //it's of type foreignId because we need a foreign key that references the users table 
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            //constrained() for only exested ids, checks if the user_id we insert is present in users table. 
            //onDelete('cascade') will remove all listings owned by the a user if it gets deleted.
            $table->string('title');
            $table->string('logo')->nullable();
            //nullable() means that value can be null
            $table->string('tags');
            $table->string('company');
            $table->string('location');
            $table->string('email');
            $table->string('website');
            $table->longtext('description');
            $table->timestamps();
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
