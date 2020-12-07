<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class='my-3'>Edit Daftar Buku</h2>
            <form action="/buku/update/<?php $book['id'];?>" method="post">
            <?php csrf_field();?>
    <div class="form-group row">
    <label for="nomor" class="col-sm-2 col-form-label">Nomor Buku</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nomor" name="nomor"autofocus value="<?= old('nomor');?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Judul Buku</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama');?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-sm-2 col-form-label">Stok Buku</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="stok" name="stok"value="<?= old('stok');?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penerbit" name="penerbit"value="<?= old('penerbit');?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Tambahkan</button>
    </div>
  </div>
</form>
        </div>
    </div>
</div>