<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeTableTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "attribute_table_translations";
    protected $fillable = ['name'];
}
