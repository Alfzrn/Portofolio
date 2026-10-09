@php
    // PLACEHOLDER DATA — ganti nanti dengan data dari database / controller.
    $profile = [
        'name'     => 'Your Full Name',
        'short'    => 'YN',
        'headline' => 'Building digital experiences through code.',
        'intro'    => 'I design and build reliable web and mobile software, with a focus on clean architecture and thoughtful interfaces.',
        'email'    => 'you@example.com',
        'whatsapp' => '+62 000 0000 0000',
        'wa_link'  => 'https://wa.me/620000000000',
        'location' => 'City, Country',
    ];

    $roles = ['Full Stack Developer', 'Android Developer', 'Software Engineer'];

    $about = [
        ['label' => 'Professional focus', 'text' => 'Full stack development across backend services, web interfaces and Android applications.'],
        ['label' => 'Interests',          'text' => 'Clean architecture, developer tooling, performance and interfaces that feel considered.'],
        ['label' => 'Approach',           'text' => 'Start simple, keep code readable, test what matters and ship in small, steady steps.'],
    ];

    $skills = [
        ['name' => 'PHP',        'mono' => 'PH', 'category' => 'Backend',  'level' => 85, 'desc' => 'Server-side logic and modern PHP practices.'],
        ['name' => 'Laravel',    'mono' => 'LV', 'category' => 'Backend',  'level' => 85, 'desc' => 'Full-featured applications, APIs and admin tools.'],
        ['name' => 'Java',       'mono' => 'JV', 'category' => 'Mobile',   'level' => 75, 'desc' => 'Object-oriented design and Android development.'],
        ['name' => 'MySQL',      'mono' => 'SQ', 'category' => 'Database', 'level' => 80, 'desc' => 'Schema design, indexing and query optimisation.'],
        ['name' => 'Git',        'mono' => 'GT', 'category' => 'Tooling',  'level' => 80, 'desc' => 'Branching workflows and collaborative version control.'],
        ['name' => 'HTML',       'mono' => 'HT', 'category' => 'Frontend', 'level' => 90, 'desc' => 'Semantic, accessible markup.'],
        ['name' => 'CSS',        'mono' => 'CS', 'category' => 'Frontend', 'level' => 85, 'desc' => 'Responsive layouts and refined interface styling.'],
        ['name' => 'JavaScript', 'mono' => 'JS', 'category' => 'Frontend', 'level' => 80, 'desc' => 'Interactive interfaces with native browser APIs.'],
    ];

    $categories = collect($skills)->pluck('category')->unique()->values();

    $info = [
        ['label' => 'Full name', 'value' => $profile['name'],     'href' => null,                                   'icon' => 'user'],
        ['label' => 'Email',     'value' => $profile['email'],    'href' => 'mailto:' . $profile['email'],          'icon' => 'mail'],
        ['label' => 'WhatsApp',  'value' => $profile['whatsapp'], 'href' => $profile['wa_link'],                    'icon' => 'chat'],
        ['label' => 'Location',  'value' => $profile['location'], 'href' => null,                                   'icon' => 'pin'],
        ['label' => 'Instagram', 'value' => '@username',          'href' => 'https://instagram.com/username',       'icon' => 'instagram'],
        ['label' => 'GitHub',    'value' => 'username',           'href' => 'https://github.com/username',          'icon' => 'github'],
    ];

    $socials = [
        ['label' => 'Instagram', 'href' => 'https://instagram.com/username', 'icon' => 'instagram'],
        ['label' => 'GitHub',    'href' => 'https://github.com/username',    'icon' => 'github'],
    ];

    $skillSpeeds = [0, 0.08, -0.03, 0.1];

    $icons = [
        'user'      => '<circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/>',
        'mail'      => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>',
        'chat'      => '<path d="M21 12a8 8 0 0 1-11.7 7L4 20l1.1-4.6A8 8 0 1 1 21 12Z"/>',
        'pin'       => '<path d="M12 21s7-6.2 7-11a7 7 0 0 0-14 0c0 4.8 7 11 7 11Z"/><circle cx="12" cy="10" r="2.5"/>',
        'instagram' => '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r=".6" fill="currentColor"/>',
        'github'    => '<path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2 4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12 12 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21"/>',
        'arrow'     => '<path d="M5 12h14m-6-6 6 6-6 6"/>',
    ];
@endphp
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $profile['name'] }} — Full Stack Developer</title>
    <meta name="description" content="{{ $profile['intro'] }}">
    <meta property="og:title" content="{{ $profile['name'] }}">
    <meta property="og:description" content="{{ $profile['intro'] }}">
    <meta name="twitter:card" content="summary">

    {{-- Set theme + intro gate before first paint (no flash) --}}
    <script>
        (function () {
            var d = document.documentElement, t = 'dark', seen = false;
            try { t = localStorage.getItem('theme') || 'dark'; } catch (e) {}
            try { seen = sessionStorage.getItem('gateDone') === '1'; } catch (e) {}
            d.classList.toggle('dark', t === 'dark');
            d.classList.add('js');
            if (!seen) { d.classList.add('gate'); }
        })();
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    {{-- Kalau project sudah pakai Tailwind via Vite, hapus 2 baris script CDN ini dan pindahkan config warna ke tailwind.config / @theme --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: { extend: {
                fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'], mono: ['JetBrains Mono', 'monospace'] },
                colors: { bg: 'var(--bg)', fg: 'var(--fg)', muted: 'var(--muted)', line: 'var(--line)', card: 'var(--card)', accent: 'var(--accent)' }
            } }
        };
    </script>

    <style>
        :root {
            --bg: #f6f5f1; --fg: #15151a; --muted: #5d5e68; --line: rgba(21,21,26,.12);
            --card: #ffffff; --accent: #4f46e5; --accent-soft: rgba(79,70,229,.10);
            --glow: rgba(79,70,229,.14); --shadow: 0 1px 2px rgba(20,20,30,.04), 0 12px 32px -12px rgba(20,20,30,.12);
            --word: rgba(21,21,26,.10);
        }
        html.dark {
            --bg: #09090b; --fg: #f3f3f1; --muted: #8d8d97; --line: rgba(255,255,255,.09);
            --card: #101014; --accent: #9b9cff; --accent-soft: rgba(155,156,255,.10);
            --glow: rgba(139,140,248,.18); --shadow: 0 1px 0 rgba(255,255,255,.03) inset, 0 20px 40px -20px rgba(0,0,0,.7);
            --word: rgba(255,255,255,.09);
        }
        html { scroll-padding-top: 5rem; color-scheme: light; }
        html.dark { color-scheme: dark; }
        html.gate, html.gate body { overflow: hidden; }
        body { background: var(--bg); color: var(--fg); -webkit-font-smoothing: antialiased; overflow-x: hidden; }
        @keyframes floaty { 0%, 100% { transform: translateY(-6px); } 50% { transform: translateY(6px); } }
        @keyframes breathe { 0%, 100% { opacity: .55; transform: scale(.97); } 50% { opacity: 1; transform: scale(1.02); } }
        html.theme-anim *, html.theme-anim *::before, html.theme-anim *::after {
            transition: background-color .35s ease, color .35s ease, border-color .35s ease, box-shadow .35s ease !important;
        }
        :focus-visible { outline: 2px solid var(--accent); outline-offset: 3px; border-radius: 6px; }
        ::selection { background: var(--accent); color: var(--bg); }

        /* Intro gate */
        #gate { display: none; transition: opacity .7s ease, transform .9s cubic-bezier(.2,.7,.2,1); }
        html.gate #gate { display: block; }
        #gate.leaving { opacity: 0; transform: scale(1.06); pointer-events: none; }
        .breathe { animation: breathe 4.5s ease-in-out infinite; }

        #header { transition: transform .35s ease, background-color .3s ease, border-color .3s ease; }

        .reveal { opacity: 1; }
        html.js .reveal { opacity: 0; transform: translateY(18px); transition: opacity .7s cubic-bezier(.2,.7,.2,1), transform .7s cubic-bezier(.2,.7,.2,1); transition-delay: var(--d, 0ms); }
        html.js .reveal.in { opacity: 1; transform: none; }

        .px { will-change: transform; }
        .floaty { animation: floaty 7s ease-in-out infinite; }

        .outline-word {
            font-weight: 700; line-height: .85; letter-spacing: -.04em; white-space: nowrap; user-select: none;
            color: transparent; -webkit-text-stroke: 1px var(--word);
        }
        .fill-word { color: var(--fg); opacity: .9; }

        .field-mask {
            -webkit-mask-image: radial-gradient(ellipse 75% 60% at 50% 45%, #000 35%, transparent 80%);
            mask-image: radial-gradient(ellipse 75% 60% at 50% 45%, #000 35%, transparent 80%);
        }
        .orb { border-radius: 9999px; background: radial-gradient(circle at 35% 30%, var(--glow), transparent 68%); }

        .ch { display: inline-block; transition: transform .45s cubic-bezier(.2,.7,.2,1); will-change: transform; }
        .sw { opacity: .2; transition: opacity .25s ease; }

        .roles { display: grid; }
        .roles > span { grid-area: 1 / 1; opacity: 0; transform: translateY(12px); transition: opacity .5s ease, transform .5s ease; }
        .roles > span.on { opacity: 1; transform: none; }

        .panel { background: var(--card); border: 1px solid var(--line); box-shadow: var(--shadow); }
        .glow-card { position: relative; overflow: hidden; transition: transform .35s cubic-bezier(.2,.7,.2,1), border-color .3s ease; }
        .glow-card::before {
            content: ""; position: absolute; inset: 0; pointer-events: none; opacity: 0; transition: opacity .3s ease;
            background: radial-gradient(320px circle at var(--mx, 50%) var(--my, 50%), var(--glow), transparent 70%);
        }
        .glow-card:hover, .glow-card:focus-within { transform: translateY(-4px); border-color: var(--accent); }
        .glow-card:hover::before, .glow-card:focus-within::before { opacity: 1; }
        .glow-card .ico { transition: transform .35s cubic-bezier(.2,.7,.2,1); }
        .glow-card:hover .ico { transform: scale(1.1) rotate(-6deg); }
        .glow-card[data-tilt] { perspective: 900px; }
        .tilt-inner { transition: transform .25s ease-out; will-change: transform; }

        .skill-dim, html.js .reveal.in.skill-dim { opacity: .15; filter: grayscale(1); pointer-events: none; }

        .chip { border: 1px solid var(--line); border-radius: 9999px; padding: .5rem 1rem; font-family: 'JetBrains Mono', monospace; font-size: .75rem; color: var(--muted); transition: color .2s ease, border-color .2s ease, background-color .2s ease, transform .2s ease; }
        .chip:hover { color: var(--fg); border-color: var(--accent); transform: translateY(-1px); }
        .chip.is-active { background: var(--fg); color: var(--bg); border-color: var(--fg); }

        .bar { transform: scaleX(0); transform-origin: left; transition: transform 1.1s cubic-bezier(.2,.7,.2,1) .15s; }
        .in .bar { transform: scaleX(var(--v)); }

        .btn { display: inline-flex; align-items: center; gap: .5rem; padding: .8rem 1.4rem; border-radius: .6rem; font-weight: 500; font-size: .95rem; transition: transform .25s ease, background-color .25s ease, border-color .25s ease; }
        .btn:hover { transform: translateY(-2px); }
        .btn:active { transform: translateY(0); }
        .btn-primary { background: var(--fg); color: var(--bg); }
        .btn-ghost { border: 1px solid var(--line); color: var(--fg); }
        .btn-ghost:hover { border-color: var(--accent); }
        .btn .arr { transition: transform .25s ease; }
        .btn:hover .arr { transform: translateX(3px); }

        .nav-link { position: relative; color: var(--muted); transition: color .2s ease; }
        .nav-link:hover, .nav-link.active { color: var(--fg); }
        .nav-link::after { content: ""; position: absolute; left: 0; right: 0; bottom: -6px; height: 1px; background: var(--accent); transform: scaleX(0); transform-origin: left; transition: transform .3s ease; }
        .nav-link:hover::after, .nav-link.active::after { transform: scaleX(1); }

        .field { width: 100%; background: transparent; border: 1px solid var(--line); border-radius: .6rem; padding: .85rem 1rem; color: var(--fg); transition: border-color .2s ease, box-shadow .2s ease; }
        .field::placeholder { color: var(--muted); opacity: .7; }
        .field:focus { outline: none; border-color: var(--accent); box-shadow: 0 0 0 3px var(--accent-soft); }
        .field[aria-invalid="true"] { border-color: #e5484d; }

        .theme-toggle .sun, .theme-toggle .moon { transition: transform .5s cubic-bezier(.2,.7,.2,1), opacity .3s ease; }
        .theme-toggle .sun { opacity: 0; transform: rotate(-90deg) scale(.5); }
        html:not(.dark) .theme-toggle .sun { opacity: 1; transform: none; }
        html:not(.dark) .theme-toggle .moon { opacity: 0; transform: rotate(90deg) scale(.5); }

        #menu { max-height: 0; opacity: 0; overflow: hidden; transition: max-height .4s ease, opacity .3s ease; }
        #menu.open { max-height: 24rem; opacity: 1; }

        #progress { transform: scaleX(0); transform-origin: left; }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto !important; }
            *, *::before, *::after { animation-duration: .01ms !important; animation-iteration-count: 1 !important; transition-duration: .01ms !important; transition-delay: 0ms !important; }
            html.js .reveal { opacity: 1; transform: none; }
            .bar { transform: scaleX(var(--v)); }
            .floaty, .breathe { animation: none; }
            .sw { opacity: 1; }
        }
    </style>
</head>
<body class="font-sans antialiased">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[200] focus:rounded-md focus:bg-fg focus:px-4 focus:py-2 focus:text-bg">Skip to content</a>

    {{-- INTRO GATE: draw a circle with the pointer to enter --}}
    <div id="gate" class="fixed inset-0 z-[90] bg-bg" role="dialog" aria-modal="true" aria-labelledby="gate-title">
        <canvas id="gate-canvas" class="absolute inset-0 h-full w-full touch-none" style="cursor: crosshair"></canvas>

        <div class="pointer-events-none absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" aria-hidden="true">
            <div class="breathe">
                <svg class="block" style="width:min(72vmin,520px);height:min(72vmin,520px)" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="48" fill="none" stroke="var(--word)" stroke-width=".5" stroke-dasharray="1.2 2.4" />
                </svg>
            </div>
        </div>

        <div class="pointer-events-none absolute inset-0 flex flex-col items-center justify-center px-6 text-center">
            <p class="font-mono text-xs uppercase tracking-[.25em] text-accent">{{ $profile['name'] }}</p>
            <h2 id="gate-title" class="mt-5 max-w-md text-[clamp(1.75rem,4.5vw,3rem)] font-semibold leading-tight tracking-tight">Draw a circle to enter.</h2>
            <p class="mt-4 max-w-xs text-sm text-muted sm:text-base">Press and hold, then draw a full circle anywhere on the screen.</p>
            <p id="gate-pct" class="mt-8 h-5 font-mono text-sm text-muted" role="status" aria-live="polite">0%</p>
        </div>

        <button type="button" id="gate-skip" class="absolute bottom-8 left-1/2 -translate-x-1/2 rounded-full border border-line px-5 py-2.5 text-sm text-muted transition-colors hover:border-accent hover:text-fg">
            Skip intro
        </button>
    </div>

    <div id="progress" class="fixed inset-x-0 top-0 z-[60] h-0.5 bg-accent" aria-hidden="true"></div>

    {{-- NAVIGATION --}}
    <header id="header" class="fixed inset-x-0 top-0 z-50 border-b border-transparent">
        <nav class="mx-auto flex h-16 max-w-6xl items-center justify-between px-5 sm:px-8" aria-label="Main">
            <a href="#home" class="flex items-center gap-2.5 font-semibold tracking-tight">
                <span class="grid h-8 w-8 place-items-center rounded-lg border border-line bg-card font-mono text-xs text-accent">{{ $profile['short'] }}</span>
                <span class="hidden sm:inline">{{ $profile['name'] }}</span>
            </a>

            <div class="hidden items-center gap-8 text-sm md:flex">
                <a href="#about" class="nav-link">About</a>
                <a href="#skills" class="nav-link">Skills</a>
                <a href="#info" class="nav-link">Personal Information</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>

            <div class="flex items-center gap-2">
                <button type="button" id="theme-toggle" class="theme-toggle relative grid h-10 w-10 place-items-center rounded-full border border-line text-fg transition-colors hover:border-accent" aria-label="Switch to light theme">
                    <svg class="moon absolute h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8Z"/></svg>
                    <svg class="sun absolute h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.9 4.9l1.4 1.4m11.4 11.4 1.4 1.4M2 12h2m16 0h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
                </button>
                <button type="button" id="menu-btn" class="grid h-10 w-10 place-items-center rounded-full border border-line md:hidden" aria-label="Open menu" aria-expanded="false" aria-controls="menu">
                    <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 8h16M4 16h16"/></svg>
                </button>
            </div>
        </nav>
        <div id="menu" class="border-b border-line bg-bg/95 backdrop-blur md:hidden">
            <div class="flex flex-col gap-1 px-5 py-4 text-base">
                <a href="#about" class="rounded-lg px-3 py-3 hover:bg-card">About</a>
                <a href="#skills" class="rounded-lg px-3 py-3 hover:bg-card">Skills</a>
                <a href="#info" class="rounded-lg px-3 py-3 hover:bg-card">Personal Information</a>
                <a href="#contact" class="rounded-lg px-3 py-3 hover:bg-card">Contact</a>
            </div>
        </div>
    </header>

    <main id="main">
        {{-- HERO --}}
        <section id="home" class="relative flex min-h-[100svh] items-center overflow-hidden pt-16">
            <div class="pointer-events-none absolute inset-0" aria-hidden="true">
                {{-- Interactive line field: marks turn toward the pointer --}}
                <div class="field-mask px absolute -inset-y-24 inset-x-0" data-speed="0.12"><canvas id="field" class="h-full w-full"></canvas></div>

                <div class="orb px absolute -right-24 top-[8%] h-[26rem] w-[26rem]" data-speed="0.35" data-depth="34"></div>
                <div class="orb px absolute -left-32 bottom-[2%] h-[22rem] w-[22rem]" data-speed="0.28" data-depth="-26"></div>
                <div class="px absolute bottom-[16%] left-[7%] hidden h-36 w-36 rounded-full border border-line sm:block" data-speed="0.22" data-depth="-18" data-rot="40"></div>
                <div class="px absolute right-[30%] top-[16%] hidden h-14 w-14 rotate-12 rounded-lg border border-line md:block" data-speed="-0.12" data-depth="22" data-rot="-60"></div>

                <div class="px absolute left-[14%] top-[24%] hidden sm:block" data-speed="0.3" data-depth="26" data-rot="30"><span class="floaty block font-mono text-2xl text-muted/60">&lt;/&gt;</span></div>
                <div class="px absolute bottom-[22%] right-[26%] hidden sm:block" data-speed="-0.1" data-depth="-30" data-rot="-24"><span class="floaty block font-mono text-3xl text-muted/60" style="animation-delay:-2s">{ }</span></div>
                <div class="px absolute bottom-[12%] left-[46%] hidden md:block" data-speed="0.2" data-depth="18"><span class="floaty block font-mono text-xl text-muted/60" style="animation-delay:-4s">=&gt;</span></div>

                <div class="absolute right-[4%] top-[30%] hidden h-56 w-72 xl:block">
                    <div class="px panel absolute inset-0 rounded-2xl opacity-40" data-speed="0.2" data-depth="46"></div>
                    <div class="px panel absolute inset-0 rounded-2xl opacity-70" data-speed="0.1" data-depth="30" style="margin:14px -14px -14px 14px"></div>
                    <div class="px absolute inset-0" data-speed="-0.06" data-depth="-18">
                        <div class="floaty panel h-full rounded-2xl p-5 font-mono text-[12px] leading-6 text-muted">
                            <div class="mb-3 flex gap-1.5"><i class="h-2 w-2 rounded-full bg-line"></i><i class="h-2 w-2 rounded-full bg-line"></i><i class="h-2 w-2 rounded-full bg-accent"></i></div>
                            <p><span class="text-accent">const</span> developer = {</p>
                            <p class="pl-4">stack: ["Laravel", "Java", "MySQL"],</p>
                            <p class="pl-4">approach: "simple &amp; readable",</p>
                            <p class="pl-4">focus: "quality",</p>
                            <p>};</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="hero-content" class="relative z-10 mx-auto w-full max-w-6xl px-5 py-24 sm:px-8">
                <p class="reveal mb-6 inline-flex items-center gap-2 rounded-full border border-line bg-card px-3.5 py-1.5 font-mono text-xs text-muted">
                    <span class="h-1.5 w-1.5 rounded-full bg-accent"></span> {{ $profile['name'] }}
                </p>

                <h1 id="hero-title" class="reveal max-w-3xl text-[clamp(2.5rem,7vw,5.5rem)] font-semibold leading-[1.02] tracking-tight" style="--d:80ms">{{ $profile['headline'] }}</h1>

                <div class="reveal mt-6 text-xl text-muted sm:text-2xl" style="--d:160ms">
                    <span class="sr-only">{{ implode(', ', $roles) }}</span>
                    <span class="roles font-medium text-fg" id="roles" aria-hidden="true">
                        @foreach ($roles as $i => $role)
                            <span class="{{ $i === 0 ? 'on' : '' }}">{{ $role }}</span>
                        @endforeach
                    </span>
                </div>

                <p class="reveal mt-6 max-w-xl text-base leading-relaxed text-muted sm:text-lg" style="--d:240ms">{{ $profile['intro'] }}</p>

                <div class="reveal mt-10 flex flex-wrap gap-3" style="--d:320ms">
                    <a href="#contact" class="btn btn-primary">Get in touch
                        <svg class="arr h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icons['arrow'] !!}</svg>
                    </a>
                    <a href="#skills" class="btn btn-ghost">View skills</a>
                </div>
            </div>

            <a href="#marquee" class="absolute bottom-8 left-1/2 z-10 hidden -translate-x-1/2 text-muted transition-colors hover:text-fg sm:block" aria-label="Scroll down">
                <svg class="h-5 w-5 animate-bounce" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
            </a>
        </section>

        {{-- SCROLL MARQUEE --}}
        <div id="marquee" class="overflow-hidden border-y border-line py-8 sm:py-12" aria-hidden="true">
            <div class="px flex w-max items-center gap-10 text-5xl sm:text-7xl lg:text-8xl" style="margin-left:-20vw" data-x="0.28">
                @for ($r = 0; $r < 2; $r++)
                    @foreach ($skills as $i => $s)
                        <span class="{{ $i % 2 ? 'fill-word font-semibold tracking-tight' : 'outline-word' }}">{{ $s['name'] }}</span>
                        <span class="text-accent">/</span>
                    @endforeach
                @endfor
            </div>
            <div class="px mt-4 flex w-max items-center gap-10 text-4xl sm:mt-6 sm:text-6xl lg:text-7xl" style="margin-left:-60vw" data-x="-0.28">
                @for ($r = 0; $r < 4; $r++)
                    @foreach ($roles as $i => $role)
                        <span class="{{ $i % 2 ? 'outline-word' : 'fill-word font-semibold tracking-tight' }}">{{ $role }}</span>
                        <span class="text-accent">/</span>
                    @endforeach
                @endfor
            </div>
        </div>

        {{-- ABOUT --}}
        <section id="about" class="relative overflow-hidden">
            <div class="pointer-events-none absolute inset-0" aria-hidden="true">
                <div class="outline-word px absolute -left-6 top-10 text-[clamp(6rem,22vw,20rem)]" data-speed="0.22" data-x="-0.12">ABOUT</div>
                <div class="orb px absolute -right-32 top-1/3 h-[26rem] w-[26rem]" data-speed="0.3"></div>
            </div>
            <div class="relative mx-auto max-w-6xl px-5 py-24 sm:px-8 sm:py-32">
                <div class="grid gap-12 lg:grid-cols-12">
                    <div class="lg:col-span-5">
                        <p class="reveal font-mono text-xs uppercase tracking-[.2em] text-accent">About</p>
                        <h2 class="reveal mt-4 text-3xl font-semibold leading-tight tracking-tight sm:text-4xl" style="--d:60ms">Software built with care, from the database to the interface.</h2>
                    </div>
                    <div class="lg:col-span-7">
                        <p id="about-text" class="reveal text-xl leading-relaxed sm:text-2xl" style="--d:100ms">I work across the stack, turning ideas into dependable products. I care about readable code, sensible structure and details that make software pleasant to use. This text is a placeholder — replace it with your own story.</p>
                        <dl class="mt-10 divide-y divide-line border-y border-line">
                            @foreach ($about as $i => $a)
                                <div class="reveal grid gap-1 py-5 sm:grid-cols-[180px_1fr] sm:gap-6" style="--d:{{ 140 + $i * 80 }}ms">
                                    <dt class="text-sm font-medium">{{ $a['label'] }}</dt>
                                    <dd class="text-muted">{{ $a['text'] }}</dd>
                                </div>
                            @endforeach
                        </dl>
                    </div>
                </div>
            </div>
        </section>

        {{-- SKILLS --}}
        <section id="skills" class="relative overflow-hidden border-y border-line bg-card/40">
            <div class="pointer-events-none absolute inset-0" aria-hidden="true">
                <div class="outline-word px absolute -right-6 top-6 text-[clamp(6rem,22vw,20rem)]" data-speed="0.2" data-x="0.12">SKILLS</div>
                <div class="orb px absolute -left-40 bottom-0 h-[28rem] w-[28rem]" data-speed="0.3"></div>
                <div class="px absolute left-[8%] top-[18%] hidden h-24 w-24 rounded-full border border-line md:block" data-speed="0.25" data-rot="50"></div>
            </div>
            <div class="relative mx-auto max-w-6xl px-5 py-24 sm:px-8 sm:py-32">
                <p class="reveal font-mono text-xs uppercase tracking-[.2em] text-accent">Skills</p>
                <h2 class="reveal mt-4 max-w-2xl text-3xl font-semibold leading-tight tracking-tight sm:text-4xl" style="--d:60ms">Tools I use to build and ship.</h2>

                @if ($categories->count() > 1)
                    <div id="skill-filters" class="reveal mt-8 flex flex-wrap gap-2" role="group" aria-label="Filter skills by category" style="--d:100ms">
                        <button type="button" class="chip is-active" data-filter="all" aria-pressed="true">All</button>
                        @foreach ($categories as $c)
                            <button type="button" class="chip" data-filter="{{ $c }}" aria-pressed="false">{{ $c }}</button>
                        @endforeach
                    </div>
                @endif

                <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    @forelse ($skills as $i => $s)
                        <div class="px" data-speed="{{ $skillSpeeds[$i % 4] }}" data-min="1024">
                            <article class="glow-card reveal panel h-full rounded-2xl p-6" style="--d:{{ ($i % 4) * 80 }}ms" data-glow data-tilt data-cat="{{ $s['category'] }}" tabindex="0">
                                <div class="tilt-inner relative">
                                    <div class="flex items-center justify-between">
                                        <span class="ico grid h-11 w-11 place-items-center rounded-xl border border-line bg-bg font-mono text-sm font-medium text-accent">{{ $s['mono'] }}</span>
                                        <span class="font-mono text-[11px] uppercase tracking-wider text-muted">{{ $s['category'] }}</span>
                                    </div>
                                    <h3 class="mt-6 text-lg font-semibold">{{ $s['name'] }}</h3>
                                    <p class="mt-1.5 min-h-[3rem] text-sm leading-relaxed text-muted">{{ $s['desc'] }}</p>
                                    <div class="mt-5">
                                        <div class="mb-2 flex justify-between font-mono text-[11px] text-muted">
                                            <span>Proficiency</span><span>{{ $s['level'] }}%</span>
                                        </div>
                                        <div class="h-1 overflow-hidden rounded-full bg-line" role="progressbar" aria-valuenow="{{ $s['level'] }}" aria-valuemin="0" aria-valuemax="100" aria-label="{{ $s['name'] }} proficiency">
                                            <div class="bar h-full rounded-full bg-accent" style="--v: {{ $s['level'] / 100 }}"></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @empty
                        <p class="col-span-full rounded-2xl border border-dashed border-line p-10 text-center text-muted">Skills will appear here soon.</p>
                    @endforelse
                </div>
            </div>
        </section>

        {{-- PERSONAL INFORMATION --}}
        <section id="info" class="relative overflow-hidden">
            <div class="pointer-events-none absolute inset-0" aria-hidden="true">
                <div class="outline-word px absolute -left-6 bottom-4 text-[clamp(5rem,16vw,15rem)]" data-speed="0.18" data-x="-0.1">INFO</div>
                <div class="orb px absolute -right-24 top-10 h-[24rem] w-[24rem]" data-speed="0.32"></div>
            </div>
            <div class="relative mx-auto max-w-6xl px-5 py-24 sm:px-8 sm:py-32">
                <p class="reveal font-mono text-xs uppercase tracking-[.2em] text-accent">Personal Information</p>
                <h2 class="reveal mt-4 max-w-2xl text-3xl font-semibold leading-tight tracking-tight sm:text-4xl" style="--d:60ms">The essentials, in one place.</h2>

                <div class="mt-14 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($info as $i => $item)
                        @php $tag = $item['href'] ? 'a' : 'div'; @endphp
                        <{{ $tag }} @if ($item['href']) href="{{ $item['href'] }}" @if (str_starts_with($item['href'], 'http')) target="_blank" rel="noopener noreferrer" @endif @endif
                            class="glow-card reveal panel group flex items-center gap-4 rounded-2xl p-5" style="--d:{{ ($i % 3) * 80 }}ms" data-glow>
                            <span class="ico relative grid h-12 w-12 shrink-0 place-items-center rounded-xl border border-line bg-bg text-accent">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icons[$item['icon']] !!}</svg>
                            </span>
                            <span class="relative min-w-0">
                                <span class="block font-mono text-[11px] uppercase tracking-wider text-muted">{{ $item['label'] }}</span>
                                <span class="mt-0.5 block truncate font-medium">{{ $item['value'] }}</span>
                            </span>
                        </{{ $tag }}>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- CONTACT --}}
        <section id="contact" class="relative overflow-hidden border-t border-line bg-card/40">
            <div class="pointer-events-none absolute inset-0" aria-hidden="true">
                <div class="outline-word px absolute -right-6 -top-2 text-[clamp(5rem,18vw,17rem)]" data-speed="0.2" data-x="0.1">HELLO</div>
                <div class="orb px absolute -left-40 top-1/3 h-[28rem] w-[28rem]" data-speed="0.3"></div>
            </div>
            <div class="relative mx-auto grid max-w-6xl gap-14 px-5 py-24 sm:px-8 sm:py-32 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <p class="reveal font-mono text-xs uppercase tracking-[.2em] text-accent">Contact</p>
                    <h2 class="reveal mt-4 text-3xl font-semibold leading-tight tracking-tight sm:text-4xl" style="--d:60ms">Let’s talk about what you’re building.</h2>
                    <p class="reveal mt-5 max-w-md text-muted" style="--d:100ms">Have a question or an idea? Send a message and I’ll reply as soon as I can.</p>

                    <ul class="reveal mt-8 space-y-3" style="--d:140ms">
                        <li><a href="mailto:{{ $profile['email'] }}" class="inline-flex items-center gap-3 text-muted transition-colors hover:text-fg">
                            <svg class="h-5 w-5 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icons['mail'] !!}</svg>{{ $profile['email'] }}</a></li>
                        <li><a href="{{ $profile['wa_link'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 text-muted transition-colors hover:text-fg">
                            <svg class="h-5 w-5 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icons['chat'] !!}</svg>{{ $profile['whatsapp'] }}</a></li>
                    </ul>

                    @if (count($socials))
                        <div class="reveal mt-8 flex gap-3" style="--d:180ms">
                            @foreach ($socials as $so)
                                <a href="{{ $so['href'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $so['label'] }}" data-magnet class="grid h-11 w-11 place-items-center rounded-full border border-line text-muted transition hover:border-accent hover:text-fg">
                                    <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icons[$so['icon']] !!}</svg>
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>

                <div class="lg:col-span-7">
                    {{-- data-demo="true": simulasi sukses di frontend. Hapus atribut ini saat route POST sudah ada. --}}
                    <form id="contact-form" method="POST" action="{{ url('/contact') }}" data-demo="true" novalidate class="reveal panel space-y-5 rounded-2xl p-6 sm:p-8" style="--d:100ms">
                        @csrf
                        <div class="absolute -left-[9999px]" aria-hidden="true">
                            <label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="name" class="mb-2 block text-sm font-medium">Name</label>
                                <input id="name" name="name" type="text" autocomplete="name" required class="field" placeholder="Your name" aria-describedby="name-err">
                                <p id="name-err" class="mt-1.5 hidden text-xs text-[#e5484d]"></p>
                            </div>
                            <div>
                                <label for="email" class="mb-2 block text-sm font-medium">Email</label>
                                <input id="email" name="email" type="email" autocomplete="email" required class="field" placeholder="you@example.com" aria-describedby="email-err">
                                <p id="email-err" class="mt-1.5 hidden text-xs text-[#e5484d]"></p>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="mb-2 block text-sm font-medium">Message</label>
                            <textarea id="message" name="message" rows="5" required class="field resize-y" placeholder="How can I help?" aria-describedby="message-err"></textarea>
                            <p id="message-err" class="mt-1.5 hidden text-xs text-[#e5484d]"></p>
                        </div>

                        <div class="flex flex-wrap items-center gap-4">
                            <button type="submit" id="submit-btn" class="btn btn-primary disabled:opacity-60">
                                <span id="submit-label">Send message</span>
                                <svg class="arr h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icons['arrow'] !!}</svg>
                            </button>
                            <p id="form-status" role="status" aria-live="polite" class="text-sm"></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    {{-- FOOTER --}}
    <footer class="border-t border-line">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-5 py-8 text-sm text-muted sm:flex-row sm:px-8">
            <p><span class="font-medium text-fg">{{ $profile['name'] }}</span> · Full Stack Developer</p>
            <div class="flex items-center gap-4">
                @foreach ($socials as $so)
                    <a href="{{ $so['href'] }}" target="_blank" rel="noopener noreferrer" class="transition-colors hover:text-fg">{{ $so['label'] }}</a>
                @endforeach
            </div>
            <p>&copy; {{ date('Y') }} {{ $profile['name'] }}</p>
        </div>
    </footer>

    <script>
    (function () {
        var root = document.documentElement;
        var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        var fine = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

        /* Theme toggle */
        var toggle = document.getElementById('theme-toggle');
        function syncToggle() {
            var dark = root.classList.contains('dark');
            toggle.setAttribute('aria-label', dark ? 'Switch to light theme' : 'Switch to dark theme');
        }
        syncToggle();
        toggle.addEventListener('click', function () {
            root.classList.add('theme-anim');
            root.classList.toggle('dark');
            try { localStorage.setItem('theme', root.classList.contains('dark') ? 'dark' : 'light'); } catch (e) {}
            syncToggle();
            fieldColors(); fieldDirty = true; fieldRequest();
            setTimeout(function () { root.classList.remove('theme-anim'); }, 400);
        });

        /* Mobile menu */
        var menu = document.getElementById('menu');
        var btn = document.getElementById('menu-btn');
        function setMenu(open) {
            menu.classList.toggle('open', open);
            btn.setAttribute('aria-expanded', String(open));
            btn.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        }
        btn.addEventListener('click', function () { setMenu(!menu.classList.contains('open')); });
        menu.querySelectorAll('a').forEach(function (a) { a.addEventListener('click', function () { setMenu(false); }); });

        /* Header: glass on scroll, hide when scrolling down */
        var header = document.getElementById('header');
        var lastY = 0;
        function onScrollHeader() {
            var y = window.scrollY;
            var s = y > 24;
            header.classList.toggle('bg-bg/80', s);
            header.classList.toggle('backdrop-blur-md', s);
            header.classList.toggle('border-line', s);
            header.classList.toggle('border-transparent', !s);
            var hide = y > lastY && y > 240 && !menu.classList.contains('open') && !header.contains(document.activeElement);
            header.style.transform = hide ? 'translateY(-100%)' : '';
            lastY = y;
        }
        onScrollHeader();
        window.addEventListener('scroll', onScrollHeader, { passive: true });
        header.addEventListener('focusin', function () { header.style.transform = ''; });

        /* Reveal on scroll (started after the intro gate) */
        var revealsStarted = false;
        function startReveals() {
            if (revealsStarted) { return; }
            revealsStarted = true;
            var reveals = document.querySelectorAll('.reveal');
            if ('IntersectionObserver' in window && !reduce) {
                var io = new IntersectionObserver(function (entries) {
                    entries.forEach(function (en) {
                        if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); }
                    });
                }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });
                reveals.forEach(function (el) { io.observe(el); });
            } else {
                reveals.forEach(function (el) { el.classList.add('in'); });
            }
        }

        /* Active nav link */
        var links = document.querySelectorAll('.nav-link');
        var sections = ['about', 'skills', 'info', 'contact'].map(function (id) { return document.getElementById(id); });
        if ('IntersectionObserver' in window) {
            var so = new IntersectionObserver(function (entries) {
                entries.forEach(function (en) {
                    if (en.isIntersecting) {
                        links.forEach(function (l) { l.classList.toggle('active', l.getAttribute('href') === '#' + en.target.id); });
                    }
                });
            }, { rootMargin: '-45% 0px -50% 0px' });
            sections.forEach(function (s) { if (s) { so.observe(s); } });
        }

        /* Rotating roles */
        var roleEls = document.querySelectorAll('#roles > span');
        if (roleEls.length > 1 && !reduce) {
            var idx = 0;
            setInterval(function () {
                roleEls[idx].classList.remove('on');
                idx = (idx + 1) % roleEls.length;
                roleEls[idx].classList.add('on');
            }, 2600);
        }

        /* Card pointer glow */
        document.querySelectorAll('[data-glow]').forEach(function (card) {
            card.addEventListener('pointermove', function (e) {
                var r = card.getBoundingClientRect();
                card.style.setProperty('--mx', (e.clientX - r.left) + 'px');
                card.style.setProperty('--my', (e.clientY - r.top) + 'px');
            });
        });

        /* 3D tilt on skill cards */
        if (fine && !reduce) {
            document.querySelectorAll('[data-tilt]').forEach(function (card) {
                var inner = card.querySelector('.tilt-inner');
                card.addEventListener('pointermove', function (e) {
                    var r = card.getBoundingClientRect();
                    var px = (e.clientX - r.left) / r.width - 0.5;
                    var py = (e.clientY - r.top) / r.height - 0.5;
                    inner.style.transform = 'rotateX(' + (-py * 9).toFixed(2) + 'deg) rotateY(' + (px * 9).toFixed(2) + 'deg)';
                });
                card.addEventListener('pointerleave', function () { inner.style.transform = ''; });
            });
        }

        /* Magnetic buttons */
        if (fine && !reduce) {
            document.querySelectorAll('.btn, #theme-toggle, [data-magnet]').forEach(function (el) {
                el.addEventListener('pointermove', function (e) {
                    var r = el.getBoundingClientRect();
                    var x = (e.clientX - (r.left + r.width / 2)) * 0.28;
                    var y = (e.clientY - (r.top + r.height / 2)) * 0.28;
                    el.style.transform = 'translate3d(' + x.toFixed(1) + 'px,' + y.toFixed(1) + 'px,0)';
                });
                el.addEventListener('pointerleave', function () { el.style.transform = ''; });
            });
        }

        /* Skill filter */
        var filterWrap = document.getElementById('skill-filters');
        if (filterWrap) {
            var chips = filterWrap.querySelectorAll('.chip');
            var cards = document.querySelectorAll('[data-cat]');
            chips.forEach(function (chip) {
                chip.addEventListener('click', function () {
                    var f = chip.dataset.filter;
                    chips.forEach(function (c) {
                        var on = c === chip;
                        c.classList.toggle('is-active', on);
                        c.setAttribute('aria-pressed', String(on));
                    });
                    cards.forEach(function (card) {
                        var dim = f !== 'all' && card.dataset.cat !== f;
                        card.classList.toggle('skill-dim', dim);
                        card.setAttribute('tabindex', dim ? '-1' : '0');
                        card.setAttribute('aria-hidden', dim ? 'true' : 'false');
                    });
                });
            });
        }

        /* Hero headline: letters react to the pointer */
        var title = document.getElementById('hero-title');
        var chars = [];
        (function splitTitle() {
            var text = title.textContent.trim();
            title.setAttribute('aria-label', text);
            title.textContent = '';
            text.split(' ').forEach(function (word) {
                var w = document.createElement('span');
                w.setAttribute('aria-hidden', 'true');
                w.style.display = 'inline-block';
                word.split('').forEach(function (c) {
                    var s = document.createElement('span');
                    s.className = 'ch';
                    s.textContent = c;
                    w.appendChild(s);
                    chars.push(s);
                });
                title.appendChild(w);
                title.appendChild(document.createTextNode(' '));
            });
        })();
        var charsBusy = false;
        function pushChars() {
            charsBusy = false;
            var R = 140;
            for (var i = 0; i < chars.length; i++) {
                var r = chars[i].getBoundingClientRect();
                var dx = r.left + r.width / 2 - mx, dy = r.top + r.height / 2 - my;
                var d = Math.sqrt(dx * dx + dy * dy);
                if (d < R && d > 0.1) {
                    var f = (1 - d / R);
                    chars[i].style.transform = 'translate3d(' + (dx / d * f * 20).toFixed(1) + 'px,' + (dy / d * f * 20).toFixed(1) + 'px,0) rotate(' + (dx / d * f * 8).toFixed(1) + 'deg)';
                } else if (chars[i].style.transform) {
                    chars[i].style.transform = '';
                }
            }
        }
        function resetChars() { chars.forEach(function (c) { c.style.transform = ''; }); }

        /* Scroll-driven word reveal in About */
        var aboutText = document.getElementById('about-text');
        var words = [];
        if (!reduce) {
            var parts = aboutText.textContent.trim().split(/\s+/);
            aboutText.textContent = '';
            aboutText.setAttribute('aria-label', parts.join(' '));
            parts.forEach(function (p) {
                var s = document.createElement('span');
                s.className = 'sw';
                s.setAttribute('aria-hidden', 'true');
                s.textContent = p;
                aboutText.appendChild(s);
                aboutText.appendChild(document.createTextNode(' '));
                words.push({ el: s, v: 0.2 });
            });
        }
        function updateWords() {
            if (!words.length) { return; }
            var r = aboutText.getBoundingClientRect();
            if (r.bottom < 0 || r.top > vh) { return; }
            var prog = Math.max(0, Math.min((vh * 0.88 - r.top) / (r.height + vh * 0.3), 1));
            var n = words.length;
            for (var i = 0; i < n; i++) {
                var t = Math.max(0, Math.min(prog * (n + 4) - i, 1));
                var v = 0.2 + 0.8 * t;
                if (Math.abs(v - words[i].v) > 0.02) { words[i].v = v; words[i].el.style.opacity = v.toFixed(2); }
            }
        }

        /* Parallax engine: scroll depth + pointer depth */
        var heroContent = document.getElementById('hero-content');
        var progress = document.getElementById('progress');
        var vh = window.innerHeight, sc = window.scrollY, docH = 1;
        var mx = window.innerWidth / 2, my = vh / 2, pseen = false;
        var tnx = 0, tny = 0, snx = 0, sny = 0;
        var ticking = false;

        var items = [];
        document.querySelectorAll('[data-speed],[data-x],[data-depth],[data-rot]').forEach(function (el) {
            items.push({
                el: el,
                sy: parseFloat(el.dataset.speed) || 0,
                sx: parseFloat(el.dataset.x) || 0,
                d: parseFloat(el.dataset.depth) || 0,
                rot: parseFloat(el.dataset.rot) || 0,
                min: parseFloat(el.dataset.min) || 0,
                c: 0, on: true
            });
        });

        function measure() {
            vh = window.innerHeight; sc = window.scrollY;
            docH = Math.max(document.documentElement.scrollHeight - vh, 1);
            items.forEach(function (it) {
                it.el.style.transform = '';
                var r = it.el.getBoundingClientRect();
                it.c = r.top + sc + r.height / 2;
                it.on = window.innerWidth >= it.min;
            });
            fieldResize();
            request();
        }

        function request() {
            if (!ticking) { ticking = true; requestAnimationFrame(frame); }
        }

        function frame() {
            ticking = false;
            var again = false;
            var mid = sc + vh / 2;

            progress.style.transform = 'scaleX(' + Math.min(sc / docH, 1).toFixed(4) + ')';

            if (!reduce) {
                snx += (tnx - snx) * 0.07; sny += (tny - sny) * 0.07;
                if (Math.abs(tnx - snx) > 0.001 || Math.abs(tny - sny) > 0.001) { again = true; }

                for (var i = 0; i < items.length; i++) {
                    var it = items[i];
                    if (!it.on) { continue; }
                    var dist = it.c - mid;
                    if (Math.abs(dist) > vh * 1.7) { continue; }
                    var x = dist * it.sx + snx * it.d;
                    var y = dist * it.sy + sny * it.d * 0.6;
                    var t = 'translate3d(' + x.toFixed(1) + 'px,' + y.toFixed(1) + 'px,0)';
                    if (it.rot) { t += ' rotate(' + (dist * it.rot / vh).toFixed(2) + 'deg)'; }
                    it.el.style.transform = t;
                }

                if (sc < vh * 1.2) {
                    var p = Math.min(sc / (vh * 0.75), 1);
                    heroContent.style.transform = 'translate3d(0,' + (sc * 0.3).toFixed(1) + 'px,0)';
                    heroContent.style.opacity = (1 - p).toFixed(3);
                }
                updateWords();
            }

            if (again) { ticking = true; requestAnimationFrame(frame); }
        }

        window.addEventListener('scroll', function () { sc = window.scrollY; request(); fieldRequest(); }, { passive: true });
        window.addEventListener('pointermove', function (e) {
            mx = e.clientX; my = e.clientY; pseen = true;
            tnx = (e.clientX / window.innerWidth - 0.5) * 2;
            tny = (e.clientY / window.innerHeight - 0.5) * 2;
            request();
            fieldRequest();
            if (fine && !reduce && !charsBusy && sc < vh) { charsBusy = true; requestAnimationFrame(pushChars); }
        }, { passive: true });
        document.addEventListener('pointerleave', function () { pseen = false; fieldRequest(); resetChars(); });

        var rt;
        window.addEventListener('resize', function () {
            clearTimeout(rt);
            rt = setTimeout(measure, 150);
        });
        window.addEventListener('load', measure);
        if (document.fonts && document.fonts.ready) { document.fonts.ready.then(measure); }

        /* Interactive line field in hero: marks rotate toward the pointer */
        var fcv = document.getElementById('field');
        var fx = fcv.getContext('2d');
        var fw = 0, fh = 0, fGap = 40, fVisible = true, fieldDirty = true, fRun = false;
        var fsx = -9999, fsy = -9999, colFg = '#888', colAcc = '#88f';
        function fieldColors() {
            var cs = getComputedStyle(root);
            colFg = cs.getPropertyValue('--fg').trim() || colFg;
            colAcc = cs.getPropertyValue('--accent').trim() || colAcc;
        }
        function fieldResize() {
            var dpr = Math.min(window.devicePixelRatio || 1, 2);
            fw = fcv.clientWidth; fh = fcv.clientHeight;
            fGap = window.innerWidth < 768 ? 52 : 40;
            fcv.width = Math.max(fw * dpr, 1); fcv.height = Math.max(fh * dpr, 1);
            fx.setTransform(dpr, 0, 0, dpr, 0, 0);
            fieldColors(); fieldDirty = true; fieldRequest();
        }
        function fieldRequest() {
            if (!fRun && fVisible) { fRun = true; requestAnimationFrame(fieldDraw); }
        }
        function fieldDraw() {
            fRun = false;
            var rect = fcv.getBoundingClientRect();
            var live = pseen && !reduce && fine;
            var tx = live ? mx - rect.left : -9999, ty = live ? my - rect.top : -9999;
            if (fsx < -5000 && tx > -5000) { fsx = tx; fsy = ty; }
            fsx += (tx - fsx) * 0.14; fsy += (ty - fsy) * 0.14;

            fx.clearRect(0, 0, fw, fh);
            fx.lineCap = 'round';
            var base = -0.78, R = 280;

            fx.strokeStyle = colFg; fx.globalAlpha = 0.14; fx.lineWidth = 1.2;
            fx.beginPath();
            var near = [];
            for (var y = fGap / 2; y < fh; y += fGap) {
                for (var x = fGap / 2; x < fw; x += fGap) {
                    var dx = fsx - x, dy = fsy - y;
                    var d = Math.sqrt(dx * dx + dy * dy);
                    if (d > R) {
                        fx.moveTo(x - 4 * Math.cos(base), y - 4 * Math.sin(base));
                        fx.lineTo(x + 4 * Math.cos(base), y + 4 * Math.sin(base));
                    } else {
                        near.push(x, y, dx, dy, d);
                    }
                }
            }
            fx.stroke();

            for (var i = 0; i < near.length; i += 5) {
                var k = 1 - near[i + 4] / R;
                var target = Math.atan2(near[i + 3], near[i + 2]);
                var diff = target - base;
                while (diff > Math.PI) { diff -= 2 * Math.PI; }
                while (diff < -Math.PI) { diff += 2 * Math.PI; }
                var ang = base + diff * Math.min(1, k * 2.2);
                var len = 4 + 12 * k;
                fx.strokeStyle = k > 0.3 ? colAcc : colFg;
                fx.globalAlpha = 0.14 + 0.75 * k;
                fx.lineWidth = 1.2 + k * 0.8;
                fx.beginPath();
                fx.moveTo(near[i] - len * Math.cos(ang), near[i + 1] - len * Math.sin(ang));
                fx.lineTo(near[i] + len * Math.cos(ang), near[i + 1] + len * Math.sin(ang));
                fx.stroke();
            }
            fx.globalAlpha = 1;

            var moving = Math.abs(tx - fsx) > 0.5 || Math.abs(ty - fsy) > 0.5;
            if (moving && !reduce) { fieldRequest(); }
            fieldDirty = false;
        }
        if ('IntersectionObserver' in window) {
            new IntersectionObserver(function (entries) {
                fVisible = entries[0].isIntersecting;
                if (fVisible) { fieldRequest(); }
            }, { rootMargin: '10% 0px' }).observe(document.getElementById('home'));
        }

        /* Intro gate: draw a circle with the pointer */
        var gate = document.getElementById('gate');
        var inertEls = document.querySelectorAll('#main, #header, footer');
        var closing = false;

        function setInert(on) {
            inertEls.forEach(function (el) { if (on) { el.setAttribute('inert', ''); } else { el.removeAttribute('inert'); } });
        }
        function closeGate() {
            if (closing) { return; }
            closing = true;
            gate.classList.add('leaving');
            setTimeout(function () {
                root.classList.remove('gate');
                setInert(false);
                try { sessionStorage.setItem('gateDone', '1'); } catch (e) {}
                window.scrollTo(0, 0);
                measure();
                startReveals();
            }, reduce ? 0 : 750);
        }

        function initGate() {
            var gc = document.getElementById('gate-canvas');
            var g = gc.getContext('2d');
            var pctEl = document.getElementById('gate-pct');
            var gw = 0, gh = 0;
            var pts = [], drawing = false, done = false, alpha = 1, burst = null, raf = 0, msgTimer = 0;

            function size() {
                var dpr = Math.min(window.devicePixelRatio || 1, 2);
                gw = window.innerWidth; gh = window.innerHeight;
                gc.width = gw * dpr; gc.height = gh * dpr;
                g.setTransform(dpr, 0, 0, dpr, 0, 0);
            }
            size();
            window.addEventListener('resize', size);

            function accent() { return getComputedStyle(root).getPropertyValue('--accent').trim() || '#8b8cf8'; }

            function analyse(p) {
                var n = p.length;
                if (n < 12) { return { pct: 0, ok: false }; }
                var cx = 0, cy = 0, i;
                for (i = 0; i < n; i++) { cx += p[i].x; cy += p[i].y; }
                cx /= n; cy /= n;
                var rs = [], mean = 0;
                for (i = 0; i < n; i++) { var r = Math.hypot(p[i].x - cx, p[i].y - cy); rs.push(r); mean += r; }
                mean /= n;
                if (mean < Math.max(40, Math.min(gw, gh) * 0.07)) { return { pct: 0, ok: false }; }
                var v = 0;
                for (i = 0; i < n; i++) { v += (rs[i] - mean) * (rs[i] - mean); }
                var round = Math.sqrt(v / n) / mean;
                var total = 0, prev = Math.atan2(p[0].y - cy, p[0].x - cx);
                for (i = 1; i < n; i++) {
                    var a = Math.atan2(p[i].y - cy, p[i].x - cx), d = a - prev;
                    if (d > Math.PI) { d -= 2 * Math.PI; }
                    if (d < -Math.PI) { d += 2 * Math.PI; }
                    total += d; prev = a;
                }
                var sweep = Math.min(Math.abs(total) / (2 * Math.PI), 1);
                return { pct: sweep, round: round, cx: cx, cy: cy, r: mean, ok: sweep >= 0.92 && round <= 0.3 };
            }

            function schedule() { if (!raf) { raf = requestAnimationFrame(render); } }

            function render(ts) {
                raf = 0;
                g.clearRect(0, 0, gw, gh);
                var c = accent(), n = pts.length, again = false;
                g.lineCap = 'round'; g.lineJoin = 'round';
                if (n > 1) {
                    g.shadowColor = c; g.shadowBlur = 14; g.strokeStyle = c; g.lineWidth = 3;
                    for (var i = 1; i < n; i++) {
                        g.globalAlpha = alpha * (0.15 + 0.85 * i / n);
                        g.beginPath(); g.moveTo(pts[i - 1].x, pts[i - 1].y); g.lineTo(pts[i].x, pts[i].y); g.stroke();
                    }
                }
                g.shadowBlur = 0; g.globalAlpha = 1;
                if (burst) {
                    var t = Math.min((ts - burst.t0) / burst.dur, 1);
                    g.globalAlpha = 1 - t; g.strokeStyle = c; g.lineWidth = 3;
                    g.beginPath(); g.arc(burst.x, burst.y, burst.r * (1 + t * 0.4), 0, Math.PI * 2); g.stroke();
                    g.globalAlpha = 1;
                    if (t < 1) { again = true; } else { burst = null; }
                }
                if (!drawing && !done && pts.length) {
                    alpha -= 0.04;
                    if (alpha <= 0) { pts = []; alpha = 1; } else { again = true; }
                }
                if (again) { schedule(); }
            }

            function msg(text) {
                pctEl.textContent = text;
                clearTimeout(msgTimer);
                msgTimer = setTimeout(function () { pctEl.textContent = '0%'; }, 1500);
            }

            function success(a) {
                done = true; drawing = false;
                burst = { x: a.cx, y: a.cy, r: a.r, t0: performance.now(), dur: reduce ? 1 : 600 };
                pctEl.textContent = 'Welcome';
                schedule();
                setTimeout(closeGate, reduce ? 0 : 450);
            }

            gc.addEventListener('pointerdown', function (e) {
                if (done) { return; }
                drawing = true; alpha = 1;
                pts = [{ x: e.clientX, y: e.clientY }];
                clearTimeout(msgTimer);
                pctEl.textContent = '0%';
                try { gc.setPointerCapture(e.pointerId); } catch (err) {}
                schedule();
            });
            gc.addEventListener('pointermove', function (e) {
                if (!drawing || done) { return; }
                var l = pts[pts.length - 1];
                if (Math.hypot(e.clientX - l.x, e.clientY - l.y) < 4) { return; }
                pts.push({ x: e.clientX, y: e.clientY });
                var a = analyse(pts);
                pctEl.textContent = Math.round(a.pct * 100) + '%';
                if (a.ok) { success(a); }
                schedule();
            });
            function end() {
                if (!drawing || done) { return; }
                drawing = false;
                var a = analyse(pts);
                if (a.pct >= 0.85) { msg('Almost. Try a rounder circle.'); }
                else if (pts.length > 6) { msg('Keep going to close the circle.'); }
                schedule();
            }
            gc.addEventListener('pointerup', end);
            gc.addEventListener('pointercancel', end);

            document.getElementById('gate-skip').addEventListener('click', closeGate);
            document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && root.classList.contains('gate')) { closeGate(); } });
        }

        if (root.classList.contains('gate')) { setInert(true); initGate(); } else { startReveals(); }
        measure();

        /* Contact form */
        var form = document.getElementById('contact-form');
        var status = document.getElementById('form-status');
        var submitBtn = document.getElementById('submit-btn');
        var label = document.getElementById('submit-label');

        function setError(field, msg) {
            var el = document.getElementById(field.id + '-err');
            field.setAttribute('aria-invalid', msg ? 'true' : 'false');
            el.textContent = msg || '';
            el.classList.toggle('hidden', !msg);
        }
        function validate() {
            var ok = true;
            var n = form.elements.name, e = form.elements.email, m = form.elements.message;
            setError(n, n.value.trim().length < 2 ? 'Please enter your name.' : ''); if (n.value.trim().length < 2) { ok = false; }
            var okMail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e.value.trim());
            setError(e, okMail ? '' : 'Please enter a valid email address.'); if (!okMail) { ok = false; }
            setError(m, m.value.trim().length < 10 ? 'Message must be at least 10 characters.' : ''); if (m.value.trim().length < 10) { ok = false; }
            return ok;
        }
        function setStatus(msg, good) {
            status.textContent = msg;
            status.style.color = good ? '#30a46c' : '#e5484d';
        }

        form.addEventListener('submit', function (ev) {
            ev.preventDefault();
            setStatus('', true);
            if (!validate()) { setStatus('Please fix the highlighted fields.', false); return; }
            if (form.elements.website.value) { return; }

            submitBtn.disabled = true; label.textContent = 'Sending…';
            var done = function (ok, msg) {
                submitBtn.disabled = false; label.textContent = 'Send message';
                setStatus(msg, ok);
                if (ok) { form.reset(); }
            };

            if (form.dataset.demo === 'true') {
                setTimeout(function () { done(true, 'Thanks! Your message has been sent.'); }, 700);
                return;
            }
            fetch(form.action, {
                method: 'POST',
                headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                body: new FormData(form)
            }).then(function (r) {
                if (r.ok) { done(true, 'Thanks! Your message has been sent.'); }
                else if (r.status === 429) { done(false, 'Too many attempts. Please try again later.'); }
                else { done(false, 'Something went wrong. Please check your input and try again.'); }
            }).catch(function () { done(false, 'Network error. Please try again.'); });
        });
    })();
    </script>
</body>
</html>