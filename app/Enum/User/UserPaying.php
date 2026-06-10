<?php

namespace App\Enum\User;

enum UserPaying: string
{
    case Free = 'free';
    case Paying = 'paying';

    public function label(): string
    {
        return match ($this) {
            UserPaying::Free   => 'Gratuito',
            UserPaying::Paying => 'Pro',
        };
    }
}
