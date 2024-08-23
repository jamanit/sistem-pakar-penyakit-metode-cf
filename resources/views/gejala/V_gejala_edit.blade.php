<div class="modal fade" id="editModal{{ $gejala->id_gejala }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('gejala_update', $gejala->id_gejala) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_gejala">Nama Gejala</label>
                        <input type="text" name="nama_gejala" id="nama_gejala" value="{{ $gejala->nama_gejala }}" class="form-control nama_gejala @error('nama_gejala') is-invalid @enderror" placeholder="Nama Gejala" autofocus>
                        @error('nama_gejala')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
