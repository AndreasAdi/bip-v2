<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table = 'subcategories';
    protected $fillable = [
        'name',
        'category_id',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
