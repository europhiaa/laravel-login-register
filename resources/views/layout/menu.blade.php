<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
        Beranda
        </p>
    </a>
</li>

@if($user->level == 1)
<li class="nav-header">MASTER DATA</li>
<li class="nav-item">
    <a href="{{ url('kategori') }}" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
        Kategori
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('satuan') }}" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
        Satuan
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('produk') }}" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
        Produk
        </p>
    </a>
</li>
<li class="nav-header">TRANSAKSI</li>
<li class="nav-item">
    <a href="{{ url('pembelian') }}" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
        Pembelian
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('penjualan') }}" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart"></i>
        <p>
        Penjualan
        </p>
    </a>
</li>
<li class="nav-header">REPORT</li>
    <li class="nav-item">
        <a href="{{ url('laporan') }}" class="nav-link">
            <i class="nav-icon fas fa-print"></i>
            <p>
            Laporan
            </p>
        </a>
    </li>

@elseif($user->level == 2)
<li class="nav-header">TRANSAKSI</li>
<li class="nav-item">
    <a href="{{ url('penjualan') }}" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart"></i>
        <p>
        Penjualan
        </p>
    </a>
</li>
@endif
