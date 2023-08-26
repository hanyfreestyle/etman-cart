<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogPostPhoto extends Model
{
    use HasFactory;

    public function blogName(): BelongsTo
    {
        return $this->belongsTo(BlogPost::class,'blog_id', 'id');
    }
}
