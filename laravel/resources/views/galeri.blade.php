<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri Foto – CV. Indoplas Mandiri Sejahtera</title>
<meta name="description" content="Galeri foto toko, gudang, workshop, dan produk CV. Indoplas Mandiri Sejahtera — material bangunan premium di Aceh.">
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
.photo-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:20px;}
.photo-item{position:relative;border-radius:14px;overflow:hidden;background:#fff;box-shadow:0 2px 12px rgba(0,0,0,.08);cursor:pointer;aspect-ratio:4/3;transition:transform .2s,box-shadow .2s;}
.photo-item:hover{transform:translateY(-4px);box-shadow:0 8px 28px rgba(0,0,0,.15);}
.photo-item img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .3s;}
.photo-item:hover img{transform:scale(1.06);}
.photo-overlay{position:absolute;inset:0;background:rgba(13,46,110,0.45);opacity:0;transition:opacity .2s;display:flex;align-items:center;justify-content:center;}
.photo-item:hover .photo-overlay{opacity:1;}
.photo-overlay-icon{font-size:36px;color:#fff;}
.photo-caption{position:absolute;bottom:0;left:0;right:0;padding:10px 14px;background:linear-gradient(to top,rgba(0,0,0,.65),transparent);color:#fff;font-size:13px;font-weight:600;}
.empty-state{text-align:center;padding:80px 24px;color:var(--gray);}
.empty-state svg{width:80px;height:80px;margin:0 auto 24px;opacity:.3;}
.empty-state h3{font-size:20px;font-weight:700;margin-bottom:8px;color:var(--text);}
.pagination-wrap{display:flex;justify-content:center;gap:8px;padding:48px 0 0;}
.pagination-wrap a,.pagination-wrap span{padding:8px 16px;border-radius:8px;font-weight:600;font-size:14px;text-decoration:none;}
.pagination-wrap .active span{background:var(--blue);color:#fff;}
.pagination-wrap a{background:#fff;color:var(--blue);border:1px solid #dde3f0;}
.pagination-wrap a:hover{background:var(--blue);color:#fff;}
/* Lightbox */
.lightbox{display:none;position:fixed;inset:0;background:rgba(0,0,0,.92);z-index:9999;align-items:center;justify-content:center;}
.lightbox.active{display:flex;}
.lightbox-img{max-width:90vw;max-height:88vh;object-fit:contain;border-radius:10px;box-shadow:0 8px 48px rgba(0,0,0,.6);}
.lightbox-close{position:absolute;top:20px;right:24px;background:rgba(255,255,255,.15);border:none;color:#fff;font-size:22px;width:44px;height:44px;border-radius:50%;cursor:pointer;}
.lightbox-close:hover{background:rgba(255,255,255,.3);}
.lightbox-prev,.lightbox-next{position:absolute;top:50%;transform:translateY(-50%);background:rgba(255,255,255,.15);border:none;color:#fff;font-size:28px;width:56px;height:56px;border-radius:50%;cursor:pointer;}
.lightbox-prev:hover,.lightbox-next:hover{background:rgba(255,255,255,.3);}
.lightbox-prev{left:20px;}
.lightbox-next{right:20px;}
.lightbox-caption{position:absolute;bottom:24px;left:50%;transform:translateX(-50%);color:#fff;font-size:14px;background:rgba(0,0,0,.5);padding:6px 20px;border-radius:20px;white-space:nowrap;}
footer{background:var(--blue-dark);color:rgba(255,255,255,.7);text-align:center;padding:24px;font-size:13px;}
footer a{color:var(--gold);text-decoration:none;}
@media(max-width:640px){.photo-grid{grid-template-columns:repeat(2,1fr);gap:12px;}.lightbox-prev{left:8px;}.lightbox-next{right:8px;}}
</style>
</head>
<body>

<nav>
  <a class="nav-logo" href="/">
    <img src="/uploads/pasted-1777107361743-0.png" alt="Indoplas Logo" style="height:40px;width:40px;border-radius:50%;object-fit:cover;">
    <span class="nav-logo-text">CV. Indoplas<br><span style="font-size:12px;font-weight:600;opacity:.8;">Mandiri Sejahtera</span></span>
  </a>
  <a class="nav-back" href="/#galeri">&#8592; Kembali ke Beranda</a>
</nav>

<div class="page-hero">
  <h1>Galeri Foto</h1>
  <p>Dokumentasi toko, gudang, workshop, dan produk CV. Indoplas Mandiri Sejahtera</p>
</div>

<div class="section-center">
  @if($photos->isNotEmpty())
  @php
    $lightboxUrls = $photos->map(fn($p) => $p->getFirstMediaUrl('photo','display') ?: $p->getFirstMediaUrl('photo'))->filter()->values()->toArray();
    $lightboxTitles = $photos->map(fn($p) => $p->title ?: 'Galeri Indoplas')->values()->toArray();
  @endphp

  <div class="photo-grid">
    @foreach($photos as $i => $photo)
    @php
      $thumbUrl = $photo->getFirstMediaUrl('photo','thumb') ?: $photo->getFirstMediaUrl('photo');
      $displayUrl = $photo->getFirstMediaUrl('photo','display') ?: $photo->getFirstMediaUrl('photo');
    @endphp
    @if($thumbUrl)
    <div class="photo-item" onclick="openLightbox({{ $i }})">
      <img src="{{ $thumbUrl }}" alt="{{ $photo->title ?: 'Galeri Indoplas' }}" loading="lazy">
      <div class="photo-overlay"><span class="photo-overlay-icon">&#128269;</span></div>
      @if($photo->title)
      <div class="photo-caption">{{ $photo->title }}</div>
      @endif
    </div>
    @endif
    @endforeach
  </div>

  @if($photos->hasPages())
  <div class="pagination-wrap">
    {{ $photos->links() }}
  </div>
  @endif

  @else
  <div class="empty-state">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
    <h3>Belum ada foto galeri</h3>
    <p>Foto akan ditampilkan setelah diunggah melalui panel admin.</p>
  </div>
  @endif
</div>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
  <button class="lightbox-close" onclick="event.stopPropagation();closeLightbox()">&#10005;</button>
  <button class="lightbox-prev" onclick="event.stopPropagation();navLightbox(-1)">&#8592;</button>
  <img class="lightbox-img" id="lightboxImg" src="" alt="" onclick="event.stopPropagation()">
  <div class="lightbox-caption" id="lightboxCaption"></div>
  <button class="lightbox-next" onclick="event.stopPropagation();navLightbox(1)">&#8594;</button>
</div>

<footer>
  &copy; <span id="yr"></span> CV. Indoplas Mandiri Sejahtera &mdash; <a href="/">Kembali ke Beranda</a>
</footer>

<script>
document.getElementById('yr').textContent = new Date().getFullYear();

@if($photos->isNotEmpty())
var _urls = {!! json_encode($lightboxUrls) !!};
var _titles = {!! json_encode($lightboxTitles) !!};
@else
var _urls = [], _titles = [];
@endif
var _idx = 0;

function openLightbox(i) {
  _idx = i;
  var lb = document.getElementById('lightbox');
  lb.classList.add('active');
  document.body.style.overflow = 'hidden';
  _setLightbox();
}
function _setLightbox() {
  document.getElementById('lightboxImg').src = _urls[_idx] || '';
  document.getElementById('lightboxCaption').textContent = (_titles[_idx] || '') + ' (' + (_idx + 1) + '/' + _urls.length + ')';
}
function navLightbox(dir) {
  _idx = (_idx + dir + _urls.length) % _urls.length;
  _setLightbox();
}
function closeLightbox() {
  document.getElementById('lightbox').classList.remove('active');
  document.body.style.overflow = '';
}
document.addEventListener('keydown', function(e) {
  if (!document.getElementById('lightbox').classList.contains('active')) return;
  if (e.key === 'ArrowLeft') navLightbox(-1);
  if (e.key === 'ArrowRight') navLightbox(1);
  if (e.key === 'Escape') closeLightbox();
});
</script>
</body>
</html>
