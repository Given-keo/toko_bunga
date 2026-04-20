{{-- resources/views/components/navbar.blade.php --}}
<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
        <li class="dropdown"><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}"><span>Tentang</span></a></li>
        <li><a href="/services" class="{{ request()->is('services*') ? 'active' : '' }}">Layanan</a></li>
        <li><a href="/portfolio" class="{{ request()->is('portfolio*') ? 'active' : '' }}">Koleksi</a></li>
        <li><a href="/pricing" class="{{ request()->is('pricing*') ? 'active' : '' }}">Harga</a></li>
        <li><a href="/contact" class="{{ request()->is('contact*') ? 'active' : '' }}">Kontak</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>