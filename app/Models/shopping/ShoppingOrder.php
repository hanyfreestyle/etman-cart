<?php

namespace App\Models\shopping;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingOrder extends Model
{
    use HasFactory;

    protected $table = "shopping_orders";
    protected $primaryKey = 'id';


    public function getFormatteDate()
    {
        return Carbon::parse($this->order_date)->locale(app()->getLocale())->translatedFormat('jS F Y') ;

    }

}
