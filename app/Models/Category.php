<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'image',
        'thumbnail',
        'name',
        'slug',
        'content',
        'cat_ust',
        'status',
    ];

    /**
     * Get all of the items for the Category
    **/
    public function items(): HasMany //! Veriler arasında ilişki kurulacak
    {
        return $this->hasMany(Product::class, 'category_id', 'id'); //! Product tablosundaki category_id ve de id(hangi tablodan bilmiyorum)
    }

    public function subcategory () {
        return $this->hasMany(Category::class, 'cat_ust', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
