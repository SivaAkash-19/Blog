<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);

        // check the slug already exist
        $slugcount = Category :: where('slug', $category ->slug) -> count();
        if($slugcount > 0 ){
            $category -> slug .= '-' .($slugcount +1);// append a number to make it unique
        }
        });
    }
}
