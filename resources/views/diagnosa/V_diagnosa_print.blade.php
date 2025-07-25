@extends('layouts.home.app_blank')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <H3 class="text-center font-weight-bold">{{ config('app.name', 'Page') }}</H3>
                    <h1 class="text-center font-weight-bold">{{ $title }}</h1>

                    <br>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Kode Diagnosa</label>
                                <p class="form-control-plaintext">{{ $diagnosa->kode_diagnosa }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Diagnosa</label>
                                <p class="form-control-plaintext">{{ $diagnosa->created_at }}</p>
                            </div>

                            @if (!empty($diagnosa->id_pasien))
                                <div class="form-group">
                                    <label for="">Nama Pasien</label>
                                    <p class="form-control-plaintext">{{ $diagnosa->pasien->nama_pasien }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <p class="form-control-plaintext">{{ $diagnosa->pasien->alamat }}</p>
                                </div>
                            @else
                                <div class="form-group">
                                    <label for="">Nama Pasien</label>
                                    <p class="form-control-plaintext">{{ $diagnosa->nama_pasien }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <p class="form-control-plaintext">{{ $diagnosa->alamat }}</p>
                                </div>
                            @endif

                            @if ($diagnosa->user)
                                <div class="form-group">
                                    <label for="">Dibuat Oleh</label>
                                    <p class="form-control-plaintext">{{ $diagnosa->user->name ?? 'Pasien' }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <div class="border rounded p-2" style="min-height: 100px;">
                                    {{ $diagnosa->keterangan }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <p class="form-control-plaintext">{{ $diagnosa->status }}</p>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="table-responsive">
                        <table id="" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Gejala</th>
                                    <th>CF User</th>
                                    <th>CF Expert</th>
                                    <th>CF (H, E)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($diagnosa_details as $diagnosa_detail)
                                    <tr>
                                        <td class="align-top" style="width: 1%">{{ $i++ }}</td>
                                        <td class="text-nowrap align-top">
                                            {{ $diagnosa_detail->gejala->nama_gejala }}
                                        </td>
                                        <td class="text-nowrap align-top">
                                            {{ $diagnosa_detail->cf_user }}
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
                                    <th colspan="3">Nilai CF: {{ bcdiv($diagnosa->cf_result, 1, 2) }}</th>
                                    <th colspan="3">Nama Penyakit: {{ $diagnosa->penyakit->nama_penyakit ?? '' }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        <b>Kesimpulan</b>
                        @if ($diagnosa->penyakit)
                            <p class="mb-0">Berdasarkan dari gejala yang dipilih atau alami juga berdasarkan Role/Basis aturan yang sudah ditentukan oleh seorang pakar penyakit maka perhitungan Algoritma Certainty Factor mengambil nilai CF yang paling tinggi yakni
                                <b>{{ bcdiv($diagnosa->cf_result, 1, 2) }}</b> yaitu didiagnosa penyakit <b>{{ $diagnosa->penyakit->nama_penyakit }}</b>.
                            </p>
                            <p class="mb-0">Keterangan: {{ $diagnosa->penyakit->keterangan ?? '-' }}</p>
                            <p class="mb-0">Solusi: {{ $diagnosa->penyakit->solusi ?? '-' }}</p>
                        @else
                            <p class="mb-0">Hasil diagnosa belum dapat dipastikan.</p>
                        @endif
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                        </button>
                    </div>

                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('style')
    <style>
        @media print {
            @page {
                size: potrait;
            }
        }
    </style>
@endsection

@section('script')
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
@endsection
