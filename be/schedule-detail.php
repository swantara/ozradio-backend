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
          Schedule
          <small>Detail Schedule</small>
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
                <button type="button" class="btn btn-default btn-block" onClick="window.location.href='schedule-edit.php'">
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
                <strong>Program</strong>
                <p>Program 7 Hari 7 Malam</p>
                <hr/>
                <strong>Crew</strong>
                <p>Kuluk Mong</p>
                <hr/>
                <strong>On-Air</strong>
                <p>Senin, Selasa</p>
                <hr/>
                <strong>Off-Air</strong>
                <p>Rabu, Kamis, Jumat, Sabtu, Minggu</p>
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