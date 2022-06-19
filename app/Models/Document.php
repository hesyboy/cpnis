<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Document extends Model
{
    use HasFactory,Notifiable;

    protected $table="documents";


    protected $fillable = [

        'document_type',
        'first_name',
        'last_name',
        'document_id',
        'email',
        'mobile',
        'submit_date',
        'expire_date',
        'next_notify',
        'last_notify',
        'status',
    ];

    public function routeNotificationForMail()
    {
    return $this->emailsToArray();
    }

    private function emailsToArray() {
        if (is_null($this->email)) {
            return $this->email; //default email
        }
        //perform more checks that you need
        return array_map('trim', explode(',', $this->email));
    }




}
