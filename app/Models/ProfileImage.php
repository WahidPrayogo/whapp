<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileImage extends Model
{
    use SoftDeletes, UUID;

    protected $fillable = [
        'profile_id',
        'image'
    ];

    /**
     * Get the profile that owns the ProfileImage
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
