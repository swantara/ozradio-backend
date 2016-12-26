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
          <small>Edit Ponggawa</small>
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
                <h3 class="box-title"><i class="fa fa-edit margin-r-5"></i>Edit Ponggawa</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input required name="nama" type="text" class="form-control" value="Ekok">
                </div>
                <div class="form-group">
                  <label>Gender</label><br/>
                  <label style="margin-right: 10px;">
                    <input type="radio" name="r2" class="minimal-red" checked>
                    Male
                  </label>
                  <label>
                    <input type="radio" name="r2" class="minimal-red">
                    Female
                  </label>
                </div>
                <div class="form-group">
                  <label>Birthday</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker">
                  </div>
                </div>
                <div class="form-group">
                  <label>About</label>
                  <input required name="about" type="text" class="form-control" value=" Tentang Ekok">
                </div>
                <div class="form-group">
                  <label>Facebook</label>
                  <input required name="facebook" type="text" class="form-control" value=" Facebook Ekok">
                </div>
                <div class="form-group">
                  <label>Twitter</label>
                  <input required name="twitter" type="text" class="form-control" value=" Twitter Ekok">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="ponggawa-detail.php" class="btn btn-default"><i class="fa fa-close"></i> Cancel</a>
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

<!-- jQuery 2.2.0 --> 
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script>
$(function (){
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    $('#datepicker').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
      startDate: '+0d'
    });
  });
</script>

<?php
  include 'footer.php'
?>
</html>