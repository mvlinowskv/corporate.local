<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;

class Article extends Model implements HasMedia
{
    use HasFactory, InteractsWithmedia, HasUploader;
    protected $table = 'articles';

    protected $fillable = ['title', 'url', 'description', 'content', 'thumbnail', 'thumbnailPath'];

  

}
