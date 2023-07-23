<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormKeluh extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nik',
        'email',
        'location',
        'description',
    ];

    use HasFactory;

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifiable');
    }

    public function sender()
    {
        return $this->belongsTo('App\Models\User');
    }
}
