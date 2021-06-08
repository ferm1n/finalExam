<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['firstName', 'middleName', 'lastName', 'course', 'yearLevel', 'sitio', 'barangay', 'municipality', 'Province', 'zipcode', 'image'];
}
