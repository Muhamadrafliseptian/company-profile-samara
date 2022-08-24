<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<div class="form-group">
    <label for="benefit_judul"> Judul </label>
    <input type="text" class="form-control" name="benefit_judul" id="benefit_judul" placeholder="Masukkan Judul"
        value="{{ $edit->benefit_judul }}">
</div>
<div class="form-group">
    <label for="benefit_deskrispi"> Deskripsi </label>
    <textarea name="benefit_deskripsi" class="form-control" id="benefit_deskripsi" rows="10"
        placeholder="Masukkan Deskripsi">{{ $edit->benefit_deskripsi }}</textarea>
</div>
