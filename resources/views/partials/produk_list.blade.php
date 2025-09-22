@forelse ($produks as $produk)
    <div class="col" data-aos="flip-up">
        <div class="produk-card">
            <!-- Gambar -->
            <div class="produk-image-wrapper">
                <span class="produk-badge">SAMPLE</span>
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}">
            </div>

            <!-- Nama + Icon -->
            <div class="produk-footer">
                <p class="produk-nama">{{ $produk->nama }}</p>
                <div class="produk-view-icon"
                    onclick="showImageModal('{{ asset('storage/' . $produk->gambar) }}', '{{ $produk->nama }}')">
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