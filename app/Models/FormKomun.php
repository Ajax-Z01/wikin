<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormKomun extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'company_name',
        'email',
        'location',
        'description',
        'logo_image',
    ];

    use HasFactory;

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifiable');
    }
}
