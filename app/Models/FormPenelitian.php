<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPenelitian extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_penelitian',
        'location',
        'description',
        'content',
        'image',
    ];
    public function sender()
    {
        return $this->belongsTo('App\Models\User');
    }
}
