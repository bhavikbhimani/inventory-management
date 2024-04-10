<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    use FileUploadTrait;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setProductImageAttribute($value)
    {
        if ($value) {
                $this->saveFile($value, 'product_image', "product_images/" . date('Y/m')); 
        }else{
            $this->attributes['product_image'] = NULL;
        }
    }

    public function getProductImageAttribute()
    {
        if (!empty($this->attributes['product_image'])) {
            return $this->getFileUrl($this->attributes['product_image']);
        }
    }
}
