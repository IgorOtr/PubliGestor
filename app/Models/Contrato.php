<?php

namespace App\Models;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable('user_id', 'company_id', 'title', 'description', 'file', 'total_price', 'start_date', 'end_date', 'status')]
class Contrato extends Model
{
    use HasUuids, HasFactory, BelongsToUser;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function publicidades()
    {
        return $this->hasMany(Publicidade::class, 'contract_id');
    }
}
