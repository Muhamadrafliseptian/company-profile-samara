<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<div class="form-group">
    <label for="nama"> Tag </label>
    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama"
        value="{{ $edit->nama }}">
</div>
