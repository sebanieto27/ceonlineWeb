import './bootstrap';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import collapse from '@alpinejs/collapse';

// Register plugins
Alpine.plugin(intersect);
Alpine.plugin(collapse);

// Register Alpine
window.Alpine = Alpine;

// Counter animation component
Alpine.data('counter', () => ({
    current: 0,
    target: 0,
    suffix: '',
    started: false,
    init() {
        this.target = parseInt(this.$el.dataset.target) || 0;
        this.suffix = this.$el.dataset.suffix || '';
    },
    start() {
        if (this.started) return;
        this.started = true;
        const duration = 2000;
        const steps = 60;
        const increment = this.target / steps;
        let step = 0;
        const timer = setInterval(() => {
            step++;
            this.current = Math.round(Math.min(increment * step, this.target));
            if (step >= steps) {
                this.current = this.target;
                clearInterval(timer);
            }
        }, duration / steps);
    }
}));

// Mobile menu component
Alpine.data('mobileMenu', () => ({
    open: false,
    mobileSection: 'main',
    toggle() { this.open = !this.open; if (this.open) this.mobileSection = 'main'; },
    close() { this.open = false; this.mobileSection = 'main'; }
}));

Alpine.start();

// Pause/resume autoplay timers when tab is hidden/visible
document.addEventListener('visibilitychange', () => {
    const event = document.hidden ? 'tab-hidden' : 'tab-visible';
    document.dispatchEvent(new CustomEvent(event));
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});
