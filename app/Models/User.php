<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'gender',
        'name_title',
        'name_first',
        'name_last',
        'location_street_number',
        'location_street_name',
        'location_city',
        'location_state',
        'location_country',
        'location_postcode',
        'location_coordinates_latitude',
        'location_coordinates_longitude',
        'location_timezone_offset',
        'location_timezone_description',
        'email',
        'login_uuid',
        'login_username',
        'login_password',
        'login_salt',
        'login_md5',
        'login_sha1',
        'login_sha256',
        'dob_date',
        'dob_age',
        'registered_date',
        'registered_age',
        'phone',
        'cell',
        'id_name',
        'id_value',
        'picture_large',
        'picture_medium',
        'picture_thumbnail',
        'nat'
    ];
}
