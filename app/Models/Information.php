<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifiable');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_penerima');
    }
}
