<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $table = 'inquiries';

    protected $fillable = [
        'id',
        'name',
        'subject',
        'mobileNumber',
        'email',
        'Topic',
        'captcha',
        'message',
        'created_at',
        'updated_at',
        'strIp',

    ];
}
