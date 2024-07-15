<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'price', 'category_id', 'user_id']; //category_id e user_id servono per la relazione 1-N con gli articoli
}
