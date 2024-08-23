<div class="modal fade" id="editModal{{ $pasien->id_pasien }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('pasien_update', $pasien->id_pasien) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="no_nik">No NIK</label>
                        <input type="text" name="no_nik" id="no_nik" value="{{ $pasien->no_nik }}" class="form-control no_nik @error('no_nik') is-invalid @enderror" placeholder="No NIK" autofocus>
                        @error('no_nik')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" name="nama_pasien" id="nama_pasien" value="{{ $pasien->nama_pasien }}" class="form-control nama_pasien @error('nama_pasien') is-invalid @enderror" placeholder="Nama Pasien">
                        @error('nama_pasien')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $pasien->tanggal_lahir }}" class="form-control tanggal_lahir @error('tanggal_lahir') is-invalid @enderror" placeholder="Tanggal Lahir">
                        @error('tanggal_lahir')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $pasien->tempat_lahir }}" class="form-control tempat_lahir @error('tempat_lahir') is-invalid @enderror" placeholder="Tempat Lahir">
                        @error('tempat_lahir')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control alamat @error('alamat') is-invalid @enderror" placeholder="Alamat" cols="30" rows="5">{{ $pasien->alamat }}</textarea>
                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
