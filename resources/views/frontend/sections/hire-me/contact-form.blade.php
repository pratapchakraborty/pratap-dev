<!-- CONTACT FORM -->
      <section id="contact-form" class="max-w-3xl mx-auto px-5 sm:px-8 mb-24">
        <div class="mb-10" data-reveal>
          <span class="chapter-num text-xs">SEND A MESSAGE</span>
          <h2 class="font-display font-extrabold text-4xl sm:text-5xl mt-4">Tell me about your project</h2>
          <p class="text-muted mt-3">Fill this in and it'll open your email app with the details ready to send — straight to my inbox.</p>
        </div>
        <form data-contact-form class="panel p-6 sm:p-8 space-y-5" data-testid="contact-form" novalidate data-reveal>
          <div class="grid sm:grid-cols-2 gap-5">
            <div>
              <label class="field-label" for="cf-name">Your name</label>
              <input class="field" id="cf-name" name="name" type="text" placeholder="Jane Doe" data-testid="contact-name" required />
            </div>
            <div>
              <label class="field-label" for="cf-email">Your email</label>
              <input class="field" id="cf-email" name="email" type="email" placeholder="jane@company.com" data-testid="contact-email" required />
            </div>
          </div>
          <div>
            <label class="field-label" for="cf-service">Service needed</label>
            <div class="select-wrap">
              <select class="field" id="cf-service" name="service" data-testid="contact-service" required>
                <option value="">Select a service…</option>
                <option value="Laravel Application">Laravel Application</option>
                <option value="REST API Development">REST API Development</option>
                <option value="React Frontend">React Frontend</option>
                <option value="Full-stack MERN Build">Full-stack MERN Build</option>
                <option value="Livewire / Blade Project">Livewire / Blade Project</option>
                <option value="Bug Fix / Maintenance">Bug Fix / Maintenance</option>
                <option value="Something else">Something else</option>
              </select>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
            </div>
          </div>
          <div>
            <label class="field-label" for="cf-budget">Budget range (optional)</label>
            <div class="select-wrap">
              <select class="field" id="cf-budget" name="budget" data-testid="contact-budget">
                <option value="Not specified">Not specified</option>
                <option value="Under ₹25k">Under ₹25,000</option>
                <option value="₹25k – ₹75k">₹25,000 – ₹75,000</option>
                <option value="₹75k – ₹2L">₹75,000 – ₹2,00,000</option>
                <option value="₹2L+">₹2,00,000+</option>
              </select>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
            </div>
          </div>
          <div>
            <label class="field-label" for="cf-message">Project details</label>
            <textarea class="field" id="cf-message" name="message" rows="5" placeholder="Tell me what you're building, timelines, and anything else I should know…" data-testid="contact-message" required></textarea>
          </div>
          <button type="submit" class="btn-acid w-full sm:w-auto px-8 py-3.5 rounded-full font-semibold flex items-center justify-center gap-2" data-testid="contact-submit" data-cursor>
            Send message
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
          </button>
        </form>
      </section>
