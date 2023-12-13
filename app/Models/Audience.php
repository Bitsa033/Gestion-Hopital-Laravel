<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_patient',
        'qualite',
        'audience_type',
        'objet',
        'message',
        'nom_personnel',
    ];
}
