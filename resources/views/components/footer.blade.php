@php
    $whatsapp     = \App\Models\Configuracao::get('whatsapp', '5511993052051');
    $mensagem     = \App\Models\Configuracao::get('whatsapp_mensagem', 'Olá! Gostaria de saber mais sobre o Residencial Luz do Universo.');
    $instagram    = \App\Models\Configuracao::get('instagram', 'residencial.luzdouniverso');
    $email        = \App\Models\Configuracao::get('email', 'residencial.luzdouniverso@gmail.com');
    $endereco     = \App\Models\Configuracao::get('endereco', 'Rua Santa Lucrécia, 127, Sacomã, São Paulo - SP');
    $mapsLink     = \App\Models\Configuracao::get('maps_link', '#');
    $wppLink      = 'https://wa.me/' . $whatsapp . '?text=' . urlencode($mensagem);
    $instagramUrl = 'https://instagram.com/' . $instagram;
@endphp

<footer class="bg-dark text-white">

    {{-- CTA Bar --}}
    <div class="gradient-gold py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-white mb-3">
                Pronto para conhecer o Luz do Universo?
            </h2>
            <p class="text-white/80 mb-6 text-lg">Agende uma visita e veja de perto todo o nosso cuidado e carinho.</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="{{ $wppLink }}" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center justify-center gap-2 bg-[#25D366] text-white font-bold px-6 py-3 rounded-xl hover:bg-[#1ebd5a] transition-all hover:-translate-y-1 shadow-lg">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Agendar pelo WhatsApp
                </a>
                <a href="{{ $instagramUrl }}" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center justify-center gap-2 bg-gradient-to-br from-purple-500 via-pink-500 to-orange-400 text-white font-bold px-6 py-3 rounded-xl hover:opacity-90 transition-all hover:-translate-y-1 shadow-lg">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    Ver no Instagram
                </a>
            </div>
        </div>
    </div>

    {{-- Footer Principal --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Coluna 1: Logo + Sobre --}}
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl p-5 inline-block mb-6 shadow-lg shadow-black/20 transform hover:scale-105 transition-transform">
                    <img src="{{ asset('images/logo.png') }}" alt="Residencial Luz do Universo"
                         class="h-24 md:h-32 w-auto object-contain mix-blend-multiply">
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-5">
                    Um lar acolhedor onde seus entes queridos recebem cuidado com amor, dignidade e respeito, 24 horas por dia.
                </p>
                {{-- Redes Sociais --}}
                <div class="flex gap-3">
                    <a href="{{ $wppLink }}" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 bg-[#25D366] rounded-lg flex items-center justify-center hover:scale-110 transition-transform"
                       title="WhatsApp">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </a>
                    <a href="{{ $instagramUrl }}" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 bg-gradient-to-br from-purple-500 via-pink-500 to-orange-400 rounded-lg flex items-center justify-center hover:scale-110 transition-transform"
                       title="Instagram">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Coluna 2: Links Rápidos --}}
            <div>
                <h3 class="text-white font-semibold text-sm uppercase tracking-widest mb-5 flex items-center gap-2">
                    <span class="w-5 h-0.5 bg-primary inline-block"></span>
                    Navegação
                </h3>
                <ul class="space-y-2.5">
                    @foreach([
                        ['route' => 'home',     'label' => 'Início'],
                        ['route' => 'sobre',    'label' => 'Sobre Nós'],
                        ['route' => 'servicos', 'label' => 'Nossos Serviços'],
                        ['route' => 'contato',  'label' => 'Contato'],
                    ] as $link)
                        <li>
                            <a href="{{ route($link['route']) }}"
                               class="footer-link flex items-center gap-2 hover:gap-3 transition-all text-sm">
                                <span class="text-primary">›</span> {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Coluna 3: Serviços --}}
            <div>
                <h3 class="text-white font-semibold text-sm uppercase tracking-widest mb-5 flex items-center gap-2">
                    <span class="w-5 h-0.5 bg-primary inline-block"></span>
                    Nossos Serviços
                </h3>
                <ul class="space-y-2.5">
                    @foreach([
                        'Moradia Assistida',
                        'Fisioterapia',
                        'Acompanhamento Médico',
                        'Atividades Recreativas',
                        'Alimentação Balanceada',
                        'Cuidado 24 Horas',
                        'Banho Terapêutico',
                        'Suporte Psicológico',
                    ] as $servico)
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary/60 flex-shrink-0"></span>
                            {{ $servico }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Coluna 4: Contato --}}
            <div>
                <h3 class="text-white font-semibold text-sm uppercase tracking-widest mb-5 flex items-center gap-2">
                    <span class="w-5 h-0.5 bg-primary inline-block"></span>
                    Fale Conosco
                </h3>
                <ul class="space-y-4">
                    <li>
                        <a href="{{ $wppLink }}" target="_blank" rel="noopener noreferrer"
                           class="flex items-start gap-3 text-gray-400 hover:text-[#25D366] transition-colors group">
                            <div class="w-8 h-8 bg-[#25D366]/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-[#25D366]/20 transition-colors mt-0.5">
                                <svg class="w-4 h-4 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-0.5">WhatsApp</div>
                                <span class="text-sm font-medium">(11) 99305-2051</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:{{ $email }}"
                           class="flex items-start gap-3 text-gray-400 hover:text-primary-light transition-colors group">
                            <div class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-primary/20 transition-colors mt-0.5">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-0.5">E-mail</div>
                                <span class="text-sm font-medium break-all">{{ $email }}</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $mapsLink }}" target="_blank" rel="noopener noreferrer"
                           class="flex items-start gap-3 text-gray-400 hover:text-secondary transition-colors group">
                            <div class="w-8 h-8 bg-secondary/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-secondary/20 transition-colors mt-0.5">
                                <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-0.5">Endereço <span class="text-secondary text-xs">(ver no mapa ↗)</span></div>
                                <span class="text-sm font-medium">{{ $endereco }}</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Rodapé Inferior --}}
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col md:flex-row items-center justify-between gap-3">
            <p class="text-gray-500 text-sm text-center md:text-left">
                © {{ date('Y') }} <span class="text-gray-400 font-medium">Residencial Luz do Universo</span>. Todos os direitos reservados.
            </p>
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.login') }}" class="text-gray-600 hover:text-gray-400 text-xs transition-colors">
                    Área Admin
                </a>
                <span class="text-gray-700 text-xs">
                    Desenvolvido com ❤️ em São Paulo
                </span>
            </div>
        </div>
    </div>
</footer>
