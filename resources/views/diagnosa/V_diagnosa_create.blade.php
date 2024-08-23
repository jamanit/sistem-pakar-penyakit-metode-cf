<div class="modal fade" id="createModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('diagnosa_store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_pasien">Nama Pasien</label>
                        <select name="id_pasien" id="id_pasien" class="form-control select2 id_pasien @error('id_pasien') is-invalid @enderror">
                            <option value="">- pilih -</option>
                            @foreach ($pasiens as $pasien)
                                <option value="{{ $pasien->id_pasien }}" {{ $pasien->id_pasien == old('id_pasien') ? 'selected' : '' }}>{{ $pasien->nama_pasien }}</option>
                            @endforeach
                        </select>
                        @error('id_pasien')
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
