<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'category_id',
        'short_text',
        'price',
        'size',
        'color',
        'qty',
        'status',
        'content'
    ];

    /**
     * Get the category associated with the Product
     */
    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
        //! CATEGORY içindeki idyi Product içindeki category_idye bağlayacağız
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
