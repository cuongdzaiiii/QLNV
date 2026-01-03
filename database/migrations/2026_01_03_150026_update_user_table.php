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
        Schema::table('users', function (Blueprint $table) {
             $table->string('employee_code')->unique()->after('id');
            $table->string('full_name')->after('employee_code');
            $table->integer('gender')->nullable()->after('full_name');
            $table->date('date_of_birth')->nullable()->after('gender');

            $table->string('phone')->nullable()->after('date_of_birth');
            $table->string('address')->nullable()->after('password'); // đặt đâu cũng được

            $table->foreignId('department_id')
                ->nullable()
                ->after('address')
                ->constrained('departments')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreignId('role_id')
                ->nullable()
                ->after('department_id')
                ->constrained('role')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->string('degree')->nullable()->after('role_id');
            $table->integer('status')->default(1)->after('degree');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('users', function (Blueprint $table) {
            // Drop FK trước
            $table->dropForeign(['department_id']);
            $table->dropForeign(['position_id']);

            // Drop columns
            $table->dropColumn([
                'employee_code',
                'full_name',
                'gender',
                'date_of_birth',
                'phone',
                'address',
                'department_id',
                'position_id',
                'degree',
                'status',
            ]);
        });
    }
};
