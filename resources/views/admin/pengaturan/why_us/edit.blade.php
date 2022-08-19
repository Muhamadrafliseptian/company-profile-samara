<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<div class="form-group">
    <label for="why_us_icon"> Icon </label>
    <input type="text" class="form-control" name="why_us_icon" id="why_us_icon" placeholder="Masukkan Icon"
        value="{{ $edit->why_us_icon }}">
</div>
<div class="form-group">
    <label for="why_us_name"> Judul </label>
    <input type="text" class="form-control" name="why_us_name" id="why_us_name" placeholder="Masukkan Judul"
        value="{{ $edit->why_us_name }}">
</div>
<div class="form-group">
    <label for="why_us_deskripsi"> Deskripsi </label>
    <textarea name="why_us_deskripsi" class="form-control" id="why_us_deskripsi" rows="10"
        placeholder="Masukkan Deskripsi">{{ $edit->why_us_deskripsi }}</textarea>
</div>
