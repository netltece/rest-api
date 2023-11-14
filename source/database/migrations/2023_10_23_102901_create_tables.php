<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    public function up(): void
    {
        $this->createPlaceIssuesTable();
        $this->createCitiesTable();
        $this->createPassportsTable();
    }

    public function down(): void
    {
        Schema::dropIfExists('passports');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('place_issues');
    }

    private function createPlaceIssuesTable(): void
    {
        Schema::create('place_issues', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
        });
    }

    private function createCitiesTable(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
        });
    }

    private function createPassportsTable(): void
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->id();
            $table->char('series', 4)->comment('серия паспорта');
            $table->char('number', 6)->comment('номер паспорта');
            $table->date('date_issue')->comment('дата выдачи');
            $table->foreignId('place_issue_id')->comment('место выдачи')->constrained('place_issues');
            $table->char('department_code', 6)->comment('код подразделения');
            $table->string('last_name', 128)->comment('фамилия');
            $table->string('first_name', 64)->comment('имя');
            $table->string('father_name', 64)->comment('отчество');
            $table->boolean('sex')->comment('пол');
            $table->date('birthday')->comment("дата дня рождения");
            $table->foreignId('birth_city_id')->comment('город рождения')->constrained('cities');
            $table->foreignId('reg_city_id')->comment('город регистрации')->constrained('cities');
            $table->unique(['series', 'number']);
            $table->index(['last_name', 'first_name']);
        });
    }
}
