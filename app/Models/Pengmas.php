<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengmas extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
        'content',
        'image',
    ];

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifiable');
    }

    public function sender()
    {
        return $this->belongsTo('App\Models\User');
    }
}
