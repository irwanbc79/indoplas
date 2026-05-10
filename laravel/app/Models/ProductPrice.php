<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model {
    protected $fillable = ['product_name','category','price_min','price_max','unit','note','is_active','sort_order'];
    protected $casts = ['is_active' => 'boolean', 'price_min' => 'decimal:2', 'price_max' => 'decimal:2'];
}
