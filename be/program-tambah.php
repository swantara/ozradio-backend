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
          Program
          <small>Tambah Program</small>
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
                  <h3 class="box-title"><i class="fa fa-plus margin-r-5"></i>Required Data</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="form-group">
                  <label>Nama Program</label>
                  <input required name="nama" type="text" class="form-control" placeholder="nama program">
                </div>
                <div class="form-group">
                  <label>Deskripsi Program</label>
                  <input required name="deskripsi" type="text" class="form-control" placeholder="deskripsi program">
                </div>
              </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="program.php" class="btn btn-default"><i class="fa fa-close"></i> Cancel</a>
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