@extends('layouts.home.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/diagnosa') }}">
                                    Diagnosa</a></li>
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('diagnosa_update', $diagnosa->id_diagnosa) }}" method="POST">
                            @csrf
                            @method('PUT')
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
                                    <div class="form-group">
                                        <label for="">Nama Pasien</label>
                                        <input type="text" name="" id="" value="{{ !empty($diagnosa->id_pasien) ? $diagnosa->pasien->nama_pasien : $diagnosa->nama_pasien }}" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" name="" id="" value="{{ !empty($diagnosa->id_pasien) ? $diagnosa->pasien->alamat : $diagnosa->alamat }}" class="form-control" readonly>
                                    </div>
                                    @if ($diagnosa->user)
                                        <div class="form-group">
                                            <label for="">Dibuat Oleh</label>
                                            <input type="text" name="" id="" value="{{ $diagnosa->user->name ?? 'Pasien' }}" class="form-control" readonly>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control select2 status @error('status') is-invalid @enderror">
                                            <option value="">- pilih -</option>
                                            <option value="Proses" {{ $diagnosa->status == 'Proses' ? 'selected' : '' }}>Proses</option>
                                            <option value="Selesai" {{ $diagnosa->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Perbarui</button>
                                </div>
                            </div>
                        </form>

                        <hr>

                        <form action="{{ route('store_diagnosa_detail') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_diagnosa" id="id_diagnosa" value="{{ $diagnosa->id_diagnosa }}">

                            <label for="">Pilih Gejala</label>
                            <div class="row">
                                @foreach ($gejalas as $gejala)
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="checkbox" name="gejala[]" id="" value="{{ $gejala->id_gejala }}" class="form-check-input" @if (in_array($gejala->id_gejala, $diagnosa_details->pluck('id_gejala')->toArray())) checked @endif>
                                            <label class="form-check-label" for="gejala_{{ $gejala->id_gejala }}">
                                                {{ $gejala->nama_gejala }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-plus"></i> Tambah Gejala</button>
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

                        <form action="{{ route('start_diagnosa_detail') }}" method="POST">
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

                    </div>

                    <div class="card-footer">
                        <a href="{{ route('diagnosa_print', $diagnosa->id_diagnosa) }}" class="btn btn-secondary"target="_blank"><i class="fas fa-print"></i> Print Diagnosa</a>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('style')
@endsection

@section('script')
@endsection
