<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'name',
        'destination_url',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_term',
        'utm_content',
        'status',
        'budget',
        'start_date',
        'end_date',
        'notes',
    ];

    protected $casts = [
        'budget' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function getTrackingUrlAttribute(): string
    {
        $params = array_filter([
            'utm_source' => $this->utm_source,
            'utm_medium' => $this->utm_medium,
            'utm_campaign' => $this->utm_campaign,
            'utm_term' => $this->utm_term,
            'utm_content' => $this->utm_content,
        ]);

        $separator = str_contains($this->destination_url, '?') ? '&' : '?';

        return $this->destination_url . $separator . http_build_query($params);
    }

    public function leads()
    {
        return Lead::where('utm_campaign', $this->utm_campaign)
            ->where('utm_source', $this->utm_source)
            ->where('utm_medium', $this->utm_medium);
    }

    public function getLeadsCountAttribute(): int
    {
        return $this->leads()->count();
    }
}
