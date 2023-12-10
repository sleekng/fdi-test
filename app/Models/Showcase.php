<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    use HasFactory;

    protected $fillable=[
        'showcase',
        'contact',
        'category',
        'title',
        'phone',
        'email',
        'address',
        'url',
        'website',
        'contact_pic',
        'logo',
        'featured',
        'homeslide',
        'content',
        'location',
        'image_url',
        'issue_id',
        'issue',
        'issue_year',
    ];
  
}
