<footer class="relative z-10 border-t border-white/8 bg-ink2/50">
      <div class="max-w-7xl mx-auto px-5 sm:px-8 py-16 grid md:grid-cols-12 gap-10">
        <div class="md:col-span-5">
          <a href="i{{ route('home') }}#home" class="flex items-center gap-2 mb-4">
            <span class="w-9 h-9 rounded-lg bg-acid text-ink font-display font-extrabold text-lg grid place-items-center">P</span>
            <span class="font-display font-bold text-lg">pratap<span class="text-acid font-mono">.dev</span></span>
          </a>
          <p class="text-muted max-w-sm leading-relaxed">Laravel &amp; full-stack developer building scalable, secure and high-performance web applications.</p>
        </div>
        <div class="md:col-span-3">
          <h4 class="font-mono text-xs text-acid uppercase tracking-widest mb-4">Navigate</h4>
          <ul class="space-y-2 text-muted text-sm">
            <li><a href="i{{ route('home') }}#about" class="hover:text-white transition-colors">About</a></li>
            <li><a href="i{{ route('home') }}#skills" class="hover:text-white transition-colors">Skills</a></li>
            <li><a href="i{{ route('home') }}#experience" class="hover:text-white transition-colors">Experience</a></li>
            <li><a href="{{ route('portfolio') }}" class="hover:text-white transition-colors">Portfolio</a></li>
            <li><a href="{{ route('hire') }}" class="hover:text-white transition-colors">Hire Me</a></li>
            <li><a href="{{ route('terms') }}" class="hover:text-white transition-colors">Terms &amp; Conditions</a></li>
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
