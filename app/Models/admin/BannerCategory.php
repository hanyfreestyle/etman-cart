<?php

namespace App\Models\admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerCategory extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;

    public $translatedAttributes = ['name'];
    protected $fillable = [''];
    protected $table = "banner_categories";
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'category_id';


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDefquery(Builder $query): Builder
    {
        return $query->with('translations');
    }
}
