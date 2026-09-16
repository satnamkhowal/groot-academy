(() => {
    const toggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('.primary-nav');

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const isOpen = nav.classList.toggle('open');
            toggle.setAttribute('aria-expanded', String(isOpen));
        });

        nav.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                nav.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    const form = document.querySelector('#guidance-form');
    const status = document.querySelector('#form-status');
    if (form && status) {
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            status.textContent = 'Form UI is ready. Backend lead handling will be connected in the next step.';
        });
    }
})();
