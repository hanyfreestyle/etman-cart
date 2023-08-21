<?php

namespace App\Models\admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryTable extends Model implements TranslatableContract
{
    use HasFactory;
    use SoftDeletes;
    use Translatable;

    protected $table = "category_tables";
    public $translatedAttributes = ['name','des'];
    protected $fillable = ['category_id'];
    protected $primaryKey = 'id';


    public function transName()
    {
        return $this->hasMany(CategoryTableTranslation::class,'category_table_id', 'id')
            ->where('locale','ar');

    }

}
