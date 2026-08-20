<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO --}}
    <title>@yield('title', 'Residencial Luz do Universo') — Cuidado com Amor e Dignidade</title>
    <meta name="description" content="@yield('description', 'O Residencial Luz do Universo oferece moradia assistida para idosos com cuidado 24h, equipe especializada, atividades e ambiente acolhedor em São Paulo.')">
    <meta name="keywords" content="residencial idosos, lar de idosos, moradia assistida, cuidados para idosos, Sacomã, São Paulo">
    <meta name="robots" content="index, follow">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title', 'Residencial Luz do Universo')">
    <meta property="og:description" content="@yield('description', 'Cuidado com amor e dignidade para seus entes queridos.')">
    <meta property="og:image" content="{{ asset('images/hero.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-[var(--color-ivory)] text-[var(--color-charcoal)] antialiased font-sans">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Conteúdo Principal --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- Botão Flutuante WhatsApp --}}
    @include('components.whatsapp-button')

    @stack('scripts')
</body>
</html>
