<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author', 'last_modified', 'title',
        'description', 'content',
    ];

    const UPDATED_AT = 'last_modified';
}
