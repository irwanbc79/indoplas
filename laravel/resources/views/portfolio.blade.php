<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portofolio Hasil Pekerjaan – CV. Indoplas Mandiri Sejahtera</title>
<meta name="description" content="Galeri hasil pekerjaan CV. Indoplas Mandiri Sejahtera – Kusen U-PVC, Aluminium, Rangka Baja Ringan, Kaca Tempered dan material bangunan premium di Aceh.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="/uploads/pasted-1777107361743-0.png">
<style>
:root{--blue:#1a52b8;--blue-dark:#0d2e6e;--gold:#d4a020;--white:#fafbff;--gray-light:#f2f4f8;--gray:#6b7280;--text:#1a1f2e;}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
html{scroll-behavior:smooth;}
body{font-family:'Nunito',sans-serif;background:var(--gray-light);color:var(--text);}
nav{background:var(--blue-dark);position:sticky;top:0;z-index:100;padding:0 32px;height:68px;display:flex;align-items:center;justify-content:space-between;box-shadow:0 2px 20px rgba(0,0,0,0.3);}
.nav-logo{display:flex;align-items:center;gap:10px;text-decoration:none;}
.nav-logo-text{font-family:'Nunito',sans-serif;font-weight:800;color:#fff;font-size:18px;line-height:1.1;}
.nav-back{color:rgba(255,255,255,.85);text-decoration:none;font-weight:600;font-size:14px;display:flex;align-items:center;gap:6px;}
.nav-back:hover{color:var(--gold);}
.page-hero{background:var(--blue-dark);padding:60px 32px;text-align:center;}
.page-hero h1{font-size:clamp(28px,4vw,48px);font-weight:900;color:#fff;margin-bottom:12px;}
.page-hero p{color:rgba(255,255,255,.75);font-size:16px;}
.section-center{max-width:1200px;margin:0 auto;padding:60px 24px;}
.posts-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(320px,1fr));gap:28px;margin-top:40px;}
.post-card{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 2px 16px rgba(0,0,0,.08);transition:transform .2s,box-shadow .2s;}
.post-card:hover{transform:translateY(-4px);box-shadow:0 8px 32px rgba(0,0,0,.14);}
.post-img-wrap{position:relative;height:240px;overflow:hidden;cursor:pointer;}
.post-img-wrap img{width:100%;height:100%;object-fit:cover;transition:transform .3s;}
.post-card:hover .post-img-wrap img{transform:scale(1.05);}
.photo-count{position:absolute;bottom:8px;right:8px;background:rgba(0,0,0,.6);color:#fff;font-size:12px;padding:2px 10px;border-radius:20px;}
.post-body{padding:18px 22px 22px;}
.post-category{font-size:11px;font-weight:700;color:var(--blue);background:#e8f0fd;padding:2px 10px;border-radius:20px;text-transform:uppercase;letter-spacing:.5px;}
.post-title{font-weight:800;font-size:17px;margin:10px 0 6px;color:var(--text);}
.post-loc{font-size:13px;color:var(--gray);margin-bottom:8px;}
.post-narration{font-size:13px;color:var(--gray);line-height:1.65;display:-webkit-box;-webkit-line-clamp:4;-webkit-box-orient:vertical;overflow:hidden;}
.post-date{font-size:11px;color:var(--gray);margin-top:12px;}
.pagination-wrap{display:flex;justify-content:center;gap:8px;padding:40px 0;}
.pagination-wrap a,.pagination-wrap span{padding:8px 16px;border-radius:8px;font-weight:600;font-size:14px;text-decoration:none;}
.pagination-wrap .active span{background:var(--blue);color:#fff;}
.pagination-wrap a{background:#fff;color:var(--blue);border:1px solid #dde3f0;}
.pagination-wrap a:hover{background:var(--blue);color:#fff;}
/* Lightbox */
.lightbox{display:none;position:fixed;inset:0;background:rgba(0,0,0,.92);z-index:9999;align-items:center;justify-content:center;flex-direction:column;}
.lightbox.active{display:flex;}
.lightbox img{max-width:90vw;max-height:80vh;object-fit:contain;border-radius:8px;}
.lightbox-close{position:absolute;top:20px;right:28px;color:#fff;font-size:36px;cursor:pointer;font-weight:300;}
.lightbox-nav{display:flex;gap:24px;margin-top:16px;}
.lightbox-nav button{background:rgba(255,255,255,.15);border:none;color:#fff;padding:8px 20px;border-radius:8px;cursor:pointer;font-size:18px;}
.lightbox-nav button:hover{background:rgba(255,255,255,.3);}
.lightbox-counter{color:rgba(255,255,255,.7);font-size:13px;margin-top:8px;}
footer-bar{background:var(--blue-dark);padding:20px 32px;text-align:center;color:rgba(255,255,255,.6);font-size:13px;}
</style>
</head>
<body>
<nav>
  <a href="/" class="nav-logo">
    <div style="width:42px;height:42px;border-radius:50%;overflow:hidden;flex-shrink:0;"><img src="/uploads/pasted-1777107361743-0.png" style="width:100%;height:100%;object-fit:cover;"></div>
    <div class="nav-logo-text">CV. Indoplas<br>Mandiri Sejahtera</div>
  </a>
  <a href="/" class="nav-back">← Kembali ke Beranda</a>
</nav>

<div class="page-hero">
  <h1>📋 Portofolio Hasil Pekerjaan</h1>
  <p>Dokumentasi nyata proyek yang telah kami selesaikan di seluruh wilayah Aceh</p>
</div>

<div class="section-center">
  @if($posts->isEmpty())
    <div style="text-align:center;padding:80px 0;color:var(--gray);">
      <div style="font-size:48px;margin-bottom:16px;">🏗️</div>
      <h3>Belum ada posting hasil pekerjaan</h3>
      <p style="margin-top:8px;font-size:14px;">Tambahkan dari panel admin</p>
    </div>
  @else
  <div class="posts-grid">
    @foreach($posts as $post)
    @php $photos = $post->getMedia('photos'); @endphp
    <div class="post-card">
      @if($photos->isNotEmpty())
      <div class="post-img-wrap" onclick="openLightbox({{ json_encode($photos->map(fn($m) => $m->getUrl('display'))->values()) }}, 0)">
        <img src="{{ $photos->first()->getUrl('display') }}" alt="{{ $post->title }}" loading="lazy">
        @if($photos->count() > 1)
        <div class="photo-count">📷 {{ $photos->count() }} foto</div>
        @endif
      </div>
      @endif
      <div class="post-body">
        @if($post->category)
        <span class="post-category">{{ $post->category }}</span>
        @endif
        <h3 class="post-title">{{ $post->title }}</h3>
        @if($post->location)
        <div class="post-loc">📍 {{ $post->location }}</div>
        @endif
        @if($post->narration)
        <p class="post-narration">{{ $post->narration }}</p>
        @endif
        <div class="post-date">{{ $post->posted_at->translatedFormat('d F Y') }}</div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="pagination-wrap">{{ $posts->links() }}</div>
  @endif
</div>

<div style="background:var(--blue-dark);padding:20px 32px;text-align:center;color:rgba(255,255,255,.6);font-size:13px;display:flex;justify-content:center;align-items:center;flex-wrap:wrap;gap:8px 16px;">
  <span>© {{ date('Y') }} CV. Indoplas Mandiri Sejahtera — <a href="/" style="color:var(--gold);text-decoration:none;">Kembali ke Beranda</a></span>
  <span style="opacity:0.8;">Powered by: <a href="https://morabangun.com" target="_blank" style="color:var(--gold);text-decoration:none;">morabangun.com</a></span>
</div>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" onclick="if(event.target===this)closeLightbox()">
  <span class="lightbox-close" onclick="closeLightbox()">×</span>
  <img id="lightbox-img" src="" alt="">
  <div class="lightbox-nav" id="lightbox-nav">
    <button onclick="changeLightbox(-1)">‹ Prev</button>
    <button onclick="changeLightbox(1)">Next ›</button>
  </div>
  <div class="lightbox-counter" id="lightbox-counter"></div>
</div>

<script>
let lbUrls = [], lbIdx = 0;
function openLightbox(urls, idx) {
  lbUrls = urls; lbIdx = idx;
  document.getElementById('lightbox-img').src = lbUrls[lbIdx];
  document.getElementById('lightbox').classList.add('active');
  document.getElementById('lightbox-nav').style.display = lbUrls.length > 1 ? 'flex' : 'none';
  updateCounter();
}
function closeLightbox() { document.getElementById('lightbox').classList.remove('active'); }
function changeLightbox(dir) {
  lbIdx = (lbIdx + dir + lbUrls.length) % lbUrls.length;
  document.getElementById('lightbox-img').src = lbUrls[lbIdx];
  updateCounter();
}
function updateCounter() {
  document.getElementById('lightbox-counter').textContent = lbUrls.length > 1 ? (lbIdx+1) + ' / ' + lbUrls.length : '';
}
document.addEventListener('keydown', e => { if(e.key==='Escape') closeLightbox(); if(e.key==='ArrowLeft') changeLightbox(-1); if(e.key==='ArrowRight') changeLightbox(1); });
</script>
</body>
</html>
