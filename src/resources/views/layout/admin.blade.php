{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Laravel 5.8 CRUD Example Tutorial</title>--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--    @yield('content')--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}


{{--@extends('adminlte::page')--}}

{{--@section('title', 'Dashboard')--}}

{{--@section('content_header')--}}
{{--    <h1>Dashboard</h1>--}}
{{--@stop--}}

{{--@section('content')--}}
{{--    <p>Welcome to this beautiful admin panel.</p>--}}
{{--@stop--}}


{{--    <!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <title>@yield('title')</title>--}}

{{--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>--}}
{{--    <link href="/css/app.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div>--}}
{{--    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">--}}
{{--        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>--}}

{{--        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">--}}
{{--            <div class="flex items-center justify-center mt-8">--}}
{{--                <div class="flex items-center">--}}
{{--                    <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>--}}
{{--                        <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <nav class="mt-10">--}}
{{--                <a href="{{ route('admin.users.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Соискатели</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.candidates_full_name.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">ФИО соискателя</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.candidates_info.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Информация о соискателе</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.candidates_experience.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Опыт работы соискателя</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.candidates_education.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Образование соискателя</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.candidates_social.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Соц. сети соискателя</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.employers.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Работодатель</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.employers_info.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Информация о работодателе</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.organizations.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Информация об организацие</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.organizations_social.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Соц. сети организации</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.vacancies.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Вакансии</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.photos.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Фотографии</span>--}}
{{--                </a>--}}

{{--                <a href="{{ route('admin.files.index') }}"--}}
{{--                   class="text-gray-100 flex items-center mt-4 py-2 px-6">--}}

{{--                    <span class="mx-3">Файлы</span>--}}
{{--                </a>--}}
{{--            </nav>--}}
{{--        </div>--}}

{{--        <div class="flex-1 flex flex-col overflow-hidden">--}}
{{--            <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">--}}
{{--                <div class="flex items-center">--}}
{{--                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">--}}
{{--                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
{{--                                  stroke-linejoin="round"></path>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--                <div class="flex items-center">--}}
{{--                    <div x-data="{ dropdownOpen: false }" class="relative">--}}
{{--                        <button @click="dropdownOpen = ! dropdownOpen"--}}
{{--                                class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">--}}
{{--                            <img class="h-full w-full object-cover"--}}
{{--                                 src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"--}}
{{--                                 alt="Your avatar">--}}
{{--                        </button>--}}

{{--                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"--}}
{{--                             style="display: none;"></div>--}}

{{--                        <div x-show="dropdownOpen"--}}
{{--                             class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"--}}
{{--                             style="display: none;">--}}
{{--                            <a href="{{ route("admin.logout") }}"--}}
{{--                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Выйти</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </header>--}}

{{--            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">--}}
{{--                @yield('content')--}}
{{--            </main>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<script src="/js/app.js"></script>--}}
{{--</body>--}}
{{--</html>--}}


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="#" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">TeachTrek</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.users.index') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Соискатели</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.candidates_full_name.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ФИО соискателя</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.candidates_info.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Информация о соискателе</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.candidates_experience.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Опыт работы соискателя</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.candidates_education.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Образование соискателя</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.candidates_social.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Соц. сети соискателя</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.employers.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Работодатель</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.employers_info.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Информация о работодателе</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.organizations.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Информация об организацие</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.organizations_social.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Соц. сети организации</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.vacancies.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Вакансии</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.photos.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Фотографии</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.files.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Файлы</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>

                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                </p>

                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>

                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                </p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div><!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">Featured</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Special title treatment</h6>

                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0">Featured</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Special title treatment</h6>

                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
