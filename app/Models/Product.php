<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'image' => 'array',
        'subcategory_id' => 'array',
    ];

    protected $table = 'products';
    protected $fillable = [
        'name',
        'brand_id',
        'category_id',
        'subcategory_id',
        'description',
        'image',
        'youtube',
        'status',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function getListCategoryNames()
    {
        $category = $this->category_id;

        foreach ($category as $key => $value) {
            $category[$key] = Category::find($value)->name;
        }

        return $category;
    }

    public function getListSubCategoryNames()
    {
        $listSub = $this->subcategory_id;

        if ($listSub == null) {
            return null;
        }
        foreach ($listSub as $key => $value) {
            $listSub[$key] = subcategory::find($value)->name;
        }
        return $listSub;
    }

    public function convertYoutube($string)
    {
        return preg_replace(
            "/[a-zA-Z\/:.]*youtu(?:be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)(?:[&?\/]t=)?(\d*)[a-zA-Z0-9\/*\-_?&;%=.]*/i",
            "https://www.youtube.com/embed/$1?start=$2",
            $string
        );
    }
}
