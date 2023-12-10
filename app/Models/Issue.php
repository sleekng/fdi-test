<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    
    
    protected $fillable=[
        'issue',

    ];

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
