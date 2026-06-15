<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sexage Moléculaire & Détection Pathogènes</title>
    <meta name="description" content="Plateforme de sexage moléculaire ADN pour oiseaux et espèces monomorphes. Analyse PCR, IA électrophorèse, rapport certifié en 24-72h. Précision 99.9%.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800;900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style>
        html { scroll-behavior: smooth; }
        .hero-bg {
            background:
                radial-gradient(circle at top right, rgba(34, 211, 238, 0.24), transparent 18%),
                radial-gradient(circle at bottom left, rgba(77, 212, 255, 0.14), transparent 18%),
                linear-gradient(138deg, #020617 0%, #091323 28%, #0f172a 58%, #08203c 100%);
            position: relative;
            min-height: calc(100vh - 4.5rem);
            overflow: hidden;
        }
        .hero-bg::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(4, 18, 37, 0.42);
            pointer-events: none;
        }
        .hero-content {
            position: relative;
            z-index: 10;
        }
        .glass {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(24px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.1);
            border-color: rgba(34, 197, 94, 0.24);
        }
        .gradient-text {
            background: linear-gradient(135deg, #4de12f 0%, #0084ff 45%, #22d3ee 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .dna-container {
            position: absolute;
            width: 100px;
            height: 500px;
            opacity: 0.12;
            right: 8%;
            top: 10%;
            display: flex;
            flex-direction: column;
            gap: 15px;
            pointer-events: none;
            z-index: 5;
        }
        .dna-step {
            width: 60px;
            height: 4px;
            background: #4de12f;
            border-radius: 9999px;
            position: relative;
            animation: dna-rotate 4s infinite linear;
        }
        .dna-step::before,
        .dna-step::after {
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 9999px;
            background: #22d3ee;
            top: -3px;
        }
        .dna-step::after {
            right: -5px;
            background: #0084ff;
        }
        @keyframes dna-rotate {
            0% { transform: scaleX(1) rotate(0deg); opacity: 1; }
            50% { transform: scaleX(-1) rotate(180deg); opacity: 0.3; }
            100% { transform: scaleX(1) rotate(360deg); opacity: 1; }
        }
        .hero-panel {
            background: rgba(15, 23, 42, 0.88);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 2.5rem;
            overflow: hidden;
            box-shadow: 0 45px 120px -50px rgba(0, 0, 0, 0.75);
        }
        .hero-highlight {
            position: absolute;
            left: 1.5rem;
            bottom: 1.5rem;
            right: 1.5rem;
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 1rem;
            background: rgba(15, 23, 42, 0.92);
            border: 1px solid rgba(255, 255, 255, 0.08);
            padding: 1rem 1.25rem;
            border-radius: 1.75rem;
            backdrop-filter: blur(18px);
        }
        .hero-highlight-icon {
            width: 3rem;
            height: 3rem;
            min-width: 3rem;
            border-radius: 1rem;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #22d3ee 0%, #4ade80 100%);
            color: #0f172a;
            font-weight: 900;
            font-size: 1.05rem;
        }
        .hero-stat {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 1.75rem;
            padding: 1.25rem;
        }
    </style>
</head>
<body class="font-inter bg-white antialiased">
    <nav aria-label="Navigation principale" class="fixed top-0 inset-x-0 z-50 bg-gradient-to-r from-emerald-900/70 via-emerald-900/60 to-slate-950/60 backdrop-blur-xl border-b border-emerald-700/20 shadow-[0_30px_80px_-40px_rgba(16,185,129,0.25)] transition duration-300">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex h-20 items-center justify-between">
            <a href="/" class="inline-flex items-center self-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-20 w-auto transition duration-300">
            </a>
            <div class="hidden md:flex items-center gap-8">
                <a href="#services" class="text-white hover:text-emerald-300 text-sm font-medium transition">Services</a>
                <a href="#how" class="text-white hover:text-emerald-300 text-sm font-medium transition">Processus</a>
                <a href="#species" class="text-white hover:text-emerald-300 text-sm font-medium transition">Espèces</a>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('login') }}" class="text-white hover:text-emerald-200 font-semibold text-sm transition px-4 py-2 rounded-2xl hover:bg-white/10">Connexion</a>
                <a href="{{ route('register') }}" class="bg-emerald-500 hover:bg-emerald-400 text-white font-semibold text-sm px-5 py-2.5 rounded-2xl transition shadow-lg shadow-emerald-500/20">S'inscrire</a>
            </div>
        </div>
    </nav>
    <section class="hero-bg min-h-screen flex items-center relative overflow-hidden pt-24 pb-24">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(34,211,238,0.18),_transparent_35%),radial-gradient(circle_at_bottom_left,_rgba(77,212,255,0.12),_transparent_30%)]"></div>
        <div class="dna-container hidden lg:flex">
            @for($i = 0; $i < 12; $i++)
                <div class="dna-step" style="animation-delay: {{ $i * 0.18 }}s"></div>
            @endfor
        </div>
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full relative z-10 hero-content">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 glass px-4 py-2 rounded-full text-xs font-black text-emerald-300 mb-8 tracking-widest uppercase border border-emerald-200">
                        <div class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></div>
                        Laboratoire de génétique moléculaire — diagnostic aviaire expert
                    </div>
                    <div class="max-w-3xl">
                        <p class="text-sm uppercase tracking-[0.35em] text-emerald-200 mb-4 font-semibold">Sexage ADN • Diagnostic aviaire • Certificat validé</p>
                        <h1 class="font-outfit font-black text-4xl lg:text-5xl xl:text-6xl text-white leading-tight tracking-tight mb-4">
                            Votre référence en sexage moléculaire et séquençage aviaire
                        </h1>
                        <p class="text-slate-300 text-base lg:text-lg leading-relaxed mb-8 max-w-2xl font-medium">
                            Analyse ADN sécurisée pour déterminer le sexe des espèces monomorphes et délivrer un certificat scientifique fiable.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-4 mb-12">
                        <a href="{{ route('register') }}" class="inline-flex items-center gap-2 bg-emerald-500 text-white font-bold py-4 px-8 rounded-2xl transition shadow-2xl shadow-emerald-500/20 hover:bg-emerald-400">Demander une analyse</a>
                        <a href="#how" class="inline-flex items-center gap-2 border border-emerald-400 text-white font-semibold py-4 px-8 rounded-2xl transition hover:bg-emerald-500/10 hover:border-emerald-300">Voir la méthode</a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="hero-stat text-center bg-emerald-950/40 p-6 rounded-3xl border border-emerald-800">
                            <div class="text-3xl font-black text-emerald-200">1200+</div>
                            <div class="text-emerald-300 text-xs mt-2 uppercase tracking-widest">Oiseaux testés</div>
                        </div>
                        <div class="hero-stat text-center bg-emerald-950/40 p-6 rounded-3xl border border-emerald-800">
                            <div class="text-3xl font-black text-emerald-200">99,9%</div>
                            <div class="text-emerald-300 text-xs mt-2 uppercase tracking-widest">Taux de précision</div>
                        </div>
                        <div class="hero-stat text-center bg-emerald-950/40 p-6 rounded-3xl border border-emerald-800">
                            <div class="text-3xl font-black text-emerald-200">72h</div>
                            <div class="text-emerald-300 text-xs mt-2 uppercase tracking-widest">Rapport express</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="hero-panel">
                        <div class="absolute -right-10 -top-10 w-44 h-44 rounded-full border border-emerald-400/20 shadow-[0_0_120px_rgba(16,185,129,0.2)]"></div>
                        <img src="{{ asset('images/bird_hero.png') }}" alt="Sexage ADN" class="w-full h-[560px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-950/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 p-5 rounded-3xl bg-slate-900/85 border border-emerald-200/10 shadow-xl max-w-[85%]">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-12 h-12 rounded-3xl bg-emerald-400/15 flex items-center justify-center text-emerald-300 text-xl font-black">♀</div>
                                <div>
                                    <div class="text-white font-bold">Rapport sous 72h</div>
                                    <div class="text-slate-300 text-xs uppercase tracking-widest">Prélèvement simplifié</div>
                                </div>
                            </div>
                            <div class="text-white/70 text-sm leading-relaxed">Prélevez plumes, sang ou coquille, puis recevez un certificat imprimable dans votre espace sécurisé.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 bg-slate-950 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6 text-sm text-slate-300">
            <div class="flex items-center gap-3"><div class="w-3 h-3 bg-emerald-400 rounded-full"></div>Analyse ADN ISO & validation vétérinaire.</div>
            <div class="flex items-center gap-3"><div class="w-3 h-3 bg-emerald-400 rounded-full"></div>Détection pathogènes avancée.</div>
            <div class="flex items-center gap-3"><div class="w-3 h-3 bg-emerald-400 rounded-full"></div>Données sécurisées et rapports certifiés.</div>
        </div>
    </section>
    <section id="services" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-flex items-center gap-2 bg-emerald-100 text-emerald-700 px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-[0.2em] mb-4 border border-emerald-200">Nos services</span>
                <h2 class="font-outfit font-black text-4xl lg:text-5xl text-slate-900 tracking-tight">Le laboratoire moléculaire complet</h2>
                <p class="text-slate-500 text-lg mt-6 max-w-2xl mx-auto font-medium leading-relaxed">Sexage, génotypage et détection de pathogènes pour élevage amateur et pro, avec suivi complet jusqu’à la livraison.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-[2rem] overflow-hidden shadow-[0_30px_80px_-35px_rgba(15,23,42,0.18)] border border-slate-200 card-hover group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/service_sexage.png') }}" alt="Sexage ADN" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute bottom-6 left-6 text-white font-black text-xl uppercase tracking-tight">Sexage ADN</span>
                    </div>
                    <div class="p-8">
                        <p class="text-slate-600 text-sm leading-relaxed mb-5">Sexage fiable pour espèces monomorphes, sans stress, à partir de plumes, sang ou échantillon fécal.</p>
                        <div class="inline-flex items-center gap-2 text-emerald-600 font-bold text-xs uppercase tracking-widest"><span class="w-2 h-2 bg-emerald-400 rounded-full"></span>Résultats en 24-72h</div>
                    </div>
                </div>
                <div class="bg-white rounded-[2rem] overflow-hidden shadow-[0_30px_80px_-35px_rgba(15,23,42,0.18)] border border-slate-200 card-hover group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/service_pathogenes.png') }}" alt="Détection Pathogènes" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute bottom-6 left-6 text-white font-black text-xl uppercase tracking-tight">Pathogènes</span>
                    </div>
                    <div class="p-8">
                        <p class="text-slate-600 text-sm leading-relaxed mb-5">Dépistage moléculaire des virus, bactéries et parasites aviaires dans un laboratoire certifié.</p>
                        <div class="inline-flex items-center gap-2 text-emerald-600 font-bold text-xs uppercase tracking-widest"><span class="w-2 h-2 bg-emerald-400 rounded-full"></span>Contrôle sanitaire complet</div>
                    </div>
                </div>
                <div class="bg-white rounded-[2rem] overflow-hidden shadow-[0_30px_80px_-35px_rgba(15,23,42,0.18)] border border-slate-200 card-hover group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1552084117-56a987666449?q=80&w=800&auto=format&fit=crop" alt="Génotypage" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <span class="absolute bottom-6 left-6 text-white font-black text-xl uppercase tracking-tight">Génotypage</span>
                    </div>
                    <div class="p-8">
                        <p class="text-slate-600 text-sm leading-relaxed mb-5">Analyse de paternité, lignées et contrôle de consanguinité pour votre élevage.</p>
                        <div class="inline-flex items-center gap-2 text-emerald-600 font-bold text-xs uppercase tracking-widest"><span class="w-2 h-2 bg-emerald-400 rounded-full"></span>Rapport clair et exploitable</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="how" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-emerald-500 font-bold text-xs uppercase tracking-widest mb-3 inline-block">Processus simplifié</span>
                <h2 class="font-outfit font-black text-4xl lg:text-5xl text-slate-900">Votre analyse en 4 étapes</h2>
                <p class="text-slate-500 text-lg mt-4 max-w-2xl mx-auto font-medium leading-relaxed">De l'inscription au rapport certifié, chaque étape est pensée pour être simple, rapide et sûre.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-16 h-16 rounded-3xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-2xl font-black">1</div>
                        <div>
                            <h3 class="text-slate-900 font-black text-xl mb-2">Inscription & Bio-ID</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">Enregistrez vos oiseaux, générez un QR unique et suivez chaque prélèvement dans votre espace.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-16 h-16 rounded-3xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-2xl font-black">2</div>
                        <div>
                            <h3 class="text-slate-900 font-black text-xl mb-2">Collecte simplifiée</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">Prélevez plumes, sang ou coquille — pas besoin de transport stressant pour vos oiseaux.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-16 h-16 rounded-3xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-2xl font-black">3</div>
                        <div>
                            <h3 class="text-slate-900 font-black text-xl mb-2">PCR & IA</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">Amplification ADN et lecture intelligente des résultats pour une fiabilité maximale.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-16 h-16 rounded-3xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-2xl font-black">4</div>
                        <div>
                            <h3 class="text-slate-900 font-black text-xl mb-2">Certificat imprimable</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">Téléchargez votre rapport sécurisé ou recevez un document physique validé.</p>
                        </div>
                    </div>
                </div>
                <div class="max-w-xl w-full lg:w-[32rem] mx-auto lg:mx-0">
                    <div class="rounded-[2rem] border border-slate-200 bg-white shadow-[0_30px_80px_-40px_rgba(15,23,42,0.18)] overflow-hidden">
                        <div class="w-full aspect-square bg-slate-100">
                            <img src="{{ asset('images/photo_2026-06-14_14-21-55.jpg') }}" alt="Processus de laboratoire" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="species" class="py-24 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-flex items-center gap-2 bg-white/5 text-emerald-300 px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-[0.2em] mb-4 border border-emerald-400/20">Base génétique</span>
                <h2 class="font-outfit font-black text-4xl lg:text-5xl tracking-tight">Espèces supportées</h2>
                <p class="text-slate-400 text-lg mt-4 max-w-2xl mx-auto font-medium leading-relaxed">Couverture génétique sur +1200 espèces de Psittacidés, Galliformes et plus.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $families = [
                        ['code' => 'PS-01', 'name' => 'Psittacidés', 'desc' => 'Aras, Gris du Gabon, Cacatoès, Amazones', 'count' => '350+ espèces'],
                        ['code' => 'AG-02', 'name' => 'Agapornidés', 'desc' => 'Lovebirds, Personatus, Fischeri', 'count' => '9 espèces'],
                        ['code' => 'CL-03', 'name' => 'Columbidés', 'desc' => 'Pigeons et tourterelles', 'count' => '310+ espèces'],
                        ['code' => 'ES-04', 'name' => 'Estrildidés', 'desc' => 'Mandarins, Goulds, Moineaux', 'count' => '144+ espèces'],
                        ['code' => 'FA-05', 'name' => 'Falconidés', 'desc' => 'Faucons, buses et éperviers', 'count' => '62+ espèces'],
                        ['code' => 'GL-06', 'name' => 'Galliformes', 'desc' => 'Faisans, cailles, paons', 'count' => '295+ espèces'],
                    ];
                @endphp
                @foreach($families as $family)
                    <div class="group bg-slate-950/80 border border-white/10 rounded-[2rem] p-8 shadow-[0_20px_60px_-30px_rgba(0,0,0,0.5)] hover:border-emerald-400/40 transition">
                        <div class="flex items-center justify-between mb-5">
                            <div>
                                <span class="text-[10px] uppercase tracking-[0.3em] text-emerald-300 font-black">{{ $family['code'] }}</span>
                                <h3 class="text-white font-black text-2xl mt-3 uppercase tracking-tight">{{ $family['name'] }}</h3>
                            </div>
                            <span class="text-emerald-400 font-bold text-xs uppercase tracking-[0.25em]">{{ $family['count'] }}</span>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">{{ $family['desc'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="mt-20 text-center">
                <a href="{{ route('register') }}" class="inline-flex items-center gap-3 bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black uppercase tracking-[0.3em] text-sm py-4 px-12 rounded-3xl shadow-xl shadow-emerald-500/30 transition hover:-translate-y-1">Soumettre une espèce non référencée</a>
            </div>
        </div>
    </section>
    <section class="py-20 relative overflow-hidden" style="background: linear-gradient(90deg, #020617 0%, #09172d 40%, #0d1b3a 100%);">
        <div class="absolute inset-0 bg-slate-950/80"></div>
        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_rgba(34,211,238,0.35),_transparent_30%)]"></div>
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <h2 class="font-outfit font-black text-4xl lg:text-5xl mb-6 tracking-tight text-white">Rejoignez notre communauté</h2>
            <p class="text-white text-3xl lg:text-4xl font-semibold mb-10 leading-tight max-w-3xl mx-auto">
                Besoin d’une<br>
                analyse génétique<br>
                aviaire ?
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('register') }}" class="inline-flex items-center justify-center gap-3 bg-white text-slate-950 font-bold text-sm uppercase py-4 px-10 rounded-3xl shadow-xl shadow-white/20 transition hover:-translate-y-1 hover:bg-slate-100">Demander une analyse</a>
                <a href="#how" class="inline-flex items-center justify-center gap-3 border border-white/20 text-white font-bold text-sm uppercase py-4 px-10 rounded-3xl transition hover:-translate-y-1 hover:bg-white/10">Découvrir nos méthodes</a>
            </div>
        </div>
    </section>
    <footer class="bg-slate-950 text-slate-300 py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="md:col-span-2">
                    <img src="{{ asset('images/logo.png') }}" alt="GenDer Lab Logo" class="h-20 mb-4">
                    <p class="text-slate-400 text-sm leading-relaxed max-w-md">Plateforme de sexage ADN et de détection de pathogènes pour volailles et oiseaux de compagnie. Rapports certifiés, données sécurisées.</p>
                </div>
                <div>
                    <h4 class="font-black text-white mb-4 text-sm uppercase tracking-widest">Services</h4>
                    <ul class="space-y-3 text-slate-400 text-sm">
                        <li><a href="#services" class="hover:text-white transition">Sexage ADN</a></li>
                        <li><a href="#services" class="hover:text-white transition">Pathogènes</a></li>
                        <li><a href="#species" class="hover:text-white transition">Espèces couvertes</a></li>
                        <li><a href="#how" class="hover:text-white transition">Processus</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-black text-white mb-4 text-sm uppercase tracking-widest">Contact</h4>
                    <ul class="space-y-3 text-slate-400 text-sm">
                        <li class="flex items-center gap-2"><span class="text-emerald-400">•</span> contact@bioscan-ai.com</li>
                        <li class="flex items-center gap-2"><span class="text-emerald-400">•</span> +213 XX XX XX XX</li>
                        <li class="flex items-center gap-2"><span class="text-emerald-400">•</span> Support 24/7</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-slate-500">
                <p>© {{ date('Y') }} — Tous droits réservés.</p>
                <div class="flex flex-wrap gap-6">
                    <a href="#" class="hover:text-white transition">Mentions légales</a>
                    <a href="#" class="hover:text-white transition">Politique de confidentialité</a>
                    <a href="#" class="hover:text-white transition">CGU</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
