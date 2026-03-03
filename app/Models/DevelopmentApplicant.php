<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DevelopmentApplicant extends Model
{
    use SoftDeletes, UUID;

    protected $fillable = [
        'development_id',
        'user_id',
        'status'
    ];

    /**
     * Get the development that owns the DevelopmentApplicant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function development()
    {
        return $this->belongsTo(Development::class);
    }

    /**
     * Get the user that owns the DevelopmentApplicant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
