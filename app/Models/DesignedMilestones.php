<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignedMilestones extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function milestones()
    {
        return $this->hasMany(DesignedMilestonesData::class,'designed_milestone_id','id');
    }
}
