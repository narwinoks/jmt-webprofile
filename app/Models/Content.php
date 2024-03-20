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
    public function mediaKu()
    {
        return $this->belongsTo(Media::class, 'id', 'content_id');
    }
    public function meta()
    {
        return $this->belongsTo(Meta::class, 'id', 'content_id');
    }
    public function getThumbnail()
    {
        if ($this->media && $this->media->isNotEmpty()) {
            return $this->media->first();
        }

        return $this->media()->first();
    }
}
