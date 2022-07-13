<?php

namespace App\Models;


use App\Models\DocumentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Document extends Model
{
    use HasFactory,Notifiable;

    protected $table="documents";


    protected $fillable = [

        'document_type',
        'title',
        'first_name',
        'last_name',
        'document_number',
        'email',
        'mobile',
        'description',
        'issue_date',
        'status',
        'creator',
    ];


    public function getType(){
        return $this->belongsTo(DocumentType::class,'document_type','id')->withDefault(['name' => '---']);
    }

    public function getCreator(){
        return $this->belongsTo(User::class,'creator','id')->withDefault(['name' => '---']);
    }

    public function getTasks(){
        return $this->hasMany(Task::class,'document_id','id');
    }


}
