<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emag extends Model
{
    use HasFactory;

    protected $fillable= [
        "e_header",
        "e_front",
        "e_back",
        "e_body",
        "e_position",
        "e_sponsor",
        "issue_id",
        "issue",
        "issue_year",
        "e_url",        
    ];
}
