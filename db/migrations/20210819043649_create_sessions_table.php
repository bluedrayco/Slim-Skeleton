<?php

use Utils\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSessionsTable extends Migration
{
    public function up()
    {
        $this->schema->create('sessions', function(Blueprint $table){
            $table->string('id',255)->unique(true);
            $table->text('payload');
            $table->integer('last_activity');
        });
    }
    /**
     * rollback method
     */
    public function down(){
        $this->schema->dropIfExists('sessions');
    }

}
