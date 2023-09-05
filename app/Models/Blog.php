<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = 
    ['title', 'bodyText', 'description','blogImage'];
    use HasFactory;
}
