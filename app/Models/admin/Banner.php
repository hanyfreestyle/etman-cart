<?php

namespace App\Models\admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;

    public $translatedAttributes = ['name','des','other','url'];
    protected $fillable = ['category_id','photo','photo_thum_1','is_active','postion','text_view','url_type'];
    protected $table = "banners";
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'banner_id';


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDefquery(Builder $query): Builder
    {
        return $query->with('translations');
    }

    public function categoryName(): BelongsTo
    {
        return $this->belongsTo(BannerCategory::class,'category_id','id')->with('translation');
    }

}
