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
    protected $dates = ['deleted_at'];


    public function attributeName()
    {
        return $this->belongsTo(AttributeTable::class,'attribute_id','id');

    }



}
