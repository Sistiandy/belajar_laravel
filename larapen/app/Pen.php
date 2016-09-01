<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pen extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pen_brand', 'pen_model', 'pen_color', 'pen_size', 'user_id',
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
