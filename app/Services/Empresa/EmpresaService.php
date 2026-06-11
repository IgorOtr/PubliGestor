<?php

namespace App\Services\Empresa;

use App\Models\Empresa;

class EmpresaService
{

    public function allEmpresas()
    {
        return Empresa::with('publicidades', 'contratos')->orderBy('created_at', 'desc')->paginate(5);
    }

    public function findEmpresa(string $id)
    {
        return Empresa::with('publicidades', 'contratos')->findOrFail($id);
    }

    private function uploadLogo($file)
    {
        $path = $file->store('empresas/logos', 'public');
        return $path;
    }

    public function createEmpresa(array $data)
    {
        $logo = !empty($data['logo']) ? $this->uploadLogo($data['logo']) : null;

        $empresa = Empresa::create([
            'name' => $data['name'],
            'logo' => $logo,
            'phone' => $data['phone'] ?? null,
        ]);

        return $empresa;
    }

    public function updateEmpresa(array $data)
    {
        $empresa = Empresa::findOrFail($data['company_id']);

        if (isset($data['logo'])) {
            $logo = $this->uploadLogo($data['logo']);
            $empresa->logo = $logo;
        }

        if (isset($data['name'])) {
            $empresa->name = $data['name'];
        }

        if (isset($data['phone'])) {
            $empresa->phone = $data['phone'];
        }

        $empresa->save();
        return $empresa;
    }

    public function deleteEmpresa(array $data)
    {
        $empresa = $this->findEmpresa($data['company_id']);
        $empresa->delete();
    }
}
