<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    {{-- <meta name="user" content="Auth::user()"> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- <link rel="icon" href="/storage/logo.png"> --}}
    <!-- Scripts -->

    {{-- <link href="{{ asset('css/app_1.css') }}" rel="stylesheet"> --}}
    <style type="text/css">
        @page {
            margin: 10px 10px;
        }


        .page-break {
    page-break-after: always;
}
        body {
            margin: 0px;
            background: #f8fafc;
        }

        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }

        .table tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        .table tbody {
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }

        .table td,
        .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        th {
            text-align: inherit;
        }


        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }
    </style>
</head>
<body>
    <div>
            @yield('content')
    </div>

</body>
</html>
