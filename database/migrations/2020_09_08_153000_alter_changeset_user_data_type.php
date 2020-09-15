<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChangesetsTable extends Migration {

    public function up()
    {
        Schema::table('changesets', function(Blueprint $table) {
            $table->foreignId('user_id')->change();
        });
    }

    public function down()
    {
        Schema::table('changesets', function(Blueprint $table) {
            $table->unsignedInteger('user_id')->change();
        });
    }
}