<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'nick_name',
        'location',
        'image',
        'description',
        'sn_tiktok',
        'sn_snapchat',
        'sn_instagram',
        'sn_youtube',
        'sn_linkedin',
        'sn_facebook',
        'sn_twitter',
        'sn_twitch',
        'tn_tiktok',
        'tn_snapchat',
        'tn_instagram',
        'tn_youtube',
        'tn_linkedin',
        'tn_facebook',
        'tn_twitter',
        'tn_twitch',
        'email',
        'display',
    ];

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }
    
}
