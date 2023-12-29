<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function grades(){
        return $this->belongsTo(Grade::class, 'grade', 'id');
    }
}


