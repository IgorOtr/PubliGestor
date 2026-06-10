<?php

namespace App\Http\Controllers;

use App\Http\Requests\Publi\StorePubliRequest;
use App\Services\Publi\PubliService;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class PubliController extends Controller
{
    private PubliService $publiService;

    public function __construct(PubliService $publiService)
    {
        $this->publiService = $publiService;
    }

    public function allPublis()
    {
        $publis = $this->publiService->allPublis();
        return view('admin.publis.publicidades', compact('publis'));
    }

    public function findPubli(string $id)
    {
        $publi = $this->publiService->findPubli($id);
        return view('admin.publis.single-publi', compact('publi'));
    }

    public function createPubli(StorePubliRequest $request)
    {
        $publi = $this->publiService->createPubli($request->validated());
        return redirect()->route('admin.publicidades.single-publi', ['id' => $publi->id]);
    }
}
