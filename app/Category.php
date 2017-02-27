<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableTrait;
use App\Product;

class Category extends Model
{
	protected $table = 'categories';

    protected $fillable = ['name','slug'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    protected $sluggable = array(
        'build_from' => 'name', //Xây dựng đường dẫn từ trường 'name'
        'save_to'   => 'slug'   //Lưu tên đường dẫn vào trường 'slug'
    );
}
