<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    protected $fillable=[
        'creator_id',
        'document_id',
        'description',
        'priority_id',
        'status_id',
        'worker_id',
    ];
}
