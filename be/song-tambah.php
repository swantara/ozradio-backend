<!DOCTYPE html>
<html>

<?php
  include 'head.php';
?>

<?php
  include 'sidebar.php';
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Song
          <small>New Song</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
        <form action"" method="post" enctype="multipart/form-data">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-warning">
              <div class="box-body box-profile">
                <lavel>Preview</lavel>
                <img class="img-responsive" src="../dist/img/no-image.png" alt="Program Picture">
                <hr>
                <lavel>Browse Foto :</lavel>
                <input required name="foto" type="file" id="fotoArtikel">
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <!-- About Me Box -->
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-plus margin-r-5"></i>New Song</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input required name="judul" type="text" class="form-control" placeholder="judul">
                </div>
                <div class="form-group">
                  <label>Artis</label>
                  <input required name="artis" type="text" class="form-control" placeholder="artis">
                </div>
                <div class="form-group">
                  <label>Album</label>
                  <input required name="album" type="text" class="form-control" placeholder="album">
                </div>
                <div class="form-group">
                  <label>Pilih Genre</label>
                  <select required name="genre" class="form-control">
                    <option value="0" hidden selected>Pilih Genre</option>
                    <option value="1" >Pop</option>
                    <option value="2" selected>Dangdut</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pilih Kategori</label>
                  <select required name="kategori" class="form-control">
                    <option value="0" hidden selected>Pilih Kategori</option>
                    <option value="1" >Galau</option>
                    <option value="2" selected>Supir Arab</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="song.php" class="btn btn-default"><i class="fa fa-close"></i> Cancel</a>
                <button type="submit" class="btn btn-default pull-right"><i class="fa fa-check text-green"></i> Submit</button>
              </div>
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </form>
        </div>
      </section>
      <!-- /.content -->
    </div>
  </div>

<?php
  include 'footer.php'
?>
</html>