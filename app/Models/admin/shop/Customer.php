<?php

namespace App\Models\admin\shop;

use App\Models\customer\UsersCustomersAddress;
use App\Models\data\DataCity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [''];
    protected $table = "users_customers";
    protected $primaryKey = 'id';


    public function city (): BelongsTo
    {
        return $this->belongsTo(DataCity::class,'city_id','id');
    }


    public function addresses(): HasMany
    {
        return $this->hasMany(UsersCustomersAddress::class,'customer_id')
            ->with('city')
            ->orderBy('is_default','desc');
    }


}
