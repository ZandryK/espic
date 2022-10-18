<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usergroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, User_UserGroupe::class,"usergroup_id",'user_id');
    }
}
