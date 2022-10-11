<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_UserGroupe extends Model
{
    use HasFactory;
    protected $table = "user__usergroup";
    protected $fillable = [
        'user_id',
        'usergroup_id'
    ];
}
