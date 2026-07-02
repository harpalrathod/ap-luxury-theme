(function(){
  const header=document.querySelector('[data-site-header]');
  const toggle=document.querySelector('[data-menu-toggle]');
  const nav=document.querySelector('[data-main-nav]');
  const onScroll=()=>{if(header){header.classList.toggle('is-scrolled',window.scrollY>20)}};
  onScroll();
  window.addEventListener('scroll',onScroll,{passive:true});
  if(toggle&&nav){toggle.addEventListener('click',()=>{const open=nav.classList.toggle('is-open');toggle.setAttribute('aria-expanded',open?'true':'false')})}
  const reveal=document.querySelectorAll('.reveal-up');
  if('IntersectionObserver'in window){
    const io=new IntersectionObserver((entries)=>{entries.forEach((entry)=>{if(entry.isIntersecting){entry.target.classList.add('is-visible');io.unobserve(entry.target)}})},{threshold:.15});
    reveal.forEach((el)=>io.observe(el));
  }else{reveal.forEach((el)=>el.classList.add('is-visible'))}
  const popup=document.querySelector('[data-offer-popup]');
  const closeBtns=document.querySelectorAll('[data-offer-close]');
  if(popup){window.setTimeout(()=>{popup.classList.add('is-active');popup.setAttribute('aria-hidden','false')},3200)}
  closeBtns.forEach((btn)=>btn.addEventListener('click',()=>{if(popup){popup.classList.remove('is-active');popup.setAttribute('aria-hidden','true')}}));
})();
