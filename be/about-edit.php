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
          About
          <small>Edit About</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
        <form action"" method="post" enctype="multipart/form-data">
          <!-- /.col -->
          <div class="col-md-12">
            <!-- About Me Box -->
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-edit margin-r-5"></i>Edit About</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <label>Alamat</label>
                  <input name="alamat" type="text" class="form-control" value="Alamatnya OZ">
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input name="telepon" type="text" class="form-control" value="Teleponnya OZ">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input name="email" type="text" class="form-control" value="Emailnya OZ">
                </div>
                <div class="form-group">
                  <label>Instagram</label>
                  <input name="instagram" type="text" class="form-control" value="Instagramnya OZ">
                </div>
                <div class="form-group">
                  <label>Facebook</label>
                  <input name="facebook" type="text" class="form-control" value="Facebooknya OZ">
                </div>
                <div class="form-group">
                  <label>Twitter</label>
                  <input name="twitter" type="text" class="form-control" value="Twitternya OZ">
                </div>

                <div class="form-group">
                  <label>Youtube</label>
                  <input name="youtube" type="text" class="form-control" value="Youtubenya OZ">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="about.php" class="btn btn-default"><i class="fa fa-close"></i> Cancel</a>
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