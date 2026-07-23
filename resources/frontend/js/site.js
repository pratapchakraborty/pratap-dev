/* ============================================================
   Pratap Chakraborty — site engine
   Lenis smooth scroll + GSAP scroll reveals + hero timeline
   + matrix rain + custom cursor + nav + toast
   Everything is guard-checked so a missing CDN never blocks UI.
   BY RM SERVICES
   ============================================================ */
(function () {
  "use strict";

  const prefersReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const isTouch = window.matchMedia("(max-width: 900px)").matches;

  /* ---------- Lenis smooth scroll ---------- */
  let lenis = null;
  function initLenis() {
    if (prefersReduced || typeof Lenis === "undefined") return;
    lenis = new Lenis({ lerp: 0.09, wheelMultiplier: 1, smoothWheel: true });
    window.__lenis = lenis;
    function raf(t) { lenis.raf(t); requestAnimationFrame(raf); }
    requestAnimationFrame(raf);
    if (typeof ScrollTrigger !== "undefined") {
      lenis.on("scroll", ScrollTrigger.update);
    }
  }

  /* ---------- Custom cursor ---------- */
  function initCursor() {
    if (isTouch) return;
    const dot = document.querySelector(".cursor-dot");
    const ring = document.querySelector(".cursor-ring");
    if (!dot || !ring) return;
    let mx = 0, my = 0, rx = 0, ry = 0;
    window.addEventListener("mousemove", (e) => {
      mx = e.clientX; my = e.clientY;
      dot.style.transform = `translate(${mx}px, ${my}px) translate(-50%,-50%)`;
    });
    function loop() {
      rx += (mx - rx) * 0.18;
      ry += (my - ry) * 0.18;
      ring.style.transform = `translate(${rx}px, ${ry}px) translate(-50%,-50%)`;
      requestAnimationFrame(loop);
    }
    loop();
    document.querySelectorAll("a, button, [data-cursor]").forEach((el) => {
      el.addEventListener("mouseenter", () => ring.classList.add("is-hover"));
      el.addEventListener("mouseleave", () => ring.classList.remove("is-hover"));
    });
  }

  /* ---------- Matrix rain ---------- */
  function initMatrix() {
    const canvas = document.getElementById("matrix");
    if (!canvas || prefersReduced) return;
    const ctx = canvas.getContext("2d");
    const chars = "01<>/{}[]()=+*;$#&|_ABCDEF0123456789";
    let cols, drops, fontSize = 15;
    function resize() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
      cols = Math.floor(canvas.width / fontSize);
      drops = new Array(cols).fill(0).map(() => Math.random() * -canvas.height);
    }
    resize();
    window.addEventListener("resize", resize);
    let last = 0;
    function draw(t) {
      if (t - last > 55) {
        last = t;
        ctx.fillStyle = "rgba(7,8,10,0.14)";
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = "#c6f135";
        ctx.font = fontSize + "px 'JetBrains Mono', monospace";
        for (let i = 0; i < drops.length; i++) {
          const c = chars[Math.floor(Math.random() * chars.length)];
          ctx.fillText(c, i * fontSize, drops[i]);
          if (drops[i] > canvas.height && Math.random() > 0.975) drops[i] = 0;
          drops[i] += fontSize;
        }
      }
      requestAnimationFrame(draw);
    }
    requestAnimationFrame(draw);
  }

  /* ---------- Glow follows mouse ---------- */
  function initGlow() {
    const glow = document.querySelector(".bg-glow");
    if (!glow || isTouch) return;
    window.addEventListener("mousemove", (e) => {
      const x = e.clientX - glow.offsetWidth / 2;
      const y = e.clientY - glow.offsetHeight / 2;
      glow.style.transform = `translate(${x}px, ${y}px)`;
    });
  }

  /* ---------- Nav: scroll state, mobile, dropdown, smooth same-page ---------- */
  function initNav() {
    const shell = document.querySelector(".nav-shell");
    const onScroll = () => {
      if (!shell) return;
      shell.classList.toggle("scrolled", window.scrollY > 40);
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });

    // mobile toggle
    const burger = document.querySelector("[data-menu-toggle]");
    const menu = document.querySelector(".mobile-menu");
    if (burger && menu) {
      burger.addEventListener("click", () => {
        const open = menu.classList.toggle("open");
        burger.setAttribute("aria-expanded", String(open));
      });
    }

    // dropdowns
    document.querySelectorAll("[data-dd-toggle]").forEach((btn) => {
      const panel = btn.parentElement.querySelector(".dd-panel");
      if (!panel) return;
      btn.addEventListener("click", (e) => {
        e.stopPropagation();
        panel.classList.toggle("open");
      });
      document.addEventListener("click", (e) => {
        if (!btn.parentElement.contains(e.target)) panel.classList.remove("open");
      });
    });

    // same-page anchor smooth scroll (works for index.html#id links from any page)
    document.querySelectorAll('a[href*="#"]').forEach((a) => {
      a.addEventListener("click", (e) => {
        const url = new URL(a.href, window.location.href);
        const samePath = url.pathname === window.location.pathname ||
          (url.pathname.replace(/\/$/, "") === window.location.pathname.replace(/\/$/, ""));
        if (samePath && url.hash) {
          const target = document.querySelector(url.hash);
          if (target) {
            e.preventDefault();
            if (menu) menu.classList.remove("open");
            if (lenis) lenis.scrollTo(target, { offset: -80 });
            else target.scrollIntoView({ behavior: "smooth" });
            history.replaceState(null, "", url.hash);
          }
        }
      });
    });

    // scrollspy for section links on home
    const spy = document.querySelectorAll("[data-spy]");
    if (spy.length) {
      const sections = [...spy].map((l) => document.querySelector(l.getAttribute("data-spy"))).filter(Boolean);
      const obs = new IntersectionObserver((entries) => {
        entries.forEach((en) => {
          if (en.isIntersecting) {
            spy.forEach((l) => l.classList.toggle("active", l.getAttribute("data-spy") === "#" + en.target.id));
          }
        });
      }, { rootMargin: "-45% 0px -50% 0px" });
      sections.forEach((s) => obs.observe(s));
    }
  }

  /* ---------- Hero on-load timeline (masked line reveal) ---------- */
  function initHero() {
    if (typeof gsap === "undefined") { document.body.classList.add("loaded"); return; }

    // Split headline lines
    const heads = document.querySelectorAll("[data-split]");
    heads.forEach((h) => {
      if (typeof SplitType !== "undefined") {
        const s = new SplitType(h, { types: "lines", tagName: "span" });
        s.lines.forEach((ln) => {
          const wrap = document.createElement("span");
          wrap.className = "line-mask";
          ln.parentNode.insertBefore(wrap, ln);
          wrap.appendChild(ln);
          ln.classList.add("line-inner");
        });
      }
    });

    const tl = gsap.timeline({ defaults: { ease: "power4.out" } });
    tl.from(".line-inner", { yPercent: 115, duration: 1.05, stagger: 0.09 }, 0.15);

    // Failsafe: never trap hero content hidden (background tab / throttled rAF).
    const forceDone = () => { if (tl.progress() < 1) tl.progress(1); };
    setTimeout(forceDone, 2400);
    document.addEventListener("visibilitychange", () => { if (document.hidden) forceDone(); });
  }

  /* ---------- Scroll reveals (IntersectionObserver + CSS) ---------- */
  function initReveals() {
    const items = document.querySelectorAll("[data-reveal], [data-reveal-item]");
    if (!("IntersectionObserver" in window)) {
      items.forEach((el) => el.classList.add("reveal-in"));
      return;
    }
    // stagger within groups
    document.querySelectorAll("[data-reveal-group]").forEach((group) => {
      group.querySelectorAll("[data-reveal-item]").forEach((el, i) => {
        el.style.transitionDelay = i * 80 + "ms";
      });
    });
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((en) => {
          if (en.isIntersecting) {
            en.target.classList.add("reveal-in");
            io.unobserve(en.target);
          }
        });
      },
      { rootMargin: "0px 0px -12% 0px", threshold: 0.08 }
    );
    items.forEach((el) => io.observe(el));

    // Global failsafe: never leave content hidden if animations/scroll are throttled.
    setTimeout(() => document.body.classList.add("reveal-fallback"), 2800);

    // non-critical parallax
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
      gsap.registerPlugin(ScrollTrigger);
      document.querySelectorAll("[data-parallax]").forEach((el) => {
        const amt = parseFloat(el.getAttribute("data-parallax")) || 40;
        gsap.to(el, {
          yPercent: amt, ease: "none",
          scrollTrigger: { trigger: el, start: "top bottom", end: "bottom top", scrub: true },
        });
      });
    }
  }

  /* ---------- Counters ---------- */
  function initCounters() {
    document.querySelectorAll("[data-count]").forEach((el) => {
      const target = parseFloat(el.getAttribute("data-count"));
      const suffix = el.getAttribute("data-suffix") || "";
      let started = false;
      const run = () => {
        if (started) return; started = true;
        const finalText = (Number.isInteger(target) ? target : target.toFixed(1)) + suffix;
        const dur = 1400, t0 = performance.now();
        const tick = (t) => {
          const p = Math.min((t - t0) / dur, 1);
          const eased = 1 - Math.pow(1 - p, 3);
          el.textContent = (Number.isInteger(target) ? Math.round(target * eased) : (target * eased).toFixed(1)) + suffix;
          if (p < 1) requestAnimationFrame(tick);
        };
        requestAnimationFrame(tick);
        setTimeout(() => { el.textContent = finalText; }, dur + 400);
      };
      if ("IntersectionObserver" in window) {
        const io = new IntersectionObserver((ents) => {
          ents.forEach((e) => { if (e.isIntersecting) { run(); io.disconnect(); } });
        }, { threshold: 0.4 });
        io.observe(el);
      } else { run(); }
    });
  }

  /* ---------- Toast + copy ---------- */
  window.showToast = function (msg) {
    const t = document.getElementById("toast");
    if (!t) return;
    t.querySelector("[data-toast-msg]").textContent = msg;
    t.classList.add("show");
    clearTimeout(window.__toastTimer);
    window.__toastTimer = setTimeout(() => t.classList.remove("show"), 2200);
  };
  function initCopy() {
    document.querySelectorAll("[data-copy]").forEach((el) => {
      el.addEventListener("click", (e) => {
        const val = el.getAttribute("data-copy");
        if (navigator.clipboard && navigator.clipboard.writeText) {
          navigator.clipboard.writeText(val).catch(function () {});
        }
        window.showToast("Copied: " + val);
      });
    });
  }

  /* ---------- Contact form (composes a prefilled email) ---------- */
  function initContactForm() {
    const form = document.querySelector("[data-contact-form]");
    if (!form) return;
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const data = new FormData(form);
      const name = (data.get("name") || "").toString().trim();
      const email = (data.get("email") || "").toString().trim();
      const service = (data.get("service") || "").toString().trim();
      const budget = (data.get("budget") || "Not specified").toString().trim();
      const message = (data.get("message") || "").toString().trim();

      const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
      if (!name || !email || !service || !message) {
        window.showToast("Please fill in all required fields");
        return;
      }
      if (!emailOk) {
        window.showToast("Please enter a valid email");
        return;
      }
      const subject = encodeURIComponent("Project enquiry: " + service);
      const body = encodeURIComponent(
        "Name: " + name +
        "\nEmail: " + email +
        "\nService: " + service +
        "\nBudget: " + budget +
        "\n\n" + message
      );
      window.location.href = "mailto:pratapchakraborty33@gmail.com?subject=" + subject + "&body=" + body;
      window.showToast("Opening your email app…");
    });
  }

  /* ---------- Footer year ---------- */
  function initYear() {
    document.querySelectorAll("[data-year]").forEach((el) => (el.textContent = new Date().getFullYear()));
  }

  /* ---------- Boot ---------- */
  function boot() {
    initLenis();
    initMatrix();
    initGlow();
    initCursor();
    initNav();
    initHero();
    initReveals();
    initCounters();
    initCopy();
    initContactForm();
    initYear();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", boot);
  } else { boot(); }
})();
