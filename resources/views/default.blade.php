@include('layouts.head')


    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">

        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            @include('layouts.navbar')


            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                @include('layouts.sidebar')


                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                    <div class="d-flex flex-column flex-column-fluid">

                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

                            <div id="kt_app_toolbar_container"
                                class="app-container container-fluid d-flex flex-stack">

                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">

                                    <h1
                                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                        Default Page</h1>


                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                                        <li class="breadcrumb-item text-muted">
                                            <a href="" class="text-muted text-hover-primary">Dashboard</a>
                                        </li>

                                        <li class="breadcrumb-item">
                                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                        </li>

                                        <li class="breadcrumb-item text-muted">Default Page</li>

                                    </ul>

                                </div>

                                <div class="d-flex align-items-center gap-2 gap-lg-3">

                                    <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Modal 1</a>
                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Modal 2</a>

                                </div>

                            </div>

                        </div>

                        <div id="kt_app_content" class="app-content flex-column-fluid">

                            <div id="kt_app_content_container" class="app-container container-fluid">

                                <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">

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
