<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
      protected $casts = [
        'extra' => 'array'
    ];
    protected $fillable = [
           'title',
           'title2',
            'menyNamn',
            'description',
            'descriptionImage',
            'extra',
            'serviceImage',
    ];
    
    protected $table = 'services';

    use HasFactory;
}
