<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameQuestionColumn extends Migration
{
    public function up()
    {
        Schema::table('questions', function(Blueprint $table) {
            $table->renameColumn('question', 'text');
        });
    }


    public function down()
    {
        Schema::table('questions', function(Blueprint $table) {
            $table->renameColumn('text', 'question');
        });
    }
}

