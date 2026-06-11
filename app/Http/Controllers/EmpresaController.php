<?php

namespace App\Http\Controllers;

use App\Http\Requests\Empresa\StoreEmpresaRequest;
use App\Http\Requests\Empresa\UpdateEmpresaRequest;
use App\Http\Requests\Empresa\DeleteEmpresaRequest;
use Illuminate\Http\Request;
use App\Services\Empresa\EmpresaService;

class EmpresaController extends Controller
{
    private EmpresaService $empresaService;

    public function __construct(EmpresaService $empresaService)
    {
        $this->empresaService = $empresaService;
    }

    public function allEmpresas()
    {
        $empresas = $this->empresaService->allEmpresas();
        return view('admin.empresa.empresas', compact('empresas'));
    }

    public function findEmpresa(string $id)
    {
        $empresa = $this->empresaService->findEmpresa($id);
        return view('admin.empresa.single-empresa', compact('empresa'));
    }

    public function createEmpresa(StoreEmpresaRequest $request)
    {
        $empresa = $this->empresaService->createEmpresa($request->validated());
        return redirect()->route('admin.empresas.show', ['id' => $empresa->id]);
    }

    public function updateEmpresa(UpdateEmpresaRequest $request)
    {
        $empresa = $this->empresaService->updateEmpresa($request->validated());
        return redirect()->route('admin.empresas.show', ['id' => $empresa->id]);
    }

    public function deleteEmpresa(DeleteEmpresaRequest $request)
    {
        $this->empresaService->deleteEmpresa($request->validated());
        return redirect()->route('admin.empresas');
    }
}
