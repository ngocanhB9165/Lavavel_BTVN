<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $fillable = ['name','price','image','author_id','status'];
    public $timestamps = false;
    public function author(){
       return $this->belongsTo(Author::class,'author_id','id');
    }
}
