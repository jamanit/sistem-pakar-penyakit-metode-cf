@if (isset($firstmenu))
    <div class="modal fade text-left" id="firstmenu_deletetModal{{ $firstmenu->id_firstmenu }}" tabindex="-1" role="dialog" aria-labelledby="firstmenu_deletetModalLabel{{ $firstmenu->id_firstmenu }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="firstmenu_deletetModalLabel{{ $firstmenu->id_firstmenu }}">Hapus Menu Pertama</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda yakin ingin menghapus data ini?</h5>
                    <p>Jika iya, pilih 'Hapus' untuk menghapus data.</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('menu_firstmenu_destroy', $firstmenu->id_firstmenu) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif

@if (isset($secondmenu))
    <div class="modal fade text-left" id="secondmenu_deletetModal{{ $secondmenu->id_secondmenu }}" tabindex="-1" role="dialog" aria-labelledby="secondmenu_deletetModalLabel{{ $secondmenu->id_secondmenu }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="secondmenu_deletetModalLabel{{ $secondmenu->id_secondmenu }}">Hapus Menu Kedua</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda yakin ingin menghapus data ini?</h5>
                    <p>Jika iya, pilih 'Hapus' untuk menghapus data.</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('menu_secondmenu_destroy', $secondmenu->id_secondmenu) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
