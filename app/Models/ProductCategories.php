<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'products_id',
        'categories_id',
      ];
}
