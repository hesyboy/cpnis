<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    protected $fillable=[
        'title',
        'creator_id',
        'document_id',
        'description',
        'priority_id',
        'status_id',
        'worker_id',
    ];

    public function getCreator(){
        return $this->belongsTo(User::class,'creator_id','id')->withDefault(['name' => '---']);
    }

    public function getWorker(){
        return $this->belongsTo(User::class,'worker_id','id')->withDefault(['name' => '---']);
    }
}
