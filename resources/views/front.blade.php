@extends('layouts.front.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">App</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid pb-5">

            @if (empty($diagnosa))
                <div class="pl-3 pr-3">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('/') }}assets/images/application/img-sakit-1.jpg" alt="" class="img-thumbnail">
                        </div>
                        <div class="col-md-6">
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <p class="mb-0">Masukkan Nama dan Alamat untuk memulai diagnosa.
                                </p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                                </button>
                            </div>

                            <form action="{{ route('front_check_pasien') }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama_pasien" id="nama_pasien" value="{{ old('nama_pasien') }}" placeholder="Nama" class="form-control nama_pasien @error('nama_pasien') is-invalid @enderror">
                                    @error('nama_pasien')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" id="alamat" placeholder="Alamat" class="form-control alamat @error('alamat') is-invalid @enderror" cols="30" rows="3">{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-chevron-right"></i> Lanjut</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif

            @if (!empty($diagnosa))
                <div class="pl-3 pr-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kode Diagnosa</label>
                                <input type="text" name="" id="" value="{{ $diagnosa->kode_diagnosa }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Diagnosa</label>
                                <input type="text" name="" id="" value="{{ $diagnosa->created_at }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="" id="" value="{{ $diagnosa->nama_pasien }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="" id="" class="form-control" cols="30" rows="3" readonly>{{ $diagnosa->alamat }}</textarea>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('front_store_diagnosa_detail') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_diagnosa" id="id_diagnosa" value="{{ $diagnosa->id_diagnosa }}">

                                <label for="">Pilih Gejala</label>
                                <div class="row">
                                    @foreach ($gejalas as $gejala)
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="gejala_{{ $gejala->id_gejala }}" name="gejala[]" value="{{ $gejala->id_gejala }}" @if (in_array($gejala->id_gejala, $diagnosa_details->pluck('id_gejala')->toArray())) checked @endif>
                                                <label class="form-check-label" for="gejala_{{ $gejala->id_gejala }}">
                                                    {{ $gejala->nama_gejala }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-plus"></i> Tambah Gejala</button>
                            </form>

                            <br>
                            @if (session('success') || session('error'))
                                <div class="alert  alert-{{ session('success') ? 'success' : 'danger' }} alert-dismissible fade show" role="alert">
                                    <p class="mb-0">{{ session('success') ? session('success') : session('error') }}</p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                                    </button>
                                </div>
                            @endif

                            <form action="{{ route('front_start_diagnosa_detail') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_diagnosa" id="id_diagnosa" value="{{ $diagnosa->id_diagnosa }}">

                                <div class="table-responsive">
                                    <table id="" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Gejala</th>
                                                <th>Tingkat Keyakinan Pasien (CF User)</th>
                                                <th>Tingkat Kepercayaan Pakar (CF Expert)</th>
                                                <th>Tingkat Keyakinan Sistem (CH H,E)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 1; @endphp
                                            @foreach ($diagnosa_details as $index => $diagnosa_detail)
                                                <tr>
                                                    <td class="align-top" style="width: 1%">{{ $i++ }}</td>
                                                    <td class="text-nowrap align-top">
                                                        {{ $diagnosa_detail->gejala->nama_gejala }}
                                                        <input type="hidden" name="gejala[]" id="gejala{{ $diagnosa_detail->id_gejala }}" value="{{ $diagnosa_detail->id_gejala }}">

                                                    </td>
                                                    <td class="text-nowrap align-top">
                                                        <select name="cf_user[]" id="" class="form-control">
                                                            <option value="">- pilih -</option>
                                                            <option value="1" {{ old('cf_user.' . $index) == '1' || $diagnosa_detail->cf_user == '1' ? 'selected' : '' }}>Pasti</option>
                                                            <option value="0.8" {{ old('cf_user.' . $index) == '0.8' || $diagnosa_detail->cf_user == '0.8' ? 'selected' : '' }}>Hampir Pasti</option>
                                                            <option value="0.6" {{ old('cf_user.' . $index) == '0.6' || $diagnosa_detail->cf_user == '0.6' ? 'selected' : '' }}>Kemungkinan Besar</option>
                                                            <option value="0.4" {{ old('cf_user.' . $index) == '0.4' || $diagnosa_detail->cf_user == '0.4' ? 'selected' : '' }}>Mungkin</option>
                                                            <option value="0.2" {{ old('cf_user.' . $index) == '0.2' || $diagnosa_detail->cf_user == '0.2' ? 'selected' : '' }}>Tidak Tahu</option>
                                                            <option value="0" {{ old('cf_user.' . $index) == '0' || $diagnosa_detail->cf_user == '0' ? 'selected' : '' }}>Tidak</option>
                                                        </select>
                                                        @error('cf_user.' . $index)
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                    <td class="text-nowrap align-top">
                                                        {{ $diagnosa_detail->cf_expert }}
                                                    </td>
                                                    <td class="text-nowrap align-top">
                                                        {{ $diagnosa_detail->cf_he }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="2">Nilai CF: {{ bcdiv($diagnosa->cf_result, 1, 2) }}</th>
                                                <th colspan="3">Nama Penyakit: {{ $diagnosa->penyakit->nama_penyakit ?? '-' }}</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                @if ($diagnosa_details->isNotEmpty())
                                    <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-heart-pulse-fill"></i> Mulai Diagnosa</button>
                                @endif
                            </form>

                            <div class="alert alert-info alert-dismissible fade show mt-3" role="alert">
                                <b>Kesimpulan</b>
                                @if ($diagnosa->penyakit)
                                    <p class="mb-4">Berdasarkan dari gejala yang dipilih atau alami juga berdasarkan Role/Basis aturan yang sudah ditentukan oleh seorang pakar penyakit maka perhitungan Algoritma Certainty Factor mengambil nilai CF yang paling tinggi yakni
                                        <b>{{ bcdiv($diagnosa->cf_result, 1, 2) }}</b> yaitu didiagnosa penyakit <b>{{ $diagnosa->penyakit->nama_penyakit }}</b>.
                                    </p>
                                    <p class="mb-4"><strong>Keterangan:</strong> {!! nl2br(e($diagnosa->penyakit->keterangan)) ?? '-' !!}</p>
                                    <p class="mb-0"><strong>Solusi:</strong> {!! nl2br(e($diagnosa->penyakit->solusi)) ?? '-' !!}</p>
                                @else
                                    <p class="mb-0">Hasil diagnosa belum dapat dipastikan.</p>
                                @endif
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                                </button>
                            </div>

                            <br>
                            <a href="{{ route('front_print_diagnosa', $diagnosa->id_diagnosa) }}" class="btn btn-secondary"target="_blank"><i class="fas fa-print"></i> Print Diagnosa</a>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </section>
@endsection
