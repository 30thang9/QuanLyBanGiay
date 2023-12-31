<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Color extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function productDetailColors(): HasMany
    {
        return $this->hasMany(ProductDetail::class,'color_id','id');
    }
}
