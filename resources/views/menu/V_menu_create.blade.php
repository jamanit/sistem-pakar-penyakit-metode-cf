{{-- firstmenu --}}
<div class="modal fade text-left" id="firstmenu_createModal" tabindex="-1" role="dialog" aria-labelledby="firstmenu_createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="firstmenu_createModalLabel">Tambah Menu Pertama</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('menu_firstmenu_store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="firstmenu_name">Menu Pertama Nama</label>
                        <input type="text" name="firstmenu_name" id="firstmenu_name" value="{{ old('firstmenu_name') }}" class="form-control firstmenu_name @error('firstmenu_name') is-invalid @enderror" placeholder="Menu Pertama Nama" autofocus>
                        @error('firstmenu_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="firstmenu_link">Menu Pertama Link</label>
                        <input type="text" name="firstmenu_link" id="firstmenu_link" value="{{ old('firstmenu_link') }}" class="form-control firstmenu_link @error('firstmenu_link') is-invalid @enderror" placeholder="Menu Pertama Link">
                        @error('firstmenu_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="firstmenu_icon">Menu Pertama Icon</label>
                        <input type="text" name="firstmenu_icon" id="firstmenu_icon" value="{{ old('firstmenu_icon') }}" class="form-control firstmenu_icon @error('firstmenu_icon') is-invalid @enderror" placeholder="Menu Pertama Icon">
                        @error('firstmenu_icon')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- secondmenu --}}
<div class="modal fade text-left" id="secondmenu_createModal" tabindex="-1" role="dialog" aria-labelledby="secondmenu_createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="secondmenu_createModalLabel">Tambah Menu Kedua</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('menu_secondmenu_store') }}" method="POST">
                @csrf
                @method('POST')
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
                        <input type="text" name="secondmenu_name" id="secondmenu_name" value="{{ old('secondmenu_name') }}" class="form-control secondmenu_name @error('secondmenu_name') is-invalid @enderror" placeholder="Menu Kedua Nama">
                        @error('secondmenu_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="secondmenu_link">Menu Kedua Link</label>
                        <input type="text" name="secondmenu_link" id="secondmenu_link" value="{{ old('secondmenu_link') }}" class="form-control secondmenu_link @error('secondmenu_link') is-invalid @enderror" placeholder="Menu Kedua Link">
                        @error('secondmenu_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="secondmenu_icon">Menu Kedua Icon</label>
                        <input type="text" name="secondmenu_icon" id="secondmenu_icon" value="{{ old('secondmenu_icon') }}" class="form-control secondmenu_icon @error('secondmenu_icon') is-invalid @enderror" placeholder="Menu Kedua Icon">
                        @error('secondmenu_icon')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
