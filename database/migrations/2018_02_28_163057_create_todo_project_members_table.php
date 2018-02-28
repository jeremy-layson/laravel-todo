<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoProjectMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_project_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('email', 90);
            $table->string('access_level', 55);
            $table->string('verification_code', 100)->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo_project_members');
    }
}
