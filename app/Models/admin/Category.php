<?php

namespace App\Models\admin;


use DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
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
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDefShopquery(Builder $query): Builder
    {
        return $query->with('translations')
            ->withCount('children_shop')
            ;

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     children
    public function children_shop():hasMany
    {
        return $this->hasMany(Category::class , 'parent_id', 'id' )
            ->where('cat_shop',true)
            ->with('translation')
//            ->withCount('category_with_product_shop')
//            ->with('category_with_product_shop')
            ;
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #  category_with_product_shop
    public function category_with_product_shop()
    {
        return $this->belongsToMany(Product::class,'product_category','category_id','product_id')
            ->where('is_active',true)
            ->where('is_archived',false)
            ->with('translation')
            ;
    }

/*
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #  CategoryWithProduct
    public function CategoryWithProduct()
    {
        return $this->belongsToMany(Product::class,'product_category','category_id','product_id');
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
          // ->where('cat_shop',true)
           ->with('translation')
           ->withCount('CategoryWithProduct')
           ->with('CategoryWithProduct')
           ;
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
        return $query->with('translations')
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





#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDefquery(Builder $query): Builder
    {
        return $query->with('translations')
            ->withCount('children')
            ->withCount('table_data');
    }










#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     scopeRoot
    public function scopeRootCategory(Builder $query): Builder
    {
        return $query->whereNull('parent_id');
    }



    public function recursiveProduct()
    {
        return $this->hasManyOfDescendantsAndSelf(Product::class ,'category_id', 'id');

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     children
    public function children_new():hasMany
    {
        return $this->hasMany(Category::class , 'parent_id', 'id' )->with('children_new')

            ;
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function recursive_product_shop()
    {
        return $this->belongsToManyOfDescendantsAndSelf(Product::class,
            'product_category',
        );
    }



    public function countTotalProducts()
    {
        $query = DB::table('categories')->selectRaw('categories.*')->where('id', $this->id)->unionAll(
            DB::table('categories')->selectRaw('categories.*')->join('tree', 'tree.id', '=', 'categories.parent_id')
        );

        $tree = DB::table('products')->withRecursiveExpression('tree', $query)
            ->join('product_category', 'product_category.product_id', '=', 'products.id')
            ->whereIn(
                'product_category.category_id',
                DB::table('tree')->select('id')
            )
            ->count('products.id');

        return $tree;
    }

*/

}


