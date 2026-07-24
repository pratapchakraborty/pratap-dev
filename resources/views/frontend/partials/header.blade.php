<!-- ======================= HEADER ======================= -->
    <header class="nav-shell fixed top-0 inset-x-0 z-50" data-testid="site-header">
      <nav class="max-w-7xl mx-auto px-5 sm:px-8 h-[72px] flex items-center justify-between">
        <a href="{{ route('home') }}#home" class="flex items-center gap-2 group" data-testid="nav-logo">
          <span class="w-9 h-9 rounded-lg bg-acid text-ink font-display font-extrabold text-lg grid place-items-center">P</span>
          <span class="font-display font-bold tracking-tight text-lg">pratap<span class="text-acid font-mono">.dev</span></span>
        </a>

        <div class="hidden lg:flex items-center gap-8 text-sm text-muted font-medium">
          <a href="{{ route('home') }}#about" class="nav-link hover:text-white transition-colors" data-spy="#about" data-testid="nav-about">About</a>
          <a href="{{ route('home') }}#skills" class="nav-link hover:text-white transition-colors" data-spy="#skills" data-testid="nav-skills">Skills</a>
          <a href="{{ route('home') }}#career" class="nav-link hover:text-white transition-colors" data-spy="#career" data-testid="nav-career">Career</a>
          <a href="{{ route('home') }}#experience" class="nav-link hover:text-white transition-colors" data-spy="#experience" data-testid="nav-experience">Experience</a>
          <a href="{{ route('portfolio') }}" class="nav-link hover:text-white transition-colors" {{ request()->routeIs('portfolio') ? 'text-acid' : '' }} data-testid="nav-portfolio">Portfolio</a>

          <div class="relative">
            <button data-dd-toggle class="nav-link hover:text-white transition-colors flex items-center gap-1" data-testid="nav-more-toggle">
              More
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="dd-panel absolute right-0 mt-4 w-56 p-2 rounded-xl bg-ink2 border border-white/10 backdrop-blur-xl shadow-2xl" data-testid="nav-more-panel">
              <a href="{{ route('home') }}#why" class="block px-3 py-2 rounded-lg hover:bg-white/5 hover:text-white transition-colors" data-testid="nav-why">Why Choose Me</a>
              <a href="{{ route('home') }}#objective" class="block px-3 py-2 rounded-lg hover:bg-white/5 hover:text-white transition-colors" data-testid="nav-objective">Objective</a>
              <a href="{{ route('home') }}#education" class="block px-3 py-2 rounded-lg hover:bg-white/5 hover:text-white transition-colors" data-testid="nav-education">Education &amp; Certs</a>
              <a href="{{ route('terms') }}" class="block px-3 py-2 rounded-lg hover:bg-white/5 hover:text-white transition-colors" data-testid="nav-terms">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-3">
          <a href="{{ route('hire') }}" class="hidden sm:inline-flex btn-acid px-5 py-2.5 rounded-full font-semibold text-sm items-center gap-2" data-testid="nav-hire-cta" data-cursor>
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
          <a href="{{ route('home') }}#about" class="hover:text-acid transition-colors">About</a>
          <a href="{{ route('home') }}#why" class="hover:text-acid transition-colors">Why Choose Me</a>
          <a href="{{ route('home') }}#skills" class="hover:text-acid transition-colors">Skills</a>
          <a href="{{ route('home') }}#objective" class="hover:text-acid transition-colors">Objective</a>
          <a href="{{ route('home') }}#career" class="hover:text-acid transition-colors">Career</a>
          <a href="{{ route('home') }}#experience" class="hover:text-acid transition-colors">Experience</a>
          <a href="{{ route('home') }}#education" class="hover:text-acid transition-colors">Education &amp; Certs</a>
          <a href="{{ route('portfolio') }}" class="hover:text-acid transition-colors">Portfolio</a>
          <a href="{{ route('terms') }}" class="hover:text-acid transition-colors">Terms &amp; Conditions</a>
          <a href="{{ route('hire') }}" class="btn-acid px-5 py-3 rounded-full font-semibold text-center mt-2">Hire Me</a>
        </div>
      </div>
    </header>
