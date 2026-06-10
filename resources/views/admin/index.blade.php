@include('layouts.head')

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

                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                    Dashboard</h1>
                            </div>

                            <div class="d-flex align-items-center gap-2 gap-lg-3">

                                <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_app">Modal 1</a>
                                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_new_target">Modal 2</a>

                            </div>

                        </div>

                    </div>

                    <div id="kt_app_content" class="app-content flex-column-fluid">

                        <div id="kt_app_content_container" class="app-container container-fluid">

                            @if (Auth::user()->paying === 'free')
                                <div class="row g-5 gx-xxl-10 mb-5 mb-xl-10">
                                    <div class="col-12">

                                        <div class="card card-flush h-md-100">
                                            <!--begin::Body-->
                                            <div
                                                class="card-body d-flex justify-content-center align-items-center mt-9 pb-0">
                                                <!--begin::Wrapper-->
                                                <div class="mb-10">
                                                    <!--begin::Title-->
                                                    <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                                        <span class="me-2">
                                                            Desbloqueie todas as ferramentas com o
                                                            <br>
                                                            <span class="position-relative d-inline-block text-danger">
                                                                <a href="/metronic8/demo1/?page=pages/user-profile/overview"
                                                                    class="text-danger opacity-75-hover">Plano Pro</a>
                                                                <span
                                                                    class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                            </span>
                                                        </span>
                                                        por apenas R$ 29,90 mensais.
                                                    </div>
                                                    <!--end::Title-->

                                                    <!--begin::Action-->
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-sm btn-danger fw-bold"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                                            Atualizar Agora
                                                        </a>
                                                    </div>
                                                    <!--begin::Action-->
                                                </div>
                                                <!--begin::Wrapper-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Engage widget 10-->
                                    </div>
                                </div>
                            @endif

                            <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">

                                <div class="col-xxl-3 mb-md-5">

                                    <div class="card card-flush bgi-no-repeat bgi-size-cover bgi-position-x-end h-100 mb-5 mb-xl-10"
                                        style="background-color: #7239ea;background-image:url('/metronic8/demo1/assets/media/patterns/vector-1.png')">

                                        <div class="card-header pt-5">

                                            <div class="card-title d-flex flex-column">

                                                <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">20</span>

                                                <span
                                                    class="text-white opacity-75 pt-1 fw-semibold fs-6">Publicidades</span>

                                            </div>

                                        </div>

                                        <div class="card-body d-flex align-items-end pt-0">

                                            <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                <div
                                                    class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                                    <span>5 Pending</span>
                                                    <span>75%</span>
                                                </div>

                                                <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                                    <div class="bg-white rounded h-8px" role="progressbar"
                                                        style="width: 75%;" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-xxl-3 mb-md-5">

                                    <div
                                        class="card card-flush bgi-no-repeat bgi-size-cover bgi-position-x-end h-100 mb-5 mb-xl-10">

                                        <div class="card-header pt-5">
                                            <!--begin::Title-->
                                            <div class="card-title d-flex flex-column">
                                                <!--begin::Amount-->
                                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">89</span>
                                                <!--end::Amount-->

                                                <!--begin::Subtitle-->
                                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Leads
                                                    Capturados</span>
                                                <!--end::Subtitle-->
                                            </div>
                                            <!--end::Title-->
                                        </div>

                                        <div class="card-body d-flex flex-column justify-content-end pe-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Acessar Leads</span>
                                            <!--end::Title-->

                                            <!--begin::Users group-->
                                            <div class="symbol-group symbol-hover flex-nowrap">
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                    <span
                                                        class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                    <span
                                                        class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                                    <span
                                                        class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                                </div>
                                                <a href="#" class="symbol symbol-35px symbol-circle"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                    <span
                                                        class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                                </a>
                                            </div>
                                            <!--end::Users group-->
                                        </div>

                                    </div>

                                </div>

                                <div class="col-xl-6 mb-md-5">
                                    <div class="card card-flush mb-xl-8 h-100">
                                        <div class="card-header pt-7">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Compromisso Mais Próximo</span>

                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Daqui a 3 dias</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <a href="#" class="btn btn-sm btn-light">Ver Mais</a>
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <span 
                                                class="card-title fs-3 fw-bold text-gray-600 me-2 lh-1 ls-n2">Inauguração
                                                da nova unidade da Nohall em Barra Mansa</span>

                                            <div class="text-white opacity-75 pt-1 fw-semibold fs-6 my-2">• 05/06/2026
                                                ás 14:00</div>

                                            <p class="text-gray-900-75 fw-semibold fs-5 m-0">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since 1966, when designers at Letraset and James Mosley, the librarian
                                                at St Bride Printing Library, took a 1914 Cicero translation and
                                                scrambled it to make dummy text for Letraset's Body Type sheets.
                                            </p>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Statistics Widget 1-->

                                </div>

                            </div>

                            <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">

                                <div class="col-xxl-6">

                                    <!--begin::Card widget 18-->
                                    <div class="card card-flush h-xl-80 mb-xl-10">
                                        <div class="card-header pt-7">
                                            <!--begin::Title-->
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Último contrato</span>

                                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Há 2 dias</span>
                                            </h3>
                                            <!--end::Title-->

                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar">
                                                <a href="#" class="btn btn-sm btn-light">Ver Mais</a>
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--begin::Body-->
                                        <div class="card-body py-9">
                                            <!--begin::Row-->
                                            <div class="row gx-9 h-100">
                                                <!--begin::Col-->
                                                <div class="col-sm-6 mb-10 mb-sm-0">
                                                    <!--begin::Image-->
                                                    <div
                                                        class="d-flex justify-content-center align-items-center card-rounded min-h-400px min-h-sm-100 h-100">
                                                        <span class="menu-icon">
                                                            <i class="ki-duotone ki-file" style="font-size: 8rem;">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Image-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-sm-6">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column h-1000 justify-content-center">
                                                        <!--begin::Header-->
                                                        <div class="mb-7">
                                                            <!--begin::Headin-->
                                                            <div class="d-flex flex-stack mb-6">
                                                                <!--begin::Title-->
                                                                <div class="flex-shrink-0 me-5">
                                                                    <span
                                                                        class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">Título</span>

                                                                    <span
                                                                        class="text-gray-800 fs-1 fw-bold">Publicidade
                                                                        para No...</span>
                                                                </div>
                                                                <!--end::Title-->

                                                                <span
                                                                    class="badge badge-light-success flex-shrink-0 align-self-center py-3 px-4 fs-7">Ativo</span>
                                                            </div>
                                                            <!--end::Heading-->

                                                            <!--begin::Items-->
                                                            <div
                                                                class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                                <!--begin::Item-->
                                                                <div class="d-flex align-items-center me-5 me-xl-13">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-30px symbol-circle me-3">
                                                                        <span class="symbol-label bg-light-success">
                                                                            <i class="ki-duotone ki-shop fs-2">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                                <span class="path3"></span>
                                                                                <span class="path4"></span>
                                                                                <span class="path5"></span>
                                                                            </i>
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Symbol-->

                                                                    <!--begin::Info-->
                                                                    <div class="m-0">
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block fs-8">Empresa</span>
                                                                        <a href="/metronic8/demo1/?page=pages/user-profile/overview"
                                                                            class="fw-bold text-gray-800 text-hover-primary fs-7">Nohall</a>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Item-->

                                                                <!--begin::Item-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-30px symbol-circle me-3">
                                                                        <span class="symbol-label bg-light-success">
                                                                            <i class="ki-duotone ki-dollar fs-2">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </i>
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Symbol-->

                                                                    <!--begin::Info-->
                                                                    <div class="m-0">
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block fs-8">Valor
                                                                            Mensal</span>
                                                                        <span class="fw-bold text-gray-800 fs-7">R$
                                                                            3.600,00</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Header-->

                                                        <!--begin::Body-->
                                                        <div class="mb-6">
                                                            <!--begin::Text-->
                                                            <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">
                                                                Flat cartoony illustrations with vivid
                                                                unblended colors and asymmetrical beautiful purple hair
                                                                lady
                                                            </span>
                                                            <!--end::Text-->

                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Stat-->
                                                                <div
                                                                    class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                                                    <div class="fw-semibold text-gray-500">Ativo Até:
                                                                    </div>
                                                                    <span
                                                                        class="fs-6 text-gray-700 fw-bold">01/09/2026</span>
                                                                    <!--end::Date-->

                                                                    <!--begin::Label-->

                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Stat-->

                                                                <!--begin::Stat-->
                                                                <div
                                                                    class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                                                    <!--begin::Number-->
                                                                    <div class="fw-semibold text-gray-500">Valor Total
                                                                    </div>

                                                                    <span class="fs-6 text-gray-700 fw-bold">
                                                                        <span class="ms-n1 counted">R$ 10.800,00</span>
                                                                    </span>
                                                                    <!--end::Number-->

                                                                    <!--begin::Label-->
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Stat-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Body-->
                                                        <!--end::Footer-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Body-->
                                    </div>

                                    <a href="#" class="card card-flush bg-info hoverable h-xl-20">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <i class="ki-duotone ki-eye text-white fs-2x ms-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>

                                            <div class="text-white fw-bold fs-2 mb-2 mt-5">
                                                14
                                            </div>

                                            <div class="fw-semibold text-white">Média de Visualizações Diárias</div>
                                        </div>
                                        <!--end::Body-->
                                    </a>

                                </div>

                                <div class="col-xxl-6">
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-header pt-7">
                                            <!--begin::Title-->
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Resumo de
                                                    estatísticas</span>
                                            </h3>
                                            <!--end::Title-->

                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar">
                                                <a href="#" class="btn btn-sm btn-light">Ver Mais</a>
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <div class="card-body">
                                            <div id="kt_amcharts_5" style="height: 500px;"></div>
                                        </div>
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
