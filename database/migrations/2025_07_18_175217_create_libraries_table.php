<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            // $table->timestamps();


            // Correct datatype for foreign key
            $table->unsignedBigInteger('stud_id')->nullable();

            $table->foreign('stud_id')
                ->references('id')
                ->on('students')
                ->onUpdate('restrict')
                ->onDelete('set null');

            $table->string('book');
            $table->date('due_date')->nullable();
            $table->boolean('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
