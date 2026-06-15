<x-app-layout>
    <x-slot name="header">
        <h2 class="font-outfit font-black text-3xl text-slate-900 leading-tight">
            Guide du Prélèvement <span class="text-bio-500">&</span> Assistance
        </h2>
        <p class="text-slate-500 text-sm mt-1">Tout ce qu'il faut savoir d'envoyer vos échantillons au laboratoire.</p>
    </x-slot>

    <div class="py-12 bg-slate-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                <div class="xl:col-span-2 space-y-8">
                    <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden relative">
                        <div class="absolute top-0 right-0 w-36 h-36 bg-bio-500/10 rounded-full blur-3xl"></div>
                        <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                            <div class="max-w-2xl">
                                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-bio-100 text-bio-700 text-xs font-black uppercase tracking-[0.35em] mb-4">Guide du Prélèvement</span>
                                <h3 class="text-3xl font-black font-outfit text-slate-900 mb-4">Préparez et envoyez vos échantillons en toute confiance</h3>
                                <p class="text-slate-500 text-base leading-relaxed">Suivez les meilleures pratiques de prélèvement, emballez votre matériel correctement et bénéficiez de l'assistance IA dédiée pour une analyse rapide et fiable.</p>
                            </div>
                            <div class="rounded-[2rem] border border-slate-200 bg-slate-100 p-6 shadow-sm max-w-sm">
                                <p class="text-sm uppercase tracking-[0.3em] text-slate-500 font-bold mb-4">Étape rapide</p>
                                <ul class="space-y-3 text-slate-600 text-sm">
                                    <li>Choix d'échantillon</li>
                                    <li>Emballage sécurisé</li>
                                    <li>Étiquette QR</li>
                                    <li>Envoi suivi</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100">
                        <h3 class="text-2xl font-bold font-outfit text-slate-900 mb-6">Protocole de prélèvement certifié</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div class="w-11 h-11 rounded-2xl bg-bio-100 text-bio-700 flex items-center justify-center font-black">1</div>
                                    <div>
                                        <h4 class="font-semibold text-slate-900">Préparez l'échantillon</h4>
                                        <p class="text-slate-500 text-sm">Sélectionnez 3 à 5 plumes propres, fraîches et intactes. Pas de plumes tombées au sol.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-11 h-11 rounded-2xl bg-bio-100 text-bio-700 flex items-center justify-center font-black">2</div>
                                    <div>
                                        <h4 class="font-semibold text-slate-900">Séchez et protégez</h4>
                                        <p class="text-slate-500 text-sm">Mettez l'échantillon dans un sachet zip propre et sec. Ajoutez un calage pour éviter les chocs.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-11 h-11 rounded-2xl bg-bio-100 text-bio-700 flex items-center justify-center font-black">3</div>
                                    <div>
                                        <h4 class="font-semibold text-slate-900">Identifiez le prélèvement</h4>
                                        <p class="text-slate-500 text-sm">Collez le QR code fourni sur le sachet. Vérifiez qu'il reste lisible et intact.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="relative rounded-[2rem] overflow-hidden border border-slate-100 shadow-lg">
                                <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=900&q=80" alt="Échantillon" class="w-full h-full object-cover min-h-[320px]">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                                <div class="absolute bottom-6 left-6 text-white">
                                    <h4 class="text-lg font-bold">Protégez votre échantillon</h4>
                                    <p class="text-sm text-white/80">Utilisez des sacs propres et un colis rigide.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100">
                        <h3 class="text-2xl font-bold font-outfit text-slate-900 mb-6">Expédition & réception</h3>
                        <div class="space-y-5 text-slate-600 text-sm leading-relaxed">
                            <p>Choisissez un transporteur recommandé et conservez votre numéro de suivi. Le laboratoire reçoit et enregistre votre colis sous 24h pour lancer l'analyse rapidement.</p>
                            <p>Ajoutez une notice interne avec le nom de l'espèce et le numéro de prélèvement. Assurez-vous que le colis est étiqueté comme matériel biologique non dangereux.</p>
                        </div>
                        <div class="mt-8 grid gap-4 sm:grid-cols-2">
                            <div class="rounded-3xl bg-slate-50 p-5 border border-slate-100">
                                <p class="text-sm font-semibold text-slate-900 mb-2">À faire</p>
                                <ul class="space-y-2 text-slate-500 text-sm">
                                    <li>Conserver au sec</li>
                                    <li>Suivre la fiche de prélèvement</li>
                                    <li>Vérifier le QR code</li>
                                </ul>
                            </div>
                            <div class="rounded-3xl bg-slate-50 p-5 border border-slate-100">
                                <p class="text-sm font-semibold text-slate-900 mb-2">À éviter</p>
                                <ul class="space-y-2 text-slate-500 text-sm">
                                    <li>Chaleur excessive</li>
                                    <li>Sachet humide</li>
                                    <li>QR code plié</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-8" x-data="{
                        draft: '',
                        messages: [
                            { id: 1, role: 'assistant', text: 'Bonjour ! Posez-moi vos questions de prélèvement, et je vous guide pas à pas.' },
                            { id: 2, role: 'user', text: 'Est-ce que je peux ajouter plusieurs espèces dans le même colis ?' },
                            { id: 3, role: 'assistant', text: 'Non, chaque espèce doit être envoyée dans un colis séparé avec son propre QR code pour éviter toute confusion d’analyse.' }
                        ],
                        send() {
                            if (!this.draft.trim()) return;
                            this.messages.push({ id: Date.now(), role: 'user', text: this.draft });
                            const question = this.draft;
                            this.draft = '';
                            const answer = this.createAnswer(question);
                            setTimeout(() => {
                                this.messages.push({ id: Date.now() + 1, role: 'assistant', text: answer });
                                this.$nextTick(() => {
                                    this.$refs.messages.scrollTop = this.$refs.messages.scrollHeight;
                                });
                            }, 350);
                        },
                        createAnswer(question) {
                            const normalized = question.toLowerCase();
                            if (normalized.includes('plume') || normalized.includes('espèce')) {
                                return 'Pour chaque espèce, envoyez un colis séparé avec un QR code distinct pour garantir la traçabilité.';
                            }
                            if (normalized.includes('qrcode') || normalized.includes('qr')) {
                                return 'Assurez-vous que le QR code reste propre et bien collé au sachet avant l’envoi.';
                            }
                            if (normalized.includes('délai') || normalized.includes('jours')) {
                                return 'Envoyez le prélèvement sous 48 heures et conservez le colis à l’abri de l’humidité et de la chaleur.';
                            }
                            return 'Je vous recommande de suivre le protocole : échantillon propre, sachet sec, QR code lisible et envoi suivi.';
                        }
                    }">
                    <div class="bg-indigo-950 rounded-[2.5rem] shadow-2xl p-6 text-white overflow-hidden relative group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-bio-400/10 rounded-full blur-2xl group-hover:bg-bio-400/20 transition duration-500"></div>
                        <div class="relative z-10 flex flex-col h-[520px]">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-11 h-11 bg-gradient-to-br from-bio-400 to-indigo-500 rounded-full flex items-center justify-center shadow-lg animate-pulse">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-black font-outfit text-lg">Assistant de laboratoire</h3>
                                    <p class="text-[10px] text-bio-400 font-bold uppercase tracking-widest">En ligne • IA Biologiste</p>
                                </div>
                            </div>
                            <div x-ref="messages" x-init="$watch('messages', () => { $nextTick(() => { $refs.messages.scrollTop = $refs.messages.scrollHeight; }); })" class="flex-1 overflow-y-auto space-y-4 mb-6 pr-2 custom-scrollbar">
                                <template x-for="message in messages" :key="message.id">
                                    <div :class="message.role === 'user' ? 'bg-bio-500/20 p-4 rounded-2xl text-sm text-bio-100 border border-bio-500/20 self-end ml-8' : 'bg-white/10 p-4 rounded-2xl text-sm text-white/80 border border-white/5'" x-text="message.text"></div>
                                </template>
                            </div>
                            <div class="mt-auto">
                                <div class="relative">
                                    <input x-model="draft" @keydown.enter.prevent="send()" type="text" placeholder="Posez votre question..." class="w-full bg-white/5 border border-white/10 rounded-2xl py-4 pl-5 pr-12 text-sm text-white focus:outline-none focus:border-bio-400 focus:ring-1 focus:ring-bio-400 transition placeholder:text-white/20">
                                    <button @click="send()" type="button" class="absolute right-3 top-3 w-8 h-8 bg-bio-500 rounded-xl flex items-center justify-center text-white hover:bg-bio-400 transition">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-xl p-8">
                        <h4 class="text-xl font-bold text-slate-900 mb-5">Support express</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Besoin d'aide pour votre prélèvement ou votre expédition ? Notre équipe est disponible pour vérifier vos photos et vous confirmer la conformité avant envoi.</p>
                        <div class="space-y-4 text-sm text-slate-600">
                            <div class="flex gap-3 items-start">
                                <span class="mt-1 w-2 h-2 rounded-full bg-bio-500"></span>
                                <p>Support par chat disponible 7j/7.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <span class="mt-1 w-2 h-2 rounded-full bg-bio-500"></span>
                                <p>Réponse en moins de 2 heures pour les prélèvements urgents.</p>
                            </div>
                            <div class="flex gap-3 items-start">
                                <span class="mt-1 w-2 h-2 rounded-full bg-bio-500"></span>
                                <p>Accès direct à vos instructions depuis votre dashboard.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }
    </style>
</x-app-layout>
