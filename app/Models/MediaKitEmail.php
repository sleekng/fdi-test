<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaKitEmail extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'company_name'
    ];
}
