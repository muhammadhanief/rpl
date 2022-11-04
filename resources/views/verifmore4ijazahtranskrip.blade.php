@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Formulir Pengajuan') }}</h1>

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
<div class="alert alert-success border-left-success" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="container-fluid">

    <!-- Page Heading -->
    <form>
        <div class="row">

            <div class="col-lg-6">

                <!-- Detail Pengajuan -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Detail Pengajuan</h6>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Nama</th>
                                <th>{{ Auth::user()->name }}</th>
                            </tr>
                            <tr>
                                <th>NIM</th>
                                <th>{{ Auth::user()->nim }}</th>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <th>{{ Auth::user()->nip }}</th>
                            </tr>
                            <tr>
                                <th>Nomor Ponsel</th>
                                <th>{{ Auth::user()->nomorPonsel }}</th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>{{ Auth::user()->email }}</th>
                            </tr>
                            <tr>
                                <th>TTL</th>
                                <th>{{ Auth::user()->tempatLahir }} {{ Auth::user()->tanggalLahir }}</th>
                            </tr>
                            <tr>
                                <th>Jurusan</th>
                                <th>{{ Auth::user()->jurusan }}</th>
                            </tr>
                            <tr>
                                <th>Tahun Lulus</th>
                                <th>{{ Auth::user()->tahunLulus }}</th>
                            </tr>
                        </table>
                        <p>Metode Pengambilan</p>
                        <div class="form-group">
                            <select id="metodePengambilan" name="metodePengambilan"
                                class="form-select form-control bg-light border-0 small">
                                <option value="1">Diemail ke alamat pemohon dalam bentuk hasil scan</option>
                                <option value="2">Diambil di kampus Polstat STIS langsung oleh pemohon</option>
                                <option value="3">Diambil di kampus Polstat STIS oleh orang lain yang telah diberi kuasa
                                </option>
                                <option value="4">Dikirimkan via pos</option>

                            </select>
                            <!-- <input type="text" class="form-control form-control-user" name="jurusan"
                                            placeholder="{{ __('Jurusan') }}" value="{{ old('jurusan') }}" required
                                            autofocus> -->
                        </div>
                        <form class="navbar-search">

                            <!-- Jika opsi yang dipilih nomer 4 -->
                            <!-- <div> Alamat Pengiriman
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small"
                                                    placeholder="" aria-label="Search" aria-describedby="basic-addon2">
                                            </div>
                                        </div> -->

                            <!-- Jika opsi yang dipilih nomer 1 -->
                            <!-- <div> Email 
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small"
                                                    placeholder="" aria-label="Search" aria-describedby="basic-addon2">
                                            </div>
                                        </div> -->
                        </form>

                    </div>

                </div>

                <div class="card shadow mb-4">
                    <div class="card-header d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-check"></i>&nbsp;Terima
                        </button> &nbsp;
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-times"></i>&nbsp;Tolak
                        </button>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Lampiran Dokumen</h6>
                    </div>
                    <div class="card-body">
                        <!-- Wajib -->
                        <b>Dokumen Wajib</b><br>
                        <br>
                        
                        <p class="ms-auto">Surat Permohonan Legalisir <br><a
                                href="Mengarah ke filepath surat"
                                target=”_blank” class="btn btn-sm btn-primary btn-icon-split" aria-hidden="true"><span
                                    class="icon text-light">
                                    <i class='fa fa-eye'></i>
                                </span>
                                <span class="text">Lihat File</span></a></p>
                        
                        <!-- Hanya untuk legalisir Ijazah atau Transkrip > 4 tahun -->
                        <b>Dokumen Bahasa Inggris</b> (Opsional)<br>
                                    <p>Bukti Pendaftaran Kampus Luar Negeri
                                            <a
                                        href="Mengarah ke filepath surat"
                                        target=”_blank” class="btn btn-sm btn-primary btn-icon-split" aria-hidden="true"><span
                                            class="icon text-light">
                                            <i class='fa fa-eye'></i>
                                        </span>
                                        <span class="text">Lihat File</span></a></p>
                                    </p>

                        <!-- Hanya untuk Diambil langsung oleh Orang lain -->
                        <!-- <p>Surat Kuasa<br>
                                        <a
                                        href="Mengarah ke filepath surat"
                                        target=”_blank” class="btn btn-sm btn-primary btn-icon-split" aria-hidden="true"><span
                                            class="icon text-light">
                                            <i class='fa fa-eye'></i>
                                        </span>
                                        <span class="text">Lihat File</span></a></p>
                                    </p> -->

                        </p>
                    </div>
                </div>

            </div>
    </form>
</div>
@endsection

