<?php

namespace App\Enum\Publi;

enum PubliStatus: string
{
    case Pendente = 'Pendente';
    case Concluida = 'Concluida';
    case Cancelada = 'Cancelada';

    public function label(): string
    {
        return match ($this) {
            PubliStatus::Pendente  => 'Pendente',
            PubliStatus::Concluida => 'Concluída',
            PubliStatus::Cancelada => 'Cancelada',
        };
    }
}
