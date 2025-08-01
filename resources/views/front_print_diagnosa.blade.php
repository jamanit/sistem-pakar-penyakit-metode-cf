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
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <p class="form-control-plaintext">{{ $diagnosa->nama_pasien }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <p class="form-control-plaintext">{{ $diagnosa->alamat }}</p>
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
                                    <th>Tingkat Keyakinan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @php
                                    $cfLabels = [
                                        '1.0' => 'Pasti',
                                        '0.8' => 'Hampir Pasti',
                                        '0.6' => 'Kemungkinan Besar',
                                        '0.4' => 'Mungkin',
                                        '0.2' => 'Tidak Tahu',
                                        '0.0' => 'Tidak',
                                    ];
                                @endphp
                                @foreach ($diagnosa_details as $diagnosa_detail)
                                    <tr>
                                        <td class="align-top" style="width: 1%">{{ $i++ }}</td>
                                        <td class="text-nowrap align-top">
                                            {{ $diagnosa_detail->gejala->nama_gejala }}
                                        </td>
                                        <td class="text-nowrap align-top">
                                            {{ $cfLabels[(string) number_format($diagnosa_detail->cf_user, 1)] ?? $diagnosa_detail->cf_user }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5">Nama Penyakit: {{ $diagnosa->penyakit->nama_penyakit ?? '' }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        <b>Kesimpulan</b>
                        @if ($diagnosa->penyakit)
                            <p class="mb-4">Berdasarkan dari gejala yang dipilih atau alami juga berdasarkan Role/Basis aturan yang sudah ditentukan oleh seorang pakar penyakit dengan perhitungan Algoritma Certainty Factor yaitu didiagnosa penyakit <b>{{ $diagnosa->penyakit->nama_penyakit ?? '-' }}</b>.</p>
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
