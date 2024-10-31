/* Enable hamburge menu */
function toggleMenuEnable() {
  const BTN = document.querySelector('.navbar__toggle__button');
  const ICON = document.querySelector('.navbar__toggle__button i');
  const MENU = document.querySelector('.navbar__hidden__menu');
  BTN.onclick = function () {
    MENU.classList.toggle('open');
    const isOpen = MENU.classList.contains('open');
    ICON.classList = isOpen
      ? 'fa-solid fa-xmark'
      : 'fa-solid fa-bars';
  }
}

/* Get current year */
function insertInfos() {
  const completeInfo = new Date(document.lastModified);
  const date = completeInfo.toLocaleDateString();
  const year = completeInfo.getFullYear();
  document.getElementById('footer__year').textContent = year;
  document.getElementById('footer__date').textContent = date;
}
