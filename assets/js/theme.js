(function () {
  const THEME_KEY = 'theme-preference';
  const toggle = document.querySelector('.theme-toggle');
  const root = document.documentElement;

  if (!toggle) return;

  function applyTheme(theme) {
    if (theme === 'dark') {
      root.setAttribute('data-theme', 'dark');
      toggle.setAttribute('aria-pressed', 'true');
    } else {
      root.removeAttribute('data-theme');
      toggle.setAttribute('aria-pressed', 'false');
    }
  }

  function getPreferredTheme() {
    const stored = localStorage.getItem(THEME_KEY);
    if (stored) return stored;

    return window.matchMedia('(prefers-color-scheme: dark)').matches
      ? 'dark'
      : 'light';
  }

  applyTheme(getPreferredTheme());

  toggle.addEventListener('click', function () {
    const isDark = root.getAttribute('data-theme') === 'dark';
    const newTheme = isDark ? 'light' : 'dark';

    localStorage.setItem(THEME_KEY, newTheme);
    applyTheme(newTheme);
  });
})();
