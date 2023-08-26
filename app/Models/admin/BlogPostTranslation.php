<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "blog_post_translations";
    protected $fillable = ['blog_id','locale','slug','name','des','g_title','g_des'];


}
