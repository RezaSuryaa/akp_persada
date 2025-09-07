@forelse ($alats as $alat)
<div class="col-md-3">
    <div class="alat-card">
        <a href="{{ asset('storage/' . $alat->gambar) }}" target="_blank">
            <img src="{{ asset('storage/' . $alat->gambar) }}" alt="{{ $alat->nama }}">
            <div class="alat-overlay">{{ $alat->nama }}</div>
        </a>
    </div>
</div>
@empty
<p class="text-center text-danger">Tidak ada alat dalam kategori ini.</p>
@endforelse