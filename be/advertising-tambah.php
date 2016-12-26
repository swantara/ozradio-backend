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
          Advertising
          <small>New Advertising</small>
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
                <h3 class="box-title"><i class="fa fa-edit margin-r-5"></i>New Advertising</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input required name="judul" type="text" class="form-control" placeholder="judul">
                </div>
                <div class="form-group">
                  <label>Link</label>
                  <input required name="album" type="text" class="form-control" placeholder="link">
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select required name="status" class="form-control">
                    <option value="" disabled hidden>Pilih Status</option>
                    <option value="1" >Aktif</option>
                    <option value="0" selected>Tidak Aktif</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="advertising.php" class="btn btn-default"><i class="fa fa-close"></i> Cancel</a>
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

<?php
  include 'footer.php'
?>
</html>