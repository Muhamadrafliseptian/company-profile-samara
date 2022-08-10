<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<div class="form-group">
    <label for="kategori_solusi"> Kategori Solusi </label>
    <input type="text" class="form-control" name="kategori_solusi" id="kategori_solusi"
        placeholder="Masukkan Kategori Solusi" value="{{ $edit->kategori_solusi }}">
</div>
