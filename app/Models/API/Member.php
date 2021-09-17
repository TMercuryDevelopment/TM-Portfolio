<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = [
        'name', 'email', 'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    public function technologies()
    {
        return $this->HasMany(Technology::class,'member_technologies','member_id','technology_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class,'member_technologies','member_id','technology_id');
    }
}
