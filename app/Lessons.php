<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lessons';
    protected $fillable = ['name', 'price', 'category_id'];
}
