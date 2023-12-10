<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'article',
        'author',
        'title',
        'phone',
        'email',
        'address',
        'url',
        'website',
        'token',
        'image_url',
        'issue_id',
        'issue_year',
        'picture',
        'content',
        'featured',
        'issue'
    ];

    public function issues(){
        return $this->belongsTo(Issue::class);
    }
}
