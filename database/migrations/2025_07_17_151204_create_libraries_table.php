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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            // $table->unsignedInteger('stud_id');
            // $table->foreign('stud_id')
            // ->references('id')
            // ->on('peoples')
            // // ->onUpdate('cascade')
            // ->onUpdate( 'restrict')
            // // ->onUpdate('restrict')
            // ->onDelete('set null');
            // $table->string('book');
            // $table->date('due_date')->nullable();
            // $table->boolean('status');


            // $table->foreignId('stu_id')->constrained('peoples');
            
            
            
            $table->dropPrimary('stu_id_primary');    
            $table->dropUnique('stu_id_unique');    
            $table->dropForeign('stu_id_foreign');    
            // $table->dropForeign[('stu_id')];    





            
            $table->insignedBigInteger('people_id');
            $table->foreignId('student_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
