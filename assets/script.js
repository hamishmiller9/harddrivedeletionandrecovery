function clearModeClasses() {
  document.body.classList.remove('color-blind-body', 'dark-mode-body');

  const header = document.querySelector('.header-container');
  if (header) {
    header.classList.remove('color-blind-header', 'dark-mode-header');
  }

  const nav = document.querySelector('nav');
  if (nav) {
    nav.classList.remove('color-blind-nav', 'dark-mode-nav');
  }

  const mainContent = document.querySelector('.main-content');
  if (mainContent) {
    mainContent.classList.remove('color-blind-main-content', 'dark-mode-main-content');
  }
}

function applyMode() {
  clearModeClasses();
  const mode = localStorage.getItem('mode');
  if (mode === 'colorBlind') {
    document.body.classList.add('color-blind-body');
    document.querySelector('.header-container')?.classList.add('color-blind-header');
    document.querySelector('nav')?.classList.add('color-blind-nav');
    document.querySelector('.main-content')?.classList.add('color-blind-main-content');
  } else if (mode === 'dark') {
    document.body.classList.add('dark-mode-body');
    document.querySelector('.header-container')?.classList.add('dark-mode-header');
    document.querySelector('nav')?.classList.add('dark-mode-nav');
    document.querySelector('.main-content')?.classList.add('dark-mode-main-content');
  }
}

document.addEventListener('DOMContentLoaded', applyMode);

document.getElementById('colorblind-btn')?.addEventListener('click', () => {
  const currentMode = localStorage.getItem('mode');
  if (currentMode !== 'colorBlind') {
    localStorage.setItem('mode', 'colorBlind');
  } else {
    localStorage.removeItem('mode');
  }
  applyMode();
});

document.getElementById('darkmode-btn')?.addEventListener('click', () => {
  const currentMode = localStorage.getItem('mode');
  if (currentMode !== 'dark') {
    localStorage.setItem('mode', 'dark');
  } else {
    localStorage.removeItem('mode');
  }
  applyMode();
});

document.getElementById('reset-btn')?.addEventListener('click', () => {
  localStorage.removeItem('mode');
  applyMode();
});