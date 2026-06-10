<?php

namespace App\Models;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable('user_id', 'name', 'logo', 'phone')]
class Empresa extends Model
{
    use HasUuids, HasFactory, BelongsToUser;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publicidades()
    {
        return $this->hasMany(Publicidade::class, 'company_id');
    }

    public function contratos()
    {
        return $this->hasMany(Contrato::class, 'company_id');
    }
}
