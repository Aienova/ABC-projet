// bouton dynamique qui peut ajouter des choses
// HTML : id = getElementById or class = querySelector

const toggleBtn = document.querySelector('.dark-mode-btn');

const themes = ['light', 'dark', 'twilight'];
let currentThemeIndex = 0;

function setTheme(theme) {
  document.documentElement.setAttribute('data-theme', theme);
  localStorage.setItem('theme', theme);
  
  if (theme === 'dark') toggleBtn.textContent = '🌇';
  else if (theme === 'light') toggleBtn.textContent = '🌙';
  else if (theme === 'twilight') toggleBtn.textContent = '☀️';
}

function toggleTheme() {
  currentThemeIndex = (currentThemeIndex + 1) % themes.length;
  setTheme(themes[currentThemeIndex]);
}

toggleBtn.addEventListener('click', toggleTheme);

// Init
(function () {
  const savedTheme = localStorage.getItem('theme');
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  const initialTheme = savedTheme || (prefersDark ? 'dark' : 'light');
  currentThemeIndex = themes.indexOf(initialTheme);
  setTheme(initialTheme);
})();