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
          News
          <small>Edit News</small>
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
                <h3 class="box-title"><i class="fa fa-edit margin-r-5"></i>Edit News</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input required name="judul" type="text" class="form-control" value="Ten Kayun Nyentana">
                </div>
                <div class="form-group">
                  <label>Content</label><br/>
                  <div class="box-body pad">
                    <form>
                      <textarea required class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">Ternyata agus ten kayun nyentana</textarea>
                    </form>
                  </div>
                </div>
                <div class="form-group">
                  <label>Author</label>
                  <input required name="album" type="text" class="form-control" value="Pria Sejati">
                </div>
                <div class="form-group">
                  <label>Link</label>
                  <input required name="album" type="text" class="form-control" value="www.priasejati.com">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="news-detail.php" class="btn btn-default"><i class="fa fa-close"></i> Cancel</a>
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