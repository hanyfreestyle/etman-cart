<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClientTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "our_client_translations";
    protected $fillable = ['name','slug','des','g_title','g_des'];

}
