<?php

namespace App\Models\admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeTable extends Model implements TranslatableContract
{
    use HasFactory;
    use SoftDeletes;
    use Translatable;



    protected $table = "attribute_tables";
    public $translatedAttributes = ['name'];
    protected $fillable = ['id'];
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'attribute_id';
    protected $dates = ['deleted_at'];
    protected static $relations_to_cascade = ['get_category_table'];

    protected static function boot()
    {
        parent::boot();

        static::deleted(function($account) {
            $account->get_category_table()->delete();

        });
        static::deleted(function($account) {
            $account->get_product_table()->delete();
        });

   }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    setActive
    public function setActive(bool $status = true): self
    {
        return $this->setAttribute('is_active', $status);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function get_category_table(): HasMany
    {
        return $this->hasMany(CategoryTable::class,'attribute_id','id')->withTrashed();
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function get_product_table(): HasMany
    {
        return $this->hasMany(ProductTable::class,'attribute_id','id')->withTrashed();
    }

}
