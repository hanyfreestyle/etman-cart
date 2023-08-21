<?php

namespace App\Models\admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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


    public function setActive(bool $status = true): self
    {
        return $this->setAttribute('is_active', $status);
    }

}
