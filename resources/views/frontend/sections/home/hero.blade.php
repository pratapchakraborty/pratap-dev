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
        <a href="{{ route('home') }}" class="btn-acid px-7 py-3.5 rounded-full font-semibold flex items-center gap-2" data-testid="hero-portfolio-btn" data-cursor>
          View my work
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a href="{{ route('hire') }}" class="btn-ghost px-7 py-3.5 rounded-full font-semibold flex items-center gap-2" data-testid="hero-hire-btn" data-cursor>
          Hire me
        </a>
        <a href="{{ asset('assets/pratap-chakraborty-cv.pdf') }}" download="Pratap-Chakraborty-CV.pdf" class="btn-ghost px-7 py-3.5 rounded-full font-semibold flex items-center gap-2" data-testid="hero-cv-btn" data-cursor>
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
            <img src="{{ asset('assets/pratap.jpg') }}" alt="Portrait of Pratap Chakraborty" class="w-full object-cover" data-testid="hero-photo" />
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

  <a href="{{ route('home') }}#about" class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-muted text-[11px] font-mono tracking-widest uppercase" data-reveal>
    scroll
    <span class="w-[1px] h-10 bg-gradient-to-b from-acid to-transparent"></span>
  </a>
</section>
