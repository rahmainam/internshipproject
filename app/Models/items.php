<?php

namespace App\Models;
use App\Models\categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'detail',
        'categories_id',
        'isTrending'
    ];
    public $timestamps = false;

    public function Category(){
        return $this->belongsTo(categories::class,'categories_id','id');
    }

// public function Category(){
//       return $this->belongsTo('App/categories');
 //   }
}
