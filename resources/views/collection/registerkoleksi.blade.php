<form action="{{route('koleksiStore')}}" method="post">
    @csrf
  <div class="row form-group">
    <label for="form-label">Nama</label>
    <input type="text" name="namaKoleksi" class="form-control" id="nama" autocomplete="off" value="{{old('namaKoleksi')}}">
  </div>
  <div class="row form-group">
    <label for="form-label">Jenis</label>
    <input type="number" name="jenisKoleksi" class="form-control" id="jenis" autocomplete="off" value="{{old('jenisKoleksi')}}">
  </div>

  <div class="row form-group">
    <label for="form-label">Jumlah</label>
    <input type="number" name="jumlahKoleksi" class="form-control" id="jumlah" autocomplete="off" value="{{old('jumlahKoleksi')}} ">
  </div>
  <div class="row form-group">
    <button class="btn btn-primary buttonConf" id="buttonSubmit" type="submit">Submit</button>
    <button class="btn btn-danger buttonConf" id="buttonReset" type="reset">Reset</button>
  </div>
</form>