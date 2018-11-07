<?php

namespace Modules\Auth\Entities;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['name', 'body'];

}
