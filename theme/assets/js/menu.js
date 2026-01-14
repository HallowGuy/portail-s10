(function () {
  const triggers = document.querySelectorAll('.nav-trigger');

  if (!triggers.length) return;

  function closeAll() {
    triggers.forEach(trigger => {
      trigger.setAttribute('aria-expanded', 'false');
      const panel = trigger.nextElementSibling;
      if (panel) panel.setAttribute('hidden', '');
    });
  }

  triggers.forEach(trigger => {
    const panel = trigger.nextElementSibling;

    trigger.addEventListener('click', () => {
      const isOpen = trigger.getAttribute('aria-expanded') === 'true';
      closeAll();

      if (!isOpen) {
        trigger.setAttribute('aria-expanded', 'true');
        panel.removeAttribute('hidden');

        const firstLink = panel.querySelector('a');
        if (firstLink) firstLink.focus();
      }
    });
  });

  document.addEventListener('click', (e) => {
    if (!e.target.closest('.nav-item')) {
      closeAll();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeAll();
  });
})();
