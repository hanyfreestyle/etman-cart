<?php

namespace App\Models\admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;

    public $translatedAttributes = ['name','slug','des','g_title','g_des'];
    protected $fillable = ['youtube','photo','photo_thum_1','is_active','published_at'];
    protected $table = "blog_posts";
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'blog_id';

    protected $dates = ['published_at'];
    protected $casts = [
        'published_at' => 'datetime'
    ];


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     setActive
    public function setActive(bool $status = true): self
    {
        return $this->setAttribute('is_active', $status);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDefquery(Builder $query): Builder
    {
        return $query->with('translations')
            //->with('categoryName')
            ->withCount('more_photos')
            ;
    }

    public function more_photos(): HasMany
    {
        return $this->hasMany(BlogPostPhoto::class,'blog_id','id');
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    scopeDefWeb
    public function scopeDefWeb(Builder $query): Builder
    {
        return $query->where('is_active',true)
            ->whereDate('published_at','<=',now())
            ->with('translation')
            ->withCount('more_photos')
            ->orderBy('published_at','desc')
            ;
    }


    public function getFormatteDate()
    {
       //return $this->published_at->format('F jS Y');
       return Carbon::parse($this->published_at)->locale(app()->getLocale())->translatedFormat('jS F Y') ;

    }

}
