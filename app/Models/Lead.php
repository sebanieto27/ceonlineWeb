<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'units',
        'source',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_content',
        'status',
        'loss_reason',
        'assigned_to',
        'message',
        'notes',
        'subject',
        'first_contact_at',
        'last_contact_at',
    ];

    protected $casts = [
        'first_contact_at' => 'datetime',
        'last_contact_at' => 'datetime',
    ];

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class)->latest('performed_at');
    }
}
