<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutores extends Model
{
    protected $fillable = [
        'first_name',
        'last_name1',
        'last_name2',
        'company',
        'type_document',
        'document',
        'country_document',
        'province',
        'municipe',
        'status',
        'telephone',
        'email'
    ];
}
