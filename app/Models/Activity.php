<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'description',
        'status_id',
        'from_user',
        'to_user',
    ];

    public function getowner(){
        return $this->hasOne(User::class,'id','from_user')->withDefault(['name' => '---']);
    }

    public function getworker(){
        return $this->hasOne(User::class,'id','to_user')->withDefault(['name' => '---']);
    }


}
