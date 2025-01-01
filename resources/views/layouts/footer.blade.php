<!-- Section Feedback -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Feedback Text -->
            <div class="col-md-6">
                <div>
                    <h2 class="fw-bold">Feedback</h2>
                    <p>
                        Pesan dan Masukkan dari anda sangat berharga bagi kami untuk kemajuan dan perkembangan 
                        yang lebih baik lagi bagi Rumah Tahfidz Quran kedepannya.
                    </p>
                </div>
            </div>

            <!-- Feedback Form -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm bg-white rounded">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
                        </div>
                        <div class="mb-3">
                            <label for="feedback" class="form-label">Pesan Feedback</label>
                            <textarea name="feedback" id="feedback" rows="5" class="form-control" placeholder="Masukkan pesan feedback" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-send"></i> Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Banner -->
<section class="py-5" style="background: linear-gradient(90deg, #2c9f3e, #28a745); color: white;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Gambar -->
            <div class="col-md-6 text-start">
                <img src="{{asset('assets/images/Frame 21.png')}}" alt="Pengajar" class="img-fluid" style="max-height: 300px;">
            </div>
            
            <!-- Teks dan Tombol -->
            <div class="col-md-6 text-end">
                <h3 class="fw-bold mb-3">Daftar Sekarang</h3>
                <p class="fs-4 mb-4">Kuota Terbatas</p>
                <div class="d-flex justify-content-end gap-3 mb-4">
                    <a href="#feedback" class="btn btn-warning text-dark fw-bold px-4">Feedback</a>
                    <a href="#" class="btn btn-light fw-bold px-4">Daftar Sekarang</a>
                </div>
                <div class="text-white">
                    <p class="mb-0">Informasi Pendaftaran: <span class="fw-bold">Telp. 0812-2451-1538</span></p>
                    <p class="mb-0">Email: <span class="fw-bold">baqpekayon@gmail.com</span></p>
                </div>
            </div>
        </div>
    </div>  
</section>  

<!-- Section Sosial Media -->
<section class="py-3" style="background: #28a745; color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center flex-wrap text-center text-md-start">
                <!-- Informasi Kontak -->
                <div class="d-flex flex-column flex-md-row gap-2">
                    <p class="mb-0">Informasi Pendaftaran: <span class="fw-bold">Telp. 0812-2451-1538</span></p>
                    <p class="mb-0">Informasi Lebih Lanjut: <span class="fw-bold">baqpekayon@gmail.com</span></p>
                </div>

                <!-- Sosial Media -->
                <div class="d-flex gap-3 mt-2 mt-md-0">
                    <a href="#" class="text-white d-flex align-items-center gap-1">
                        <i class="bi bi-instagram"></i> Baqpekayon
                    </a>
                    <a href="#" class="text-white d-flex align-items-center gap-1">
                        <i class="bi bi-facebook"></i> Baqpekayon
                    </a>
                    <a href="#" class="text-white d-flex align-items-center gap-1">
                        <i class="bi bi-youtube"></i> Baqpekayon
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>