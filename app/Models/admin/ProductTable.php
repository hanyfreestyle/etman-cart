<?php

namespace App\Models\admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductTable extends  Model implements TranslatableContract
{
    use HasFactory;
    use SoftDeletes;
    use Translatable;

    protected $table = "product_tables";
    public $translatedAttributes = ['des'];
    protected $fillable = ['product_id','attribute_id','is_active','postion'];
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'product_table_id';

    public function attributeName()
    {
        return $this->belongsTo(AttributeTable::class,'attribute_id','id');

    }


}
