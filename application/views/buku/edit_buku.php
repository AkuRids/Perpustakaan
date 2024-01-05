<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $title; ?></h3>
    </div>
    <form class="form-horizontal" method="post" action="<?= base_url('buku/update'); ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Id Buku</label>
          <div class="col-sm-10">
            <input type="text" name="id_buku" value="<?= $buku['id_buku'] ?>" class="form-control" readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Judul Buku</label>

          <div class="col-sm-10">
            <input type="text" name="judul_buku" value="<?= $buku['judul_buku'] ?>" class="form-control"  placeholder="Judul buku..." required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Pengarang</label>
          <div class="col-sm-10">
					<input type="text" name="pengarang" value="<?= $buku['pengarang']?>" class="form-control"  required>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Penerbit</label>
          <div class="col-sm-10">
					<input type="text" name="penerbit" value="<?= $buku['penerbit']?>" class="form-control"  required>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Tahun Terbit</label>
          <div class="col-sm-10">
					<input type="text" name="tahun_terbit" value="<?= $buku['tahun_terbit']?>" class="form-control"  required>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Jumlah</label>
          <div class="col-sm-10">
            <input type="number" name="jumlah" value="<?= $buku['jumlah'] ?>" class="form-control"  placeholder="Jumlah..." required>
          </div>
        </div>

      </div>
      <div class="box-footer">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <a href="<?= base_url('buku'); ?>" class="btn btn-warning">Cancel</a>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>
</div>
