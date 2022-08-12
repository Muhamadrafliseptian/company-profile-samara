<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<div class="form-group">
    <label for="nama_kategori"> Kategori </label>
    <input type="text" class="form-control" name="role" id="role" placeholder="Masukkan Role"
        value="{{ $edit->nama_kategori  }}">
          <label for="slug"> Slug </label>
    <input type="text" class="form-control" name="role" id="role" placeholder="Masukkan Role"
        value="{{ $edit->slug }}">
</div>
