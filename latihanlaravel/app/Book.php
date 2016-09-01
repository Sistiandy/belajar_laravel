<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_name', 'book_desc', 'book_author', 'book_page', 'user_id',
    ];

     /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'int',
    ];
    
    
}
