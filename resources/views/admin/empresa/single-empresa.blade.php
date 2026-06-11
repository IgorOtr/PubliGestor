@include('layouts.head')

<div class="modal fade" tabindex="-1" id="delete_empresa" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-0 m-0">
            <div class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 m-0">
                <!--begin::Close-->
                <button type="button" class="position-absolute top-0 end-0 m-2 btn btn-icon btn-icon-danger"
                    data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </button>
                <!--end::Close-->

                <!--begin::Icon-->
                <i class="ki-duotone ki-information-5 fs-5tx text-danger mb-5"><span class="path1"></span><span
                        class="path2"></span><span class="path3"></span></i>
                <!--end::Icon-->

                <!--begin::Wrapper-->
                <div class="text-center">
                    <!--begin::Title-->
                    <h1 class="fw-bold mb-5">Zona de Perigo</h1>
                    <!--end::Title-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
                    <!--end::Separator-->

                    <!--begin::Content-->
                    <div class="mb-9 text-gray-900">
                        <strong>
                            Tem certeza que deseja deletar esta empresa?<br>
                            Esta ação é removerá permanentemente todos os dados associados a ela, incluindo: Contratos,
                            publicidades, tarefas e calendário.
                        </strong>
                    </div>
                    <!--end::Content-->

                    <!--begin::Buttons-->
                    <div class="d-flex flex-center flex-wrap">
                        <button data-bs-dismiss="modal" type="button"
                            class="btn btn-outline btn-outline-danger btn-active-danger m-2">Cancelar</button>
                        <form action="{{ route('admin.empresas.delete') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="company_id" value="{{ $empresa->id }}">
                            <button type="submit" class="btn btn-danger m-2">Sim, deletar</button>
                        </form>
                    </div>
                    <!--end::Buttons-->
                </div>
                <!--end::Wrapper-->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_empresa" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form action="{{ route('admin.empresas.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="company_id" value="{{ $empresa->id }}">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_address_header">
                    <!--begin::Modal title-->
                    <h2>Atualizar - {{ $empresa->name }}</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_new_address_header"
                        data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px"
                        style="max-height: 581px;">
                        <div class="row mb-5">
                            <div class="col-md-12 fv-row fv-plugins-icon-container">
                                <label class="required fs-5 fw-semibold mb-2">Nome da Empresa</label>
                                <input type="text" class="form-control form-control-solid"
                                    placeholder="Ex.: Vídeos da nova coleção" name="name"
                                    value="{{ $empresa->name }}" required>
                            </div>
                        </div>

                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <div class="col-md-6 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold mb-2">Logo</label>
                                <!--end::Label-->

                                <div class="input-group input-group-solid mb-5">
                                    <span class="input-group-text">
                                        <i class="ki-duotone ki-picture fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <input type="file" class="form-control" name="logo">
                                </div>
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <div class="col-md-6 fv-row fv-plugins-icon-container">
                                <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-semibold mb-2">Telefone</label>
                                    <!--end::Label-->

                                    <input type="text" class="form-control form-control-solid" name="phone"
                                        placeholder="Ex.: (11) 99999-9999" value="{{ $empresa->phone }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->

                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="button" id="kt_modal_new_address_cancel" data-bs-dismiss="modal"
                        class="btn btn-light me-3">
                        Cancelar
                    </button>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary">
                        Atualizar
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-root app-root" id="kt_app_root">

    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

        @include('layouts.navbar')


        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

            @include('layouts.sidebar')


            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                @if ($errors->any())
                    <div class="alert alert-dismissible bg-danger d-flex align-items-center p-5 mb-10 w-30"
                        style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
                        <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                            <h4 class="mb-2 text-light text-center">Atenção</h4>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="light">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <div class="d-flex flex-column flex-column-fluid">

                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

                        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">

                                <h1
                                    class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                    {{ $empresa->name }}</h1>


                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                                    <li class="breadcrumb-item text-muted">
                                        <a href="" class="text-muted text-hover-primary">Dashboard</a>
                                    </li>

                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>

                                    <li class="breadcrumb-item text-muted">Empresas</li>

                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>

                                    <li class="breadcrumb-item text-muted">{{ $empresa->name }}</li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div id="kt_app_content" class="app-content flex-column-fluid">

                        <div id="kt_app_content_container" class="app-container container-fluid">

                            <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
                                <div class="col-md-12">
                                    <div class="card">
                                        <!--begin::Body-->
                                        <div class="card-body p-lg-20">
                                            <!--begin::Layout-->
                                            <div class="d-flex flex-column flex-xl-row">
                                                <!--begin::Content-->
                                                <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                                                    <!--begin::Invoice 2 content-->
                                                    <div class="mt-n1">
                                                        <!--begin::Top-->
                                                        <div class="d-flex flex-stack pb-10">
                                                            <!--begin::Logo-->
                                                            <a href="#">
                                                                @if (!$empresa->logo)
                                                                    <div class="symbol symbol-150px me-2">
                                                                        <span class="symbol-label">
                                                                            <i class="ki-duotone ki-shop"
                                                                                style="font-size: 60px">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                                <span class="path3"></span>
                                                                                <span class="path4"></span>
                                                                                <span class="path5"></span>
                                                                            </i>
                                                                        </span>
                                                                    </div>
                                                                @else
                                                                    <img alt="Logo" class="rounded"
                                                                        src="{{ asset('storage/' . $empresa->logo) }}">
                                                                @endif
                                                            </a>
                                                            <div class="d-flex">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-light-danger me-1"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_empresa">
                                                                    <i class="ki-duotone ki-trash fs-2 m-0 p-0">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                        <span class="path4"></span>
                                                                        <span class="path5"></span>
                                                                    </i>
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-light-warning me-1"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#edit_empresa">
                                                                    <i class="ki-duotone ki-notepad-edit fs-2 m-0 p-0">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i></button>
                                                            </div>
                                                        </div>
                                                        <!--end::Top-->
                                                        <!--begin::Wrapper-->
                                                        <div class="m-0">
                                                            <!--begin::Label-->
                                                            <div class="fw-bold fs-3 text-gray-800 mb-8">
                                                                {{ $empresa->name }}
                                                            </div>
                                                            <!--end::Label-->
                                                            <!--begin::Row-->
                                                            <div class="row g-5 mb-11">
                                                                <!--end::Col-->
                                                                <div class="col-sm-6">
                                                                    <!--end::Label-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">
                                                                        Data de criação:</div>
                                                                    <!--end::Label-->
                                                                    <!--end::Col-->
                                                                    <div class="fw-bold fs-6 text-gray-800">
                                                                        {{ $empresa->created_at->format('d/m/Y') }}
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--end::Col-->
                                                                <div class="col-sm-6">
                                                                    <!--end::Label-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">
                                                                        Telefone:</div>
                                                                    <!--end::Label-->
                                                                    <!--end::Info-->
                                                                    <div
                                                                        class="fw-bold fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                                                        <span
                                                                            class="pe-2">{{ $empresa->phone ?? 'Não Informado' }}</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>

                                                            <div class="flex-grow-1">
                                                                <!--begin::Table-->
                                                                <div class="table-responsive border-bottom mb-9">
                                                                    <table class="table mb-3">
                                                                        <thead>
                                                                            <tr
                                                                                class="border-bottom fs-6 fw-bold text-muted">
                                                                                <th class="pb-2">Contrato</th>
                                                                                <th class="text-end pb-2">Valor (R$)
                                                                                </th>
                                                                                <th class="text-end pb-2">Criado em
                                                                                </th>
                                                                                <th class="text-end pb-2">Valido até
                                                                                </th>
                                                                                <th class="text-end pb-2">Status</th>
                                                                                <th class="text-end pb-2">Detalhes</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            @if ($empresa->contratos->isEmpty())
                                                                                <tr>
                                                                                    <td colspan="6"
                                                                                        class="text-center text-gray-500 py-10">
                                                                                        Nenhum contrato encontrado para
                                                                                        esta empresa.
                                                                                    </td>
                                                                                </tr>
                                                                            @else
                                                                                @foreach ($empresa->contratos as $contrato)
                                                                                    <tr
                                                                                        class="fw-bold text-gray-700 text-end">
                                                                                        <td
                                                                                            class="d-flex align-items-center pt-6">
                                                                                            {{ $contrato->title }}</td>
                                                                                        <td class="pt-6">
                                                                                            {{ $contrato->total_price }}
                                                                                        </td>
                                                                                        <td class="pt-6">
                                                                                            {{ $contrato->start_date }}
                                                                                        </td>
                                                                                        <td class="pt-6">
                                                                                            {{ $contrato->end_date }}
                                                                                        </td>
                                                                                        <td class="pt-6">
                                                                                            <span
                                                                                                class="badge {{ $contrato->status === 'Ativo' ? 'badge-light-success' : 'badge-light-danger' }}">{{ $contrato->status }}</span>
                                                                                        </td>
                                                                                        <td class="pt-6">
                                                                                            <a href="#"
                                                                                                class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
                                                                                                <i
                                                                                                    class="ki-duotone ki-black-right fs-2 text-muted"></i>
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            @endif

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Invoice 2 content-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Sidebar-->
                                                <div class="m-0">
                                                    <!--begin::Invoice 2 sidebar-->
                                                    <div
                                                        class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
                                                        <h6 class="mb-8 fw-bolder text-gray-600">
                                                            Publicidades</h6>
                                                        <div class="m-0">

                                                            @if ($empresa->publicidades->isEmpty())
                                                                <div class="text-center text-gray-500 py-10">
                                                                    Nenhuma publicidade encontrada para esta empresa.
                                                                </div>
                                                            @else
                                                                <div
                                                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded px-4 py-3 mb-3 w-100">
                                                                    <i
                                                                        class="ki-duotone ki-abstract-41 fs-2x text-primary me-4">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                    <div class="flex-grow-1">
                                                                        <span
                                                                            class="fw-bold text-gray-800 d-block fs-6">Video
                                                                            da nova coleção de inv...</span>
                                                                        <span
                                                                            class="badge badge-light-warning">Pendente</span>
                                                                    </div>
                                                                    <a href="" target="_blank"
                                                                        class="btn btn-sm btn-light-primary ms-4">
                                                                        <i
                                                                            class="ki-outline ki-black-right fs-2 p-0"></i>
                                                                    </a>
                                                                </div>
                                                            @endif
                                                        </div>

                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Invoice 2 sidebar-->
                                                </div>
                                                <!--end::Sidebar-->
                                            </div>
                                            <!--end::Layout-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                @include('layouts.footer')

            </div>

        </div>

    </div>

</div>

@include('layouts.scripts')

</body>

</html>
