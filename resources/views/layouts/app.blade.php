<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>         
            .px-6 {
                padding-left: 1.5rem/* 24px */;
                padding-right: 1.5rem/* 24px */;
            }
            .py-3 {
                padding-top: 0.75rem/* 12px */;
                padding-bottom: 0.75rem/* 12px */;
            }
            .text-blue-100 {
                --tw-text-opacity: 1;
                color: rgb(219 234 254 / var(--tw-text-opacity));
            }
            .no-underline {
                text-decoration-line: none;
            }
            .bg-blue-500 {
                --tw-bg-opacity: 1;
                background-color: rgb(59 130 246 / var(--tw-bg-opacity));
            }
            .rounded {
                border-radius: 0.25rem/* 4px */;
            }
            .hover\:bg-blue-600:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(37 99 235 / var(--tw-bg-opacity));
            }
            .hover\:underline:hover {
                text-decoration-line: underline;
            }
            .hover\:text-blue-200:hover {
                --tw-text-opacity: 1;
                color: rgb(191 219 254 / var(--tw-text-opacity));
            }
            .float-right {
                float: right;
            }
            .w-full {
                width: 100%;
            }
            .text-sm {
                font-size: 0.875rem/* 14px */;
                line-height: 1.25rem/* 20px */;
            }
            .text-left {
                text-align: left;
            }
            .text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity));
            }
            @media (prefers-color-scheme: dark) {
                .dark\:text-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(156 163 175 / var(--tw-text-opacity));
                }
            }
            .text-xs {
                font-size: 0.75rem/* 12px */;
                line-height: 1rem/* 16px */;
            }
            .text-gray-700 {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity));
            }
            .uppercase {
                text-transform: uppercase;
            }
            .bg-gray-50 {
                --tw-bg-opacity: 1;
                background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            }
            @media (prefers-color-scheme: dark) {
                .dark\:bg-gray-700 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
                }
            }
            @media (prefers-color-scheme: dark) {
                .dark\:text-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(156 163 175 / var(--tw-text-opacity));
                }
            }
            .px-6 {
                padding-left: 1.5rem/* 24px */;
                padding-right: 1.5rem/* 24px */;
            }
            .py-3 {
                padding-top: 0.75rem/* 12px */;
                padding-bottom: 0.75rem/* 12px */;
            }
            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }
            @media (prefers-color-scheme: dark) {
                .dark\:bg-gray-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(17 24 39 / var(--tw-bg-opacity));
                }
            }
            @media (prefers-color-scheme: dark) {
                .dark\:border-gray-700 {
                    --tw-border-opacity: 1;
                    border-color: rgb(55 65 81 / var(--tw-border-opacity));
                }
            }
            .py-4 {
                padding-top: 1rem/* 16px */;
                padding-bottom: 1rem/* 16px */;
            }
            .font-medium {
                font-weight: 500;
            }
            .text-gray-900 {
                --tw-text-opacity: 1;
                color: rgb(17 24 39 / var(--tw-text-opacity));
            }
            .whitespace-nowrap {
                white-space: nowrap;
            }
            @media (prefers-color-scheme: dark) {
                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity));
                }
            }
        </style>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- <link href="{{url('public/assets/common.css')}}" rel="stylesheet" /> -->
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
    </body>
</html>
