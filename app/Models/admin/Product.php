<?php

namespace App\Models\admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['name','slug','des','g_title','g_des'];
    protected $fillable = ['category_id','photo','photo_thum_1','is_active'];
    protected $table = "products";
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'product_id';

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     setActive
    public function setActive(bool $status = true): self
    {
        return $this->setAttribute('is_active', $status);
    }


    public function categoryName(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id')->with('translation');
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     table_data
    public function table_data(): HasMany
    {
        return $this->hasMany(ProductTable::class , 'product_id', 'id' );
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDefquery(Builder $query): Builder
    {
        return $query->with('translations')
            ->with('categoryName')
            ->withCount('table_data')
            ->withCount('more_photos')
            ;
    }


    public function more_photos(): HasMany
    {
        return $this->hasMany(ProductPhoto::class,'product_id','id');
    }




}
