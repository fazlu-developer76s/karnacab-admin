
@php
    $company = \App\Helpers\Global_helper::companyDetails();
@endphp
@inject('helper', 'App\Helpers\Global_helper')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ !empty($title) ? $title : 'Karnacab' }} </title>
    <style>
        .app-header {
            position: fixed !important;
        }

        .bootstrap-tagsinput {
            margin: 0;
            width: 100%;
            padding: 0.5rem 0.75rem 0;
            font-size: 1rem;
            line-height: 1.25;
            transition: border-color 0.15s ease-in-out;
        }

        .bootstrap-tagsinput.has-focus {
            background-color: #fff;
            border-color: #5cb3fd;
        }

        .label-info {
            display: inline-block;
            background-color: #636c72;
            padding: 0 .4em .15em;
            border-radius: .25rem;
            margin-bottom: 0.4em;
        }

        .bootstrap-tagsinput input {
            margin-bottom: 0.5em;
        }

        div#editor {
            border: 1px solid rgb(0 0 0 / 20%) !important;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
        }

        .app-sidebar {
            background: #ad1c17 !important;
            color: black !important;
        }

        .cke_notification_warning {
            display: none !important;
        }

        /* body { */
        /* background-color: #f0f0f0;
        display: flex;
        justify-content: flex-start;
        align-items: flex-end;
        font-family: Arial, sans-serif;
        margin-top: 20px;
        flex-direction: column;
        gap: 10px;
      } */
        .card-note-container {
            margin-top: 60px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 10;
        }

        .card-note {
            background: rgba(255, 255, 255, 0.95);
            width: 280px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
            border-radius: 8px;
            border-left: 5px solid #67722e ;
            position: relative;
        }

        .card-note i {
            color: #ff4d4d;
            font-size: 16px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .card-note i:hover {
            color: #e60000;
        }

        .card-note .content-note {
            font-size: 12px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }

        .card-note .content-note p {
            margin: 5px 0;
        }

        .card-note .view-btn-note {
            cursor: pointer;
            padding: 6px 10px;
            background-color: #67722e;
            color: white;
            border-radius: 5px;
            text-align: center;
            border: none;
            font-size: 14px;
            width: 100%;
        }

        .card-note .view-btn-note:hover {
            background-color: #0056b3;
        }
    </style>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . $company->favicon) }}">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />
    <!----Table-- -->
    <link href="{{ asset('assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" />
    <!----Table---->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">



</head>
<!----Head----->
@include('layouts.header')
@include('layouts.sidebar')
@yield('content')
@include('layouts.footer')
