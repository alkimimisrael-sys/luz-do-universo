@extends('layouts.app')

@section('title', 'Contato')
@section('description', 'Entre em contato com o Residencial Luz do Universo. Estamos no Sacomã, São Paulo. Fale conosco pelo WhatsApp, Instagram ou e-mail e agende sua visita.')

@section('content')

@php
    $whatsapp  = $config['whatsapp']          ?? '5511993052051';
    $mensagem  = $config['whatsapp_mensagem'] ?? 'Olá! Gostaria de saber mais sobre o Residencial Luz do Universo.';
    $instagram = $config['instagram']         ?? 'residencial.luzdouniverso';
    $email     = $config['email']             ?? 'residencial.luzdouniverso@gmail.com';
    $endereco  = $config['endereco']          ?? 'Rua Santa Lucrécia, 127, Sacomã, São Paulo - SP';
    $mapsLink  = $config['maps_link']         ?? 'https://www.google.com/maps/search/?api=1&query=Rua+Santa+Lucrécia,+127,+Sacomã,+São+Paulo+-+SP';
    $wppLink   = 'https://wa.me/' . $whatsapp . '?text=' . urlencode($mensagem);
    $igLink    = 'https://instagram.com/' . $instagram;
    $wppDisplay = $config['whatsapp_display'] ?? '(11) 99305-2051';
@endphp

{{-- ═══════ HEADER DA PÁGINA ═══════ --}}
<section class="relative pt-32 pb-20 bg-[var(--color-ivory-dark)] overflow-hidden">
    <div class="absolute inset-0" style="background-image: radial-gradient(rgba(196,154,69,0.1) 1px, transparent 1px); background-size: 30px 30px;"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-display font-bold text-4xl md:text-5xl text-[var(--color-charcoal)] mb-4 anim-fade-up">Fale Conosco</h1>
        <div class="gold-bar gold-bar-center anim-fade-up delay-1"></div>
        <p class="text-[var(--color-taupe)] text-lg max-w-2xl mx-auto anim-fade-up delay-2">
            Estamos prontos para tirar suas dúvidas, agendar uma visita e receber você de braços abertos. Entre em contato pelo canal que preferir!
        </p>
    </div>
</section>

{{-- ═══════ CARDS DE CONTATO ═══════ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14 reveal">
            <div class="section-badge">Nossos Canais</div>
            <h2 class="section-title">Como Prefere se Comunicar?</h2>
            <div class="gold-bar gold-bar-center"></div>
            <p class="section-subtitle mx-auto">Escolha o canal mais conveniente para você. Respondemos com carinho e agilidade.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">

            {{-- WhatsApp --}}
            <a href="{{ $wppLink }}" target="_blank" rel="noopener noreferrer"
               class="card p-8 text-center hover:border-[#25D366] group reveal hover:-translate-y-2 transition-all duration-300 block">
                <div class="w-16 h-16 mx-auto rounded-2xl flex items-center justify-center mb-5 transition-transform group-hover:scale-110"
                     style="background-color: #25D366;">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-2">WhatsApp</h3>
                <p class="text-[var(--color-taupe)] text-sm mb-4">Canal mais rápido! Respondemos em minutos durante o horário comercial.</p>
                <span class="font-semibold text-lg" style="color:#25D366;">{{ $wppDisplay }}</span>
                <div class="mt-4 inline-flex items-center gap-1.5 text-[13px] font-semibold px-3 py-1.5 rounded-xl text-white transition-all"
                     style="background-color:#25D366;">
                    Iniciar Conversa
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
            </a>

            {{-- Instagram --}}
            <a href="{{ $igLink }}" target="_blank" rel="noopener noreferrer"
               class="card p-8 text-center hover:border-pink-300 group reveal hover:-translate-y-2 transition-all duration-300 block" style="animation-delay:0.1s">
                <div class="w-16 h-16 mx-auto rounded-2xl flex items-center justify-center mb-5 transition-transform group-hover:scale-110"
                     style="background: linear-gradient(135deg, #833ab4, #fd1d1d, #fcb045);">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-2">Instagram</h3>
                <p class="text-[var(--color-taupe)] text-sm mb-4">Acompanhe nossa rotina, novidades e bastidores do Residencial.</p>
                <span class="font-semibold text-lg text-pink-500">{{ '@'.$instagram }}</span>
                <div class="mt-4 inline-flex items-center gap-1.5 text-[13px] font-semibold px-3 py-1.5 rounded-xl text-white transition-all"
                     style="background: linear-gradient(135deg, #833ab4, #fd1d1d, #fcb045);">
                    Ver Perfil
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
            </a>

            {{-- E-mail --}}
            <a href="mailto:{{ $email }}"
               class="card p-8 text-center hover:border-[var(--color-primary-lighter)] group reveal hover:-translate-y-2 transition-all duration-300 block" style="animation-delay:0.2s">
                <div class="w-16 h-16 mx-auto rounded-2xl gradient-gold flex items-center justify-center mb-5 transition-transform group-hover:scale-110">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-2">E-mail</h3>
                <p class="text-[var(--color-taupe)] text-sm mb-4">Para mensagens mais detalhadas ou envio de documentos, use o e-mail.</p>
                <span class="font-semibold text-sm text-[var(--color-primary)]">{{ $email }}</span>
                <div class="mt-4 inline-flex items-center gap-1.5 text-[13px] font-semibold px-3 py-1.5 rounded-xl text-white gradient-gold transition-all">
                    Enviar E-mail
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
            </a>

        </div>

        {{-- ═══ Botão de agendamento em destaque ═══ --}}
        <div class="text-center reveal">
            <div class="inline-block bg-[var(--color-ivory)] border border-[var(--color-primary-light)] rounded-2xl px-8 py-6 shadow-md">
                <p class="text-[var(--color-taupe)] text-sm mb-3 font-medium">Quer agendar uma visita presencial?</p>
                <a href="{{ $wppLink }}" target="_blank" rel="noopener noreferrer"
                   class="btn btn-lg shadow-lg inline-flex items-center gap-2"
                   style="background-color:#25D366; color:#fff; border-color:#25D366;"
                   onmouseover="this.style.backgroundColor='#1ebe57';this.style.borderColor='#1ebe57'"
                   onmouseout="this.style.backgroundColor='#25D366';this.style.borderColor='#25D366'">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Agendar Visita pelo WhatsApp
                </a>
            </div>
        </div>

    </div>
</section>

{{-- ═══════ LOCALIZAÇÃO ═══════ --}}
<section class="py-20 bg-[var(--color-ivory)]" id="localizacao">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14 reveal">
            <div class="section-badge sage">Localização</div>
            <h2 class="section-title">Onde Estamos</h2>
            <div class="gold-bar gold-bar-center"></div>
            <p class="section-subtitle mx-auto">Fácil acesso no bairro Sacomã, São Paulo, próximo a hospitais e vias principais.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            {{-- Infos de endereço --}}
            <div class="reveal-left space-y-4">

                <a href="{{ $mapsLink }}" target="_blank" rel="noopener noreferrer"
                   class="flex items-center gap-4 p-5 bg-white rounded-2xl border border-[var(--color-border)] shadow-sm hover:shadow-md transition-all group">
                    <div class="w-12 h-12 gradient-gold rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-xs text-[var(--color-taupe)] mb-1 font-medium uppercase tracking-wide">Endereço</div>
                        <div class="font-semibold text-[var(--color-charcoal)]">{{ $endereco }}</div>
                        <div class="text-xs text-[var(--color-primary)] mt-1">Clique para abrir no Google Maps ↗</div>
                    </div>
                </a>

                <a href="{{ $wppLink }}" target="_blank" rel="noopener noreferrer"
                   class="flex items-center gap-4 p-5 bg-white rounded-2xl border border-[var(--color-border)] shadow-sm hover:shadow-md transition-all group">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform"
                         style="background-color:#25D366;">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-xs text-[var(--color-taupe)] mb-1 font-medium uppercase tracking-wide">WhatsApp</div>
                        <div class="font-semibold text-[var(--color-charcoal)]">{{ $wppDisplay }}</div>
                    </div>
                </a>

                <a href="{{ $igLink }}" target="_blank" rel="noopener noreferrer"
                   class="flex items-center gap-4 p-5 bg-white rounded-2xl border border-[var(--color-border)] shadow-sm hover:shadow-md transition-all group">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform"
                         style="background: linear-gradient(135deg, #833ab4, #fd1d1d, #fcb045);">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-xs text-[var(--color-taupe)] mb-1 font-medium uppercase tracking-wide">Instagram</div>
                        <div class="font-semibold text-[var(--color-charcoal)]">{{ '@'.$instagram }}</div>
                    </div>
                </a>

                <a href="mailto:{{ $email }}"
                   class="flex items-center gap-4 p-5 bg-white rounded-2xl border border-[var(--color-border)] shadow-sm hover:shadow-md transition-all group">
                    <div class="w-12 h-12 gradient-gold rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-xs text-[var(--color-taupe)] mb-1 font-medium uppercase tracking-wide">E-mail</div>
                        <div class="font-semibold text-[var(--color-charcoal)] break-all">{{ $email }}</div>
                    </div>
                </a>

                <a href="{{ $mapsLink }}" target="_blank" rel="noopener noreferrer"
                   class="btn btn-primary btn-lg w-full justify-center mt-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                    </svg>
                    Abrir no Google Maps
                </a>
            </div>

            {{-- Mapa --}}
            <div class="reveal-right">
                <div class="rounded-2xl overflow-hidden shadow-xl border-4 border-white" style="height: 480px;">
                    <iframe
                        src="https://maps.google.com/maps?q=Rua+Santa+Lucr%C3%A9cia,+127,+Sacom%C3%A3,+S%C3%A3o+Paulo+-+SP&t=&z=16&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Localização Residencial Luz do Universo - Sacomã, São Paulo"
                    ></iframe>
                </div>
                <p class="text-center text-[var(--color-taupe)] text-sm mt-3">
                    📍 Sacomã, São Paulo — SP
                </p>
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
