<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTableTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "product_table_translations";
    protected $fillable = ['locale','product_table_id','des'];
}
