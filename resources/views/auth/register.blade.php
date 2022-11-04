@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body px-4 pt-0 pb-4">
                    <div class="row">
                        <div class="col-lg-5 d-flex px-1">
                            <img src="{{ asset('img/stis.png') }}" class="img-fluid m-auto justify-content-center pl-4"
                                style="background-position:center;background-size:cover">
                        </div>
                        <div class="col-lg-7">
                            <div class="text-center pt-5">
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
                            </div>
                            <div class="row p-2">
                                @if ($errors->any())
                                <div class="alert alert-danger border-left-danger" role="alert">
                                    <ul class="pl-4 my-2">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                            <form method="POST" action="{{ route('register') }}" class="user"
                                enctype="multipart/form-data">
                                <div class="row p-2">
                                    <div class="col-md-6 pl-2">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="name"
                                                placeholder="{{ __('Nama') }}" value="{{ old('name') }}" required
                                                autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="nip"
                                                placeholder="{{ __('NIP') }}" value="{{ old('nip') }}" required
                                                autofocus>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="nim"
                                                placeholder="{{ __('NIM') }}" value="{{ old('nim') }}" required
                                                autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="tahunLulus"
                                                placeholder="{{ __('Tahun Lulus') }}" value="{{ old('tahunLulus') }}"
                                                required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <select id="jurusan" name="jurusan"
                                                class="form-select py-3 form-control-user w-100" style="width:fi;">
                                                <option value="DIV Komputasi Statistik">DIV Komputasi Statistik</option>
                                                <option value="DIV Statistika">DIV Statistika</option>
                                                <option value="DIII Statistika">DIII Statistika</option>
                                            </select>
                                            <!-- <input type="text" class="form-control form-control-user" name="jurusan"
                                                placeholder="{{ __('Jurusan') }}" value="{{ old('jurusan') }}" required
                                                autofocus> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control form-control-user"
                                                name="tanggalLahir" placeholder="{{ __('Tanggal Lahir') }}"
                                                value="{{ old('tanggalLahir') }}" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="tempatLahir"
                                                placeholder="{{ __('Tempat Lahir') }}" value="{{ old('tempatLahir') }}"
                                                required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control form-control-user" name="nomorPonsel"
                                                placeholder="{{ __('Nomor Ponsel') }}" value="{{ old('nomorPonsel') }}"
                                                required>
                                        </div>

                                        <!-- <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="last_name"
                                                placeholder="{{ __('Last Name') }}" value="{{ old('last_name') }}" required>
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email"
                                                placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}"
                                                required>
                                        </div> -->
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email"
                                                placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}"
                                                required>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>SK Penempatan 1 BPS</label>
                                            <input type="file" class="form-label form-control-user" name="skpenempatan1bps"
                                                placeholder=" {{ __('SK Penempatan 1 BPS') }}"
                                                value="{{ old('skpenempatan1bps') }}" required>
                                        </div> -->
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="{{ __('Password') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password_confirmation" placeholder="{{ __('Ulangi Password') }}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="justify-content-md-center">
                                    <div class="form-group col-md-auto">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Register') }}
                                        </button>
                                    </div>

                                </div>
                            </form>
                            <div class="text-center pb-2">
                                <a class="small" href="{{ route('login') }}">
                                    {{ __('Sudah punya akun? Login!') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection