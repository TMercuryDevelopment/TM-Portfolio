<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title', 'description', 'objetive', 'repository'
    ];

    public function members()
    {
        return $this->HasMany(Member::class,'project_members','project_id','member_id');
    }

    public function technologies()
    {
        return $this->HasMany(Technology::class,'project_technologies','project_id','technology_id');
    }
}
