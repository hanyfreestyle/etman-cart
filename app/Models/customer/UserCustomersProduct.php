<?php

namespace App\Models\customer;

use App\Models\admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserCustomersProduct extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "user_customers_products";
    protected $primaryKey = 'id';


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id')
            ->with('category')

            ;
    }
}
