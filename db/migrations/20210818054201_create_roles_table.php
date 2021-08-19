<?php

use Utils\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration
{
    public function up()
    {
        $this->schema->create('roles', function(Blueprint $table){
            $table->increments('id');
            $table->string('slug',100);
            $table->string('name',100);
            $table->string('description',200);
            $table->timestamp('created_at')->nullable(false);
            $table->timestamp('updated_at')->nullable(true);
            $table->softDeletes();
        });
    }
    /**
     * rollback method
     */
    public function down(){
        $this->schema->dropIfExists('roles');
    }

}
