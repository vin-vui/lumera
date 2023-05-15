<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'image',
        'client',
        'year',
        'case_title',
        'description',
        'others',
        'bloc_wysiwyg',
        'display',
        'video_1',
        'video_2',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function creators()
    {
        return $this->belongsToMany(Creator::class);
    }
}
