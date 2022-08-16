<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<input type="hidden" name="gambarLama" value="{{ $edit->parnert_logo }}">
<div class="form-group">
    <label for="parnert_nama"> Nama Parnert </label>
    <input type="text" class="form-control" name="parnert_nama" id="parnert_nama" placeholder="Masukkan Nama Parnert"
        value="{{ $edit->parnert_nama }}">
</div>
<div class="form-group">
    <label for="parnert_logo"> Logo Parnert </label>
    <br>
    <img src="{{ url('/storage/' . $edit->parnert_logo) }}" class="img-fluid" style="margin-bottom: 10px;">
    <input type="file" class="form-control" name="parnert_logo" id="parnert_logo">
</div>
