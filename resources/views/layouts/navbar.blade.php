<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}"
    data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}"
    data-kt-sticky-animation="false">

    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
        id="kt_app_header_container">

        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
        </div>

        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="" class="d-lg-none">
                <img alt="Logo" src="{{ asset('assets/media/logos/logo-publigestor.png') }}"
                    style="filter: invert(100%)" class="h-30px" />
            </a>
        </div>

        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
            </div>

            <div class="app-navbar flex-shrink-0">

                <div class="app-navbar-item ms-2 ms-lg-6">
                    <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-outline ki-notification-on fs-1"></i>
                        <span
                            class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true"
                        id="kt_menu_notifications">

                        <div class="d-flex flex-column bgi-no-repeat rounded-top">

                            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                Notificações
                                <div class="text-gray-400 fs-7 mt-1">Exibindo as últimas 10 notificações</div>
                            </h3>
                        </div>

                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">

                                <div class="scroll-y mh-325px my-5 px-8">

                                    <div class="d-flex flex-stack py-4">

                                        <div class="d-flex align-items-center">

                                            <div class="symbol symbol-35px me-4 position-relative">
                                                <span class="symbol-label bg-light-primary">
                                                    <i class="ki-outline ki-plus fs-2 text-primary"></i>
                                                </span>
                                            </div>

                                            <div class="mb-0 me-2">
                                                <a href="#"
                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Lead
                                                    Capturado</a>
                                                <div class="text-gray-400 fs-7">As informações para contato foram
                                                    salvas.</div>
                                            </div>

                                        </div>

                                        <span class="badge badge-light fs-8">há 52 segundos</span>

                                    </div>

                                </div>



                                <div class="py-3 text-center border-top">
                                    <a href="pages/user-profile/activity.html"
                                        class="btn btn-color-gray-600 btn-active-color-primary">
                                        Ver Todas
                                        <i class="ki-outline ki-arrow-right fs-5"></i> </a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="app-navbar-item ms-1 ms-md-4">

                    <!--begin::Menu toggle-->
                    <a href="#"
                        class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                        data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-night-day theme-light-show fs-1"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                class="path8"></span><span class="path9"></span><span class="path10"></span></i> <i
                            class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span
                                class="path2"></span></i></a>
                    <!--begin::Menu toggle-->

                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu" style="">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span><span
                                            class="path6"></span><span class="path7"></span><span
                                            class="path8"></span><span class="path9"></span><span
                                            class="path10"></span></i> </span>
                                <span class="menu-title">
                                    Claro
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2 active" data-kt-element="mode"
                                data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <span class="menu-title">
                                    Escuro
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                data-kt-value="system">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> </span>
                                <span class="menu-title">
                                    Sistema
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->

                </div>

                <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">

                    <div class="cursor-pointer symbol symbol-35px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="rounded-3" alt="user" />
                    </div>

                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">

                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">

                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{ asset('assets/media/avatars/300-3.jpg') }}" />
                                </div>

                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
                                        <span
                                            class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">{{ Auth::user()->paying === 'paying' ? 'Pro' : 'Gratuito' }}</span>
                                    </div>
                                    <a href="#"
                                        class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                                </div>

                            </div>
                        </div>

                        <div class="separator my-2"></div>

                        <div class="menu-item px-5">
                            <a href="" class="menu-link px-5">Meu Perfil</a>
                        </div>

                        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title">Notificações</span>
                                <span class="menu-arrow"></span>
                            </a>

                            <div class="menu-sub menu-sub-dropdown w-175px py-4">

                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox"
                                                value="1" checked="checked" name="notifications" />
                                            <span class="form-check-label text-muted fs-7">Receber</span>
                                        </label>
                                    </div>
                                </div>

                            </div>

                        </div>

                        @if (Auth::user()->paying === 'paying')
                            <div class="menu-item px-5 my-1">
                                <a href="#" class="menu-link px-5">Gerenciar Assinatura</a>
                            </div>
                        @else
                            <div class="menu-item px-5 my-1">
                                <a href="#" class="menu-link px-5">Assinar</a>
                            </div>
                        @endif

                        <div class="menu-item px-5">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <a href="/logout"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="menu-link px-5">Sair</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
