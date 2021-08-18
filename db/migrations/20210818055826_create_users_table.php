<?php

use Utils\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->schema->create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('username',100);
            $table->string('password',200);
            $table->integer('role_id')
                ->unsigned()
                ->references('id')->on('roles');
            $table->timestamp('created_at')->nullable(false);
            $table->timestamp('updated_at')->nullable(true);
            $table->softDeletes();
        });
    }
    /**
     * rollback method
     */
    public function down(){
        $this->schema->dropIfExists('users');
    }

}
