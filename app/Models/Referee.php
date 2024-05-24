<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;


class Referee extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;

    protected $dates = ['created_at'];
    protected $fillable = [
        'fullName',
        'licenseNum',
        'email',
        'password',
        'photo'
    ];

    /**
     * Get the email address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }
}
