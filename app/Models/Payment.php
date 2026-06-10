<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Traits\BelongsToUser;

#[Fillable(['user_id', 'payment_method', 'recurrence', 'amount', 'expires_at', 'status'])]
class Payment extends Model
{
    use HasUuids, BelongsToUser;

    protected function casts(): array
    {
        return [
            'expires_at' => 'datetime',
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
