<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProductivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'task_id',
        'comment',
        'subject',
        'date',
        'start_time',
        'end_time',
        'user_id',
        'time_rendered',
        'date_created'
    ];
}
