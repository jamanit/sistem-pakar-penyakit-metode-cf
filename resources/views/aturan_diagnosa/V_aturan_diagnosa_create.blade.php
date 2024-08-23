<div class="modal fade" id="createModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('aturan_diagnosa_store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_gejala">Nama Gejala</label>
                        <select name="id_gejala" id="id_gejala" class="form-control id_gejala select2 @error('id_gejala') is-invalid @enderror">
                            <option value="">- pilih -</option>
                            @foreach ($gejalas as $gejala)
                                <option value="{{ $gejala->id_gejala }}" {{ old('id_gejala') == $gejala->id_gejala ? 'selected' : '' }}>
                                    {{ $gejala->nama_gejala }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_gejala')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_penyakit">Nama Penyakit</label>
                        <select name="id_penyakit" id="id_penyakit" class="form-control id_penyakit select2 @error('id_penyakit') is-invalid @enderror">
                            <option value="">- pilih -</option>
                            @foreach ($penyakits as $penyakit)
                                <option value="{{ $penyakit->id_penyakit }}" {{ old('id_penyakit') == $penyakit->id_penyakit ? 'selected' : '' }}>
                                    {{ $penyakit->nama_penyakit }}
                                </option>
                            @endforeach
                        </select> @error('id_penyakit')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cf_expert">CF Expert</label>
                        <input type="text" name="cf_expert" id="cf_expert" value="{{ old('cf_expert') }}" class="form-control cf_expert @error('cf_expert') is-invalid @enderror" placeholder="CF Expert">
                        @error('cf_expert')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
