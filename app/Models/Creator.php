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
        'display',
        'specialty_id',
    ];

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }
}
