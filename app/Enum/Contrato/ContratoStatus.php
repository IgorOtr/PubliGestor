<?php

namespace App\Enum\Contrato;

enum ContratoStatus: string
{
    case Ativo = 'Ativo';
    case Finalizado = 'Finalizado';
    case Cancelado = 'Cancelado';

    public function label(): string
    {
        return match ($this) {
            ContratoStatus::Ativo => 'Ativo',
            ContratoStatus::Finalizado => 'Finalizado',
            ContratoStatus::Cancelado => 'Cancelado',
        };
    }
}
