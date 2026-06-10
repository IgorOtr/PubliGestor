@include('layouts.head')

<div class="modal fade" id="add_new_empresa" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form action="{{ route('admin.publicidades.create') }}" method="POST" id="add_new_publi_form">
                @csrf
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_address_header">
                    <!--begin::Modal title-->
                    <h2>Nova Empresa</h2>
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

                        <div
                            class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6 align-items-center">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                            </i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 ">
                                <!--begin::Content-->
                                <div class=" fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Atenção</h4>

                                    <div class="fs-6 text-gray-700 ">Após esta etapa, você poderá vincular uma
                                        publicidade a esta empresa.</div>
                                </div>
                                <!--end::Content-->

                            </div>
                            <!--end::Wrapper-->
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-12 fv-row fv-plugins-icon-container">
                                <label class="required fs-5 fw-semibold mb-2">Nome da Empresa</label>
                                <input type="text" class="form-control form-control-solid"
                                    placeholder="Ex.: Vídeos da nova coleção" name="name">
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
                                    <label class="required fs-5 fw-semibold mb-2">Empresa</label>
                                    <!--end::Label-->

                                    <div>
                                        <select class="form-select form-select-solid" name="company_id">
                                            <option value="">Selecione uma empresa</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                        </select>
                                    </div>
                                    <span class="fs-8 text-danger">Necessária a criação prévia da empresa.</span>
                                </div>
                            </div>
                        </div>

                        <div class="row g-9 mb-5">
                            <div class="col-md-6 fv-row fv-plugins-icon-container">
                                <label class="fs-5 fw-semibold mb-2">Prazo</label>
                                <input type="date" class="form-control form-control-solid" name="deadline">
                            </div>
                            <div class="col-md-6 fv-row fv-plugins-icon-container">
                                <label class="fs-5 fw-semibold mb-2">Vincular Contrato?</label>
                                <div>
                                    <select class="form-select form-select-solid" name="contract_id">
                                        <option value="">Selecione um contrato</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                    </select>
                                </div>
                                <span class="fs-8 text-danger">Necessária a criação prévia do contrato.</span>
                            </div>
                        </div>

                        <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                            <label class="fs-5 fw-semibold mb-2">Deslocamento necessário até o local?</label>
                            <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="addressToggleSwitch"
                                    oninput="toggleAddressField()" />
                                <label class="form-check-label" for="addressToggleSwitch">
                                    Sim
                                </label>
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row g-9 mb-5 d-none" id="new_publi_address_field">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Endereço</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid"
                                    id="new_publi_address_input" placeholder="Ex.: Rua XYZ, 123, Bairro ABC, Cidade 456"
                                    name="address">
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
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
                    <button type="submit" class="btn btn-primary"
                        onclick="disableToSubmit(this, 'add_new_publi_form')">
                        Criar
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

                <div class="d-flex flex-column flex-column-fluid">

                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

                        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">

                                <h1
                                    class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                    Empresas</h1>


                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                                    <li class="breadcrumb-item text-muted">
                                        <a href="" class="text-muted text-hover-primary">Dashboard</a>
                                    </li>

                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>

                                    <li class="breadcrumb-item text-muted">Empresas</li>

                                </ul>

                            </div>
                        </div>

                    </div>

                    <div id="kt_app_content" class="app-content flex-column-fluid">

                        <div id="kt_app_content_container" class="app-container container-fluid">

                            <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
                                <div class="col-xl-12">

                                    <!--begin::Table Widget 3-->
                                    <div class="card card-flush h-lg-100">
                                        <!--begin::Card header-->
                                        <div class="card-header py-7">
                                            <!--begin::Tabs-->
                                            <div class="card-title pt-3 mb-0 gap-4 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0"
                                                data-kt-table-widget-3="tabs_nav">
                                                <!--begin::Tab item-->
                                                <div class="fs-4 fw-bold pb-3 border-bottom border-3 border-primary cursor-pointer"
                                                    data-kt-table-widget-3="tab"
                                                    data-kt-table-widget-3-value="Show All">
                                                    Todas as Publicidades ({{ $empresas->count() }})
                                                </div>
                                                <!--end::Tab item-->
                                            </div>
                                            <!--end::Tabs-->

                                            <!--begin::Create campaign button-->
                                            <div class="card-toolbar">
                                                <a href="#" type="button" class="btn btn-primary"
                                                    data-bs-toggle="modal" data-bs-target="#add_new_empresa">Nova
                                                    Empresa</a>
                                            </div>
                                            <!--end::Create campaign button-->
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body pt-1">

                                            @if (!$empresas->isEmpty())
                                                <div class="table-responsive">
                                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                                        <thead>
                                                            <tr class="fw-bold fs-6 text-gray-800">
                                                                <th></th>
                                                                <th>Nome</th>
                                                                <th>Telefone</th>
                                                                <th>Qnt. Contratos Ativos</th>
                                                                <th>Qnt. Publis</th>
                                                                <th>Qnt. Publis Pendentes</th>
                                                                <th>Detalhes</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($empresas as $empresa)
                                                                <tr>
                                                                    <td>
                                                                        <div class="symbol symbol-50px me-2">
                                                                            <span class="symbol-label"
                                                                                style="background-image:url('{{ $empresa->logo_url }}')"></span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="position-relative ps-6 pe-3 py-2">
                                                                            <div
                                                                                class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-info">
                                                                            </div>
                                                                            <a href="{{ route('admin.empresas.show', ['id' => $empresa->id]) }}"
                                                                                class="mb-1 text-gray-900 text-hover-primary fw-bold">{{ $empresa->name }}</a>
                                                                            <div class="fs-7 text-muted fw-bold">Criada
                                                                                em
                                                                                {{ $empresa->created_at->format('d/m/Y') }}
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="text-gray-900 text-hover-primary fw-bold">{{ $empresa->phone }}
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="badge badge-light-primary">{{ $empresa->contratos->count() }}
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="badge badge-light-primary">{{ $empresa->publicidades->count() }}
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="badge badge-light-warning">{{ $empresa->publicidades->where('status', 'Pendente')->count() }}
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
                                                                            <i
                                                                                class="ki-duotone ki-black-right fs-2 text-muted"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            @else
                                                <div class="d-flex flex-column align-items-center text-center py-10">
                                                    <i class="ki-duotone ki-information fs-2tx text-muted mb-4">
                                                        <span class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span>
                                                    </i>
                                                    <h3 class="text-gray-900 fw-bold mb-2">Nenhuma publicidade
                                                        encontrada</h3>
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                    <!--end::Table Widget 3-->
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
