<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait BelongsToUser
{
    protected static function bootBelongsToUser(): void
    {
        /** @var Model $static */
        $static = static::class;

        $static::creating(function (Model $model) {
            if (auth()->check() && empty($model->user_id)) {
                $model->user_id = auth()->id();
            }
        });

        $static::addGlobalScope('user', function (Builder $builder) {
            if (auth()->check()) {
                $builder->where(
                    $builder->getModel()->getTable() . '.user_id',
                    auth()->id()
                );
            }
        });
    }
}
