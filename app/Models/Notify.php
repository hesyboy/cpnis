<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    use HasFactory;

    protected $table="notifys";

    protected $fillable=[
        'type',
        'document_id',
    ];

    public function getdocument(){
        return $this->belongsTo(Document::class,'document_id','id')->withDefault(['first_name'=>'---','last_name'=>'---']);
    }
}
