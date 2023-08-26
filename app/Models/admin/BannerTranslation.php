<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "banner_translations";
    protected $fillable =  ['name','des','other','url'];

}
