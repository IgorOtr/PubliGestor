<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enum\User\UserRole;
use App\Enum\User\UserPaying;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\BelongsToUser;

#[Fillable(['name', 'email', 'password', 'role', 'paying', 'phone', 'document'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids;

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isRoot(): bool
    {
        return $this->role === UserRole::Root;
    }

    public function isInfluencer(): bool
    {
        return $this->role === UserRole::Influencer;
    }

    public function isPaying(): bool
    {
        return $this->paying === UserPaying::Paying;
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function publicidades()
    {
        return $this->hasMany(Publicidade::class);
    }


}
