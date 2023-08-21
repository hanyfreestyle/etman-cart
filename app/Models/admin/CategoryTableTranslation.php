<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTableTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "category_table_translations";
    protected $fillable = ['name','des'];

}
