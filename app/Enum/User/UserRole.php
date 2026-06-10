<?php

namespace App\Enum\User;

enum UserRole: string
{
    case Root = 'root';
    case Influencer = 'influencer';
    case User = 'user';

    public function label(): string
    {
        return match ($this) {
            UserRole::Root       => 'R',
            UserRole::Influencer => 'I',
            UserRole::User       => 'U',
        };
    }
}
