<?php

namespace App\Models\admin;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model implements TranslatableContract
{
    use HasFactory;
    //use SoftDeletes;
    use Translatable;
    use HasRecursiveRelationships;

    public $translatedAttributes = ['name','slug','des','g_title','g_des','body_h1','breadcrumb'];
    protected $fillable = ['parent_id','photo','photo_thum_1','is_active'];
    protected $table = "categories";
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'category_id';

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     setActive
    public function setActive(bool $status = true): self
    {
        return $this->setAttribute('is_active', $status);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     scopeRoot
    public function scopeRoot(Builder $query): Builder
    {
        return $query->whereNull('parent_id');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     children
    public function children():hasMany
    {
       return $this->hasMany(Category::class , 'parent_id', 'id' )
           ->with('CatProduct')
           ->with('translation')
           ;
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     children
    public function CatProduct():hasMany
    {
        return $this->hasMany(Product::class , 'category_id', 'id' )
            ->with('translation');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     table_data
    public function table_data():hasMany
    {
        return $this->hasMany(CategoryTable::class , 'category_id', 'id' )
            ->where('is_active',true)
            ->with('translation')
            ->with('attributeName')
            ->orderBy('postion');
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDefSitequery(Builder $query): Builder
    {
        return $query->where('cat_web',true)
            ->with('translations')
            ->withCount('children')
            ->withCount('table_data');
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDefShopquery(Builder $query): Builder
    {
        return $query->where('cat_shop',true)
            ->with('translations')
            ->withCount('children')
            ->withCount('table_data');
    }




    public function scopeDefWeb(Builder $query): Builder
    {
        return $query->where('is_active',true)
            ->with('translation')
            ->withCount('children')
            ->with('children')
            ->withCount('CatProduct')
            ->with('CatProduct')
            ->withCount('table_data')
            ->with('table_data')

            ;
    }

    public function recursiveProduct()
    {
        return $this->hasManyOfDescendantsAndSelf(Product::class ,'category_id', 'id')
            ->inRandomOrder();
    }
}
