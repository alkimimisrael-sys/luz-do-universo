@extends('layouts.app')

@section('title', 'Início')
@section('description', 'O Residencial Luz do Universo oferece moradia assistida para idosos com cuidado 24h, fisioterapia, atividades recreativas e ambiente acolhedor no Sacomã, São Paulo.')

@section('content')

@php
    $whatsapp  = $config['whatsapp']         ?? '5511993052051';
    $mensagem  = $config['whatsapp_mensagem'] ?? 'Olá! Gostaria de saber mais sobre o Residencial Luz do Universo.';
    $instagram = $config['instagram']         ?? 'residencial.luzdouniverso';
    $mapsLink  = $config['maps_link']         ?? '#';
    $wppLink   = 'https://wa.me/' . $whatsapp . '?text=' . urlencode($mensagem);
    $igLink    = 'https://instagram.com/' . $instagram;
@endphp

{{-- ═══════ HERO ═══════ --}}
<section class="hero-section" id="inicio">
    <div class="hero-bg" style="background-image: url('{{ asset('images/fachada.jpg') }}');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-pattern"></div>

    <div class="relative z-10 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl pt-10">

                <h1 class="font-display font-bold leading-tight mb-5 anim-fade-up delay-1"
                    style="font-size: clamp(2.25rem, 5vw, 3.75rem); color: var(--color-primary-light);">
                    Um Lar com Amor,<br>
                    Dignidade e Respeito
                </h1>

                <p class="text-white/80 text-lg md:text-xl leading-relaxed mb-8 max-w-2xl anim-fade-up delay-2">
                    No Residencial <strong class="text-white font-semibold">Luz do Universo</strong>, seus entes queridos encontram
                    um lar aconchegante com cuidado especializado 24 horas, atividades enriquecedoras e
                    toda a atenção que merecem.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 anim-fade-up delay-3">
                    <a href="{{ $wppLink }}" target="_blank" rel="noopener noreferrer"
                       class="btn btn-lg shadow-lg" style="background-color:#25D366; color:#fff; border-color:#25D366;" onmouseover="this.style.backgroundColor='#1ebe57';this.style.borderColor='#1ebe57'" onmouseout="this.style.backgroundColor='#25D366';this.style.borderColor='#25D366'">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Agendar Visita pelo WhatsApp
                    </a>
                    <a href="{{ route('sobre') }}" class="btn btn-outline-white btn-lg">
                        Conheça Nossa História
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/40 anim-fade-up delay-6">
        <span class="text-xs tracking-widest uppercase">Role para baixo</span>
        <div class="w-5 h-8 border-2 border-white/25 rounded-full flex justify-center pt-1.5">
            <div class="w-1 h-2 bg-white/40 rounded-full animate-bounce"></div>
        </div>
    </div>

    {{-- ═══ ONDA DE TRANSIÇÃO — Hero → Stats Bar ═══ --}}
    <div class="absolute bottom-0 left-0 right-0 w-full overflow-hidden leading-none" style="height: 90px;">
        {{-- Camada 1: onda dourada suave (profundidade) --}}
        <svg class="absolute bottom-0 w-full" style="height:90px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 90" preserveAspectRatio="none">
            <path d="M0,40 C180,80 360,10 540,50 C720,90 900,20 1080,55 C1260,88 1380,30 1440,45 L1440,90 L0,90 Z"
                  fill="rgba(196,154,69,0.18)"/>
        </svg>
        {{-- Camada 2: onda branca (fusão perfeita com a Stats Bar) --}}
        <svg class="absolute bottom-0 w-full" style="height:72px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 72" preserveAspectRatio="none">
            <path d="M0,32 C240,68 480,4 720,36 C960,68 1200,8 1440,40 L1440,72 L0,72 Z"
                  fill="#FFFFFF"/>
        </svg>
    </div>

</section>

{{-- ═══════ STATS BAR ═══════ --}}
<section class="stats-bar py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 divide-y-2 lg:divide-y-0 lg:divide-x divide-[var(--color-border)]">
            @php
                $stats = [
                    ['titulo' => 'Cuidado Ininterrupto', 'desc' => 'Equipe presente 24 horas', 'svg' => '<svg class="w-8 h-8" style="color:var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'],
                    ['titulo' => 'Ambiente Adaptado',    'desc' => '100% focado na segurança', 'svg' => '<svg class="w-8 h-8" style="color:var(--color-sage)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>'],
                    ['titulo' => 'Equipe Especializada', 'desc' => 'Multidisciplinar e humana', 'svg' => '<svg class="w-8 h-8" style="color:var(--color-rose)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>'],
                    ['titulo' => 'Atendimento Familiar', 'desc' => 'Respeito, amor e carinho',  'svg' => '<svg class="w-8 h-8" style="color:var(--color-lavender)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>'],
                ];
            @endphp
            @foreach($stats as $stat)
                <div class="flex items-center gap-4 px-4 lg:px-8 py-3 first:pl-0">
                    <div class="hidden sm:block">{!! $stat['svg'] !!}</div>
                    <div>
                        <div class="font-display font-bold text-lg text-[var(--color-charcoal)]">{{ $stat['titulo'] }}</div>
                        <div class="stat-label">{{ $stat['desc'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════ NOSSOS SERVIÇOS ═══════ --}}
<section class="py-20" style="background: var(--color-white);" id="servicos">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <div class="section-badge">Nossos Serviços</div>
            <h2 class="section-title">Cuidado Completo para Bem-Estar Total</h2>
            <div class="gold-bar gold-bar-center"></div>
            <p class="section-subtitle mx-auto">Oferecemos uma estrutura completa de serviços pensados para garantir qualidade de vida, saúde e alegria no dia a dia.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $servicos = [
                    ['cor' => 'gold',     'titulo' => 'Moradia Assistida',         'desc' => 'Quartos individuais e compartilhados confortáveis, com segurança e privacidade para cada residente.',
                     'svg' => '<svg class="w-7 h-7" style="color:var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>'],
                    ['cor' => 'sage',     'titulo' => 'Acompanhamento Médico',     'desc' => 'Equipe de enfermagem e médicos parceiros para monitoramento contínuo, medicação e consultas regulares.',
                     'svg' => '<svg class="w-7 h-7" style="color:var(--color-sage)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>'],
                    ['cor' => 'rose',     'titulo' => 'Fisioterapia',              'desc' => 'Sessões individuais para manutenção da mobilidade, prevenção de quedas e reabilitação funcional.',
                     'svg' => '<svg class="w-7 h-7" style="color:var(--color-rose)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>'],
                    ['cor' => 'lavender', 'titulo' => 'Nutricionista',            'desc' => 'Cardápio nutritivo e personalizado, elaborado por nutricionista para atender cada residente com equilíbrio e saúde.',
                     'svg' => '<svg class="w-7 h-7" style="color:var(--color-lavender)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>'],
                    ['cor' => 'sage',     'titulo' => 'Alimentação Balanceada',    'desc' => 'Cardápio nutritivo elaborado por nutricionistas, respeitando restrições alimentares individuais.',
                     'svg' => '<svg class="w-7 h-7" style="color:var(--color-sage)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.87c1.355 0 2.697.055 4.024.165C17.155 8.51 18 9.473 18 10.608v2.513m-3-4.87v-1.5m-6 1.5v-1.5m12 9.75l-1.5.75a3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0L3 16.5m15-3.38a48.474 48.474 0 00-6-.371c-2.032 0-4.034.126-6 .37"/></svg>'],
                    ['cor' => 'gold',     'titulo' => 'Higiene e Banho Assistido', 'desc' => 'Auxílio completo para a higiene pessoal, com respeito à dignidade e privacidade de cada residente.',
                     'svg' => '<svg class="w-7 h-7" style="color:var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/></svg>'],
                    ['cor' => 'lavender', 'titulo' => 'Suporte Psicológico',       'desc' => 'Acompanhamento emocional para residentes e famílias, promovendo bem-estar e adaptação saudável.',
                     'svg' => '<svg class="w-7 h-7" style="color:var(--color-lavender)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>'],
                    ['cor' => 'rose',     'titulo' => 'Cuidado Noturno 24h',       'desc' => 'Equipe de cuidadores presente toda a noite, garantindo segurança e conforto ininterruptos.',
                     'svg' => '<svg class="w-7 h-7" style="color:var(--color-rose)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"/></svg>'],
                    ['cor' => 'gold',     'titulo' => 'Comunicação com Família',   'desc' => 'Relatórios periódicos e canal aberto para que todos estejam sempre informados e tranquilos.',
                     'svg' => '<svg class="w-7 h-7" style="color:var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>'],
                ];
            @endphp
            @foreach($servicos as $s)
                <div class="card p-7 hover:border-[var(--color-primary-lighter)] group reveal">
                    <div class="service-icon {{ $s['cor'] }} group-hover:scale-110 transition-transform">
                        {!! $s['svg'] !!}
                    </div>
                    <h3 class="font-display font-bold text-[var(--color-charcoal)] text-lg mb-2">{{ $s['titulo'] }}</h3>
                    <p class="text-[var(--color-taupe)] text-sm leading-relaxed">{{ $s['desc'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-10 reveal">
            <a href="{{ route('servicos') }}" class="btn btn-primary btn-lg">
                Ver Todos os Serviços
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ═══════ POR QUE ESCOLHER ═══════ --}}
<section class="py-20 bg-[var(--color-ivory)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            <div class="reveal-left">
                <div class="relative">
                    <img src="{{ asset('images/sobre-cuidado.png') }}"
                         alt="Cuidadora com residente"
                         class="w-full h-[480px] object-cover rounded-2xl shadow-xl">
                    {{-- Badge 1: Espaço Especializado --}}
                    <div class="absolute -bottom-6 -right-4 bg-white rounded-2xl p-4 shadow-xl border border-[var(--color-border)]">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 gradient-gold rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                            </div>
                            <div>
                                <div class="font-display font-bold text-lg text-[var(--color-charcoal)]">Estrutura<br>Adaptada</div>
                            </div>
                        </div>
                    </div>
                    {{-- Badge 2 - Corrigido --}}
                    <div class="absolute -top-5 -left-4 bg-white rounded-2xl p-4 shadow-xl border border-[var(--color-border)]">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 gradient-sage rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div>
                                <div class="font-display font-bold text-xl text-[var(--color-charcoal)]">100%</div>
                                <div class="text-xs text-[var(--color-taupe)]">Compromisso e Cuidado</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reveal-right">
                <div class="section-badge sage">Por que nos escolher</div>
                <h2 class="section-title">Mais que um Residencial,<br>Uma Segunda Casa</h2>
                <div class="gold-bar"></div>
                <p class="text-[var(--color-taupe)] text-base leading-relaxed mb-8">
                    Cada detalhe foi pensado para que nossos residentes se sintam em casa — com segurança,
                    liberdade e muito carinho. Entendemos que esta é uma decisão importante para toda a família.
                </p>

                <div class="space-y-3">
                    @foreach([
                        'Ambiente Familiar e Acolhedor — sem aparência de clínica ou hospital.',
                        'Equipe Treinada com Empatia — profissionais selecionados pelo cuidado e paciência.',
                        'Transparência com a Família — atualizações frequentes e canal direto a qualquer momento.',
                        'Localização Privilegiada — fácil acesso no Sacomã, próximo a hospitais.',
                        'Atividades Diárias — programação que estimula corpo, mente e espírito.',
                    ] as $motivo)
                        <div class="check-item">
                            <div class="check-dot">
                                <svg class="w-3.5 h-3.5" style="color: var(--color-primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-[var(--color-charcoal-lt)] text-sm leading-relaxed">{{ $motivo }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('sobre') }}" class="btn btn-primary">Nossa História</a>
                    <a href="{{ $wppLink }}" target="_blank" class="btn btn-outline-gold">Falar com a Equipe</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Seções "Nossa Estrutura" e "Depoimentos" serão adicionadas quando o Residencial Luz do Universo estiver em plena operação --}}

{{-- ═══════ LOCALIZAÇÃO ═══════ --}}
<section class="py-20 bg-[var(--color-white)]" id="localizacao">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="reveal-left">
                <div class="section-badge">Localização</div>
                <h2 class="section-title">Fácil Acesso no<br>Coração do Sacomã</h2>
                <div class="gold-bar"></div>
                <p class="text-[var(--color-taupe)] leading-relaxed mb-8">
                    Estamos localizados no bairro Sacomã, São Paulo, com fácil acesso por transporte público e privado.
                </p>

                <div class="space-y-3 mb-8">
                    @php
                        $infoItems = [
                            ['label' => 'Endereço',  'valor' => $config['endereco'] ?? 'Rua Santa Lucrécia, 127, Sacomã, São Paulo - SP', 'grad' => 'gradient-gold',
                             'link' => $mapsLink,
                             'svg' => '<svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>'],
                            ['label' => 'WhatsApp',  'valor' => $config['whatsapp_display'] ?? '(11) 99305-2051', 'grad' => 'gradient-sage',
                             'link' => $wppLink,
                             'svg' => '<svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>'],
                            ['label' => 'Instagram', 'valor' => '@' . ($config['instagram'] ?? 'residencial.luzdouniverso'), 'grad' => '',
                             'link' => $igLink,
                             'svg' => '<svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>'],
                        ];
                    @endphp
                    @foreach($infoItems as $item)
                        <a href="{{ $item['link'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-4 p-4 bg-white rounded-xl border border-[var(--color-border)] shadow-sm hover:shadow-md transition-shadow group">
                            <div class="w-10 h-10 rounded-lg {{ $item['grad'] ?: '' }} flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform"
                                @if(!$item['grad']) style="background: linear-gradient(135deg, #833ab4, #fd1d1d, #fcb045);" @endif>
                                {!! $item['svg'] !!}
                            </div>
                            <div>
                                <div class="font-semibold text-[var(--color-charcoal)] text-sm group-hover:text-primary transition-colors">{{ $item['label'] }}</div>
                                <div class="text-[var(--color-taupe)] text-sm">{{ $item['valor'] }}</div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <a href="{{ $mapsLink }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
                    Abrir no Google Maps
                </a>
            </div>

            <div class="reveal-right">
                <div class="rounded-2xl overflow-hidden shadow-xl border-4 border-white" style="height: 420px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.6!2d-46.586!3d-23.605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zUnVhIFNhbnRhIEx1Y3LDqWNpYSwgMTI3LCBTYW5jb23DoywgU8OjbyBQYXVsby1TUCwgMDQyNDktMDYw!5e0!3m2!1spt-BR!2sbr!4v1"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" title="Localização Residencial Luz do Universo"
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
revealEls.forEach(el => observer.observe(el));
</script>
@endpush
