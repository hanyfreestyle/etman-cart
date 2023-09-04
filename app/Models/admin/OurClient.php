<?php

namespace App\Models\admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClient extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $table = "our_clients";
    public $translatedAttributes = ['name','slug','des','g_title','g_des'];
    protected $fillable = ['photo','photo_thum_1','is_active','postion'];
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'client_id';


    public function setActive(bool $status = true): self
    {
        return $this->setAttribute('is_active', $status);
    }

    public function scopeDefquery(Builder $query): Builder
    {
        return $query->with('translations');
    }


    public function scopeDefWeb(Builder $query): Builder
    {
        return $query->where('is_active',true)
            ->with('translation')
            ->orderBy('postion','asc')
            ;
    }

}
