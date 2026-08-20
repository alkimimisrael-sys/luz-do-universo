@extends('layouts.app')

@section('title', 'Nossos Serviços')
@section('description', 'Conheça todos os serviços oferecidos pelo Residencial Luz do Universo, focados em proporcionar saúde, segurança e bem-estar para a terceira idade.')

@section('content')

{{-- ═══════ HEADER DA PÁGINA ═══════ --}}
<section class="relative pt-32 pb-20 bg-[var(--color-ivory-dark)] overflow-hidden">
    <div class="absolute inset-0" style="background-image: radial-gradient(rgba(196,154,69,0.1) 1px, transparent 1px); background-size: 30px 30px;"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-display font-bold text-4xl md:text-5xl text-[var(--color-charcoal)] mb-4 anim-fade-up">Nossos Serviços</h1>
        <div class="gold-bar gold-bar-center anim-fade-up delay-1"></div>
        <p class="text-[var(--color-taupe)] text-lg max-w-2xl mx-auto anim-fade-up delay-2">
            Estrutura completa e cuidado multidisciplinar desenhados para garantir a máxima qualidade de vida, autonomia e segurança aos nossos residentes.
        </p>
    </div>
</section>

{{-- ═══════ LISTA DE SERVIÇOS ═══════ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            {{-- Serviço 1 --}}
            <div class="card p-8 group hover:-translate-y-2 transition-all duration-300 reveal">
                <div class="w-14 h-14 rounded-xl gradient-gold flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform shadow-md">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-3">Moradia Permanente e Temporária</h3>
                <p class="text-[var(--color-taupe)] leading-relaxed text-sm">
                    Acolhimento contínuo para quem deseja viver no residencial, ou estadias curtas para recuperação pós-operatória e descanso familiar.
                </p>
            </div>

            {{-- Serviço 2 --}}
            <div class="card p-8 group hover:-translate-y-2 transition-all duration-300 reveal delay-100">
                <div class="w-14 h-14 rounded-xl gradient-sage flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform shadow-md">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-3">Assistência Médica e Enfermagem 24h</h3>
                <p class="text-[var(--color-taupe)] leading-relaxed text-sm">
                    Monitoramento constante de sinais vitais, administração segura de medicamentos e atendimento rápido a qualquer momento do dia ou da noite.
                </p>
            </div>

            {{-- Serviço 3 --}}
            <div class="card p-8 group hover:-translate-y-2 transition-all duration-300 reveal delay-200">
                <div class="w-14 h-14 rounded-xl flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform shadow-md" style="background: linear-gradient(135deg, var(--color-rose), var(--color-rose-dark));">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-3">Nutrição Balanceada</h3>
                <p class="text-[var(--color-taupe)] leading-relaxed text-sm">
                    Cardápios desenvolvidos por nutricionistas, respeitando dietas específicas (diabéticos, hipertensos, etc), com refeições saborosas e caseiras.
                </p>
            </div>

            {{-- Serviço 4 --}}
            <div class="card p-8 group hover:-translate-y-2 transition-all duration-300 reveal">
                <div class="w-14 h-14 rounded-xl bg-lavender flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform shadow-md">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-3">Fisioterapia Preventiva e Reabilitação</h3>
                <p class="text-[var(--color-taupe)] leading-relaxed text-sm">
                    Exercícios direcionados para fortalecimento muscular, equilíbrio e prevenção de quedas, fundamentais para a manutenção da independência.
                </p>
            </div>

            {{-- Serviço 5 --}}
            <div class="card p-8 group hover:-translate-y-2 transition-all duration-300 reveal delay-100">
                <div class="w-14 h-14 rounded-xl bg-orange-400 flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform shadow-md">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-3">Atividades Socioculturais e Recreativas</h3>
                <p class="text-[var(--color-taupe)] leading-relaxed text-sm">
                    Música, artesanato, jogos e passeios. Manter a mente ativa e estimular a interação social afasta a depressão e traz alegria ao dia a dia.
                </p>
            </div>

            {{-- Serviço 6 --}}
            <div class="card p-8 group hover:-translate-y-2 transition-all duration-300 reveal delay-200">
                <div class="w-14 h-14 rounded-xl bg-blue-400 flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform shadow-md">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-3">Suporte Familiar e Psicológico</h3>
                <p class="text-[var(--color-taupe)] leading-relaxed text-sm">
                    Entendemos que a adaptação é de toda a família. Oferecemos acompanhamento contínuo e total transparência sobre a rotina e evolução do residente.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- ═══════ SEÇÃO EXTRA ═══════ --}}
<section class="py-20 bg-[var(--color-ivory)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl p-8 lg:p-12 shadow-xl border border-[var(--color-border)] relative overflow-hidden">
            <div class="absolute top-0 right-0 p-8 opacity-10 hidden md:block">
                <svg class="w-32 h-32 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
            </div>
            
            <div class="max-w-3xl relative z-10">
                <div class="section-badge gold mb-4">Diferencial</div>
                <h2 class="font-display font-bold text-3xl text-[var(--color-charcoal)] mb-6">Tratamento Individualizado</h2>
                <p class="text-[var(--color-taupe)] text-lg leading-relaxed mb-6">
                    No Luz do Universo, acreditamos que não existem "pacientes", existem pessoas com histórias de vida únicas. 
                    Nenhum plano de cuidado é engessado. Desde os horários das refeições, banhos até as atividades de lazer, tudo é construído com base nas preferências e limitações de cada residente.
                </p>
                <div class="flex items-center gap-3 text-[var(--color-primary-dark)] font-semibold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    A família tem livre acesso e participação nas decisões.
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
const revealEls = document.querySelectorAll('.reveal');
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
