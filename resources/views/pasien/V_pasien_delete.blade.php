<div class="modal fade text-left" id="deletetModal{{ $pasien->id_pasien }}" tabindex="-1" role="dialog" aria-labelledby="deletetModalLabel{{ $pasien->id_pasien }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="deletetModalLabel{{ $pasien->id_pasien }}">Hapus Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Apakah Anda yakin ingin menghapus data ini?</h5>
                <p>Jika iya, pilih 'Hapus' untuk menghapus data.</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('pasien_destroy', $pasien->id_pasien) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
