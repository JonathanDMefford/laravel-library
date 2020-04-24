<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function path()
    {
        return route('authors.index', $this);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
