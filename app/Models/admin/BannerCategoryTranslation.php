<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerCategoryTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "banner_category_translations";
    protected $fillable = ['category_id','locale','slug','name'];

}
