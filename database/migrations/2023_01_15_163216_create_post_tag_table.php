<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->foreignId('post_id')->constrained('posts')
                ->comment('This is a Laravel syntax for creating a foreign key constraint on a table column. The $table->foreignId("post_id") method creates a new integer column called "post_id" in the table, and the ->constrained("posts") method sets a foreign key constraint on the column, linking it to the "id" column of the "posts" table. This means that the "post_id" column in the current table can only contain values that exist in the "id" column of the "posts" table.');
            $table->foreignId('tag_id')->constrained('tags')
                ->comment('The $table->foreignId("category_id") method creates a new integer column called "category_id" in the table, and the ->constrained() method sets a foreign key constraint on the column, linking it to the "id" column of the table with the same name as the current table but with the suffix "_category" added.
                The ->onDelete("cascade") method sets the action to be taken when a row in the referenced table (in this case the "id" column of the table with the same name as the current table but with the suffix "_category") is deleted. When this action is set to "cascade", it means that if a row in the referenced table is deleted, all rows in the current table that reference that row will also be deleted.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
};
