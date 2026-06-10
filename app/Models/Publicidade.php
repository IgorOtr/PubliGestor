<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Traits\BelongsToUser;

#[Fillable('user_id', 'company_id', 'contract_id', 'title', 'price', 'address', 'deadline', 'status')]
class Publicidade extends Model
{
    use HasUuids, BelongsToUser;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function contract()
    {
        return $this->belongsTo(Contrato::class);
    }
    
}
