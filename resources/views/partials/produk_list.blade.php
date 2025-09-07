@forelse ($produks as $produk)
<div class="col-md-3">
    <div class="produk-card">
        <a href="{{ asset('storage/' . $produk->gambar) }}" target="_blank">
            <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}">
            <div class="produk-overlay">{{ $produk->nama }}</div>
        </a>
    </div>
</div>
@empty
<p class="text-center text-danger">Tidak ada produk dalam kategori ini.</p>
@endforelse