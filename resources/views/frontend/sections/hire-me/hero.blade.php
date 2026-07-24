<!-- HERO -->
      <section class="max-w-7xl mx-auto px-5 sm:px-8 grid lg:grid-cols-2 gap-14 items-center mb-24 min-h-screen">
        <div>
          <div class="flex items-center gap-3 mb-6" data-reveal>
            <span class="w-2 h-2 rounded-full bg-acid animate-pulse"></span>
            <span class="font-mono text-xs tracking-[0.25em] text-muted uppercase">Open to work · Freelance &amp; full-time</span>
          </div>
          <h1 class="font-display font-extrabold text-5xl sm:text-7xl leading-[0.95]" data-split>Let's work together.</h1>
          <p class="text-muted text-lg mt-7 max-w-xl leading-relaxed" data-reveal>Need a Laravel backend, a REST API, or a full-stack build? I'd love to hear about it. Reach me directly — I usually reply within a day.</p>
          <div class="flex flex-wrap gap-4 mt-9" data-reveal>
            <a href="mailto:pratapchakraborty33@gmail.com?subject=Project%20enquiry" class="btn-acid px-7 py-3.5 rounded-full font-semibold flex items-center gap-2" data-testid="hire-email-btn" data-cursor>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/></svg>
              Email me</a>
            <a href="tel:+918240927463" class="btn-ghost px-7 py-3.5 rounded-full font-semibold flex items-center gap-2" data-testid="hire-call-btn" data-cursor>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg>
              Call me</a>
            <a href="{{ asset('assets/pratap-chakraborty-cv.pdf') }}" download="Pratap-Chakraborty-CV.pdf" class="btn-ghost px-7 py-3.5 rounded-full font-semibold flex items-center gap-2" data-testid="hire-cv-btn" data-cursor>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v12m0 0l-4-4m4 4l4-4M4 21h16"/></svg>
              Download CV</a>
          </div>
        </div>
        <div class="relative" data-reveal>
          <div class="absolute -inset-4 rounded-3xl bg-acid/10 blur-2xl"></div>
          <div class="relative rounded-3xl overflow-hidden border border-white/10 max-w-xs mx-auto">
            <img src="{{ asset('assets/pratap.jpg') }}" alt="Pratap Chakraborty" class="w-full object-cover" />
          </div>
        </div>
      </section>
