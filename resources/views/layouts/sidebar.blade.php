<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    <div class="app-sidebar-logo px-6" style="justify-content: center !important;" id="kt_app_sidebar_logo">

        <a href="#">
            <img alt="Logo" src="{{ asset('assets/media/logos/logo-publigestor.png') }}"
                style="filter: invert(100%)" class="h-35px app-sidebar-logo-default" />
            <img alt="Logo" src="{{ asset('assets/media/logos/logo-publigestor.png') }}"
                style="filter: invert(100%)" class="h-20px app-sidebar-logo-minimize" />
        </a>

        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>

    </div>

    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">

        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">

            <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                data-kt-scroll-save-state="true">

                <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu"
                    data-kt-menu="true" data-kt-menu-expand="false">

                    <div class="menu-item">

                        <a href="{{ route('admin.dashboard') }}" class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-element-11 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>

                    </div>

                    <div class="menu-item">

                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-people fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </span>
                            <span class="menu-title">Gestão de Leads</span>
                        </span>

                    </div>

                    <div class="menu-item pt-5">

                        <div class="menu-content">
                            <span class="menu-heading fw-bold text-uppercase fs-7">Utilidades</span>
                        </div>

                    </div>

                    <div class="menu-item">

                        <a href="{{ route('admin.publicidades') }}" class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-41 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Publicidades</span>
                        </a>

                    </div>

                    <div class="menu-item">

                        <a class="menu-link" href="../../demo1/dist/apps/calendar.html">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-icon fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                            <span class="menu-title">Engajamento</span>
                        </a>

                    </div>

                    <div class="menu-item">

                        <a class="menu-link" href="../../demo1/dist/apps/calendar.html">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-questionnaire-tablet fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Tarefas</span>
                        </a>

                    </div>

                    <div class="menu-item">

                        <a class="menu-link" href="../../demo1/dist/apps/calendar.html">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar-8 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                            </span>
                            <span class="menu-title">Calendário</span>
                        </a>

                    </div>

                    <div class="menu-item">

                        <a class="menu-link" href="../../demo1/dist/apps/calendar.html">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-chart-simple fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </span>
                            <span class="menu-title">Estatísticas</span>
                        </a>

                    </div>

                    <div class="menu-item">

                        <a class="menu-link" href="../../demo1/dist/apps/calendar.html">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-file fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Contratos</span>
                        </a>

                    </div>

                    <div class="menu-item">

                        <a class="menu-link" href="{{ route('admin.empresas') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-shop fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </span>
                            <span class="menu-title">Empresas</span>
                        </a>

                    </div>

                    <div class="menu-item pt-5">

                        <div class="menu-content">
                            <span class="menu-heading fw-bold text-uppercase fs-7">Ajuda</span>
                        </div>

                    </div>

                    <div class="menu-item">
                        <a class="menu-link" href="#" target="_blank">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-technology-4 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                </i>
                            </span>
                            <span class="menu-title">Integrações</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link" href="#" target="_blank">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-setting-4 fs-2"></i>
                            </span>
                            <span class="menu-title">Configurações</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link" href="#" target="_blank">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-information-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                            <span class="menu-title">Suporte</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
