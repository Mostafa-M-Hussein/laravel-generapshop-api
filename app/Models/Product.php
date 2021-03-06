<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'unit', 'price', 'total',
    ];
    use HasFactory;



    public function hasUnit()
    {
        return $this->belongsTo(Unit::class, 'unit', 'id');


    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }


    public function reviews()
    {
        return $this->hasMany(Review::class );

    }


    public function category()
    {
        return $this->belongsTo(Category::class);

    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class);

    }


    public function jsonOptions()
    {
        return json_decode($this->options);

    }

}
