<?php

namespace App\Services\Publi;

use App\Models\Publicidade;

class PubliService
{
    public function allPublis()
    {
        return Publicidade::with('company', 'contract')->orderBy('created_at', 'desc')->get();
    }

    public function findPubli(string $id)
    {
        return Publicidade::with('company', 'contract')->findOrFail($id);
    }

    public function createPubli(array $data)
    {
        return Publicidade::create([
            'user_id' => auth()->id(),
            'company_id' => $data['company_id'],
            'contract_id' => $data['contract_id'] ?? '019eb45f-e7d1-7185-b4bd-9c328451b52d',
            'title' => $data['title'],
            'price' => $data['price'],
            'address' => $data['address'] ?? null,
            'deadline' => $data['deadline'],
        ]);
    }
}
