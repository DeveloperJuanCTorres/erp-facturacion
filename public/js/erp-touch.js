/* ERP Touch UI v1: preference is browser-local; no server or permissions changes. */
(function () {
  'use strict';
  var body = document.body;
  if (!body || !body.classList.contains('erp-touch')) return;
  var key = 'erp_touch_theme_v1';
  var button = document.getElementById('etu-theme-toggle');
  function getTheme() {
    try { return localStorage.getItem(key) === 'light' ? 'light' : 'dark'; }
    catch (e) { return 'dark'; }
  }
  function applyTheme(theme) {
    body.classList.toggle('erp-touch-light', theme === 'light');
    body.classList.toggle('erp-touch-dark', theme !== 'light');
    if (button) {
      button.setAttribute('aria-label', theme === 'light' ? 'Cambiar a tema oscuro' : 'Cambiar a tema claro');
      button.setAttribute('aria-pressed', theme === 'light' ? 'true' : 'false');
      var label = button.querySelector('.etu-theme-label');
      if (label) label.textContent = theme === 'light' ? 'Tema claro' : 'Tema oscuro';
      var icon = button.querySelector('i');
      if (icon) icon.className = theme === 'light' ? 'fas fa-sun' : 'fas fa-moon';
    }
  }
  applyTheme(getTheme());
  if (button) button.addEventListener('click', function () {
    var next = body.classList.contains('erp-touch-light') ? 'dark' : 'light';
    try { localStorage.setItem(key, next); } catch (e) { /* private browsing */ }
    applyTheme(next);
  });
})();
