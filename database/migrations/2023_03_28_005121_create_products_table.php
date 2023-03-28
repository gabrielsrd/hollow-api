<?php

/*gender varchar(32),
    name_title varchar(32),
    name_first varchar(64),
    name_last varchar(64),
    location_street_number int,
    location_street_name varchar(128),
    location_city varchar(128),
    location_state varchar(128),
    location_country varchar(128),
    location_postcode varchar(32),
    location_coordinates_latitude float,
    location_coordinates_longitude float,
    location_timezone_offset varchar(32),
    location_timezone_description varchar(256),
    email varchar(128),
    login_uuid varchar(256),
    login_username varchar(128),
    login_password varchar(128),
    login_salt varchar(64),
    login_md5 varchar(256),
    login_sha1 varchar(256),
    login_sha256 varchar(256),
    dob_date varchar(128),
    dob_age int,
    registered_date varchar(128),
    registered_age int,
    phone varchar(64),
    cell varchar(64),
    id_name varchar(64),
    id_value varchar(64),
    pitcure_large varchar(256),
    picture_medium varchar(256),
    picture_thumbnail varchar(256),
    nat varchar(32)*/ 


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
        Schema::create('products', function (Blueprint $table) {
            $table->string('gender')->nullable();
            $table->string('name_title')->nullable();
            $table->string('name_first')->nullable();
            $table->string('name_last')->nullable();
            $table->integer('location_street_number')->nullable();
            $table->string('location_street_name')->nullable();
            $table->string('location_city')->nullable();
            $table->string('location_state')->nullable();
            $table->string('location_country')->nullable();
            $table->string('location_postcode')->nullable();
            $table->float('location_coordinates_latitude')->nullable();
            $table->float('location_coordinates_longitude')->nullable();
            $table->string('location_timezone_offset')->nullable();
            $table->string('location_timezone_description')->nullable();
            $table->string('email')->nullable();
            $table->string('login_uuid')->nullable();
            $table->string('login_username')->nullable();
            $table->string('login_password')->nullable();
            $table->string('login_salt')->nullable();
            $table->string('login_md5')->nullable();
            $table->string('login_sha1')->nullable();
            $table->string('login_sha256')->nullable();
            $table->string('dob_date')->nullable();
            $table->integer('dob_age')->nullable();
            $table->string('registered_date')->nullable();
            $table->integer('registered_age')->nullable();
            $table->string('phone')->nullable();
            $table->string('cell')->nullable();
            $table->string('id_name')->nullable();
            $table->string('id_value')->nullable();
            $table->string('picture_large')->nullable();
            $table->string('picture_medium')->nullable();
            $table->string('picture_thumbnail')->nullable();
            $table->string('nat')->nullable();
            $table->id();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
