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
          <small>Detail Program</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-warning">
              <div class="box-body box-profile">
                <img class="img-responsive" src="../dist/img/photo1.png" alt="Program Picture">
                <h3 class="profile-username text-center">Program 7 Hari 7 Malam</h3>
                <button type="button" class="btn btn-default btn-block" onClick="window.location.href='program-edit.php'">
                  <i class="fa fa-edit text-yellow"></i> Edit
                </button>
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
                <h3 class="box-title"><i class="fa fa-quote-right margin-r-5"></i> Deskripsi</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <strong>Program 7 Hari 7 Malam</strong>
                <p>
                DataTables can integrate seamlessly with Bootstrap 3 using Bootstrap's table styling options to present an interface with a uniform design, based on Bootstrap, for your site / app.
                DataTables' Bootstrap integration also provides a renderer for the pagination control in DataTables to ensure that the pagination of the
                </p>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </section>
      <!-- /.content -->
    </div>
  </div>

<?php
  include 'footer.php'
?>
</html>