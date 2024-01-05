<?php

namespace App\Models;

use App\Scopes\TeamScope;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait hasTeam
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public static function bootHasTeam(): void
    {
        static::addGlobalScope(new TeamScope());

        static::creating(function ($model) {
            $model->setAttribute('team_id', auth()->user()->currentTeam->id);
            $model->setRelation('team', auth()->user()->currentTeam);
        });
    }
}
