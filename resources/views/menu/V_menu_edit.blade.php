@if (isset($firstmenu))
    <div class="modal fade text-left" id="firstmenu_editModal{{ $firstmenu->id_firstmenu }}" tabindex="-1" role="dialog" aria-labelledby="firstmenu_editModalLabel{{ $firstmenu->id_firstmenu }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="firstmenu_editModalLabel{{ $firstmenu->id_firstmenu }}">Ubah Menu Pertama</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('menu_firstmenu_update', $firstmenu->id_firstmenu) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="firstmenu_name">Menu Pertama Nama</label>
                            <input type="text" name="firstmenu_name" id="firstmenu_name" value="{{ $firstmenu->firstmenu_name }}" class="form-control firstmenu_name @error('firstmenu_name') is-invalid @enderror" placeholder="Menu Pertama Nama" autofocus>
                            @error('firstmenu_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="firstmenu_link">Menu Pertama Link</label>
                            <input type="text" name="firstmenu_link" id="firstmenu_link" value="{{ $firstmenu->firstmenu_link }}" class="form-control firstmenu_link @error('firstmenu_link') is-invalid @enderror" placeholder="Menu Pertama Link">
                            @error('firstmenu_link')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="firstmenu_icon">Menu Pertama Icon</label>
                            <input type="text" name="firstmenu_icon" id="firstmenu_icon" value="{{ $firstmenu->firstmenu_icon }}" class="form-control firstmenu_icon @error('firstmenu_icon') is-invalid @enderror" placeholder="Menu Pertama Icon">
                            @error('firstmenu_icon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

@if (isset($secondmenu))
    <div class="modal fade text-left" id="secondmenu_editModal{{ $secondmenu->id_secondmenu }}" tabindex="-1" role="dialog" aria-labelledby="secondmenu_editModalLabel{{ $secondmenu->id_secondmenu }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="secondmenu_editModalLabel{{ $secondmenu->id_secondmenu }}">Ubah Menu Kedua</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('menu_secondmenu_update', $secondmenu->id_secondmenu) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id_firstmenu">Menu Pertama Nama</label>
                            <select name="id_firstmenu" id="id_firstmenu" class="form-control select2 id_firstmenu @error('id_firstmenu') is-invalid @enderror" autofocus>
                            </select>
                            @error('id_firstmenu')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="secondmenu_name">Menu Kedua Nama</label>
                            <input type="text" name="secondmenu_name" id="secondmenu_name" value="{{ $secondmenu->secondmenu_name }}" class="form-control secondmenu_name @error('secondmenu_name') is-invalid @enderror" placeholder="Menu Kedua Nama">
                            @error('secondmenu_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="secondmenu_link">Menu Kedua Link</label>
                            <input type="text" name="secondmenu_link" id="secondmenu_link" value="{{ $secondmenu->secondmenu_link }}" class="form-control secondmenu_link @error('secondmenu_link') is-invalid @enderror" placeholder="Menu Kedua Link">
                            @error('secondmenu_link')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="secondmenu_icon">Menu Kedua Icon</label>
                            <input type="text" name="secondmenu_icon" id="secondmenu_icon" value="{{ $secondmenu->secondmenu_icon }}" class="form-control secondmenu_icon @error('secondmenu_icon') is-invalid @enderror" placeholder="Menu Kedua Icon">
                            @error('secondmenu_icon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
