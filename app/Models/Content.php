<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory, Uuids;
    protected $guarded = ['id'];
    protected $table = 'contents';

    public function category()
    {
        return $this->belongsTo(ContentCategory::class, 'content_category_id', 'id');
    }
    public function media()
    {
        return $this->hasMany(Media::class);
    }
    public function meta()
    {
        return $this->belongsTo(Meta::class, 'id', 'content_id');
    }
}
