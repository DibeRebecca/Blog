<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'contenu',
        'description',
        'auteur',
        'titre',
        'details',
        'featured_image',
        'content_images',
    ];
    public function getFeaturedImageUrlAttribute()
{
    if ($this->featured_image) {
        return Storage::url('featured_images/' . $this->featured_image);
    }
    
    return null;
}

public function getContentImageUrlsAttribute()
{
    $imageUrls = [];

    if ($this->content_images) {
        $contentImages = json_decode($this->content_images, true);
        
        foreach ($contentImages as $image) {
            $imageUrls[] = Storage::url('content_images/' . $image);
        }
    }

    return $imageUrls;
}
}
