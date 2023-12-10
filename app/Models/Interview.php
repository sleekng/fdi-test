<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    
    protected $fillable=[
        'interview',
        'contact',
        'category',
        'title',
        'phone',
        'email',
        'address',
        'url',
        'website',
        'contact_pic',
        'content',
        'location',
        'image_url',
        'issue_id',
        'issue',
        'issue_year',
        'company_logo',
        'interviewee',
        'interviewee_title',
        'interviewee_image'
    ];
}
