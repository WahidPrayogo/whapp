<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes, UUID;

    protected $fillable = [
        'thumbnail',
        'name',
        'about',
        'headman',
        'people',
        'agricultural_area',
        'total_area'
    ];

    /**
     * Get all of the profileImage for the Profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profileImage()
    {
        return $this->hasMany(ProfileImage::class);
    }
}
