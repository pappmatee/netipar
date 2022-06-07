<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Netipar próba feladat</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>
<body>
<div class="main-wrapper">

    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="/" class="sidebar-brand">
                Net<span>ipar</span>
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#contacts" role="button" aria-expanded="false" aria-controls="contacts">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Phonebook</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="contacts">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="../../pages/email/read.html" class="nav-link">Add new contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="../../pages/email/compose.html" class="nav-link">View</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item nav-category">Database</li>
                <li class="nav-item">
                    <a href="../../pages/apps/calendar.html" class="nav-link">
                        <i class="link-icon" data-feather="database"></i>
                        <span class="link-title">Schema</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- partial -->

    <div class="page-wrapper">

        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar">
            <a href="#" class="sidebar-toggler">
                <i data-feather="menu"></i>
            </a>
        </nav>
        <!-- partial -->

        @yield('content')

        <!-- partial:../../partials/_footer.html -->
        <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
            <p class="text-muted mb-1 mb-md-0">Dashboard created with <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
        </footer>
        <!-- partial -->

    </div>
</div>

<!-- core:js -->
<script src="{{ asset('vendors/core/core.js') }}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<!-- End custom js for this page -->

</body>
</html>
