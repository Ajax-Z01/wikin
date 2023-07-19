<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPemas extends Model
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
        'phone',
        'description',
    ];

    use HasFactory;

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifiable');
    }
}
