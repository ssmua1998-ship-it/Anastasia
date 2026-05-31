const loader = document.getElementById('loader');
window.addEventListener('load', () => setTimeout(() => loader.classList.add('done'), 450));

const topbar = document.getElementById('topbar');
window.addEventListener('scroll', () => topbar.classList.toggle('scrolled', window.scrollY > 20));

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.14 });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

const vibeBtn = document.getElementById('vibeBtn');
vibeBtn.addEventListener('click', () => {
  document.body.classList.toggle('love-mode');
  vibeBtn.classList.toggle('active');
  burst(window.innerWidth / 2, 90, 24);
});

const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightboxImg');
const lightboxTitle = document.getElementById('lightboxTitle');
document.querySelectorAll('.photo-card').forEach(card => {
  card.addEventListener('click', () => {
    lightboxImg.src = card.dataset.img;
    lightboxImg.alt = card.dataset.title;
    lightboxTitle.textContent = card.dataset.title;
    lightbox.classList.add('open');
  });
});
function closeLightbox(){ lightbox.classList.remove('open'); lightboxImg.src=''; }
document.getElementById('lightboxClose').addEventListener('click', closeLightbox);
lightbox.addEventListener('click', (e) => { if (e.target === lightbox) closeLightbox(); });
document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeLightbox(); });

const heartNote = document.getElementById('heartNote');
document.querySelectorAll('#heartGrid button').forEach(btn => {
  btn.addEventListener('click', () => {
    btn.classList.add('opened');
    heartNote.textContent = btn.dataset.note;
    const r = btn.getBoundingClientRect();
    burst(r.left + r.width/2, r.top + r.height/2, 10);
  });
});

const confettiBtn = document.getElementById('confettiBtn');
confettiBtn.addEventListener('click', () => {
  const r = confettiBtn.getBoundingClientRect();
  burst(r.left + r.width/2, r.top + r.height/2, 34);
  confettiBtn.textContent = 'Я тебе кохаю ❤️';
});

function burst(x, y, count = 16) {
  const symbols = ['❤','♡','💗','💋','✨'];
  for (let i=0; i<count; i++) {
    const el = document.createElement('span');
    el.className = 'float-heart';
    el.textContent = symbols[Math.floor(Math.random()*symbols.length)];
    const dx = (Math.random() - .5) * 190;
    const dy = (Math.random() - .5) * 40;
    el.style.left = `${x + dx}px`;
    el.style.top = `${y + dy}px`;
    el.style.animationDuration = `${900 + Math.random()*900}ms`;
    document.body.appendChild(el);
    setTimeout(() => el.remove(), 1900);
  }
}

const canvas = document.getElementById('stars');
const ctx = canvas.getContext('2d');
let particles = [];
function resize(){
  canvas.width = window.innerWidth * devicePixelRatio;
  canvas.height = window.innerHeight * devicePixelRatio;
  ctx.setTransform(devicePixelRatio,0,0,devicePixelRatio,0,0);
  particles = Array.from({length: Math.min(120, Math.floor(window.innerWidth/9))}, () => ({
    x: Math.random()*window.innerWidth,
    y: Math.random()*window.innerHeight,
    r: Math.random()*1.5 + .25,
    s: Math.random()*.35 + .08,
    a: Math.random()*.55 + .1
  }));
}
function draw(){
  ctx.clearRect(0,0,window.innerWidth,window.innerHeight);
  particles.forEach(p => {
    p.y -= p.s;
    if (p.y < -5) { p.y = window.innerHeight + 5; p.x = Math.random()*window.innerWidth; }
    ctx.globalAlpha = p.a;
    ctx.beginPath();
    ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
    ctx.fillStyle = '#ffd6e0';
    ctx.fill();
  });
  requestAnimationFrame(draw);
}
resize();
draw();
window.addEventListener('resize', resize);

let typed = '';
document.addEventListener('keydown', (e) => {
  typed = (typed + e.key.toLowerCase()).slice(-10);
  if (typed.includes('настя') || typed.includes('анастасія')) {
    burst(window.innerWidth/2, window.innerHeight/2, 40);
    typed = '';
  }
});
