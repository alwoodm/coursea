import './bootstrap';

// Import Alpine.js with fallback
let Alpine;
try {
    Alpine = require('alpinejs');
} catch (e) {
    console.warn('Alpine.js could not be loaded automatically. Please run npm install alpinejs.');
    // Simple Alpine.js fallback/polyfill to prevent errors
    window.Alpine = {
        start: () => console.warn('Alpine.js not loaded'),
        directive: () => {},
        data: () => {}
    };
}

window.Alpine = Alpine;
if (typeof Alpine.start === 'function') {
    Alpine.start();
}
