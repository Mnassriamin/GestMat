<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
        * {
            box-sizing: border-box;
            font-family: "Merriweather Sans", sans-serif;
        }

        body {
            background-color: #B0DBEE;
        }

        .custom-table {
            width: 90%;
            margin: 20px auto;
            table-layout: fixed;
        }

        .custom-table th {
            background-color: #343a40;
            color: #fff;
            text-align: center;
        }

        .custom-table td {
            text-align: center;
            vertical-align: middle;
            word-wrap: break-word;
        }

        .panel {
            font-family: 'Raleway', sans-serif;
            padding: 0;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
        }

        .panel .panel-heading {
            background: #535353;
            padding: 15px;
            border-radius: 0;
        }

        .panel .panel-heading .btn {
            color: #fff;
            background-color: #000;
            font-size: 14px;
            font-weight: 600;
            padding: 7px 15px;
            border: none;
            border-radius: 0;
            transition: all 0.3s ease;
        }

        .panel .panel-heading .btn:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .panel .panel-body {
            padding: 0;
            border-radius: 0;
        }

        .panel .panel-body .table thead tr th {
            color: #fff;
            background: #8D8D8D;
            font-size: 17px;
            font-weight: 700;
            padding: 12px;
            border-bottom: none;
        }

        .panel .panel-body .table tbody tr td {
            color: #555;
            background: #fff;
            font-size: 15px;
            font-weight: 500;
            padding: 13px;
            vertical-align: middle;
            border-color: #e7e7e7;
        }

        .panel .panel-body .table tbody tr:nth-child(odd) td {
            background: #f5f5f5;
        }

        .panel-footer {
            color: #fff;
            background: #535353;
            font-size: 16px;
            line-height: 33px;
            padding: 25px 15px;
            border-radius: 0;
        }

        .pagination {
            margin: 0;
        }

        .pagination li a {
            color: #fff;
            background-color: rgba(0, 0, 0, 0.3);
            font-size: 15px;
            font-weight: 700;
            margin: 0 2px;
            border: none;
            border-radius: 0;
            transition: all 0.3s ease;
        }

        .pagination li a:hover,
        .pagination li.active a {
            color: #fff;
            background-color: #000;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.4);
        }

        #form {
            color: white;
            background-color: #009EDF;
            border-radius: 5px;
            width: 70%;
            padding: 40px;
            margin: 10px auto;
            box-shadow: -1px 3px 18px 0px rgba(0, 0, 0, 0.75);
        }

        #form p {
            font-size: 0.9em;
        }

        #form button {
            width: 100%;
            text-align: center;
            color: white;
            margin-top: 20px;
            border: 1px solid rgba(0, 0, 0, 0.4);
        }

        .form-group {
            margin: 15px auto;
        }

        .form-group label {
            font-weight: bold;
            font-size: 0.9em;
        }

        .form-group .input-group {
            border-radius: 5px;
            box-shadow: -1px 3px 18px 0px rgba(0, 0, 0, 0.35);
        }

        .form-group .input-group .input-group-addon {
            border: none;
            border-right: 1px solid rgba(0, 0, 0, 0.2);
        }

        .form-group .input-group input {
            padding-left: 10px;
        }

        .form-group .input-group i {
            color: #009EDF;
        }

        .form-group input {
            padding: 3px;
            width: 100%;
            border: none;
            border-radius: 0 5px 5px 0;
        }

        .nav-link {
            position: relative;
            padding: 10px 15px;
            transition: color 0.3s ease;
        }

        .active-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -4px;
            height: 3px;
            width: 100%;
            background-color: #FFFFFF;
            border-radius: 2px;
            transition: width 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -4px;
            height: 2px;
            width: 0;
            background-color: #FFD700;
            border-radius: 2px;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #FFD700;
        }
        .custom-select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-color: #f1f1f1;
    color: #333;
    padding: 10px 15px;
    font-size: 1em;
    font-family: "Merriweather Sans", sans-serif;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    width: 100%;
}

.custom-select::after {
    content: '\25BC';
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: #333;
}

.custom-select:focus {
    border-color: #009EDF;
    box-shadow: 0 0 5px rgba(0, 158, 223, 0.3);
    outline: none;
}
.navbar-brand {
    font-size: 1.5em;
    font-weight: bold;
    padding: 10px 15px;
    letter-spacing: 0.5px;
}
    </style>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
