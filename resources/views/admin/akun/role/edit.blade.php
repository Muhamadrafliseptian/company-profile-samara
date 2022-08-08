<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<div class="form-group">
    <label for="role"> Role </label>
    <input type="text" class="form-control" name="role" id="role" placeholder="Masukkan Role"
        value="{{ $edit->role }}">
</div>
