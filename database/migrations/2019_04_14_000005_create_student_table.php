<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'student';

    /**
     * Run the migrations.
     * @table student
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('student_code');
            $table->string('fullname', 45)->nullable();
            $table->string('current_address', 45)->nullable();
            $table->string('address', 45)->nullable();
            $table->string('country', 45)->nullable();
            $table->string('department_id', 45)->nullable();
            $table->string('course_id', 45)->nullable();
            $table->string('status_id', 45)->nullable();
            $table->dateTime('create_date')->nullable();
            $table->dateTime('last_update')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
