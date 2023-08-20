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
    use SoftDeletes;
    use Translatable;
    use HasRecursiveRelationships;

    public $translatedAttributes = ['name','g_title','g_des','body_h1','breadcrumb'];
    protected $fillable = ['slug','photo','photo_thum_1','is_active'];
    protected $table = "categories";
    protected $primaryKey = 'id';


    public function setActive(bool $status = true): self
    {
        return $this->setAttribute('is_active', $status);
    }


    public function scopeRoot(Builder $query): Builder
    {
        return $query->whereNull('parent_id');
    }

    public function children()
    {
       return $this->hasMany(Category::class , 'parent_id', 'id' );
    }


}
