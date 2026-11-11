(() => {
  'use strict';
  const root = document.body;
  const toggle = document.querySelector('[data-theme-toggle]');
  const menu = document.querySelector('[data-menu]');
  const menuToggle = document.querySelector('[data-menu-toggle]');
  const saved = (() => { try{return localStorage.getItem('navidai-theme')}catch(_){return null} })();
  if (saved === 'light') root.classList.add('light');
  const sync = () => { if(toggle){toggle.setAttribute('aria-label',root.classList.contains('light')?'فعال‌سازی حالت تاریک':'فعال‌سازی حالت روشن');toggle.setAttribute('aria-pressed',String(root.classList.contains('light')))} };
  sync();
  toggle?.addEventListener('click', () => {
    root.classList.toggle('light');
    try {localStorage.setItem('navidai-theme',root.classList.contains('light')?'light':'dark')}catch(_){}
    sync();
  });
  const closeMenu = () => {
    menu?.classList.remove('open');
    menuToggle?.setAttribute('aria-expanded','false');
  };
  menuToggle?.addEventListener('click', () => {
    const isOpen = menu?.classList.toggle('open');
    menuToggle.setAttribute('aria-expanded',String(Boolean(isOpen)));
  });
  menu?.querySelectorAll('a').forEach(a=>a.addEventListener('click',closeMenu));
  document.addEventListener('keydown',e=>{if(e.key==='Escape')closeMenu()});
  document.addEventListener('click',e=>{
    if(menu&&menuToggle&&!menu.contains(e.target)&&!menuToggle.contains(e.target))closeMenu();
  });
  const items=document.querySelectorAll('.reveal');
  if(!('IntersectionObserver' in window)){items.forEach(el=>el.classList.add('in-view'));return}
  const io=new IntersectionObserver(entries=>{
    entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in-view');io.unobserve(e.target)}})
  },{threshold:.1});
  items.forEach(el=>io.observe(el));
})();
