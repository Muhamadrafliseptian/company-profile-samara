<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<div class="form-group">
    <label for="judul"> Judul </label>
    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul"
        value="{{ $edit->judul }}">
</div>
<div class="form-group">
    <label for="deskripsi"> Deskripsi </label>
    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi">{{ $edit->deskripsi }}</textarea>
</div>
