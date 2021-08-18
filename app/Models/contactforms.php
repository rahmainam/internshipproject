<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactforms extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'product',
        'website',
        'city',
        'country',
        'subject',
        'message'
    ];
    public $timestamps = false;
}
