<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqCategoryTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "faq_category_translations";
    protected $fillable = ['name'];
}
