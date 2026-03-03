<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialAssistanceRecipient extends Model
{
    use SoftDeletes, UUID;

    protected $fillable = [
        'social_assistance_id',
        'head_of_family_id',
        'amount',
        'reason',
        'bank',
        'account_number',
        'proof',
        'status'
    ];

    /**
     * Get the user that owns the SocialAssistanceRecipient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function socialAssistance()
    {
        return $this->belongsTo(SocialAssistance::class);
    }

    /**
     * Get the user that owns the SocialAssistanceRecipient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function headOfFamily()
    {
        return $this->belongsTo(HeadOfFamily::class);
    }
}
