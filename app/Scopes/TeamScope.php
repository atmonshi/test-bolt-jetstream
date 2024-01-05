<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TeamScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        $builder->where($model->qualifyColumn('team_id'), auth()->user()->currentTeam->id);
    }

    public function extend(Builder $builder): void
    {
        $builder->macro('withoutTeam', function (Builder $builder) {
            return $builder->withoutGlobalScope($this);
        });
    }
}
