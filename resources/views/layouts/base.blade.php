<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <!-- Core Css -->
    <link rel="stylesheet" href="./assets/css/theme.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Modernize TailwindCSS HTML Admin Template</title>
</head>

<body class=" bg-white">
    <main>
        <!--start the project-->
        <div id="main-wrapper" class=" flex">
            <aside id="application-sidebar-brand"
                class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed top-0 with-vertical h-screen z-[999] flex-shrink-0 border-r-[1px] w-[270px] border-gray-400  bg-white left-sidebar   transition-all duration-300">
                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                @if(Auth::user() != null)
                    @include("layouts.components.sidebar")
                @endif
                <!-- </aside> -->
            </aside>
            <div class=" w-full page-wrapper overflow-hidden">

                <!--  Header Start -->
                <header class="container full-container w-full text-sm py-5 xl:px-9 px-5">


                    <!-- ========== HEADER ========== -->

                    <nav class=" w-full bg-gray-800  flex items-center justify-between" aria-label="Global">
                        @include("layouts.components.header")
                    </nav>

                    <!-- ========== END HEADER ========== -->
                </header>
                <!--  Header End -->

                <!-- Main Content -->
                <main class="h-full overflow-y-auto  max-w-full  pt-4">
                    {{ dd(Auth::user()) }}
                    @yield('content')
                    @include("layouts.components.footer")
                </main>
                <!-- Main Content End -->

            </div>
        </div>
        <!--end of project-->
    </main>



    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="./assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
    <script src="./assets/libs/@preline/dropdown/index.js"></script>
    <script src="./assets/libs/@preline/overlay/index.js"></script>
    <script src="./assets/js/sidebarmenu.js"></script>



    <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./assets/js/dashboard.js"></script>
</body>

</html>
