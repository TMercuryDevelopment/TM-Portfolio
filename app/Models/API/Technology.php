<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $table = 'technologies';

    protected $fillable = [
        'name', 'color'
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class,'project_technologies','technology_id', 'project_id');
    }

    public function members()
    {
        return $this->belongsToMany(Member::class,'member_technologies','technology_id', 'member_id');
    }

}
