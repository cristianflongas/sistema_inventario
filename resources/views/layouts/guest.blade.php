<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|outfit:500,600,700,800" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-800 antialiased selection:bg-agro-500 selection:text-white">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-agro-900 hero-pattern relative overflow-hidden">
            <!-- Background Gradients -->
            <div class="absolute inset-0 bg-gradient-to-b from-agro-950/90 via-agro-900/80 to-agro-900/95 pointer-events-none"></div>
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-agro-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob pointer-events-none"></div>
            <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-agro-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000 pointer-events-none"></div>

            <div class="relative z-10 w-full sm:max-w-md mt-6 px-8 py-10 bg-white shadow-2xl overflow-hidden sm:rounded-[2rem] border border-white/20">
                <div class="flex justify-center mb-8">
                    <a href="/" class="flex items-center gap-2">
                        <svg class="w-10 h-10 text-agro-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        <span class="font-heading font-extrabold text-3xl text-slate-900 tracking-tight">Agro<span class="text-agro-600">Gestión</span></span>
                    </a>
                </div>

                {{ $slot }}
            </div>
        </div>
    </body>
</html>