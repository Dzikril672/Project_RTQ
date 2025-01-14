@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="frame-9">
                            <h3 class="primay">Form Pendaftaran</h3>
                            <form id=formDaftar method="POST" action="{{ route('daftar.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <h5>Data Peserta Didik</h5>
                                </div>
                                <div class="mb-3">
                                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="frame-input" id="namaLengkap" aria-describedby="namaLengkap" name="namaLengkap" required>
                                </div>
                                <div class="mb-3">
                                    <label for="namaPanggilan" class="form-label">Nama Panggilan</label>
                                    <input type="text" class="frame-input" id="namaPanggilan" aria-describedby="namaPanggilan" name="namaPanggilan" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="frame-input" aria-label="Default select example" id="jenisKelamin" name="jenisKelamin" required>
                                        <option value="">- pilih -</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="frame-input" id="tempatLahir" aria-describedby="tempatLahir" name="tempatLahir" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                    {{-- <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group date" id="tanggalLahir" name="tanggalLahir">
                                                <input type="text" class="frame-input" id="tanggalLahir1" name="tanggalLahir1" style="width: 90%" id="date"/>
                                                <span class="input-group-append">
                                                  <span class="input-group-text bg-light d-block">
                                                    <i class="fa fa-calendar"></i>
                                                  </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <input type="date" class="frame-input" id="tanggalLahir" aria-describedby="tanggalLahir" name="tanggalLahir" required>                                       
                                </div>
                                <div class="mb-3">
                                    <label for="alamatLengkap" class="form-label">Alamat Lengkap</label>
                                    <textarea class="frame-input" id="alamatLengkap" aria-describedby="alamatLengkap" name="alamatLengkap" rows="4" cols="50" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Apakah anda sebelumnya bersekolah ?</label>
                                    <select class="frame-input" aria-label="Default select example" id="status" name="status" required>
                                        <option value="">- pilih -</option>
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                </div>

                                <div id="form-sekolah" style="display: none">
                                    <div class="mb-3">
                                        <label for="asalSekolah" class="form-label">Asal Sekolah</label>
                                        <input type="text" class="frame-input" id="asalSekolah" aria-describedby="asalSekolah" name="asalSekolah">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamatSekolah" class="form-label">Alamat Sekolah</label>
                                        <textarea class="frame-input" id="alamatSekolah" aria-describedby="alamatSekolah" name="alamatSekolah" rows="4" cols="50"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nisn" class="form-label">NISN</label>
                                        <input type="number" class="frame-input" id="nisn" aria-describedby="nisn" name="nisn">
                                    </div>
                                    <div class="mb-3">
                                        <label for="npsn" class="form-label">NPSN</label>
                                        <input type="number" class="frame-input" id="npsn" aria-describedby="npsn" name="npsn">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="number" class="frame-input" id="nik" aria-describedby="nik" name="nik" required>
                                </div>
                                <div class="mb-3">
                                    <label for="anakKe" class="form-label">Anak Ke-</label>
                                    <input type="number" class="frame-input" id="anakKe" aria-describedby="anakKe" name="anakKe" required>
                                </div>
                                <div class="mb-4">
                                    <label for="jumlahSaudara" class="form-label">Jumlah Saudara Kandung</label>
                                    <input type="number" class="frame-input" id="jumlahSaudara" aria-describedby="jumlahSaudara" name="jumlahSaudara" required>
                                </div>

                                <div class="mb-3">
                                    <h5>Data Orang Tua/Wali Peserta Didik</h5>
                                </div>
                                <div class="mb-3">
                                    <label for="namaAyah" class="form-label">Nama Ayah/Wali</label>
                                    <input type="text" class="frame-input" id="namaAyah" aria-describedby="namaAyah" name="namaAyah" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pekerjaanAyah" class="form-label">Pekerjaan</label>
                                    <input type="text" class="frame-input" id="pekerjaanAyah" aria-describedby="pekerjaanAyah" name="pekerjaanAyah" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pendidikanAyah" class="form-label">Pendidikan</label>
                                    <input type="text" class="frame-input" id="pendidikanAyah" aria-describedby="pendidikanAyah" name="pendidikanAyah" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamatAyah" class="form-label">Alamat Lengkap</label>
                                    <textarea class="frame-input" id="alamatAyah" aria-describedby="alamatAyah" name="alamatAyah" rows="4" cols="50" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="namaibu" class="form-label">Nama Ibu</label>
                                    <input type="text" class="frame-input" id="namaIbu" aria-describedby="namaIbu" name="namaIbu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pekerjaanIbu" class="form-label">Pekerjaan</label>
                                    <input type="text" class="frame-input" id="pekerjaanIbu" aria-describedby="pekerjaanIbu" name="pekerjaanIbu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pendidikanIbu" class="form-label">Pendidikan</label>
                                    <input type="text" class="frame-input" id="pendidikanIbu" aria-describedby="pendidikanIbu" name="pendidikanIbu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamatIbu" class="form-label">Alamat Lengkap</label>
                                    <textarea class="frame-input" id="alamatIbu" aria-describedby="alamatIbu" name="alamatIbu" rows="4" cols="50" required></textarea>
                                </div>
                                    
                                <div class="mb-3">
                                    <label for="kartuKeluarga" class="form-label">Upload Kartu Keluarga (KK)</label> 
                                    <input type="file" class="frame-input" id="kartuKeluarga" name="kartuKeluarga" accept=".jpg, .jpeg, .png, .svg, .pdf" required>
                                </div>
                                <div class="mb-5">  
                                    <label for="aktaKelahiran" class="form-label">Upload Akta Kelahiran</label> 
                                    <input type="file" class="frame-input" id="aktaKelahiran" name="aktaKelahiran" accept=".jpg, .jpeg, .png, .svg, .pdf" required>
                                </div>

                                {{-- <div class="mb-3">
                                    <label for="alamatSekolah" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" aria-describedby="pekerjaan" name="pekerjaan">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> --}}

                                <button type="submit" id="kirim" name="kirim" class="btn w-100 kirim" style="background-color: var(--primay-2); color: var(--white-1);">
                                    <i class="fa fa-send-o"></i> Kirim
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="frame-mini" style="background-color: var(--white-2);">
                            <h6>Syarat dan Ketentuan</h6>
                            <div class="label">
                                <ol type="1">
                                    <li>Minimal anak berusia 2,5 - 12 Tahun</li>
                                    <li>Mengikuti tes kemampuan membaca Al Quran dan hafalan</li>
                                    <li>Menyerahkan Fotocopy Akta Kelahiran dan Kartu Keluarga(KK)</li>
                                    <li>Mengisi Formulir Pendaftaran(bisa langsung di kantor RTQ atau via online)</li>
                                    <li>Membayar administrasi
                                        <ol type="a">
                                            <li>Pendaftaran Rp.100.000(dapat kartu identitas dan buku metode alif laam miim)</li>
                                            <li>Infaq bulanan Rp.150.000(dibayar setelah 1 bulan)</li>
                                        </ol>
                                    <li>Memiliki kemauan yang kuat dalam menghafal Alquran antara orang tua dan anak</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="frame-mini" style="background-color: var(--acsend-1);">
                            <h6>Waktu dan Tempat Pendaftaran Offline</h6>
                            <div class="label">
                                <ol type="1">
                                    <li>Senin s/d Kamis
                                        <ol type="a">
                                            <li>Pagi 06.30 - 08.00 WIB</li>
                                            <li>Sore 15.30 - 17.30 WIB</li>
                                            <li>Malam 17.30 - 20.00 WIB</li>
                                        </ol>
                                    </li>
                                    <li>Jum’at
                                        <ol type="a">
                                            <li>Pagi 07.00 - 10.00 WIB</li>
                                        </ol>
                                    </li>
                                    <li>Sabtu s/d Ahad
                                        <ol type="a">
                                            <li>Sabtu s/d Ahad</li>
                                        </ol>
                                    </li>
                                </ol>

                                <b>RTQ.Alif Laam Miim Pekayon</b>
                                <p>Gg.H. Tabrih No.15-16 Rt/Rw 003/022 Kel.Pekayon Jaya Kec.Bekasi Selatan 17148</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
@endsection

@push('myscript')
    <script>
        $(document).ready(function() {
            $('#status').on('change', function(e) {
                $('#form-sekolah').toggle($(this).val() === 'Ya');

                // let status = $(this).val();
                // let form = $('#form-sekolah');
                // console.log(status);

                // if (status === 'Ya') {
                //     form.show();
                // } else {
                //     form.hide();
                // }
            })
        });

        $(function(){
            $("#formDaftar").submit(function(e){  
                e.preventDefault();
                Swal.fire({
                    title: "Pendaftaran Berhasil!",
                    text: "Admin akan menghubungi anda secepatnya untuk tahap selanjutnya",
                    icon: "success",
                    confirmButtonText: "Terima Kasih",
                    allowOutsideClick: false,
                    customClass: {
                        title: 'my-title-class', // Class untuk judul
                        content: 'my-content-class', // Class untuk teks konten
                        confirmButton: 'my-confirm-button-class' // Class untuk tombol konfirmasi
                        // Anda juga bisa menambahkan class untuk tombol cancel, popup, icon, dll.
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        });
    </script>
@endpush