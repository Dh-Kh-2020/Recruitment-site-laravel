<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Laratrust\Models\LaratrustRole;

// class Role extends Model
// {
//     use HasFactory;
// }

class Role extends LaratrustRole
{
    public $guarded = [];
}
