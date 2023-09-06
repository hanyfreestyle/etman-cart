<?php

namespace App\Models\admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable;

class FaqCategory extends Model implements TranslatableContract , LocalizedUrlRoutable
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;


    public $translatedAttributes = ['slug','name','des','g_title','g_des','locale'];
    protected $fillable = [''];
    protected $table = "faq_categories";
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'category_id';



    protected static function boot()
    {
        parent::boot();
        static::deleted(function($account) {
            $account->get_trashed_list()->delete();
        });
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDefquery(Builder $query): Builder
    {
        return $query->with('translations');
    }


    public function get_trashed_list(): HasMany
    {
        return $this->hasMany(Faq::class,'category_id','id')->withTrashed();
    }



    public function scopeDefWeb(Builder $query): Builder
    {
        return $query->where('is_active',true)
            ->with('translation')
            ->withCount('FaqToCat')
            ->with('FaqToCat')
            ->orderBy('faq_to_cat_count','DESC')
            ;
    }


    public function FaqToCat(): HasMany
    {
        return $this->hasMany(Faq::class,'category_id','id');
    }

    public function slugs(): HasMany
    {
        return $this->hasMany(FaqCategoryTranslation::class,'category_id','id');
    }

    public function getLocalizedRouteKey($locale)
    {



        return $this->slugs()->where('locale',$locale)->first()->slug;




        //return $this->FaqCatSlug->where('locale','=',$locale)->first() ;
       //return $this->FaqCatSlug->first()->slug;

    }
}
