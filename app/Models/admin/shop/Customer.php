<?php

namespace App\Models\admin\shop;

use App\Models\data\DataCity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;


    protected $fillable = [''];
    protected $table = "users_customers";
    protected $primaryKey = 'id';


    public function city (): BelongsTo
    {
        return $this->belongsTo(DataCity::class,'city_id','id');
    }


}
