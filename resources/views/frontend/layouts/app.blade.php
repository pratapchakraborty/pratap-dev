<!doctype html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pratap Chakraborty — Laravel &amp; Full-Stack Developer</title>
    <meta
      name="description"
      content="Pratap Chakraborty — Junior Software Developer specialising in Laravel, PHP &amp; the MERN stack. Building scalable, secure and high-performance web applications and APIs."
    />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&amp;family=Manrope:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com/"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              ink: "#07080a",
              ink2: "#0b0d10",
              panel: "#0e1116",
              acid: "#c6f135",
              acidsoft: "#e8ffb0",
              muted: "#868d97",
            },
            fontFamily: {
              display: ["Syne", "sans-serif"],
              sans: ["Manrope", "sans-serif"],
              mono: ['"JetBrains Mono"', "monospace"],
            },
          },
        },
      };
    </script>
    <link rel="stylesheet" href="css/site.css" />
  <script defer src="static/js/bundle.js"></script><script>
if(window.self!==window.top){
  var s=document.createElement("script");s.src="visual-edit-overlay.js";document.head.appendChild(s);
  window.tailwind=window.tailwind||{};tailwind.config={corePlugins:{preflight:false}};var t=document.createElement("script");t.src="https://cdn.tailwindcss.com/";document.head.appendChild(t);
}
</script>
</head>
  <body>
    <!-- background layers -->
    <canvas id="matrix"></canvas>
    <div class="bg-grid"></div>
    <div class="bg-glow"></div>
    <div class="grain"></div>
    <div class="cursor-dot"></div>
    <div class="cursor-ring"></div>

    <!-- ======================= HEADER ======================= -->
    <header class="nav-shell fixed top-0 inset-x-0 z-50" data-testid="site-header">
      <nav class="max-w-7xl mx-auto px-5 sm:px-8 h-[72px] flex items-center justify-between">
        <a href="index.html#home" class="flex items-center gap-2 group" data-testid="nav-logo">
          <span class="w-9 h-9 rounded-lg bg-acid text-ink font-display font-extrabold text-lg grid place-items-center">P</span>
          <span class="font-display font-bold tracking-tight text-lg">pratap<span class="text-acid font-mono">.dev</span></span>
        </a>

        <div class="hidden lg:flex items-center gap-8 text-sm text-muted font-medium">
          <a href="index.html#about" class="nav-link hover:text-white transition-colors" data-spy="#about" data-testid="nav-about">About</a>
          <a href="index.html#skills" class="nav-link hover:text-white transition-colors" data-spy="#skills" data-testid="nav-skills">Skills</a>
          <a href="index.html#career" class="nav-link hover:text-white transition-colors" data-spy="#career" data-testid="nav-career">Career</a>
          <a href="index.html#experience" class="nav-link hover:text-white transition-colors" data-spy="#experience" data-testid="nav-experience">Experience</a>
          <a href="portfolio.html" class="nav-link hover:text-white transition-colors" data-testid="nav-portfolio">Portfolio</a>

          <div class="relative">
            <button data-dd-toggle class="nav-link hover:text-white transition-colors flex items-center gap-1" data-testid="nav-more-toggle">
              More
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="dd-panel absolute right-0 mt-4 w-56 p-2 rounded-xl bg-ink2 border border-white/10 backdrop-blur-xl shadow-2xl" data-testid="nav-more-panel">
              <a href="index.html#why" class="block px-3 py-2 rounded-lg hover:bg-white/5 hover:text-white transition-colors" data-testid="nav-why">Why Choose Me</a>
              <a href="index.html#objective" class="block px-3 py-2 rounded-lg hover:bg-white/5 hover:text-white transition-colors" data-testid="nav-objective">Objective</a>
              <a href="index.html#education" class="block px-3 py-2 rounded-lg hover:bg-white/5 hover:text-white transition-colors" data-testid="nav-education">Education &amp; Certs</a>
              <a href="terms.html" class="block px-3 py-2 rounded-lg hover:bg-white/5 hover:text-white transition-colors" data-testid="nav-terms">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-3">
          <a href="hire-me.html" class="hidden sm:inline-flex btn-acid px-5 py-2.5 rounded-full font-semibold text-sm items-center gap-2" data-testid="nav-hire-cta" data-cursor>
            Hire Me
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
          <button data-menu-toggle aria-expanded="false" class="lg:hidden w-10 h-10 grid place-items-center rounded-lg border border-white/10" data-testid="mobile-menu-toggle">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
          </button>
        </div>
      </nav>

      <!-- mobile menu -->
      <div class="mobile-menu lg:hidden absolute inset-x-0 top-[72px] bg-ink2/95 backdrop-blur-xl border-b border-white/10" data-testid="mobile-menu">
        <div class="px-6 py-6 flex flex-col gap-4 text-lg font-medium">
          <a href="index.html#about" class="hover:text-acid transition-colors">About</a>
          <a href="index.html#why" class="hover:text-acid transition-colors">Why Choose Me</a>
          <a href="index.html#skills" class="hover:text-acid transition-colors">Skills</a>
          <a href="index.html#objective" class="hover:text-acid transition-colors">Objective</a>
          <a href="index.html#career" class="hover:text-acid transition-colors">Career</a>
          <a href="index.html#experience" class="hover:text-acid transition-colors">Experience</a>
          <a href="index.html#education" class="hover:text-acid transition-colors">Education &amp; Certs</a>
          <a href="portfolio.html" class="hover:text-acid transition-colors">Portfolio</a>
          <a href="terms.html" class="hover:text-acid transition-colors">Terms &amp; Conditions</a>
          <a href="hire-me.html" class="btn-acid px-5 py-3 rounded-full font-semibold text-center mt-2">Hire Me</a>
        </div>
      </div>
    </header>

    <main class="relative z-10">
      <!-- ======================= HERO ======================= -->
      <section id="home" class="relative min-h-screen flex items-center pt-28 pb-16">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 grid lg:grid-cols-12 gap-10 lg:gap-6 items-center w-full">
          <div class="lg:col-span-7">
            <div class="flex items-center gap-3 mb-7" data-reveal>
              <span class="w-2 h-2 rounded-full bg-acid animate-pulse"></span>
              <span class="font-mono text-xs tracking-[0.25em] text-muted uppercase">Available for work · West Bengal, India</span>
            </div>

            <h1 class="font-display font-extrabold leading-[0.98] tracking-tight text-[11vw] sm:text-6xl lg:text-[4.3rem]" data-split data-testid="hero-heading">
              Laravel &amp; full-stack developer.
            </h1>

            <p class="mt-8 max-w-xl text-muted text-base sm:text-lg leading-relaxed" data-reveal>
              I'm <span class="text-white font-semibold">Pratap Chakraborty</span> — I craft scalable backends with
              <span class="text-acid font-mono text-sm">PHP · Laravel</span> and modern frontends with
              <span class="text-acid font-mono text-sm">React · Node</span>, shipping production APIs used by web, Android and iOS teams.
            </p>

            <div class="mt-10 flex flex-wrap items-center gap-4" data-reveal>
              <a href="portfolio.html" class="btn-acid px-7 py-3.5 rounded-full font-semibold flex items-center gap-2" data-testid="hero-portfolio-btn" data-cursor>
                View my work
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
              </a>
              <a href="hire-me.html" class="btn-ghost px-7 py-3.5 rounded-full font-semibold flex items-center gap-2" data-testid="hero-hire-btn" data-cursor>
                Hire me
              </a>
              <a href="assets/pratap-chakraborty-cv.pdf" download="Pratap-Chakraborty-CV.pdf" class="btn-ghost px-7 py-3.5 rounded-full font-semibold flex items-center gap-2" data-testid="hero-cv-btn" data-cursor>
                Download CV
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 3v12m0 0l-4-4m4 4l4-4M4 21h16"/></svg>
              </a>
            </div>

            <div class="mt-14 grid grid-cols-3 gap-6 max-w-md border-t border-white/8 pt-8" data-reveal>
              <div>
                <div class="font-display font-bold text-3xl stat-num"><span data-count="3" data-suffix="+">0</span></div>
                <div class="text-xs text-muted mt-1">Years coding</div>
              </div>
              <div>
                <div class="font-display font-bold text-3xl stat-num"><span data-count="10" data-suffix="+">0</span></div>
                <div class="text-xs text-muted mt-1">Projects shipped</div>
              </div>
              <div>
                <div class="font-display font-bold text-3xl stat-num"><span data-count="3" data-suffix="">0</span></div>
                <div class="text-xs text-muted mt-1">Certifications</div>
              </div>
            </div>
          </div>

          <!-- photo + code card -->
          <div class="lg:col-span-5 relative" data-reveal>
            <div class="hero-photo-wrap relative mx-auto max-w-sm">
              <div class="absolute -inset-4 rounded-3xl bg-acid/10 blur-2xl"></div>
              <div class="relative rounded-3xl overflow-hidden border border-white/10 bg-ink2">
                <div class="hero-photo">
                  <img src="assets/pratap.jpg" alt="Portrait of Pratap Chakraborty" class="w-full object-cover" data-testid="hero-photo" />
                </div>
                <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(circle at 50% 20%, transparent 40%, rgba(7,8,10,0.55) 100%)"></div>
              </div>

              <!-- floating code snippet -->
              <div class="absolute -bottom-8 -left-6 sm:-left-10 w-64 rounded-xl bg-ink2/90 backdrop-blur-md border border-white/10 shadow-2xl p-4 font-mono text-[11px] leading-relaxed hidden sm:block">
                <div class="flex gap-1.5 mb-3 win-dots">
                  <span style="background:#ff5f57"></span><span style="background:#febc2e"></span><span style="background:#28c840"></span>
                </div>
                <div class="text-muted">$ <span class="text-white">whoami</span></div>
                <div class="text-acid">→ pratap · laravel dev</div>
                <div class="text-muted mt-1">$ <span class="text-white">stack --list</span></div>
                <div class="text-acidsoft">php · react · node · mongo</div>
              </div>
            </div>
          </div>
        </div>

        <a href="index.html#about" class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-muted text-[11px] font-mono tracking-widest uppercase" data-reveal>
          scroll
          <span class="w-[1px] h-10 bg-gradient-to-b from-acid to-transparent"></span>
        </a>
      </section>

      <!-- ======================= MARQUEE ======================= -->
      <section class="py-6 border-y border-white/8 bg-ink2/40" aria-hidden="true">
        <div class="marquee font-display font-bold text-2xl sm:text-4xl text-white/80">
          <div class="marquee-track">
            <span>Laravel</span><span class="text-acid">✦</span><span>PHP &amp; MySQL</span><span class="text-acid">✦</span>
            <span>REST APIs</span><span class="text-acid">✦</span><span>React.js</span><span class="text-acid">✦</span>
            <span>Node &amp; Express</span><span class="text-acid">✦</span><span>Livewire 3</span><span class="text-acid">✦</span>
            <span>Tailwind CSS</span><span class="text-acid">✦</span>
          </div>
          <div class="marquee-track" aria-hidden="true">
            <span>Laravel</span><span class="text-acid">✦</span><span>PHP &amp; MySQL</span><span class="text-acid">✦</span>
            <span>REST APIs</span><span class="text-acid">✦</span><span>React.js</span><span class="text-acid">✦</span>
            <span>Node &amp; Express</span><span class="text-acid">✦</span><span>Livewire 3</span><span class="text-acid">✦</span>
            <span>Tailwind CSS</span><span class="text-acid">✦</span>
          </div>
        </div>
      </section>

      <!-- ======================= ABOUT ======================= -->
      <section id="about" class="py-24 sm:py-32 max-w-7xl mx-auto px-5 sm:px-8">
        <div class="grid lg:grid-cols-12 gap-12">
          <div class="lg:col-span-4" data-reveal>
            <span class="chapter-num text-xs">01 — ABOUT ME</span>
            <h2 class="font-display font-extrabold text-4xl sm:text-5xl mt-4 leading-tight">The developer behind the code.</h2>
          </div>
          <div class="lg:col-span-8 space-y-6 text-lg text-muted leading-relaxed" data-reveal>
            <p>
              I'm a <span class="text-white font-semibold">Junior Software Developer</span> based in Tribeni, Hooghly. Day to day I work as a
              <span class="text-acid">Laravel developer</span>, collaborating closely with React.js, native Android and iOS teams to design and
              deliver the APIs that power their apps.
            </p>
            <p>
              My journey started with a strong foundation in web design and grew into full-stack engineering — from core PHP and CodeIgniter to
              modern <span class="text-white">Laravel 10 &amp; Livewire 3</span>, and across the <span class="text-white">MERN stack</span>. I care about
              clean architecture, secure code and interfaces that feel effortless.
            </p>
            <div class="grid sm:grid-cols-3 gap-4 pt-4" data-reveal-group>
              <div class="panel p-5" data-reveal-item>
                <div class="text-acid font-mono text-xs mb-2">BACKEND</div>
                <p class="text-sm text-white/90">PHP, Laravel 10, Livewire 3, CodeIgniter 3, REST APIs</p>
              </div>
              <div class="panel p-5" data-reveal-item>
                <div class="text-acid font-mono text-xs mb-2">FRONTEND</div>
                <p class="text-sm text-white/90">React.js, JavaScript, Tailwind, Bootstrap, jQuery</p>
              </div>
              <div class="panel p-5" data-reveal-item>
                <div class="text-acid font-mono text-xs mb-2">DATA</div>
                <p class="text-sm text-white/90">MySQL, MongoDB, Node.js &amp; Express</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ======================= WHY CHOOSE ME ======================= -->
      <section id="why" class="py-24 sm:py-32 bg-ink2/40 border-y border-white/8">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
          <div class="mb-14" data-reveal>
            <span class="chapter-num text-xs">02 — WHY CHOOSE ME</span>
            <h2 class="font-display font-extrabold text-4xl sm:text-5xl mt-4 leading-tight max-w-2xl">Reasons teams keep me on the build.</h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5" data-reveal-group>
            <div class="panel p-7" data-reveal-item>
              <div class="w-12 h-12 rounded-xl bg-acid/10 border border-acid/20 grid place-items-center mb-5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#c6f135" stroke-width="2"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg>
              </div>
              <h3 class="font-display font-bold text-xl mb-2">Full-stack range</h3>
              <p class="text-sm text-muted leading-relaxed">Comfortable across Laravel backends and React/Node frontends — one developer, end to end.</p>
            </div>
            <div class="panel p-7" data-reveal-item>
              <div class="w-12 h-12 rounded-xl bg-acid/10 border border-acid/20 grid place-items-center mb-5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#c6f135" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h10"/></svg>
              </div>
              <h3 class="font-display font-bold text-xl mb-2">API specialist</h3>
              <p class="text-sm text-muted leading-relaxed">I build REST APIs consumed by web, Android and iOS teams — clean contracts, secure endpoints.</p>
            </div>
            <div class="panel p-7" data-reveal-item>
              <div class="w-12 h-12 rounded-xl bg-acid/10 border border-acid/20 grid place-items-center mb-5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#c6f135" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
              </div>
              <h3 class="font-display font-bold text-xl mb-2">Production proven</h3>
              <p class="text-sm text-muted leading-relaxed">Live apps in healthcare, consultancy and booking — code that ships and stays running.</p>
            </div>
            <div class="panel p-7" data-reveal-item>
              <div class="w-12 h-12 rounded-xl bg-acid/10 border border-acid/20 grid place-items-center mb-5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#c6f135" stroke-width="2"><path d="M12 20V10M18 20V4M6 20v-4"/></svg>
              </div>
              <h3 class="font-display font-bold text-xl mb-2">Always learning</h3>
              <p class="text-sm text-muted leading-relaxed">Multiple certifications and a habit of picking up new tools quickly to grow with the team.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ======================= SKILLS ======================= -->
      <section id="skills" class="py-24 sm:py-32 max-w-7xl mx-auto px-5 sm:px-8">
        <div class="grid lg:grid-cols-12 gap-12">
          <div class="lg:col-span-4 lg:sticky lg:top-28 self-start" data-reveal>
            <span class="chapter-num text-xs">03 — MY SKILLS</span>
            <h2 class="font-display font-extrabold text-4xl sm:text-5xl mt-4 leading-tight">The toolkit I build with.</h2>
            <p class="text-muted mt-5 leading-relaxed">A blend of battle-tested backend frameworks, modern JS libraries and design tools.</p>
          </div>
          <div class="lg:col-span-8 space-y-10">
            <div data-reveal>
              <div class="flex items-center gap-3 mb-4">
                <span class="font-mono text-acid text-sm">01</span>
                <h3 class="font-display font-bold text-xl">Web Development</h3>
              </div>
              <div class="flex flex-wrap gap-3" data-reveal-group>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>HTML</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>CSS</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>JavaScript</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>Bootstrap</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>jQuery</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>Tailwind CSS</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>Ajax</span>
              </div>
            </div>
            <div data-reveal>
              <div class="flex items-center gap-3 mb-4">
                <span class="font-mono text-acid text-sm">02</span>
                <h3 class="font-display font-bold text-xl">Backend &amp; Databases</h3>
              </div>
              <div class="flex flex-wrap gap-3" data-reveal-group>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>PHP</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>Laravel 10</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>Livewire 3</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>CodeIgniter 3</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>OOP</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>MySQL</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>MongoDB</span>
              </div>
            </div>
            <div data-reveal>
              <div class="flex items-center gap-3 mb-4">
                <span class="font-mono text-acid text-sm">03</span>
                <h3 class="font-display font-bold text-xl">JavaScript Stack</h3>
              </div>
              <div class="flex flex-wrap gap-3" data-reveal-group>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>React.js</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>Node.js</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>Express.js</span>
              </div>
            </div>
            <div data-reveal>
              <div class="flex items-center gap-3 mb-4">
                <span class="font-mono text-acid text-sm">04</span>
                <h3 class="font-display font-bold text-xl">Software &amp; Tools</h3>
              </div>
              <div class="flex flex-wrap gap-3" data-reveal-group>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>Figma</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>Adobe Photoshop</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>MS Word</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>MS Excel</span>
                <span class="tag px-4 py-2 rounded-full text-sm" data-reveal-item>MS PowerPoint</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ======================= OBJECTIVE ======================= -->
      <section id="objective" class="py-24 sm:py-32 bg-ink2/40 border-y border-white/8">
        <div class="max-w-5xl mx-auto px-5 sm:px-8 text-center">
          <span class="chapter-num text-xs" data-reveal>04 — OBJECTIVE</span>
          <blockquote class="font-display font-bold text-2xl sm:text-4xl lg:text-5xl leading-tight mt-6" data-reveal>
            <span class="text-acid">“</span>To leverage my expertise in PHP, Laravel and RESTful API development to build
            <span class="text-acid">scalable, secure and high-performance</span> web applications — contributing to a collaborative team while
            continuously growing across full-stack development.<span class="text-acid">”</span>
          </blockquote>
          <p class="text-muted mt-8 font-mono text-sm" data-reveal>— Pratap Chakraborty</p>
        </div>
      </section>

      <!-- ======================= CAREER (timeline) ======================= -->
      <section id="career" class="py-24 sm:py-32 max-w-7xl mx-auto px-5 sm:px-8">
        <div class="mb-16" data-reveal>
          <span class="chapter-num text-xs">05 — MY CAREER</span>
          <h2 class="font-display font-extrabold text-4xl sm:text-5xl mt-4 leading-tight">A path from pixels to production.</h2>
        </div>
        <div class="relative pl-8 sm:pl-10">
          <div class="absolute left-2 sm:left-3 top-2 bottom-2 w-[2px] tl-line"></div>
          <div class="space-y-12" data-reveal-group>
            <div class="relative" data-reveal-item>
              <span class="absolute -left-[26px] sm:-left-[30px] top-1.5 w-3 h-3 rounded-full bg-acid ring-4 ring-acid/15"></span>
              <span class="font-mono text-xs text-acid">2024 — 2025</span>
              <h3 class="font-display font-bold text-2xl mt-1">Junior Software Developer · Endue Technologies</h3>
              <p class="text-muted mt-2 max-w-2xl">Working as a Laravel developer, building APIs with the React.js, native Android and iOS teams, plus a project on Laravel Livewire 3.</p>
            </div>
            <div class="relative" data-reveal-item>
              <span class="absolute -left-[26px] sm:-left-[30px] top-1.5 w-3 h-3 rounded-full bg-acid ring-4 ring-acid/15"></span>
              <span class="font-mono text-xs text-acid">Jan 2024 — Mar 2024</span>
              <h3 class="font-display font-bold text-2xl mt-1">Junior Laravel Developer · Techwelfare</h3>
              <p class="text-muted mt-2 max-w-2xl">Trained and worked as a junior Laravel developer, strengthening core framework and MVC fundamentals.</p>
            </div>
            <div class="relative" data-reveal-item>
              <span class="absolute -left-[26px] sm:-left-[30px] top-1.5 w-3 h-3 rounded-full bg-acid ring-4 ring-acid/15"></span>
              <span class="font-mono text-xs text-acid">2022 — 2023</span>
              <h3 class="font-display font-bold text-2xl mt-1">ITES Executive (Apprentice) · iMerit Technology Services</h3>
              <p class="text-muted mt-2 max-w-2xl">Worked as a data annotator across various AI projects, building precision and attention to detail.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ======================= EXPERIENCE (detailed) ======================= -->
      <section id="experience" class="py-24 sm:py-32 bg-ink2/40 border-y border-white/8">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
          <div class="mb-14" data-reveal>
            <span class="chapter-num text-xs">06 — EXPERIENCE</span>
            <h2 class="font-display font-extrabold text-4xl sm:text-5xl mt-4 leading-tight">What I've shipped, in depth.</h2>
          </div>
          <div class="grid lg:grid-cols-3 gap-5" data-reveal-group>
            <div class="panel p-8 flex flex-col" data-reveal-item>
              <div class="flex items-center justify-between mb-5">
                <span class="font-mono text-xs text-acid">CURRENT</span>
                <span class="font-mono text-xs text-muted">22 May '24 → 07 Nov '25</span>
              </div>
              <h3 class="font-display font-bold text-2xl">Endue Technologies</h3>
              <p class="text-white/80 text-sm mt-1">Junior Software Developer</p>
              <ul class="mt-5 space-y-3 text-sm text-muted flex-1">
                <li class="flex gap-2"><span class="text-acid mt-0.5">▹</span> Built &amp; maintained Laravel APIs for cross-platform apps.</li>
                <li class="flex gap-2"><span class="text-acid mt-0.5">▹</span> Collaborated with React.js, Android &amp; iOS teams.</li>
                <li class="flex gap-2"><span class="text-acid mt-0.5">▹</span> Delivered a project using Laravel Livewire 3.</li>
              </ul>
            </div>
            <div class="panel p-8 flex flex-col" data-reveal-item>
              <div class="flex items-center justify-between mb-5">
                <span class="font-mono text-xs text-acid">TRAINEE</span>
                <span class="font-mono text-xs text-muted">09 Jan '24 → 31 Mar '24</span>
              </div>
              <h3 class="font-display font-bold text-2xl">Techwelfare</h3>
              <p class="text-white/80 text-sm mt-1">Junior Laravel Developer</p>
              <ul class="mt-5 space-y-3 text-sm text-muted flex-1">
                <li class="flex gap-2"><span class="text-acid mt-0.5">▹</span> Hands-on Laravel development as a trainee.</li>
                <li class="flex gap-2"><span class="text-acid mt-0.5">▹</span> Learned MVC patterns, Eloquent &amp; Blade.</li>
                <li class="flex gap-2"><span class="text-acid mt-0.5">▹</span> Contributed to feature builds under mentorship.</li>
              </ul>
            </div>
            <div class="panel p-8 flex flex-col" data-reveal-item>
              <div class="flex items-center justify-between mb-5">
                <span class="font-mono text-xs text-acid">APPRENTICE</span>
                <span class="font-mono text-xs text-muted">10 Feb '22 → 11 Feb '23</span>
              </div>
              <h3 class="font-display font-bold text-2xl">iMerit Technology</h3>
              <p class="text-white/80 text-sm mt-1">ITES Executive (Apprentice)</p>
              <ul class="mt-5 space-y-3 text-sm text-muted flex-1">
                <li class="flex gap-2"><span class="text-acid mt-0.5">▹</span> Data annotation across multiple AI projects.</li>
                <li class="flex gap-2"><span class="text-acid mt-0.5">▹</span> Built accuracy, consistency &amp; process discipline.</li>
                <li class="flex gap-2"><span class="text-acid mt-0.5">▹</span> First step into the tech industry.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- ======================= EDUCATION & CERTIFICATIONS ======================= -->
      <section id="education" class="py-24 sm:py-32 max-w-7xl mx-auto px-5 sm:px-8">
        <div class="grid lg:grid-cols-2 gap-14">
          <div>
            <div class="mb-10" data-reveal>
              <span class="chapter-num text-xs">07 — EDUCATION</span>
              <h2 class="font-display font-extrabold text-3xl sm:text-4xl mt-4">Academics</h2>
            </div>
            <div class="space-y-5" data-reveal-group>
              <div class="panel p-6" data-reveal-item>
                <div class="flex justify-between gap-4"><h3 class="font-semibold text-white">M.A in History</h3><span class="font-mono text-xs text-acid">2021–23</span></div>
                <p class="text-sm text-muted mt-1">Netaji Subhash Open University · 75.13%</p>
              </div>
              <div class="panel p-6" data-reveal-item>
                <div class="flex justify-between gap-4"><h3 class="font-semibold text-white">B.A in History</h3><span class="font-mono text-xs text-acid">2017–20</span></div>
                <p class="text-sm text-muted mt-1">Netaji Subhash Open University · 68.38%</p>
              </div>
              <div class="panel p-6" data-reveal-item>
                <div class="flex justify-between gap-4"><h3 class="font-semibold text-white">Computer Office Practice</h3><span class="font-mono text-xs text-acid">2013–14</span></div>
                <p class="text-sm text-muted mt-1">Tribeni Commercial College · 81.80%</p>
              </div>
            </div>
          </div>
          <div>
            <div class="mb-10" data-reveal>
              <span class="chapter-num text-xs">08 — CERTIFICATIONS</span>
              <h2 class="font-display font-extrabold text-3xl sm:text-4xl mt-4">Credentials</h2>
            </div>
            <div class="space-y-5" data-reveal-group>
              <div class="panel p-6" data-reveal-item>
                <h3 class="font-semibold text-white">Advanced Web Design &amp; Development <span class="text-acid text-sm">· 1 yr</span></h3>
                <p class="text-sm text-muted mt-1">HTML, CSS, JS, Core PHP, MySQL, OOP, CodeIgniter 3 &amp; Laravel 10 — Amity Computer Academy (75%).</p>
              </div>
              <div class="panel p-6" data-reveal-item>
                <h3 class="font-semibold text-white">MERN Full-Stack <span class="text-acid text-sm">· 4 mo</span></h3>
                <p class="text-sm text-muted mt-1">MongoDB, Express.js, React.js &amp; Node.js — Vidyastu.</p>
              </div>
              <div class="panel p-6" data-reveal-item>
                <h3 class="font-semibold text-white">Advanced Web Designing <span class="text-acid text-sm">· 6 mo</span></h3>
                <p class="text-sm text-muted mt-1">Web design fundamentals — Anudip Foundation (75%).</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ======================= CTA BAND ======================= -->
      <section class="py-24 sm:py-32 border-t border-white/8">
        <div class="max-w-5xl mx-auto px-5 sm:px-8 text-center" data-reveal>
          <h2 class="font-display font-extrabold text-4xl sm:text-6xl leading-tight">Let's build something<br /><span class="text-acid">worth shipping.</span></h2>
          <p class="text-muted mt-6 max-w-xl mx-auto">Have a Laravel or full-stack project in mind? I'm open to opportunities and freelance builds.</p>
          <div class="mt-9 flex flex-wrap justify-center gap-4">
            <a href="hire-me.html" class="btn-acid px-8 py-4 rounded-full font-semibold flex items-center gap-2" data-cursor>Hire me
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
            <a href="portfolio.html" class="btn-ghost px-8 py-4 rounded-full font-semibold" data-cursor>See portfolio</a>
          </div>
        </div>
      </section>
    </main>

    <!-- ======================= FOOTER ======================= -->
    <footer class="relative z-10 border-t border-white/8 bg-ink2/50">
      <div class="max-w-7xl mx-auto px-5 sm:px-8 py-16 grid md:grid-cols-12 gap-10">
        <div class="md:col-span-5">
          <a href="index.html#home" class="flex items-center gap-2 mb-4">
            <span class="w-9 h-9 rounded-lg bg-acid text-ink font-display font-extrabold text-lg grid place-items-center">P</span>
            <span class="font-display font-bold text-lg">pratap<span class="text-acid font-mono">.dev</span></span>
          </a>
          <p class="text-muted max-w-sm leading-relaxed">Laravel &amp; full-stack developer building scalable, secure and high-performance web applications.</p>
        </div>
        <div class="md:col-span-3">
          <h4 class="font-mono text-xs text-acid uppercase tracking-widest mb-4">Navigate</h4>
          <ul class="space-y-2 text-muted text-sm">
            <li><a href="index.html#about" class="hover:text-white transition-colors">About</a></li>
            <li><a href="index.html#skills" class="hover:text-white transition-colors">Skills</a></li>
            <li><a href="index.html#experience" class="hover:text-white transition-colors">Experience</a></li>
            <li><a href="portfolio.html" class="hover:text-white transition-colors">Portfolio</a></li>
            <li><a href="hire-me.html" class="hover:text-white transition-colors">Hire Me</a></li>
            <li><a href="terms.html" class="hover:text-white transition-colors">Terms &amp; Conditions</a></li>
          </ul>
        </div>
        <div class="md:col-span-4">
          <h4 class="font-mono text-xs text-acid uppercase tracking-widest mb-4">Get in touch</h4>
          <a href="mailto:pratapchakraborty33@gmail.com" class="block text-white hover:text-acid transition-colors mb-2 break-all">pratapchakraborty33@gmail.com</a>
          <a href="tel:+918240927463" class="block text-muted hover:text-white transition-colors mb-5">+91 82409 27463</a>
          <div class="flex gap-3">
            <a href="#" data-testid="social-linkedin" aria-label="LinkedIn" class="w-10 h-10 grid place-items-center rounded-lg border border-white/10 hover:border-acid hover:text-acid transition-colors"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 8.98h4v12H3v-12zM9 8.98h3.8v1.64h.05c.53-1 1.83-2.05 3.77-2.05 4.03 0 4.78 2.65 4.78 6.1v6.31h-4v-5.6c0-1.33-.02-3.05-1.86-3.05-1.86 0-2.14 1.45-2.14 2.95v5.7H9v-12z"/></svg></a>
            <a href="#" data-testid="social-github" aria-label="GitHub" class="w-10 h-10 grid place-items-center rounded-lg border border-white/10 hover:border-acid hover:text-acid transition-colors"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.58 2 12.25c0 4.53 2.87 8.37 6.84 9.73.5.1.68-.22.68-.49v-1.7c-2.78.62-3.37-1.22-3.37-1.22-.46-1.18-1.11-1.5-1.11-1.5-.9-.63.07-.62.07-.62 1 .07 1.53 1.05 1.53 1.05.89 1.56 2.34 1.11 2.91.85.09-.66.35-1.11.63-1.37-2.22-.26-4.56-1.14-4.56-5.06 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.7 0 0 .84-.28 2.75 1.05a9.35 9.35 0 015 0c1.91-1.33 2.75-1.05 2.75-1.05.55 1.4.2 2.44.1 2.7.64.72 1.03 1.63 1.03 2.75 0 3.93-2.34 4.8-4.57 5.05.36.32.68.94.68 1.9v2.82c0 .27.18.6.69.49A10.26 10.26 0 0022 12.25C22 6.58 17.52 2 12 2z"/></svg></a>
            <a href="#" data-testid="social-instagram" aria-label="Instagram" class="w-10 h-10 grid place-items-center rounded-lg border border-white/10 hover:border-acid hover:text-acid transition-colors"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
            <a href="#" data-testid="social-facebook" aria-label="Facebook" class="w-10 h-10 grid place-items-center rounded-lg border border-white/10 hover:border-acid hover:text-acid transition-colors"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 10-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0022 12z"/></svg></a>
          </div>
        </div>
      </div>
      <div class="border-t border-white/8">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 py-6 flex flex-col sm:flex-row justify-between gap-3 text-xs text-muted font-mono">
          <span>© <span data-year></span> Pratap Chakraborty. All rights reserved.</span>
          <span>Built with Tailwind · Coded with care.</span>
        </div>
      </div>
    </footer>

    <!-- toast -->
    <div id="toast"><div class="bg-acid text-ink font-semibold text-sm px-5 py-3 rounded-full shadow-2xl"><span data-toast-msg></span></div></div>

    <!-- libs -->
    <script src="../cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="../unpkg.com/lenis%401.1.14/dist/lenis.min.js"></script>
    <script src="../unpkg.com/split-type%400.3.4/umd/index.min.js"></script>
    <script src="js/site.js"></script>
  <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'a1ea3428bde67680',t:'MTc4NDYzNjg4OA=='};var a=document.createElement('script');a.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/3104729c556c/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/v4513226cdae34746b4dedf0b4dfa099e1781791509496" integrity="sha512-ZE9pZaUXND66v380QUtch/5sE9tPFh2zg45pR2PB0CVkCtOREv2AJKkSidISWkysEuQ0EH8faUU5du78bx87UQ==" data-cf-beacon='{"version":"2024.11.0","token":"7f7b0fd8732c4326aae4b9d58d5c514a","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>
