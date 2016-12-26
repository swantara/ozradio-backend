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
          Ponggawa
          <small>Detail Ponggawa</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-warning">
              <div class="box-body box-profile">
                <img class="img-responsive" src="../dist/img/no-image.png" alt="Program Picture">
                <hr/>
                <button type="button" class="btn btn-default btn-block" onClick="window.location.href='ponggawa-edit.php'">
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
                <strong>Nama</strong>
                <p>Ekok PEPKTL</p>
                <hr/>
                <strong>Gender</strong>
                <p>Dipertanyakan</p>
                <hr/>
                <strong>Birthday</strong>
                <p>mm/dd/yyyy</p>
                <hr/>
                <strong>About</strong>
                <p>Ekok itu orang yang ganteng</p>
                <hr/>
                <strong>Facebook</strong>
                <p>Putu Eko Prasetya</p>
                <hr/>
                <strong>Twitter</strong>
                <p>kok ekok</p>
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

<?php
  include 'footer.php'
?>
</html>