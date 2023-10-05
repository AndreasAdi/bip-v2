<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public $timestamps = false;
    use HasFactory;

    protected  $table = 'categories';
    protected $fillable = [
        'name',
    ];

    public function brand()
    {
        return $this->hasMany(Brand::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
