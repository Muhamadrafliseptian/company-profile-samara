<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<div class="form-group">
    <label for="nama_kategori"> Kategori </label>
    <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Masukkan Nama Kategori"
        value="{{ $edit->nama_kategori }}">
</div>
