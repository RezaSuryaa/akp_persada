@forelse ($alats as $alat)
    <div class="col" data-aos="flip-up">
        <div class="alat-card">
            <!-- Gambar -->
            <img src="{{ asset('storage/' . $alat->gambar) }}" alt="{{ $alat->nama }}">

            <!-- Overlay -->
            <div class="alat-overlay">
                <div>{{ $alat->nama }}</div>
                <div class="alat-view-icon"
                    onclick="showImageModal('{{ asset('storage/' . $alat->gambar) }}', '{{ $alat->nama }}')">
                    <i class="fas fa-eye"></i>
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="col-12">
        <p class="text-center text-danger my-5">Tidak ada alat dalam kategori ini.</p>
    </div>
@endforelse