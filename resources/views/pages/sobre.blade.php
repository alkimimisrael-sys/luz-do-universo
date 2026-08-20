@extends('layouts.app')

@section('title', 'Sobre Nós')
@section('description', 'Conheça a história e os valores do Residencial Luz do Universo, nosso compromisso com o cuidado e a dignidade na terceira idade.')

@section('content')

{{-- ═══════ HEADER DA PÁGINA ═══════ --}}
<section class="relative pt-32 pb-20 bg-[var(--color-ivory-dark)] overflow-hidden">
    <div class="absolute inset-0" style="background-image: radial-gradient(rgba(196,154,69,0.1) 1px, transparent 1px); background-size: 30px 30px;"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="font-display font-bold text-4xl md:text-5xl text-[var(--color-charcoal)] mb-4 anim-fade-up">Sobre Nós</h1>
        <div class="gold-bar gold-bar-center anim-fade-up delay-1"></div>
        <p class="text-[var(--color-taupe)] text-lg max-w-2xl mx-auto anim-fade-up delay-2">
            Muito mais que um residencial sênior, somos uma extensão da sua família. Nosso propósito é oferecer cuidado, amor e dignidade.
        </p>
    </div>
</section>

{{-- ═══════ NOSSA HISTÓRIA ═══════ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="reveal-left">
                <div class="relative">
                    <div class="absolute -inset-4 bg-[var(--color-ivory)] rounded-3xl transform rotate-3"></div>
                    <img src="{{ asset('images/sobre-cuidado.png') }}" alt="Cuidado e Carinho" class="relative w-full h-[500px] object-cover rounded-2xl shadow-lg">
                </div>
            </div>

            <div class="reveal-right">
                <div class="section-badge rose">Nossa Essência</div>
                <h2 class="section-title">Nascemos de um Sonho de Cuidar</h2>
                <div class="gold-bar"></div>
                
                <div class="space-y-5 text-[var(--color-charcoal-lt)] leading-relaxed">
                    <p>
                        O <strong>Residencial Luz do Universo</strong> foi idealizado com um propósito muito claro e tocante: criar um ambiente que não tivesse aspecto de clínica ou hospital, mas sim o calor, o afeto e o acolhimento de um verdadeiro lar.
                    </p>
                    <p>
                        Localizados no bairro do Sacomã, em São Paulo, preparamos toda a nossa infraestrutura pensando minuciosamente em cada detalhe para a segurança e o bem-estar dos residentes na melhor idade.
                    </p>
                    <p>
                        Acreditamos que o envelhecimento é uma fase belíssima da vida que deve ser vivida com plenitude. Por isso, nossa equipe multidisciplinar trabalha com um único foco: promover a saúde física, mental e emocional de cada pessoa que confia sua vida aos nossos cuidados.
                    </p>
                </div>

                <div class="mt-8 p-6 bg-[var(--color-ivory)] border border-[var(--color-primary-light)] rounded-xl italic text-[var(--color-charcoal)]">
                    "Onde há cuidado genuíno, existe amor. E onde há amor, a vida ganha uma nova cor."
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════ MISSÃO, VISÃO E VALORES ═══════ --}}
<section class="py-20 bg-[var(--color-ivory)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 reveal">
            <h2 class="section-title">Nossos Pilares</h2>
            <div class="gold-bar gold-bar-center"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Missão --}}
            <div class="card p-8 text-center reveal hover:-translate-y-2 transition-transform">
                <div class="w-16 h-16 mx-auto bg-primary/10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-4">Missão</h3>
                <p class="text-[var(--color-taupe)] leading-relaxed">
                    Proporcionar assistência integral ao idoso, assegurando qualidade de vida, conforto, segurança e um envelhecimento ativo, com atendimento humanizado que respeite a história de cada indivíduo.
                </p>
            </div>

            {{-- Visão --}}
            <div class="card p-8 text-center reveal hover:-translate-y-2 transition-transform delay-100">
                <div class="w-16 h-16 mx-auto bg-sage/10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-4">Visão</h3>
                <p class="text-[var(--color-taupe)] leading-relaxed">
                    Ser referência em São Paulo como o residencial sênior mais humanizado e acolhedor, reconhecido pela excelência em cuidados, pela infraestrutura diferenciada e pela confiança absoluta das famílias.
                </p>
            </div>

            {{-- Valores --}}
            <div class="card p-8 text-center reveal hover:-translate-y-2 transition-transform delay-200">
                <div class="w-16 h-16 mx-auto bg-rose/10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-rose" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-display font-bold text-xl text-[var(--color-charcoal)] mb-4">Valores</h3>
                <ul class="text-[var(--color-taupe)] space-y-2 text-left w-max mx-auto">
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-rose rounded-full"></span> Empatia e Amor</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-rose rounded-full"></span> Respeito à Dignidade</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-rose rounded-full"></span> Transparência Absoluta</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-rose rounded-full"></span> Ética Profissional</li>
                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-rose rounded-full"></span> Foco na Família</li>
                </ul>
            </div>
        </div>

    </div>
</section>

{{-- ═══════ EQUIPE ═══════ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="order-2 lg:order-1 reveal-left">
                <div class="section-badge sage">A Família Luz do Universo</div>
                <h2 class="section-title">Profissionais Escolhidos a Dedo</h2>
                <div class="gold-bar"></div>
                <p class="text-[var(--color-taupe)] mb-6 leading-relaxed">
                    Nossa equipe é o nosso maior patrimônio. Não basta apenas currículo; para fazer parte da equipe Luz do Universo, é obrigatório ter vocação, paciência e amor verdadeiro pelo que se faz.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full gradient-gold flex items-center justify-center text-white">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="font-medium text-[var(--color-charcoal)] text-sm">Cuidadores</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full gradient-sage flex items-center justify-center text-white">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="font-medium text-[var(--color-charcoal)] text-sm">Enfermeiros</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center text-white" style="background: linear-gradient(135deg, var(--color-rose), #e05a7a);">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="font-medium text-[var(--color-charcoal)] text-sm">Nutricionistas</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-lavender flex items-center justify-center text-white">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="font-medium text-[var(--color-charcoal)] text-sm">Fisioterapeutas</span>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2 reveal-right">
                <div class="relative">
                    <img src="{{ asset('images/estrutura-refeitorio.png') }}" alt="Equipe dedicada" class="w-full rounded-2xl shadow-xl border-4 border-white">
                    <div class="absolute inset-0 border-2 border-primary/20 rounded-2xl transform translate-x-4 translate-y-4 -z-10"></div>
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
