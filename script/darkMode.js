// bouton dynamique qui peut ajouter des choses
// HTML : id = getElementById or class = querySelector
const toggleBtn = document.querySelector('.dark-mode-btn');

function setTheme(theme) {
  document.documentElement.setAttribute('data-theme', theme);
  localStorage.setItem('theme', theme);
  toggleBtn.textContent = theme === 'dark' ? '☀️' : '🌙';
}

function toggleTheme() {
  const currentTheme = localStorage.getItem('theme') === 'dark' ? 'light' : 'dark';
  setTheme(currentTheme);
}

toggleBtn.addEventListener('click', toggleTheme);

(function () {
  const savedTheme = localStorage.getItem('theme');
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  const theme = savedTheme || (prefersDark ? 'dark' : 'light');
  setTheme(theme);
})();